<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    @yield('Style')
</head>
<body>
@include('admin.layout.includes.header')
@include('admin.layout.includes.sidenav')
<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-md-10 display-area">--}}
            {{--<div class="row text-center">--}}
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<div class="content-box-large">--}}
                        {{----}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--/Display area after sidenav-->--}}
    {{--</div>--}}

</div><!--/Page Content-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
