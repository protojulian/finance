<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout 1</title>
    <style>
        body {
            width: 940px;
            margin: 0 auto;
        }
        section, aside, footer {
            display: block;
        }
        header, footer {
            text-align: center;
        }
        aside.left {
            float: left;
        }

        aside.right {
            float: right;
        }

        footer {
            clear: both !important;
        }

        section {
            border-left: 3px solid red;
            border-right: 3px solid green;
            padding-left: 15px;
            padding-right: 15px;
            float: left;
            width: 540px;
        }

        nav {
            text-align: center;
        }

        nav ul {
            display: inline-block;
            list-style-type: none;
            background-color: red;
            padding: 0;
            margin: 0;
            
        }
        nav li {
            float: right;
            padding: 10px;
            margin-left:20px ;
        }
    </style>
</head>
<body>

    <header>
        <h1> Page Layout </h1> 
    </header>
    <hr>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <aside class="left">
        <figure>
            <img src="embeded/cnn.jpg" alt="e no clear" style = "height:100px; width:100px;">
            <figcaption>Mama CNN</figcaption>
        </figure>
            <div>
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact Us</li>
                </ul>
            </div>
    </aside>

    <aside class="right">
        <figure>
            <img src="embeded/cnn.jpg" alt="e no clear" style = "height:100px; width:100px;">
            <figcaption>Mama CNN</figcaption>
        </figure>
            <div>
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact Us</li>
                </ul>
            </div>
    </aside>
    <hr>
    <section>
        <article>
            <header>
                <h2><u>Article 1</u></h2>
            </header>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Ex expedita sunt nam a. Aliquam explicabo incidunt, nemo 
                unde dolorum sunt sapiente eius nam alias, optio, culpa 
                praesentium saepe rerum dolore.
            </p>
        </article>
    </section>
    
    <section>
        <article>
            <header>
                <h2><u>Article 2</u></h2>
            </header>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Ex expedita sunt nam a. Aliquam explicabo incidunt, nemo 
                unde dolorum sunt sapiente eius nam alias, optio, culpa 
                praesentium saepe rerum dolore.
            </p>
        </article>
    </section>
 
    <footer>
        <p>
            Copyright (C) - Mr. Protocol's Programmings
        </p>
    </footer>
    <hr>
</body>
</html>