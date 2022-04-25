<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('fontawsome/baacebf324.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <title>Election Page</title>
</head>

<body  style="background: #FBFBFD;">
    <div class="home_body">
        <!-- header nav start here  -->
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light">
                <img src="{{asset('images/Corche_Logo.png')}}">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto pl-5">
                        <li class="nav-item  mx-2">
                            <a class="nav-link" href="#">
                                <span class="active">Elections</span><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">
                                <span class="">Candidate</span>
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 d-flex flex-row-reverse">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle profile_button" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: transparent;">
                                <img class="profile_avatar" src="{{asset('images/profile_logo.jpg')}}">My Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Profile</button>
                                <a href="{{route('logout_route')}}" class="dropdown-item" type="button">Log out</a>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <!-- end here -->
        <div class="main_content">
            <div class="breadCrumbs create_tab_div">
                <p class="breadCrumbs_heading">Elections</p>
            </div>
            <div class="container-fluid create_tab_div ">
                <div class="row" style="display: flex;flex-direction: row;">
                    <a class="create_election">
                        <div class="create_Election d-flex align-items-center mt-2">
                            <img src="{{asset('images/create_election.png')}}" class="m-2" style="width: 68px;height: 68px;">
                            <p class="craete_text">Create New Election</p>
                        </div>
                    </a>
                    @foreach ($Election  as $election_value)
                        <div class="common_div_style d-flex  mt-2">
                            <div class="d-flex     align-items-center">
                                <img class="vote_img" src="{{asset('images/Vote.png')}}"
                                    style="width: 81px;height:81px;position:relative;left: 20px;margin: 10px 0;">
                                <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                    <p class="first_text" style="margin-bottom:0;">{{$election_value->election_name}}</p>
                                    <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>{{$election_value->start_date}}</p>
                                    <p style="margin-bottom:0;color: #ECB916;">{{$election_value->status}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="common_div_style d-flex election_third_div">
                        <div class="d-flex     align-items-center">
                            <img class="vote_img" src="{{asset('images/Vote.png')}}"
                                style="width: 81px;height:81px;position:relative;left: 20px;">
                            <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                <p class="first_text" style="margin-bottom:0;">Election 2022</p>
                                <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>12/04/2022</p>
                                <p style="margin-bottom:0;color: #19AA86;">Completed</p>
                            </div>
                        </div>
                    </div>

                    <div class="common_div_style d-flex election_fourth_div">
                        <div class="d-flex     align-items-center">
                            <img class="vote_img" src="{{asset('images/Vote.png')}}"
                                style="width: 81px;height:81px;position:relative;left: 20px;">
                            <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                <p class="first_text" style="margin-bottom:0;">Election 2022</p>
                                <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>12/04/2022</p>
                                <p style="margin-bottom:0;color: #19AA86;">Completed</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container-fluid creat_election_div d-none" style="margin-top: 40px;">


                <div class="heading_create_new_election">
                    <h2>Create new Election</h2>
                </div>
                <div class="form_div_election">
                    <div class="form_div w-100">
                        <form class="form" id="adminForm">
                              @csrf
                            <div class="form-group">
                                <label for="election_name">Name of election</label>
                                <input type="text" class="form-control" id="election_name" name="election_name" placeholder="Enter Election Name">
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="start_date" >Start Date</label>
                                    <input type="text" class="form-control" id="start_date" name="start_date">

                                </div>
                                <div class="form-group col-3">
                                    <label for="start_time" >Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time">

                                </div>
                                <div class="form-group col-3">
                                    <label for="end_date" >End Date</label>
                                    <input type="text" class="form-control" id="end_date" name="end_date">

                                </div>
                                <div class="form-group col-3">
                                    <label for="end_time" >End Time</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 d-flex flex-column">
                                    <label for="inputState">Positions</label>
                                    <select id="election_position" name="election_position[]" multiple="multiple" class="form-control">
                                        @foreach ($position_val as $position)
                                          <option value="{{$position}}">{{$position}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn  float-right comon_color_btn">Create Election<i
                                    class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

  @include('admin.dashboardjs')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>