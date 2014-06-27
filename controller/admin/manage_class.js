/* 
    This file contains all js + ajax code for manage class.php view
 */


$(document).ready(function(){
   // ajax function for loading the rectangles containing
   // the class wise info. the boxes are clickable
   // modify this function accordingly
     $.ajax(
            {
                type: 'GET',
                url: '../../model/teacher/set_question_paper_options.php',
                data: {
                    field: f
                },
                success: function(j)
                {
                    var options = '<option>Select standard</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i] + '">' + j[i] + '</option>';
                    }
                    $("#sqp_standard").html(options);
                }
            });
    
    
    //hello
    
    
    
    
});