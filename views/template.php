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
                        <li><a href="manage_academic_year.php">Manage academic year</a></li>
                    </ul>


                    <ul class="nav nav-sidebar">
                        <li><a href="manage_class.php">Manage class</a></li>
                    </ul>

                    <ul class="nav nav-sidebar">
                        <li><a href="manage_subject.php">Manage subject</a></li>
                    </ul>
                    
                    <ul class="nav nav-sidebar">
                        <li><a href="add_user.php">Add new user</a></li>
                    </ul>

                    <!-- Any other additional functionality   -->
                    
                </div>
            
            
        </div>
    </div>
        <hr>
             <!-- Footer code goes here   -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>

  
</body>

</html>

