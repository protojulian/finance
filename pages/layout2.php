<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout 2</title>
    <style>
        body {
           color: black; 
        }

        a {
            color: red;
            text-decoration: none;
        }

        header {
            background-image: url("embeded/sports.png");
            background-color: antiquewhite;
            text-align: center;
            padding: 20px;
            color: green;
            height: 300px;
        }

        .logo {
            width: 150px;
            height: 100px;
            padding: 5px;
            display: block;
            margin: auto;
        }

        header a.main-button {
            border-radius: 20px;
            background-color: orange;
            padding: 15px;
            margin-top: 10px;
            color: white;
        }

        .testimonials {
            text-align: center;
        }

        .reviews {
            display: inline-block;
            width: 250px;
            height: 250px;
        }

        
    </style>
</head>
<body>

    <img src="embeded/logo.png" alt="E no Clear" class="logo">

    <header>
        <p>Best in sales</p>
        <h1>We are Award Winners</h1>
        <a href="#" class=main-button>Shop for better stuffs</a>
        <p>According to Protocol's Reviews</p>
    </header>
    <hr>
    <div class="testimonials">
        <h1>The best in town</h1>
        <div class= "reviews">
            <h2>Company</h2>
            <p>Testimony</p>
        </div>
        <div class= "reviews">
            <h2>Company</h2>
            <p>Testimony</p>
        </div>
        <div class= "reviews">
            <h2>Company</h2>
            <p>Testimony</p>
        </div>
    </div>

    <footer>
        copyright @ <a href="https://google.com" target="_blank">Google more</a>
    </footer>
</body>
</html>