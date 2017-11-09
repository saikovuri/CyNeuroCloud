$(document).ready(function() {

    $("#fileUpload").hide();
    $("#Pre-proDropped").hide();
    $("#NeuronDropped").hide();
    $("#postDropped").hide();
    $("#statusDropped").hide();
    $("#geo0").val([0]);
    $("#Pre-pro").draggable({
        revert: "invalid"
    });
    $("#Neuron").draggable({
        revert: "invalid"
    });
    $("#post").draggable({
        revert: "invalid"
    });

    $("#dropPre-pro").droppable({
        accept: "#Pre-pro",
        drop: function(event, ui) {
            $("#Pre-proDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#Pre-pro").hide();
            $("#conf1").val(["1"]);
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });


    $("#dropNeuron").droppable({
        accept: "#Neuron",
        drop: function(event, ui) {
            $("#NeuronDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#Neuron").hide();
            $("#Pre-proDropped").show();
            $("#Pre-pro").hide();
            $("#conf2").val(["2"]);
            $("#dropPre-pro").css("background-color", "#ffffff");
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });
    $("#dropPost").droppable({
        accept: "#post",
        drop: function(event, ui) {
            $("#postDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#post").hide();
            $("#NeuronDropped").show();
            $("#Neuron").hide();
            $("#Pre-proDropped").show();
            $("#Pre-pro").hide();
            $("#conf3").val(["3"]);
            $("#dropPre-pro").css("background-color", "#ffffff");
            $("#dropNeuron").css("background-color", "#ffffff");
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");

        }
    });

    $("#customPre-pro").click(
        function() {
            var $text = $("#customPre-pro").text();

            if ($text === "Custom Pre-pro") {
                $(this).text("Default Pre-pro");
                $(this).attr("class", "btn btn-default");
                $("#geo0").val([0]);
                $("#fileUpload").hide();
            } else {
                $(this).text("Custom Pre-pro");
                $(this).attr("class", "btn btn-primary");
                $("#geo1").val([1]);
                $("#fileUpload").show();
            }
        }
    );

    $("#publish").click(function() {
        if (confirm("Are you sure you want to publish your Application ?")) {

        } else {
            return false;
        }
    });

    $("#unpublish").click(function() {
        if (confirm("Are you sure you want to un-publish your Application ?")) {

        } else {
            return false;
        }
    });

    $("#delete").click(function() {
        if (confirm("Are you sure you want to delete your Application ?")) {

        } else {
            return false;
        }
    });

});