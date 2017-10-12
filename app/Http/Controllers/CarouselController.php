<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use App\Models\Carousel;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class CarouselController extends Controller {
    public function productDelete (Request $request) {
        $type = $request->input('type');
        $id = $request->input('id');
        $type_text = '';

        if($type == 'carousel') {
            $carousel = Carousel::find($id);
            $carousel->delete();
            $type_text = 'Carrusel';
        } else if($type == 'product') {
            $product = Product::find($id);
            $product->delete();
            $type_text = 'Producto';
        }

        \Session::flash('alertMessage',$type_text.' eliminado correctamente.');
        \Session::flash('alert-class','alert-success');
    }
}