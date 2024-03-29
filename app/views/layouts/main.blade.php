<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

    <title>{{$title}}</title>
         <link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
         <link rel="stylesheet" href="{{ url('css/bootstrapmin.css')}}">
          <link rel="stylesheet" href="{{ url('css/style.css')}}">
</head>

<body>


    <div id="container">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
             <ul class="nav">
                <li>{{ HTML::link('users/index', 'Index') }}</li>
                 <li>{{ HTML::link('users/new', 'New') }}</li>
            </ul>
        </div>


    <div class="container">
      @if(Session::has('message'))
         <p class="alert">{{ Session::get('message') }}</p>
      @endif
    </div>

        @yield('content')
    </div>
      {{ HTML::script('js/bootstrap.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>