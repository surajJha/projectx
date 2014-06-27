/* 

 *  This file contatins JS code for index.php (home page) hence this is placed 
 *  directly under the controller directory
 */

$(document).ready(function(){
    
//    ajax funtion to populate the select feild in modal 
//    form for printing the school names

$.ajax(
            {
                type: 'POST',
                url: 'models/login_schools_list.php',
                data: {
                   
                },
                success: function(j)
                {
                    // filling the dropdown with school names
                    var options = '<option>Select School</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i] + '">' + j[i] + '</option>';
                    }
                    // sending output to the view
                    $("#school").html(options);
                   
                },
                error: function()
                    {
                        // if login fails then throw an error msg in the modal
                       // $("#login_error").html("Incorrect username or password. Please try again");
                        // reset the form feilds
                       // $('#loginForm')[0].reset();
                        
                    }
            });
    
  
   //this ajax function is only for calling login.php and then going to respective user page 
    $("#submit_loginForm").click(function()
        {
           
            //e.preventDefault();
            $("#forgot").html("");
            // taking the form input values using serialize function
            var values=$("#loginForm").serialize();
            //alert(values);
            $.ajax({
                type: 'POST',
                url: 'models/login.php',
                cache: false,
                data: values,
                success: function(response)
                {
                    if(response == "e")
                    { 
                        $("#forgot").html("Incorrect username or password!<br/><a href=\"view/forgot_password.php\">Forgot ?</a><br/>");
                    }
                    else
                    {
                        window.location=response;  
                    }
                }
            });
            return false;
        });

 
});
