<!DOCTYPE>
<html>
<head>

    <title>CyNeuro</title>
    
    <!-- Bootstrap core CSS -->
    
    <link href="{{ asset('jscss/bootstrap-4.0.0-beta-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <!-- w3css core CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Custom fonts for this template -->
    <link href="{{ asset('jscss/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="{{ asset('jscss/custom/theme/css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('jscss/custom/theme/css/addition.css') }}" rel="stylesheet">
    <link href="{{ asset('jscss/custom/bootstrap-addition/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('jscss/custom/theme/css/style.css') }}" rel="stylesheet">
     

    @yield('css')

</head>

<body>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-shrink" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('system.home') }}">CyNeuro</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Browse
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('system.browse.databases_page') }}">Dataset</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Analytics
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('system.analytics.workflow_page') }}">Workflows</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Event
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('system.event.bigdata_syposium_page') }}">CyNeuro Kickoff Day</a>
                            <a class="dropdown-item" href="{{ route('system.event.workshops_page') }}">Workshops</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Participants</a>
                            <a class="dropdown-item" href="{{ route('system.about.related_projects') }}">Related Projects</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-5  bg-light" ng-app="system-app">

        @yield('content')

    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('jscss/jquery/jquery.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/popper/popper.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/bootstrap-4.0.0-beta-dist/js/bootstrap.min.js') }}" type="text/javascript" ></script>

    <!-- Angular JS -->
    <script src="{{ asset('jscss/angular-1.6.5/angular.js') }}" type="text/javascript" ></script>

    <!-- Custom theme JS -->
    <script src="{{ asset('jscss/custom/theme/js/agency.js') }}" type="text/javascript" ></script>

    <!-- Custom JS -->
    <script src="{{ asset('jscss/custom/angular/system-app.js') }}" type="text/javascript" ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="{{ asset('jscss/custom/theme/js/script.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/custom/theme/js/neurondetails.js') }}" type="text/javascript" ></script>

            
    @yield('javascript')

</body>

</html>