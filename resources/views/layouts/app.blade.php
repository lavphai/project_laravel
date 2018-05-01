<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body id="app-layout">
  <div class="container">
    <div class="row">
      <div class="col col-md-12">
        <div class="panel panel-default">
                      <!-- Collapsed Hamburger -->

                      <h1> This is Example Project </h1>
                      <!-- Branding Image -->
                      <h4> Project Base on  <a  href="{{ url('/') }}">
                          Laravel
                      </a></h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col col-md-3">
        <div class="alert alert-dark">
          <div>
              <!-- Left Side Of Navbar -->
                  <a href="{{ url('/home') }}">Home</a><br>

              <!-- Right Side Of Navbar -->
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <a href="{{ url('/login') }}">Login</a><br>
                      <a href="{{ url('/register') }}">Register</a><br>
<hr>
                      <a href="{{url('user/create')}}">เพิ่มผู้ใช้</a><br>

                  @else
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a><br>
                          <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                  @endif
          </div>
        </div>
      </div>
      <div class="col col-md-9">
        <div class="alert alert-info">
          @yield('content')
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col col-md-12">
        <div class="alert alert-primary">
            This is Foot.
        </div>
      </div>
    </div>
</div>





    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
