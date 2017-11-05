	$(document).ready(function(){

		$('input:radio[name=optradio]').click(function(){
			if($(this).val() == 1){
				document.getElementById("selection1").style.display = "block";
			}else{
				document.getElementById("selection1").style.display = "none";
			}

		if($(this).val() == 2){
				document.getElementById("selection2").style.display = "block";
			}else{
				document.getElementById("selection2").style.display = "none";
			}

		if($(this).val() == 3){
				document.getElementById("selection3").style.display = "block";
			}else{
				document.getElementById("selection3").style.display = "none";
			}

		if($(this).val() == 4){
				document.getElementById("selection4").style.display = "block";
			}else{
				document.getElementById("selection4").style.display = "none";
			}
		});
	});


	$(function () {
    $("#fmri").on("click", function () {
        $("#main").load("fmri.php");
    });
    $("#neuron").on("click", function () {
        $("#main").load("neuron.php");
    });
     $("#wgcna").on("click", function () {
        $("#main").load("wgcna.php");
    });
});
