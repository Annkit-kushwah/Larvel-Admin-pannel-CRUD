<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Form | </title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    @include('message')
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('user.login')}}" method="POST">
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Username"  />
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password"  />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" >Log in</button>

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{route('register')}}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>

            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
