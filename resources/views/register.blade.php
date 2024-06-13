<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Register Form </title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div id="register" class="animate form">
                <section class="login_content">
                    <form action="{{ route('user.register') }}" method="POST">
                        @csrf
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" name="first_name" placeholder="First name"
                                />
                                @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" class="form-control" name="last_name" placeholder="Last name"
                                />
                                @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                />
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                />
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="">Gender :</label>
                            <input type="radio"  value="male" name="gender" checked />


                            Male
                            <input type="radio"  value="female"  name="gender" />


                            Female
                        </div>
                        <div>
                            <input type="number" class="form-control" name="mo_no" placeholder="MO_NO"
                               />
                               @error('mo_no')
                               <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="{{ route('login') }}" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
