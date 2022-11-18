<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <script src=""></script>
    <style>

        body {
            text-align: center;
            margin: 0;
            padding: 0;
        }


        header h1 {
            background-color: black;
            color: white;
            padding: 20px;
            margin-top: 0;
        }

        section {
            margin-top: 50px;
            clear: right;
        }

        div.name_email {
            margin-top: 50px;
        }

        input.name-email {
            margin-top: 10px;
            margin-bottom: 40px;
            width: 350px;
            height: 30px;
            border-radius: 10px;
        }
        
        div.checkbox {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .submit {
            margin-right: 30px;
            background-color: brown;
            color: white;
            width: 100px;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .reset {
            margin-right: 30px;
            background-color: yellowgreen;
            color: red;
            width: 100px;
            padding: 10px;
            border-radius: 10px;
            cursor: cell;
        }



        footer {
            background-color: black;
            color: white;
            padding: 20px;
            font-weight: 600;
            font-size: 20px;
            margin-top: 44px;
        }

        button {
            float: right;
            border: 5px darkorchid solid;
            background-color: black;
            color: white;
            width: 150px;
            margin-right: 20px;
            padding: 5px;
            cursor: grab;
        }





    </style>
</head>
<body>

    <header>
        <h1>SURVEY.COM</h1>
    </header>
    <button onclick="print()">Print_out this form</button>

    <section>

        <h1> Submit your Survey Today </h1>

        <form action="">

            <div class="name_email">
                <label>Your Name <br> <input type="text" class="name-email"></label> <br> 
                <label >Your Email <br> <input type="email" class="name-email"></label> 
            </div>
            
            <label for="select">Select</label>
            <select name="" id="select">
                <optgroup label="Group 1">
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                    <option value="">Option 4</option>
                </optgroup>
                <optgroup label="Group 2">
                    <option value="">Option 5</option>
                    <option value="">Option 6</option>
                    <option value="">Option 7</option>
                    <option value="">Option 8</option>
                </optgroup>
            </select>

            <div class="checkbox">
                <label>Checkbox 1: <input type="checkbox" name="checkbox"></label> 
                <label>Checkbox 1: <input type="checkbox" name="checkbox"></label> 
                <label>Checkbox 1: <input type="checkbox" name="checkbox"></label>  
            </div>


            <div>
                <input type="submit" class="submit">
                <input type="reset" class="reset">
            </div>

        </form>

    </section>

    <footer>
        Copyright @ https://protocol.com
    </footer>


<script>
    alert ("Are you sure you want to see this Page???")
</script>
    


    
</body>
</html>