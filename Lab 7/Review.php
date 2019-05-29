<!DOCTYPE html>
<html>

<head>
    <title>Review of JavaScript and jQuery</title>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            f3('at top');
        });
    </script>

    <script>
        var firstName = "Jason";
        document.write("<div>Before something in between</div>");

        // Can I call f1 here? Yes, but not with a variable that has not yet been declared
        //f1(lastName);
        f1('here');
        f1();

        // Can I call f2 here?
        //f2('here');

        // Can I call f3 here?
        //f3('here');
        //f3(middleName);

        function f1(arg1) {
            console.log('f1 arg1: ' + arg1);
        }
    </script>

    <div>
        Something in between
    </div>

    <script src="js/review.js"></script>

    <script>
        var lastName = "Henderson";

        // To print to the page
        document.write("<span>" + firstName + "</span>");

        // To print to the console, which is only visible to developer tools
        console.log("test log printing of first name: " + firstName);

        function f2(arg1) {
            console.log('f2 arg1: ' + arg1);
        }
    </script>

    <div>
        If/else
    </div>

    <script type="text/javascript">
        // NICE LINK: http://www.sitepoint.com/javascript-truthy-falsy/

        //var test; this is the same as setting it to undefined
        //var test = undefined; // FALSE
        //var test = ""; // FALSE
        //var test = null; // FALSE
        //var test = "Hello"; // TRUE
        //var test = true; // TRUE
        //var test = "false"; // TRUE
        //var test = 6;
        //var test = 0.0;
        //var test = 0;
        var test = function() {};

        if (test) {
            console.log('passed test');
        }
        else if (!test) {
            console.log('failed test');
        }
        else {
            console.log('will it ever get here?');
        }

        // !== and === test for type of data AND value
        if ("6" !== 6) {
            console.log('6 equals 6');
        }
        else {
            console.log('6 does not equal 6');
        }
    </script>

    <div>
        Objects
    </div>

    <script type="text/javascript">
        function driveCar(distance) {
            console.log('driving the car.............' + distance);
        }

        var car = [{
            color: "red",
            mileage: 58765,
            manufacturingDate: new Date(1980, 5, 16),
            doors: [{
                "position": "frontDriver"
            }, {
                "position": "frontPassenger"
            }, {
                "position": "backDriver"
            }, {
                "position": "backPassenger"
            }],
            drive: driveCar
        }, {
            "mileage": 19808
        }, {

        }];

        // This definition of prototype DOES NOT WORK
        // See this example online for how to use prototype: http://www.w3schools.com/js/js_object_prototypes.asp

        // car.prototype.getGas = function()
        // {
        //     return "car is getting gas..........";
        // }

        console.log('car: ' + car);
        console.log(car);
        console.log(JSON.stringify(car));

        car[0].drive(100);
        car[0].getGas();
    </script>

    <div>
        Arrays
    </div>

    <script type="text/javascript">
        var grades = [80, 76, 100, 18];
        var names = ["Jason", "Tom", "Ed", "Bill"];

        // Add a name to the END
        names.push("Sal");

        // Delete from the array
        names.splice(1, 2);

        // Insert into the array
        names.splice(1, 0, "Ed");

        // Replace real easy
        names[0] = "Johnny";

        // Can i insert by index way far out?
        names[99] = "beers on the wall";
    </script>

    <div>
        Associative Arrays
    </div>

    <script type="text/javascript">
        var shirt = {
            "color": "#FF0000";
        }

        console.log(shirt["color"]);
    </script>


</body>

</html>