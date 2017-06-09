<?php
namespace App\Http\Controllers;

class ImgUploadController extends Controller {
    public static function fileUpload($target_dir, $input_name, $delete) {
        //  Create temporary directory
        if(!is_dir($target_dir) && !file_exists($target_dir)) {
            mkdir($target_dir);
        }
        if ($_FILES[$input_name]["size"] > 25000000) {
            return 'failed';
        }

        if($delete) {
            //  Delete files if they exist
            $files = glob($target_dir.'/*'); // get all file names
            foreach($files as $file){ // iterate files
                if(is_file($file))
                    unlink($file); // delete file
            }
        }

        if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_dir . 'temp.tmp')) {
            // Resize it
            self::GenerateThumbnail($target_dir . 'temp.tmp',$target_dir . $_FILES[$input_name]['name'],700,394,1);
            // Delete full size
            unlink($target_dir . 'temp.tmp');
            return 'success';
        } else {
            return 'failed';
        }
    }

    public static function GenerateThumbnail($im_filename,$th_filename,$max_width,$max_height,$quality = 0.75) {
        // The original image must exist
        if(is_file($im_filename))
        {
            // Let's create the directory if needed
            $th_path = dirname($th_filename);
            if(!is_dir($th_path))
                mkdir($th_path, 0777, true);
            // If the thumb does not aleady exists
            if(!is_file($th_filename))
            {
                // Get Image size info
                list($width_orig, $height_orig, $image_type) = @getimagesize($im_filename);
                if(!$width_orig)
                    return 2;
                switch($image_type)
                {
                    case 1: $src_im = @imagecreatefromgif($im_filename);    break;
                    case 2: $src_im = @imagecreatefromjpeg($im_filename);   break;
                    case 3: $src_im = @imagecreatefrompng($im_filename);    break;
                }
                if(!$src_im)
                    return 3;
                $aspect_ratio = (float) $height_orig / $width_orig;
                $thumb_height = $max_height;
                $thumb_width = round($thumb_height / $aspect_ratio);
                if($thumb_width > $max_width)
                {
                    $thumb_width    = $max_width;
                    $thumb_height   = round($thumb_width * $aspect_ratio);
                }
                $width = $thumb_width;
                $height = $thumb_height;
                $dst_img = @imagecreatetruecolor($width, $height);
                if(!$dst_img)
                    return 4;
                $success = @imagecopyresampled($dst_img,$src_im,0,0,0,0,$width,$height,$width_orig,$height_orig);
                if(!$success)
                    return 4;
                switch ($image_type)
                {
                    case 1: $success = @imagegif($dst_img,$th_filename); break;
                    case 2: $success = @imagejpeg($dst_img,$th_filename,intval($quality*100));  break;
                    case 3: $success = @imagepng($dst_img,$th_filename,intval($quality*9)); break;
                }
                if(!$success)
                    return 4;
            }
            return 0;
        }
        return 1;
    }
}