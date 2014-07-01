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
        <link href="../../assets/css/manage_students.css" rel="stylesheet">


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
        <div class="container fluid">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <!-- Overview  -->
                    <ul class="nav nav-sidebar">
                        <li class="active" ><a id="overview" href="manage_class_details.php">Overview</a></li>
                    </ul>

                    <ul class="nav nav-sidebar">
                        <li><a href="manage_students.php">Manage Students</a></li>
                    </ul>


                   

                    <ul class="nav nav-sidebar">
                        <li><a href="manage_subjects.php">Manage Subjects</a></li>
                    </ul>

                </div>
                <!--******************SIDEBAR COLOUMN FINISHES HERE**********-->

                <!--******************Remaining content area starts HERE**********-->

                <div class="col-sm-8 col-sm-offset-2 main" >             

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h4>Manage Student's Details</h4></div>
                                    <div class="panel-body">
                                        <!-- Tabs goes here -->


                                        <div class="tabbable">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab1" data-toggle="tab">Add New Student</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Update Student Details</a></li>
                                                <li><a href="#tab3" data-toggle="tab">Delete a Student</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <!--**************************8 ADD NEW STUDENT*******************************-->
                                                <div class="tab-pane active" id="tab1">
                                                    <div> 
                                                        <div class="row">
                                                            <!--== ====================Student's information===============-->
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <form id="add_new_student" method="post" accept-charset="utf-8" class="form" role="form">  
                                                                    <h4>Student's Information</h4><hr>
                                                                    <div class="row"><br>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="first_name" id="first_name" value="" class="form-control input-lg" placeholder="First Name"  required/>                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="last_name" id="last_name" value="" class="form-control input-lg" placeholder="Last Name" required />                        </div>
                                                                    </div>
                                                                    <!--<input type="number" name="roll_no" id="roll_no" value="" class="form-control input-lg" placeholder=" Roll Number" required />-->

                                                                    <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <textarea class="form-control" rows="3" id="address" name="address" required></textarea>
                                                                    </div>

                                                                    <input type="date" placeholder="Enter Date of Birth in dd-mm-yyyy format" id="dob" name="dob" class="form-control input-lg" required>
                                                                    <input type="email" name="email_id" id="email_id" value="" class="form-control input-lg" placeholder="Your Email" required  />


                                                                    <input type="tel" name="contact_no" id="contact_no" value="" class="form-control input-lg" placeholder="Phone Number"  required/>


                                                                    <hr>
                                                                    <!-- ====================Parent's information===============-->
                                                                    <h4>Parent's Information</h4><hr>
                                                                    <h5> Father's Name </h5>
                                                                    <div class="row"><br>

                                                                        <div class="col-xs-6 col-md-6">

                                                                            <input type="text" name="father_first_name" id="father_first_name" value="" class="form-control input-lg" placeholder="First Name"  required/>                      
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="father_last_name" id="father_last_name" value="" class="form-control input-lg" placeholder=" Last Name" required />                     
                                                                        </div>
                                                                    </div>
                                                                    <h5> Mother's Name </h5>
                                                                    <div class="row"><br>

                                                                        <div class="col-xs-6 col-md-6">

                                                                            <input type="text" name="mother_first_name" id="mother_first_name" value="" class="form-control input-lg" placeholder=" First Name"  required/>                      
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="mother_last_name" id="mother_last_name" value="" class="form-control input-lg" placeholder=" Last Name" required />                     
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="parent_address">Parent's Address</label>
                                                                        <textarea class="form-control" rows="3" id="parent_address" name="parent_address" required></textarea>
                                                                    </div>
                                                                    <input type="email" name="parent_email" id="parent_email" value="" class="form-control input-lg" placeholder="Parent's Email Address" required  />

                                                                    <input type="tel" name="parent_contact_no" id="parent_contact_no" value="" class="form-control input-lg" placeholder=" Parent's Phone Number"  required/>

                                                                    <button class="btn btn-lg btn-success btn-block signup-btn" id="add_new_student_submit" type="submit">
                                                                        Submit
                                                                    </button>
                                                                </form> 
                                                                <br />
                                                                <div id="success" class="alert-success" style="font-size: 10px"></div>
                                                                <div id="failure" class="alert-danger" style="font-size: 10px"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>            






                                                <!--**************************UPDATE STUDENT DETAILS*******************************-->


                                                <div class="tab-pane" id="tab2">

                                                    <div> 
                                                        <div class="row"><br>
                                                            <div class="col-md-10 col-md-offset-2">
                                                                <form method="post" accept-charset="utf-8" class="form" name="" id="" role="form">  
                                                                    <div class="row">
                                                                        <div class="col-xs-4 col-md-4">

                                                                            <select class="form-control" id="student_search_options" name="student_search_options">
                                                                                <option>Select student via..</option>
                                                                                <option>Roll Number</option>
                                                                                <option>Name</option>
                                                                            </select>


                                                                        </div> 
                                                                        <div class="col-xs-4 col-md-4" id="list">
                                                                            <select class="form-control" id="student_list" name="student_list" required>

                                                                                <!-- placeholder for either roll no or names -->
                                                                            </select>


                                                                        </div> 
                                                                        <div class="col-xs-2 col-md-2" id="student_select_button">

                                                                            <input type="button" class="btn btn-primary " name="update_student_button" id="update_student_button" value="GO">
                                                                        </div> 
                                                                        <br>
                                                                       

                                                                    </div>

                                                                </form>          
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                            <div id="update_student_form">
                                                                <!-- placehodler for update student form -->  

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- =      ===================================================== DELETE STUDENT TAB========================-->

                                                <div class="tab-pane" id="tab3">
                                                    <div class="row" id="delete_student">
                                                        <!-- placehodler for update student form --> 
                                                    </div>
                                                </div>

                                            </div>
                                        </div>






                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>



                <!--*******************************************************-->




            </div>
        </div>


        <!-- JavaScript -->
        <script src="../../assets/js/jquery-1.10.2.js"></script>
        <script src="../../assets/js/bootstrap.js"></script>
        <script src="../../controller/admin/manage_students.js"></script>


    </body>

</html>

