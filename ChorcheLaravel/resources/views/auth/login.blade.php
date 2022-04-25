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
    <title>Sign In Page</title>
  </head>
  <body>
    <div class="row no-gutters">

        <div class="col no-gutters">
            <div class="leftside">
                <div class="form-div">
                    <form action="{{route('check_data')}}" method="post">
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf
                        <div class="form-row d-flex justify-content-center">
                        
                            <div class="form-group col-10">
                                <h2 class="text_comon">Sign in to  Your Account</h2>
                                
                                <a class="heading_color">Login with Email and Password. In case of any problem you can contact us.</a>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="email" class="text_comon">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="password" class="text_comon">Password</label>
                                <a  class="sign_in_text float-right">Forgot Password?</a>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Passowrd" value="{{old('password')}}">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                <label for="password" class="pass_limit heading_color">Minimum 8 characters</label>

                            </div>           
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <button type="submit" class="btn btn-primary btn-block" > SIGN IN</button>
                            </div>
                            <p class="already_text">Don't have an account? <a class="sign_in_text" href="{{route('register_route')}}">Sign up here </a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col no-gutters rightsideMainDIv">
            <div class="rightside">
                <img class="main_image "src="{{asset('images/SignIn.png')}}">
            </div>
        </div>
    </div>




    <script src="{{asset('js/slim.min.js')}}" ></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
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