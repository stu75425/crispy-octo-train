$(document) .ready(function() {
    $("appointments") .submit(function(e) {
        removeFeedback();
        var errors = validateForm();
        if (errors == "") {
            return true;
        } else {
            provideFeedback(errors);
            e.preventDefault();
            return false;
        }
    });

    function provideFeedback(incomingErrors) {
        for (var i = 0; i < incomingErrors.length; i++) {
            $("#" + incomingErrors[i]).addClass("errorClass");
            $("#" + incomingErrors[i] + "Error") .
            removeClass("errorFeedback");
        }
            $("#errorDiv").html("Errors encountered");
        }
        function removeFeedback() {
            $("#errorDiv") .html("");
            $('input').each(function() {
                $(this).removeClass("errorClass");
            });
            $('.errorSpan').each(function() {
                $(this).addClass("errorFeedback");
            });
    }
});