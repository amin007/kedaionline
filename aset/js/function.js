// JavaScript Document
function equalHeight(group) {    
    var tallest = 0;    
    group.each(function() {       
        var thisHeight = $(this).height();       
        if(thisHeight > tallest) {          
            tallest = thisHeight;       
        }    
    });    
    group.each(function() { $(this).height(tallest); });
} 

$(document).ready(function() {   
    equalHeight($(".thumbnail1")); 
});

$(document).ready(function(){
    $("#new").click(function(){
         $("#f_new").fadeOut();
		  $("#food").fadeOut();
        $("#f_new2").fadeIn("slow");
		$("#food2").fadeIn("slow");
    });
});

$(document).ready(function(){
$("#new2").click(function(){
         $("#f_new2").fadeOut();
		  $("#food2").fadeOut();
        $("#f_new").fadeIn("slow");
		$("#food").fadeIn("slow");
    });
	});