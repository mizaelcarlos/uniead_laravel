<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UNIEAD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'UNIEAD') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    @guest
						
					@else
					<li>
						<a  class="btn btn-outline-danger" href="{{ route('coordenador.logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
							{{ __('Sair') }}
						</a>
						
						<form id="logout-form" action="{{ route('coordenador.logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>
                    @endguest
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <script src="{{ asset('/componentes/js/app.js') }}"></script>
    <script src="{{ asset('/componentes/js/alert.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/componentes/js/button.js') }}"></script>
    <script src="{{ asset('/componentes/js/carousel.js') }}"></script>
    <script src="{{ asset('/componentes/js/collapse.js') }}"></script>
    <script src="{{ asset('/componentes/js/dropdown.js') }}"></script>
    <script src="{{ asset('/componentes/js/index.js') }}"></script>
    <script src="{{ asset('/componentes/js/modal.js') }}"></script>
    <script src="{{ asset('/componentes/js/popover.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/componentes/js/scrollspy.js') }}"></script>
    <script src="{{ asset('/componentes/js/tab.js') }}"></script>
    <script src="{{ asset('/componentes/js/tooltip.js') }}"></script>
    <script src="{{ asset('/componentes/js/util.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/componentes/js/bootstrap.min.js') }}"></script>

    <link href="{{ asset('/componentes/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/componentes/css/bootstrap-reboot.css') }}" rel="stylesheet">


</body>
</html>
