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
                success: function(data)
                {   
                    var display ="<br />";
                    var row_detail;
                    var row_close;
                    var col_detail;
                    var a=0;
                    var rows = parseInt(data.length/9+"");
                    for (var i = 0; i < rows; i++) {
                        
                        row_detail = "<div class=\"row\" style=\"padding-bottom:20px\">";
                        display += row_detail;
                        
                        for (var j = 0; j < 3; j++) {
                            
                            col_detail ="<div class=\"col-lg-3\" style=\"padding-right:30px\">"+
                                    "<a href=\"#\">"+
                                    "<div class=\"panel panel-info\">"+
                                    "<div class=\"panel-heading\">"+
                                        
                                        "<div class=\"row\">"+
                                           
                                            "<div class=\"col-xs-6 text-left\">"+
                                                
                                                "<span class=\"glyphicon glyphicon-book\" style=\"font-size: 40px\">"+
                                                "</span>"+
                                                    
                                            "</div>"+
                                            "<div class=\"col-xs-6 text-left\" style=\"font-family: cursive; font-size: x-large; color: #285e8e\">"+
                                                "Class  "+ data[a++]+
                                            "</div>"+
                                        "</div>"+
                                        
                                    "</div>"+
                                    
                                        "<div class=\"panel-footer announcement-bottom\">"+
                                            "<div class=\"row\" style=\"padding-left:15px\">"+
                                                //"<div class=\"col-lg-1\">"+
                                                    "<p>No. Of Students :"+data[a++]+"</p>"+
                                                    "<p>No. Of Teachers :"+data[a++]+
                                                //"</div>"+
                                                
                                            "</div>"+
                                        "</div>"+
                                    
                                "</div>"+
                                "</a>"+
                            "</div>";
                            display += col_detail;
                        }
                        row_close = "</div>";
                        display +=row_close;
                    }
                    
                    if(data.length>a){
                        row_detail = "<div class=\"row\" style=\"padding-bottom:20px\">";
                        display += row_detail;
                        while(a<data.length){
                            col_detail ="<div class=\"col-lg-3\" style=\"padding-right:30px\">"+
                                    "<a href=\"#\">"+
                                    "<div class=\"panel panel-info\">"+
                                    "<div class=\"panel-heading\">"+
                                        
                                        "<div class=\"row\">"+
                                           
                                            "<div class=\"col-xs-6 text-left\">"+
                                                
                                                "<span class=\"glyphicon glyphicon-book\" style=\"font-size: 40px\">"+
                                                "</span>"+
                                                    
                                            "</div>"+
                                            "<div class=\"col-xs-6 text-left\" style=\"font-family: cursive; font-size: x-large; color: #285e8e\">"+
                                                "Class  "+ data[a++]+
                                            "</div>"+
                                        "</div>"+
                                        
                                    "</div>"+
                                    
                                        "<div class=\"panel-footer announcement-bottom\">"+
                                            "<div class=\"row\" style=\"padding-left:15px\">"+
                                                //"<div class=\"col-lg-1\">"+
                                                    "<p>No. Of Students :"+data[a++]+"</p>"+
                                                    "<p>No. Of Teachers :"+data[a++]+
                                                //"</div>"+
                                                
                                            "</div>"+
                                        "</div>"+
                                    
                                "</div>"+
                                "</a>"+
                            "</div>";
                            display += col_detail;
                        }
                        row_close = "</div>";
                        display +=row_close;
                    }
                    $("#display_class").html(display);
                }
                
            });
    
    return false;
    
    
    // hello world
    // this is suraj
    
    
});