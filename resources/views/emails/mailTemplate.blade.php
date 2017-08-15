<div style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#f5f8fa;color:#74787e;height:100%;line-height:1.4;margin:0 auto;width:600px!important;word-break:break-word">
    <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#f5f8fa;margin:0;padding:0;width:100%">
        <tbody>
        <tr>
            <td align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;margin:0;padding:0;width:100%">
                    <tbody>
                    <tr>
                        <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;padding:25px 0;text-align:center">
                            <a href="{{ url('/') }}" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#bbbfc3;font-size:19px;font-weight:bold;text-decoration:none" target="_blank">
                                {{ env('APP_NAME') }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#ffffff;border-bottom:1px solid #edeff2;border-top:1px solid #edeff2;margin:0;padding:0;width:100%">

                            {{-- Greeting --}}
                            <h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left">
                                @if (! empty($greeting))
                                    {{ $greeting }}
                                @else
                                    @if ($level == 'error')
                                        Whoops!
                                    @else
                                        Hello!
                                    @endif
                                @endif
                            </h1>

                            {{-- Intro Lines --}}
                            @foreach ($introLines as $line)
                                <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left">
                                    {{ $line }}
                                </p>
                            @endforeach

                            <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%">
                                <tbody>
                                <tr>
                                    <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box"><tbody><tr><td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box">
                                                        <tbody>
                                                        <tr>
                                                            <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box">
                                                                <a href="{{ $actionUrl }}" class="button button-blue" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #FFF; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #3097D1; border-top: 10px solid #3097D1; border-right: 18px solid #3097D1; border-bottom: 10px solid #3097D1; border-left: 18px solid #3097D1" target="_blank" rel="noreferrer">{{ $actionText }}</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            {{-- Outro Lines --}}
                            @foreach ($outroLines as $line)
                                <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left">
                                    {{ $line }}
                                </p>
                            @endforeach

                            {{-- Salutation --}}
                            @if (! empty($salutation))
                                <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left">
                                    {{ $salutation }}
                                </p>
                            @else
                                <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left">
                                    Saludos cordiales,<br>{{ env('CONTACT_NAME') }}
                                </p>
                            @endif


                            <table class="subcopy" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-top: 1px solid #EDEFF2; margin-top: 25px; padding-top: 25px">
                                <tbody>
                                <tr>
                                    <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box">
                                        <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">
                                            Si estás teniendo problemas con el botón de "{{ $actionText }}", copia y pega el siguiente URL
                                            en tu navegador web: <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table style="width: 100%;">
        <tbody>
        <tr>
            <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                <table align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;margin:0 auto;padding:0;text-align:center;width:570px">
                    <tbody>
                    <tr>
                        <td align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;padding:35px">
                            <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;line-height:1.5em;margin-top:0;color:#aeaeae;font-size:12px;text-align:center">
                                &copy; {{ date('Y') }} {{ env('APP_NAME') }}.
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>