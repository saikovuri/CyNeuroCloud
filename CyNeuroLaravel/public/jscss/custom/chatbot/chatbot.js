$(document).ready(function() {
    var $chatbox = $('.chatbox'),
    $chatboxTitle = $('.chatbox__title'),
    $chatboxTitleClose = $('.chatbox__title__close'),
    $chatboxCredentials = $('.chatbox__credentials');
    $chatboxTitle.on('click', function() {
        $chatbox.toggleClass('chatbox--tray');
            // to scroll down to the bottom of the chat tray  or chat body
            $('#chatbox_body_content').scrollTop(1E10);
        });
    $chatboxTitleClose.on('click', function(e) {
            //e.stopPropagation();
            //$chatbox.addClass('chatbox--closed');
            $('#chatbox_body_content').html("<div class=\"chatbox__body__message chatbox__body__message--left\"><img src=\"{{asset('images/viman_agent.png')}}\" alt=\"VIMAN\"><p>Hello, Welcome to CyNeuro portal, I am VIMAN your virtual agent.How can I help you?</p></div>");
        });
    $chatbox.on('transitionend', function() {
        if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
    });
    $chatboxCredentials.on('submit', function(e) {
        e.preventDefault();
        $chatbox.removeClass('chatbox--empty');
            // to scroll down to the bottom of the chat tray  or chat body
            $('#chatbox_body_content').scrollTop(1E10);
        });

        // this function executes when user hits enter key in chat textarea
        $("#user_input").keypress(function(e){
            var code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13){
                var user_input = $('#user_input').val();
                var context_json = $('#conversation_id').val();

                var user_before = '<div class="chatbox__body__message chatbox__body__message--right"><img src="{{asset('images/user_icon.png')}}" alt="User"><p>';
                var after = '</p></div>';
                var user_finalValue = user_before + user_input + after;
                $('#chatbox_body_content').append(user_finalValue);
                $('#user_input').val('');

                // scroll to the bottom of the chatbot body
                $('#chatbox_body_content').scrollTop(1E10);


                $.ajax({
                    url: "http://chatbot.dev/api/v1/chatbot",
                    data: {user_input: user_input, context: context_json},
                    async: false, 
                    success: function(result){
                        var viman_before = '<div class="chatbox__body__message chatbox__body__message--left"><img src="{{asset('images/viman_agent.png')}}" alt="VIMAN"><p>';

                        var res = result.split("|");

                        var viman_finalValue = viman_before + res[0] + after;
                        $('#chatbox_body_content').append(viman_finalValue);
                        $('#conversation_id').val(res[1]);
                    },
                    error: function(error){
                        $('#chatbox_body_content').append(error);
                    }
                });

                // scroll to the bottom of the chatbot body
                $('#chatbox_body_content').scrollTop(1E10);


            } // end of if condition
          }); // end of keypress function
})// end of document ready function
