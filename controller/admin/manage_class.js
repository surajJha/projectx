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
                    
                    
                    
                    var no_of_standards = data.length;
                    for(var std =0; std < no_of_standards; std++){
                        var standard = data[std].standard;
                        var no_of_divisions = data[std].no_of_divisions;
                        for (var i = 0; i < no_of_divisions/3; i++) {
                            var a=0;
                            
                            row_detail = "<div class=\"row\" style=\"padding-bottom:20px\">";
                            display += row_detail;

                            for (var j = 0; j < 3; j++) {
                                var division = data[std][a++];
                                col_detail ="<div class=\"col-lg-3\" style=\"padding-right:30px\">"+
                                        "<a href=\"http://localhost/projectx/views/admin/manage_students.php?standard="+standard+"&division="+division+"\">"+
                                        "<div class=\"panel panel-info\">"+
                                        "<div class=\"panel-heading\">"+

                                            "<div class=\"row\">"+

                                                "<div class=\"col-xs-5 text-left\">"+

                                                    "<span class=\"glyphicon glyphicon-book\" style=\"font-size: 40px\">"+
                                                    "</span>"+

                                                "</div>"+
                                                "<div class=\"col-xs-7 text-left\" style=\"font-family: cursive; font-size: x-large; color: #285e8e\">"+
                                                    "Class  "+ standard+" "+division+
                                                "</div>"+
                                            "</div>"+

                                        "</div>"+

                                            "<div class=\"panel-footer announcement-bottom\">"+
                                                "<div class=\"row\" style=\"padding-left:15px\">"+
                                                    //"<div class=\"col-lg-1\">"+
                                                        "<p>No. Of Students :  "+data[std][a++]+"</p>"+
                                                        "<p>No. Of Teachers :  "+data[std][a++]+
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

                        if(data[std].length>a){
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
                        display +="<hr>";
                    }
                    $("#display_class").html(display);
                }
                
            });
    
    return false;
    
    
    // hello world
    // this is suraj
    
    
});