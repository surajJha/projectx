<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hexagraph Analytics</title>

        <!-- Bootstrap core CSS -->
        <link href="../../assets/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="../../assets/css/sidebar.css" rel="stylesheet">
        <style>
            .pic{
                background-color: red;
                //margin: 5px;
                height: 150px;
                width: 200px;
                color: red;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <!-- Navbar code goes here -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class =" container">
                <a href="admin_dashboard.php" class =" navbar-brand">HexaGraph</a>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="overview.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">UserName<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="edit_profile.php">Edit profile</a></li>
                                <li><a href="../../model/logout.php">Logout</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ***************************SIDE PANEL GOES HERE*******************-->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 sidebar">
                    <!-- Overview  -->
                    <ul class="nav nav-sidebar">
                        <li class="active" ><a id="overview" href="overview.php">Overview</a></li>
                    </ul>

                    <ul class="nav nav-sidebar">
                        <li><a href="manage_class.php">Manage class</a></li>
                    </ul>

                    <ul class="nav nav-sidebar">
                        <li><a href="manage_teachers.php">Manage Teachers</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="manage_exam.php">Manage Exam</a></li>
                    </ul>

                </div>

                <div class="col-sm-9 col-sm-offset-3 main" >             

                    <div class="container">
                        <div class="row">


                            

                            <table class="table">
                               
                                <tbody>
                                    <tr>
                                        <td><img src="" class="pic" class=" img-responsive"></td>
                                         <td><img src="" class="pic" class=" img-responsive"></td>
                                          <td><img src="" class="pic" class=" img-responsive"></td>
                                    </tr>
                                     <tr>
                                        <td><img src="" class="pic" class=" img-responsive"></td>
                                         <td><img src="" class="pic" class=" img-responsive"></td>
                                          <td><img src="" class="pic" class=" img-responsive"></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>


</body>

</html>

