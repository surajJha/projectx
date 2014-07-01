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
                url: '../../models/admin/manage_class.php',
                data:{},
                success: function()
                {
                    var row_detail = "<div class=\"row\" style=\"padding-bottom:20px\">";
                            
                    var col_detail ="<div class=\"col-lg-3\" style=\"padding-right:30px\">"+
                                    "<a href=\"#\">"+
                                    "<div class=\"panel panel-info\">"+
                                    "<div class=\"panel-heading\">"+
                                        
                                        "<div class=\"row\">"+
                                           
                                            "<div class=\"col-xs-6 text-left\">"+
                                                
                                                "<span class=\"glyphicon glyphicon-book\" style=\"font-size: 40px\">"+
                                                "</span>"+
                                                    
                                            "</div>"+
                                            "<div class=\"col-xs-6 text-left\" style=\"font-family: cursive; font-size: x-large; color: #285e8e\">"+
                                                "Class  1"+
                                            "</div>"+
                                        "</div>"+
                                        
                                    "</div>"+
                                    
                                        "<div class=\"panel-footer announcement-bottom\">"+
                                            "<div class=\"row\">"+
                                                "<div class=\"col-xs-6\">"+
                                                    "Class Details"+
                                                "</div>"+
                                                
                                            "</div>"+
                                        "</div>"+
                                    
                                "</div>"+
                                "</a>"+
                            "</div>";
                     var row_close = "</div>";   
                    var display;
                    for (var i = 0; i < 3; i++) {
                        display += row_detail;
                        for (var j = 0; j < 3; j++) {
                            display += col_detail;
                        }
                        display +=row_close;
                    }
                    $("#display_class").html(display);
                }
            });
    
    
    
    
    // hello world
    // this is suraj
    
    
});