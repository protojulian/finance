<script>
    var message = "";
    var answer = 5;
    do {
        var input1 = prompt ("Guess Numbers from 1 - 10");
        input1 = parseInt(input1);

        if (input1 != answer) {
            alert ("Nope - Wrong");}

    } while (answer != input1)

    message += "You Guessed it Right: "  + answer +  " is the correct Answer.";
    document.write (message);
</script>