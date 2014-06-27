/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

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
                       
                        $("#student_list").html(options);
                        /*$('#vq_standard option:contains("Select")').attr('disabled', 'disabled');
                        $("#vq_topic").empty();
                        $("#vq_type").empty();
                        $("#vq_level").empty();*/
                    }
                }
             )
 });

// ajax funtion to fill second select option with data
    $("#student_search_options").change(function() {

        $("#student_select_button").hide();
        $("#update_student_form").empty();

        $.ajax(
                {
                    type: 'GET',
                    url: '../../models/admin/update_student_details.php',
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
     




 
//============================================ADD STUDENT====================================
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
            url: '../../model/teacher/display_questions.php',
            data: values,
            cache: false,
            success: function(data) {

                $("#myContent").empty();

                var t = "<hr/><div><form id=\"select_cq\" method=\"post\"><div class=\"table-responsive\"><table class=\"table table-striped\"><caption><h3>Question Bank</h3></caption>"
                t += "<thead><tr> <th>Question Id</th> <th>Type</th><th>Description</th><th><button id=\"del_ques\" class=\"btn btn-lg btn-danger\" type=\"submit\">Delete</button ></th></tr></thead>";

                for (var i = 0; i < data.length; i++) {
                    t += "<tr> <td>" + data[i].question_id + "</td><td>" + data[i].type + "</td><td><details><summary>" + data[i].question_desc + "</summary><br/><p><b>Level:</b> " + data[i].level + "</p> ";
                    if (data[i].type == "Mcq")
                    {
                        t += "<p><b> A: </b> " + data[i].mcq['optionA'] + "&nbsp;&nbsp;&nbsp; <b>B:</b> " + data[i].mcq['optionB'] + " &nbsp; &nbsp; &nbsp; <b> C: </b> " + data[i].mcq['optionC'] + "&nbsp;&nbsp;&nbsp; <b>D:</b> " + data[i].mcq['optionD'] + " </p>";
                    }
                    t += "<p><b>Answer:</b> " + data[i].answer + "</p></details></td><td> <center><input type=\"checkbox\" name=\"question_id[ ]\" value=\"" + data[i].question_id + "\"> <center></td></tr>";
                }
                t += "</table></div></form></div>";
                $("#myContent").html(t);

                $("#del_ques").click(function(e)
                {
                    e.preventDefault();
                    var values = $("#select_cq").serialize();

                    $.ajax(
                            {
                                type: 'POST',
                                url: '../../model/teacher/delete_questions.php',
                                data: values,
                                success: function()
                                {
                                    location.reload();
                                    $("#myContent").html('<div class="alert-success" style="padding:5%"><center>The questions have been deleted successfully!</center></div>');
                                }
                            });

                });

            },
            error: function() {
                var e = "<p style=\"color:blue\">Sorry! There are no questions matching your request!</p>";
            }

        });
        
   //===================================================================================================================
});

