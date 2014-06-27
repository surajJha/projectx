<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hexagraph Analytics</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="assets/css/half-slider.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Start Bootstrap</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">About</a>
                        </li>
                        <li><a href="#services">Services</a>
                        </li>
                        <li><a href="#contact">Contact</a>
                        </li>
                        <li><a data-toggle="modal" href="#loginModal">Sign In</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                    <div class="carousel-caption">
                        <h1>A Full-Width Image Slider Template</h1>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                    <div class="carousel-caption">
                        <h1>Caption 2</h1>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                    <div class="carousel-caption">
                        <h1>Caption 3</h1>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>

        <div class="container">

            <div class="row section">
                <div class="col-lg-12">
                    <h1>A Full Width Image Slider Template</h1>
                    <p>This is a great starting point for yet another modern and stylish website. Here are some things to consider when working with this template:</p>
                    <ul>
                        <li>Unique Fonts</li>
                        <li>Attractive Colors</li>
                        <li>Content Spacing for Legibility and Design</li>
                        <li>Decent Pictures that Still Load Quickly (less than 400KB for example)</li>
                        <li>Make the Pictures INFORMATIVE</li>
                        <li>Custom Styling for the Captions</li>
                    </ul>
                </div>
            </div>

            <hr>

            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Company 2013</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- ******************** MODEL LOGIN code goes here***************************-->
        <div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4> Please Sign in</h4>

                    </div>
                    <div class="modal-body">
                        <div class="row">

                           
                        </div>
                        <form method="post" id="loginForm" >
                            <div class="form-group">
                                <div id="forgot" style="text-align: center; font-weight: bold ; color:red">

                                </div>
                                <div>
                                    <select id="school" name="school" class="form-control" required>
                                        <!-- placeholder for ajax response -->
                                    </select>
                                </div>

                            </div>

                            <input type="text" class="form-control input-md" placeholder="Username/UserId" id="user" name="user" required><br>
                            <input type="password" class="form-control input-md" placeholder="Password" id="password" name="password" required><br>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit"  id="submit_loginForm" >Submit</button>
                                <a class="btn btn-danger" id="loginModal_close" data-dismiss="modal">Close</a>
                            </div>


                        </form>

                    </div>


                </div>


            </div>


        </div>
        <!--******************************************************************-->
        <script>
            $('.carousel').carousel({
                interval: 3000 //changes the speed
            });
        </script>
        <!-- JavaScript -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="controller/index.js"></script>

       

    </body>

</html>
