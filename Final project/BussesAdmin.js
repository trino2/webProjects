// JavaScript File
$(document).ready(function() {
    $("#submit").click(function() {
         BussAdmin();
    });

    function BussAdmin() {
        
        var data = { "TimeDay" : TimeDay, "Location" : Location, "BusNum" : BusNum };

        $.ajax({
            type: "POST",
            url: "Runner.php",
            dataType: "json",
            data: data,
            success: function(data, status) {
                console.log('succeeded');
                console.log(data);
            },
            error: function(xhr) {
                console.log('errored');
                console.log(xhr);
            },
            complete: function(data, status) {
            }
        });
    }
});