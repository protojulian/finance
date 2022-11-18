<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script>

        function showdetails() {
            var message = "";
            var name = document.getElementById('tname').value;
            var email = document.getElementById('temail').value;
            var age = document.getElementById('tage').value;
            var male = document.getElementById('tmale').checked;
            var female = document.getElementById('tfemale').checked;
            var checkbox = document.getElementById('checkbox').checked;

            message += "Name: " + name + "<br>";
            message += "Email: " + email + "<br>";
            message += "Age: " + age + "<br>";
            message += "Male: " + male + "<br>";
            message += "Female: " + female + "<br>";
            message += "Agreed: " + checkbox;

            document.getElementById('tmessage').innerHTML = message;
        }
    </script>
</head>
<body>
    <p id = "tmessage"></p>
    <form action="#">
        <label> Your Name: <input type="text" name="name" id="tname"> </label> <br><br>
        <label> Your Email: <input type="email" name="email" id="temail"> </label> <br><br>
        <label> Your Age: <input type="number" name="age" id="tage"> </label> <br><br>
        <label> Male: <input type="radio" name="radio" id="tmale" checked> </label>
        <label> Female: <input type="radio" name="radio" id="tfemale"> </label> <br><br>
        <label> <input type="checkbox" name="checkbox" id="checkbox" checked> Agree to our terms </label> <br><br>
        <button onclick="showdetails()">Submit</button>
    </form>
    
</body>
</html>