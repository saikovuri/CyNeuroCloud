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