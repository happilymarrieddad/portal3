<!DOCTYPE>
<html>
<head>
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/spacelab/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('/images/cloud-from-the-hubble.jpg'); background-repeat: no-repeat;background-size: 100%">

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>{{ HTML::linkRoute('about.index','About') }}</li>
                <li>{{ HTML::linkRoute('tutorial.index','Tutorials') }}</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projects <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <!-- Projects -->
                        <li>{{ HTML::linkRoute('project.index', 'Projects Home') }}</li>
                        <li class="divider"></li>
                        <li>{{ HTML::linkRoute('builder.index','Army Builder v1.0') }}</li>

                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>@if(isset($admin) && $admin > 0){{ HTML::linkRoute('admin.index', 'Admin', array(), array()) }}@endif</li>
                @if(isset($email))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Logged in as {{$first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{{ HTML::linkRoute('user.index', 'Profile') }}</li>
                        <li class="divider"></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else <li>{{ HTML::linkRoute('session.create', 'Login') }}</li> <li>{{ HTML::linkRoute('user.create','Create Account') }}</li>@endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('content')


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>

@yield('js')
</body>
</html>