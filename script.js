	$(document).ready(function() {

	    $('input:radio[name=optradio]').click(function() {
	        if ($(this).val() == 1) {
	            document.getElementById("selection1").style.display = "block";
	        } else {
	            document.getElementById("selection1").style.display = "none";
	        }

	        if ($(this).val() == 2) {
	            document.getElementById("selection2").style.display = "block";
	        } else {
	            document.getElementById("selection2").style.display = "none";
	        }

	    });
	});



	$(document).ready(function() {

	    $('input:radio[name=optradio1]').click(function() {
	       
		    if ($(this).val() == 3) {
	            document.getElementById("selection3").style.display = "block";
	        } else {
	            document.getElementById("selection3").style.display = "none";
	        }

	        if ($(this).val() == 4) {
	            document.getElementById("selection4").style.display = "block";
	        } else {
	            document.getElementById("selection4").style.display = "none";
	        }
	    });
	});


	$(document).ready(function() {

	    $('input:image[name=image1]').click(function() {
	        if ($(this).val() == 1) {
	            document.getElementById("selection1").style.display = "block";
	        } else {
	            document.getElementById("selection1").style.display = "none";
	        }

	        if ($(this).val() == 2) {
	            document.getElementById("selection2").style.display = "block";
	        } else {
	            document.getElementById("selection2").style.display = "none";
	        }
	        if ($(this).val() == 3) {
	            document.getElementById("selection3").style.display = "block";
	        } else {
	            document.getElementById("selection3").style.display = "none";
	        }


	    });
	});


	$(document).ready(function() {

	    $('input:image[name=arrowdown]').click(function() {
	        if ($(this).val() == 1) {

	            if (document.getElementById("advanced").style.display === "none") {
	                document.getElementById("advanced").style.display = "block";
	            } else {
	                document.getElementById("advanced").style.display = "none";
	            }

	        }

	    });

	});


	
$(document).ready(function() {
  $("select").change(function() {
    var option = $(this).val();
    if (option == "1") {
    document.getElementById("one").style.display = "block";
    document.getElementById("two").style.display = "block";
    } else 
    {
    document.getElementById("one").style.display = "none";
    document.getElementById("two").style.display = "none";
    } 

     if (option == "2") {
    document.getElementById("three").style.display = "block";
    document.getElementById("four").style.display = "block";
    document.getElementById("five").style.display = "block";
    
      
    } else 
    {
    document.getElementById("three").style.display = "none";
    document.getElementById("four").style.display = "none";
    document.getElementById("five").style.display = "none";
    } 

    if (option == "3") {
    document.getElementById("six").style.display = "block";
    document.getElementById("seven").style.display = "block";
    document.getElementById("eight").style.display = "block";
    document.getElementById("nine").style.display = "block";
    
      
    } else 
    {
     document.getElementById("six").style.display = "none";
    document.getElementById("seven").style.display = "none";
    document.getElementById("eight").style.display = "none";
    document.getElementById("nine").style.display = "none";
    } 
  });


});