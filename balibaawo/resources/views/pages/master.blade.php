<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @yield('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Balibaawo Nursing Home</title>

        <!-- Fonts -->
  <!--      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" media="all">
        <link type="text/css" rel="stylesheet" href="css/all.css" media="all">
        <link rel="stylesheet" id="switcher-css" type="text/css" href="css/switcher.css" media="all">
        <link rel="shortcut icon" href="images/bali-logo.jpeg">


    </head>
    <body>
        <div id="wrapper">
            <header id="header">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @if (Auth::check())
                                 <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                             </div>
                        @endif
                        </div>
                    </div> <!-- end of login/logout container -->
                </div> <!--top bar -->
        </div> 
            <div class="container has-feedback">
                <!-- logo -->
                <div class="logo pull-left"><a href="/"><img class="img-responsive" src="/images/bali1-logo.jpeg" title="Balibaawo Logo" width="100" height="100" ></a>
                </div>
                <!-- Top Contact us -->
                <div class="holder">
                    <div align="right" style="color: #9b2317; font-size: 30px; padding-top: 10px;">
                        <strong>Contact Us</strong>
                    </div>
                    <div align="right" style="font-size: 20px; padding-top: 15px;">
                        <strong>Tel: +256 752395972</strong>    
                    </div>
                </div>
            </div>  <!-- end container has-feedback -->
            <div class="container">
                <!-- main navigation -->
                <nav id="nav" class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="title visible-xs">Menu</span>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="/#services">Services</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/#contact">Contact Us</a></li>
                                <li><a href="/about">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> <!-- end of main navigation container -->
        </header>

      <!-- main content goes here -->
        <div class="content">
                @yield('content')
        </div>
     
    </body>
    <footer id="footer">
        <div class="footer">
            <div class="container">
                <!-- footer info -->
                <div class="info">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="/"><strong>Balibaawo Nursing Home</strong></a>
                            </div>
                        </div> <!-- end of column_1 -->
                        <div class="col-lg-3 col-md-3 col-sm-4" id="contact">
                            <div class="icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <address>Gayaza-zirobwe Road, Kampala, Uganda</address>
                            </div>
                        </div> <!-- end of column_2 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="box">
                                <div class="icon">
                                    <span class="fa fa-envelope-o"></span>
                                </div>
                                <div class="text">
                                    <ul class="contact-list">
                                        <li class="tel">Phone: <a href="">+256 752395972</a></li>
                                        <li>Email: <a href="">brianbalibaaawo@yahoo.com</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end of column_3 -->
                        <div class="col-lg-3 col-md-3 col-sm-4"> <!-- TO DO: send email via modal -->
                            <ul class="buttons">
                                <li class="inquary-form">
                                    <a href="/#" class="btn btn-primary" data-toggle="modal" data-target="#inquary-form">Contact Us</a>
                                    <div class="modal fade" id="inquary-form" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-header">
                                                        <h4>Please Send your Enquiry To Balibaawo Nursing Home</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span></span class="sr-only">Close</button>
                                                    </div>
                                                   <div class="formgroup">
                                                    {!! Form::open(['url' => 'sendcontact', 'method' => 'post']) !!}
                                                        {!! Form::label('name', 'Name') !!}
                                                        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                                                        {!! Form::label('email', 'Email') !!}
                                                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                                                        {!! Form::label('phone', 'Phone Number') !!}
                                                        {!! Form::tel('phone', null, ['class' => 'form-control', 'required']) !!}
                                                        {!! Form::label('message', 'Enter Your Message') !!}
                                                        {!! Form::textarea('message', null, ['class' => 'form-control', 'required']) !!}
                                                        {!! Form::submit("Submit") !!}
                                                    {!! Form::close() !!}
                                                    </div>  

                                                   <!--     <form method="post" action="/sendcontact">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                        <label for="email">Email Address</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                        <label for="tel">Phone Number</label>
                                                        <input type="tel" id="phone" name="phone" class="form-control" required>
                                                        <label for="message">Enter Your Message</label>
                                                        <textarea id="message" name="message" cols="30" rows="10" class="form-control" required></textarea>
                                                        <input type="submit" value="Submit" class="btn btn-primary" >
                                                    </form>  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- end of column_4-->
                    </div> <!-- end of row_1 -->
                    <div class="row holder">
                        <!-- follow on social networks -->
                        <div class="col-lg-3 col-md-3 col-sm-">
                            <h4>Follow us</h4>
                            <ul class="social-networks"> <!-- TO DO: add link balibaawo to facebook page-->
                                <li><a href="" target="blank"><span class="fa fa-facebook"></span> Facebook</a></li>
                            </ul>
                        </div> <!-- end of column_1 -->
                       
                    </div> <!-- end of row_2 -->
                     <div class="infobar">
                            <div class="container has-feedback" align="center">
                                <a href="#header" class="btn-top"><img src="images/btn-top.png"></a>
                                <p align="justify">&copy; Balibaawo Nursing Home</p>
                            </div>
                    </div>
                </div>

            </div> <!-- end of footer container-->
        </div> 
    </footer>  
    <div class='jscript'>
        @yield('jscript')
    </div>   
          <!--  end of page content-->
    <!--javascript -->
    <script src='js/moment.min.js'></script>
    <script src="js/jquery.min.1.10.1.js"></script>
    <script src="js/jquery.calendar.js"></script>
<!--    <script src="js/jquery.calendarsettings.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.essentials.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.owlcarousel.js"></script>
    <script src="js/jquery.salvottore.js"></script>
    <script src="js/jquery.scrolly.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.jplayer.js"></script>
    <script src="js/jquery.ui.js"></script>
    <script src="js/jquery.main.js"></script>
</html>
