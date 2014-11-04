<!DOCTYPE>
<html>
<head>
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/slate/bootstrap.min.css" rel="stylesheet">
</head>
<body style="@yield('body')">

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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Warhammer Fantasy <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <!-- Warhammer Armies -->
                        <li>{{HTML::linkRoute('builder.index','Builder Home')}}</li>
                        <li class="divider"></li>
                        <li><a href="/builder/dwarfs">Dwarfs</a></li>

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

<div class="row">
    <div class="col-sm-12">
        <button style="display:none" class="btn btn-md btn-block btn-danger" id="alert-error"></button>
        <button style="display:none" class="btn btn-md btn-info btn-block" id="alert-loading"></button>
        <button style="display:none" class="btn btn-md btn-block btn-success" id="alert-success"></button>
    </div>
</div><br />

@yield('content')


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>