<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Home Page</title>
    <style>
        
        body {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        div img {
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }

        div.top-items {
            display: flex;
            float: right;
            padding: 15px;
            align-items: center;
            margin-right: 30px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        div a,img {
            margin-left: 20px;
        }

        section {
            padding-top: 100px;
        }

        section input {
            width: 600px;
            height: 50px;
            border-radius: 30px;
            border-width: 1px;
            margin-bottom: 50px;
            border-color: antiquewhite;
        }

        section div a { 
            border: 5px solid gray;
            background-color: gray;
            border-radius: 5px;
            padding: 5px;
            color: white;
        }

        section img {
            margin-bottom: 30px;
        }

        section p {
            margin-top: 40px;
        }

        section p a{
            padding: 5px;
        }

        ::placeholder {
            font-size: 20px;
            text-align: center;
            font-style: italic;
        }

        footer {
            background-color: gray;
            color: white;
            padding-bottom: 7px;
            border-top: 1px solid darkgray;
            padding-top: 10px;
           
        }
        footer a {
            color: white;
        }

        footer p {
            padding-top: 10px;
            margin-right: 900px;
        }

        footer div {
            margin-top: 40px;
        }

        .afooterright {
        margin-left: 200px;
        }

        footer img {
            height: 15px;
            width: 10px;
        }

        div.down {
            background-color: gray;
            padding: 3px;
            color: white;
            margin-top: 100px;
        }

        div p {
            margin-right: 900px;
        }
    </style>
</head>
<body>
   
    <div class="top-items">
        <a href="#">Gmail</a>
        <a href="#">Images</a>
        <img src="\HTML\embeded\proto.jpg" alt="refresh">
    </div>

    <section>
        <img src="\HTML\embeded\google.png" alt="Refresh">
        <form action="">
            <input type="text" placeholder="Go ahead and search">
        </form>
        <div>
            <a href="#">Google Search</a>
            <a href="#">I'm Feeling Lucky</a>
        </div>
        <p>
            Google offered in:
            <a href="#">Hausa</a>
            <a href="#">Igbo</a>
            <a href="#">Èdè Yorùbá</a>
            <a href="#">Nigerian Pidgin</a>
        </p>
    </section>

    <div class="down">
        <p>Nigeria</p>
    </div>
       

    <footer>
            <img src="embeded/leaf.png" alt="refresh">
            <a href="#">Carbon neutral since 2007</a>
        <div>
            <a href="#">About</a>
            <a href="#">Advertising</a>
            <a href="#">Business</a>
            <a href="#">How Search works</a>
            <span class="afooterright ">
                <a href="#" >Privacy</a>
                <a href="#" >Terms</a>
                <a href="#" >Settings</a>
            </span>
            
        </div>
    </footer>
        


</body>
</html>