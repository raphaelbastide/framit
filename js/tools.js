// GET URL - not working yet
$(document).ready(function() {
    var pathname = window.location.pathname;
});


// GET FRAME WIDTH
	$(document).ready(function() {
		
		var theFrame = $(".frame", parent.document.body);
//		theFrame.width($(document).width());
		theFrame.height($(document).height());
		//autogrow
		$('.css textarea').autogrow();

	});

// TOGGLE MENU
    $(document).ready(function(){
        {
	 		  if ($("#open").is(":checked"))
	        {
	            $("#form").fadeIn("fast");
	        } else {     
	            $("#form").fadeOut("fast");
	        }

        }
		$("#open").click(function(){
        if ($("#open").is(":checked"))
        {
            $("#form").fadeIn("fast");
        } else {     
            $("#form").fadeOut("fast");
        }
      });
   
    });
