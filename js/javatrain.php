<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java training</title>
    <script src="/JavaScript\javatrain.js"></script>
    <style>
        p.box {
            width: 100px;
            height: 90px;
            background-color: red;
            color: white;
            border: 2px solid darkseagreen;
            transition: width 2s, height 2s;
            transition-delay: 3s;
        }

        p:hover {
            width: 200px;
            height: 180px;
        }
    </style>
</head>
<body>

    <ul>
        <li><a href="#" onclick="alert('Who dey');">Home</a></li>
        <li><a href="#" onmouseover ="alert('Who dey');">Home</a></li>  
    </ul>

    <div>
        <a href="#" onclick="count += 1; console.log (count)">incraese by one</a>
    </div>
    <a href="#" onclick = "alert(sum(6,5))">Add 6 and 5</a> <br>
    <a href="#" onclick = "alert(see(6,5,10))">Add 6 and 5 then remove 10</a> <br>
    <p class="box">Here we are</p>
    <a href="#" onclick = "alert (array.length);">Array matters</a><br>
    <form action="">
        <input type="text" id="input">
        <button onclick="show()">Show value</button>
    </form> <br>

    <p id="update"></p>
    <form action="">
        <input type="text" id="textenter"  onkeypress="update()">
    </form><br>

    <form action="">
        Name: <input type="text" id="text-name">
        Email: <input type="text" id="text-email">
        <button onclick="showdatasubmitted()">Click</button>
    </form>

    
</body>
</html>