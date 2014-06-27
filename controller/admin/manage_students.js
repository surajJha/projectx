/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
//=============================UPDATE STUDENT STARTS HERE==============================================
    // hiding the go button and dropdown menu
    $("#student_list").hide();
    $("#student_select_button").hide();

    // funtions for seleccting the dropdown and showing the student_list dropdown

    $("#student_search_options").change(function() {
        $("#student_list").show();
    });

    // funtions for seleccting the student_list dropdown
    // and showing the GO button

    $("#student_list").change(function() {
        $("#student_select_button").show();
    });


    // Function to load the form for updating
    // student information after pressing the 
    // GO button

// to prefill the form values for update student form
// will will write an ajax funtion in the callback
// LOAD funtion  below
  $("#student_select_button").click(function() {
        $("#update_student_form").load("update_student_details.php",function(){
            // callback ajax funtion GOES HERE
            
           $.ajax(
                {
                    type: 'GET',
                    url: '../../models/admin/update_student_form.php',
                    data: {
                       select_student: $("#student_search_options").val(), 
                       student_info:$("#student_list").val()
                    },
                    success: function(j)
                    {
                        
                        $("#update_first_name").val(j[0]);
                        $("#update_last_name").val(j[1]);
                        $("#update_roll_no").val(j[2]);
                        $("#update_address").val(j[3]);
                        $("#update_dob").val(j[4]);
                        $("#update_email_id").val(j[5]);
                        $("#update_contact_no").val(j[6]);
                        $("#update_father_first_name").val(j[7]);
                        $("#update_father_last_name").val(j[8]);
                        $("#update_mother_first_name").val(j[9]);
                        $("#update_mother_last_name").val(j[10]);
                        $("#update_parent_address").val(j[11]);
                        $("#update_parent_email").val(j[12]);
                        $("#update_parent_contact_no").val(j[13]);
                    }
                }); 
            
            
        });


 });

   

// ajax funtion to fill second select option with data
    $("#student_search_options").change(function() {

        $("#student_select_button").hide();
        $("#update_student_form").empty();

        $.ajax(
                {
                    type: 'GET',
                    url: '../../models/admin/update_student_list.php',
                    data: {
                        
                        select_student: $("#student_search_options").val()
                    },
                    success: function(j)
                    {
                        var options = '<option> Select '+$("#student_search_options").val()+'</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i] + '">' + j[i] + '</option>';
                        }
                        $("#student_list").html(options);
                    }
                });
    });
     

// ajax function for updating the student info by calling a php file in models/admin
//hello

$("#update_student_button").click(function(){
    $.ajax(
            {
               
                type: 'POST',
                url: '../../models/admin/update_student_details.php',
                cache: false,
                data: values,
                
                success: function(j){

                    if(j=="success"){
                        
                        $("#update_successful").html("Student's Information was successfully updated .");
                        $("#update_student")[0].reset();
                    }
                    else{
                        
                       $("#update_failed").html("There was some error in updating the Student's Details. Please try again.");
                       
                    }
                }
            });
});


 
//============================================ADD STUDENT STARTS HERE============================================
     // ajax function to add a new student in the database
      // getting form input values
      $("#add_new_student_submit").click(function(){
             var values = $("#add_new_student").serialize();
             
       $.ajax(
            {
               
                type: 'POST',
                url: '../../models/admin/manage_students.php',
                cache: false,
                data: values,
                
                success: function(j){

                    if(j=="success"){
                        
                        $("#success").html("New Student was successfully added.");
                        $("#add_new_student")[0].reset();
                    }
                    else{
                        
                       $("#failure").html("There was some error in entering the Student's Details. Please try again.");
                       
                    }
                }
            });
            return false;
      });

   //=============================DELETE STUDENT FUNTIONALITY VIA AJAX====================================================== 
    
        $.ajax({
            type: 'POST',
            url: '../../models/admin/display_delete_student.php',
            data:{},
            cache: false,
            success: function(data) {

                //$("#delete_student").empty();

                var t = "<div><form id=\"select_student\" name=\"select_student\" method=\"post\"><div class=\"table-responsive\"><table class=\"table table-striped\"><caption><h3>Select Multiple students for Deletion</h3></caption>"
                t += "<thead><tr> <th><h4>Roll Number</h4></th> <th><h4>Name</h4></th><th><center><button id=\"delete_student_button\" class=\"btn btn-danger\" type=\"submit\">Delete</button ></center></th></tr></thead>";

                for (var i = 0; i < data.length; i++) {
                    t += "<tr> <td>" + data[i].roll_no + "</td><td>" + data[i].name + "</td><td> <center><input type=\"checkbox\" name=\"delete_student_checkbox[ ]\" value=\"" + data[i].roll_no + "\"> <center></td></tr>";
                }
                t += "</table></div></form></div>";
                $("#delete_student").html(t);

                $("#delete_student_button").click(function(e)
                {
                    e.preventDefault();
                    var values = $("#select_student").serialize();
                    
                        $.ajax({
                                type: 'POST',
                                url: '../../models/admin/delete_student.php',
                                data: values,
                                
                                success: function(j)
                                {
                                alert(j);
                                        location.reload();
                                        $("#delete_student").html('<div class="alert-success" style="padding:5%"><center>The selected students have been deleted successfully!</center></div>');
                                },error: function(j) {

                        alert(j);
                        }
                        });

                });

            },
            error: function() {
                var e = "<p style=\"color:blue\">Sorry! There are no students matching your request!</p>";
            }

        });
        
       
   //===================================================================================================================
});

