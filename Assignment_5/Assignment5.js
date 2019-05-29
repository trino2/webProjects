// JavaScript File
$(document).ready(function() {
    $("#submit").click(function() {
        FinishQuiz();
    });

    function getStats() {

        $.ajax({
            type: "post",
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
            complete: function(data, status) { //optional, used for debugging purposes
                //alert(status);
          }
        });
    }

    function FinishQuiz() {
        
        var QuizScore = Score();
        QuizScorePercent = (QuizScore / 5) * 100
        document.getElementById("feedback").innerHTML = " You have finish the Quiz!";
        document.getElementById("Scores").innerHTML = " Yo'ure Quiz Score is " + QuizScorePercent + "% ";
        document.getElementById("feedback").style.color = "green";

        var d = new Date();
        var month = d.getDate();
        var day = d.getMonth();
        day = day + 1;
        var year = d.getFullYear();
        var Hour = d.getHours();
        var Minuts = d.getMinutes();
        var Dates = day + "/" + month + "/" + year;
        var Time = Hour + ":" + Minuts;
        $("#timeTaken").html("Date: " + Dates + " Military Time: " + Time);
        $("#timeTaken").css("color", "green");

        console.log('here is the data:');

        var data = {
            "Dates": Dates,
            "Time": Time,
            "TotalScore": 5,
            "QuizScore": QuizScore,
            "QuizPerson": $("#QuizPerson").val()
        };

        console.log(data);

        $.ajax({
            type: "post",
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
            complete: function(data, status) { //optional, used for debugging purposes
                //alert(status);
            }
        });
    }

    function Questions1() { // Check the values that match the questions
        if ($("#mountain").val() != "Aconcagua") {
            $("#feedback1").html(" The Correct Answer is Aconcagua");
            $("#feedback1").css("color", "red");
            return;
        }
    }

    function Questions2() {
        if ($("#ConfPrison").val() != "Andersonville") {
            $("#feedback2").html(" The Correct Answer is Andersonville");
            $("#feedback2").css("color", "red");
            return;
        }
    }

    function Questions3() {
        if ($("#temperature:checked").val() != "212") {
            $("#feedback3").html(" The Correct Answer is 212F");
            $("#feedback3").css("color", "red");
            return;
        }
    }

    function Questions4() {
        if ($("#mile:checked").val() != "Bannister") {
            $("#feedback4").html(" The Correct Answer is Bannister");
            $("#feedback4").css("color", "red");
            return;
        }
    }

    function Questions5() {
        if ($("#MountBoard").val() != "Ural") {
            $("#feedback5").html(" The Correct Answer is Ural");
            $("#feedback5").css("color", "red");
            return;
        }
    }

    function RedoQuiz() {
        document.getElementById("feedback").innerHTML = "";
        document.getElementById("timeTaken").innerHTML = "";
        document.getElementById("Scores").innerHTML = "";
        document.getElementById("feedback1").innerHTML = "";
        document.getElementById("feedback2").innerHTML = "";
        document.getElementById("feedback3").innerHTML = "";
        document.getElementById("feedback4").innerHTML = "";
        document.getElementById("feedback5").innerHTML = "";
        document.getElementById("ConfPrison").innerHTML = "";
        document.getElementById("temperature").innerHTML = "";
        document.getElementById("mile").innerHTML = "";
        document.getElementById("MountBoard").innerHTML = "";
        $("#mountain").val('');
        $("#ConfPrison").val('');
        $("#temperature").val('');
        $("#mile").val('');
        $("#MountBoard").val('');
        return;
    }
    
    function Score() {
        
        console.log('inside Score');
        var total = 0;

        console.log($("#mountain").val());

        if ($("#mountain").val() == "Aconcagua") {
            total = total + 1;
        }
        if ($("#ConfPrison").val() == "Andersonville") {
            total += 1;
        }
        if ($("#temperature:checked").val() == "212") {
            total = total + 1;
        }
        if ($("#mile:checked").val() == "Bannister") {
            total += 1;
        }
        if ($("#MountBoard").val() == "Ural") {
            total += 1;
        }
        return total;
    }

    $("#feedback").change(function() {
        FinishQuiz();
    });
    $("#timeTaken").change(function() {
        FinishQuiz();
    });
    $("#mountain").change(function() {
        Questions1();
    });
    $("#ConfPrison").change(function() {
        Questions2();
    });
    $("#temperature").click(function() {
        Questions3();
    });
    $("#mile").click(function() {
        Questions4();
    });
    $("#TempPic").click(function() {
        $("img").hide();
    });
    $("#MountPic").click(function() {
        $("img").show();
    });
    $("#MountBoard").change(function() {
        Questions5()
    });
    $("#redo").click(function() {
        RedoQuiz()
    });
});