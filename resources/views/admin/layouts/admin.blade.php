<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name') }}</title>
        <meta name="description" content="">
        <meta name="author" content="Vladimir Mitrofanov">
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Styles --}}
        <link href="{{ mix('/assets/css/main.css') }}" rel="stylesheet">

        @yield('css')
    </head>
    <body>
        <div id="app">

            @include('admin.partials.nav')

            <main class="py-4">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                         
                        </div>
                    </div>
                </div>
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="admin-wrapper">
                        @yield('content')
                    </div>
                </div>

            </main>

        </div>

        {{-- Scripts --}}
        <script src="{{ mix('/assets/js/app.js') }}"></script>
        @yield('js')
    </body>
</html>
