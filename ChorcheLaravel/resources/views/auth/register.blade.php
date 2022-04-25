<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Main Page</title>
  </head>
  <body>
    <div class="row no-gutters">

        <div class="col no-gutters">
            <div class="leftside Main_page_left_div">
                <div class="form-div">
                    <form action="{{route('save_data')}}" method="post">
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}

                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                        @endif
                        @csrf
                        <div class="form-heading">
                            <h2 class="text_comon heading_main">Create Your Account</h2>
                            
                            <a class="heading_color headoing_desc">Create your account and start evaluating your election results...</a>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label for="fullname" class="text_comon">Full Name</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your name" value="{{ old('fullname')}}">
                                <span class="text-danger">@error('fullname'){{ $message }} @enderror</span>
                            </div>           
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label for="email" class="text_comon">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" value="{{ old('email')}}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label for="password" class="text_comon">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Passowrd" value="{{ old('password')}}">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                <label for="password" class="pass_limit heading_color">Minimum 8 characters</label>

                            </div>           
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label for="cpassword" class="text_comon">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Renter your Password" value="{{ old('cpassword')}}">
                                <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                                <label for="password" class="pass_limit heading_color">Minimum 8 characters</label>

                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-12 ">
                                <button type="submit" class="btn btn-primary btn-block singnUp_btn" > SIGN UP</button>
                            </div>
                            <p class="already_text">Already have an account? <a class="sign_in_text" href="{{route('login_route')}}">Sign in here </a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col no-gutters rightsideMainDIv">
            <div class="rightside">
                <img class="main_image "src="{{asset('images/Main.png')}}">
            </div>
        </div>
    </div>




    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" ></script>
    <script>
        $(document).ready(function(){
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 2000);
        });

    </script>
  </body>
</html>