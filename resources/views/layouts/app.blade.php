<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>Assignmment</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vue-mover.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <script src="{{asset('js/Sortable.min.js')}}"></script>  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }
        .mt-20 {
            margin-top: 20px;
        }
        .navbar-brand img{
            max-height: 30px;
        }
        .footer{
            background-color: #f9f9f9;
            border-top: 1px solid #e7e7e7;
        }
        .footer a{
            color: #777;
        }
        .footer a:hover{
           color: #333;
           background-color: transparent
        }
        .top_heading{
            text-align: center;
            font-size: 65px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{asset('logo.png')}}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="container">
    <h1 class="top_heading">Item Management Page</h1>
<div id="app">
   @yield('content')
</div>
<div class="footer navbar-fixed-bottom">
    <ul class="nav navbar-nav navbar-left">
        <li class="col-md-5 col-xs-5 text-center"> <a href="#">Home</a></li>
        <li class="col-md-7 col-xs-7 text-center"><a href="#">About Us</a></li> 
    </ul>
</div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>