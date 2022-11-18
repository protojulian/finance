<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Projects</title>
    <script>
        function changetext() {
            document.getElementById('who').innerHTML="Who you be kwanu?";
        }
    </script>
  
</head>
<body>
    <p id="who">I am Alive</p>

    <button onclick="changetext()">click to change</button>

    <p id="date"></p>

    <script>
        d = new Date();
        document.getElementById("date").innerHTML= d;
        document.write(d.toDateString());
    </script>

    
</body>
</html>