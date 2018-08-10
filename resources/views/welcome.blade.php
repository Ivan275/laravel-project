<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div id="app">
            @include('./layouts/nav')
        <!-- <nav class="navbar-laravel navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                Lorem <img width="32" height="32"  src="{{asset('images/logo.png')}}" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
            
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav> -->
            @endif

            <div class="content">
                
                <div class="home-banner">
                    <div class="container banner-image">
                        <h1 class="top-banner">Maecenas fermentum11</h1>
                        <p class="body-banner">Maecenas fermentumMaecenas fermentumMa ecenas fermentumM aecenas fermentumMaecenas fermentumM aecenas fermen tumMaecenas fermen tumMaecenas fermentum</p>
                    </div>
                </div>
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-4">
                            <p class="p-width">Typically, it is not possible for users of your application to gain access to this value. However, ex-employees that had access to the encryption key may be able to use the key to attack your applications. If you have any reason to believe your encryption key is in the hands of a malicious party, you should always rotate the key to a new value.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="p-width">Typically, it is not possible for users of your application to gain access to this value. However, ex-employees that had access to the encryption key may be able to use the key to attack your applications. If you have any reason to believe your encryption key is in the hands of a malicious party, you should always rotate the key to a new value.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="p-width">Typically, it is not possible for users of your application to gain access to this value. However, ex-employees that had access to the encryption key may be able to use the key to attack your applications. If you have any reason to believe your encryption key is in the hands of a malicious party, you should always rotate the key to a new value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
