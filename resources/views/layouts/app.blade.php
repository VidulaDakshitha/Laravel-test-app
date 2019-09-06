<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheets for search page-->
        <link href="{{ asset('css/searchCSS/jquery1.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/searchCSS/channeling_styles.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/searchCSS/bootstrap_date.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/searchCSS/fonts.css') }}" rel="stylesheet" type="text/css" >
        {{-- <link href="{{ asset('css/searchCSS/bootstrap1.css') }}" rel="stylesheet" type="text/css" > --}}

        <!-- stylesheets for register page-->

        <link href="{{ asset('css/registerCSS/style.css') }}" rel="stylesheet" type="text/css" >

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/showdoc/style.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/showdoc/custom.css') }}" rel="stylesheet" type="text/css" >
       
      


        <title>{{config('app.name','IHHR')}}</title>
     
    </head>
    <body style="background: url(img/searchIMG/doctor.jpg) center center fixed; background-size: cover;">

        <main class="py-4">
                {{-- container for showing the error and success messages --}}
                <div class="container">
                    @if(count($errors)>0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
        
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
        
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                 </div>
    
                 {{-- main content  --}}
                @yield('content')
            </main>
        
    </body>
</html>