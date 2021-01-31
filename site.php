<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Exercises</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--stylesheets-->
        <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="content">

        <!-- php variables -->
        <?php

            echo "<h1>PHP Excercises</h1>";
            echo "<hr>";
            echo "<br>";
            echo "<br>";

            $characterName = "Kevin";
            $characterAge = 40;

            echo "<h2>PHP Variable Excercise</h2>";
            echo "<hr>";
            echo "There once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            $characterName = "Mike";
            echo "He really liked the name $characterName <br>";
            echo "But didn't like being $characterAge <br>";
        
        ?>

        <!-- php data types -->
        <?php

            $phrase = "To be or not to be"; //string, plain text, name, location
            $age = 40; //integer, whole number
            $gpa = 30.3; //floating point number, floats, any number with a decimal point
            $isMale = False; //Booleans, stores true and false
            null; //stands for no value
        
        ?>

        <!-- php working with strings -->
        <?php

            echo "<br>";


            $phrase = "Giraffe Academy";

            echo "<h2>PHP String Excercise</h2>";
            echo "<hr>";
            echo strtolower($phrase);
            echo "<br>";
            echo strtoupper($phrase);
            echo "<br>";
            echo strlen($phrase);
            echo "<br>";
            $phrase[0] = "B";
            echo $phrase;
            echo "<br>";
            echo $phrase[0];
            echo "<br>";
            $phrase = "Giraffe Academy";
            echo str_replace("Giraffe", "Panda", $phrase);
            echo "<br>";
            echo substr($phrase, 8, 3);
            echo "<br>";
            echo "<br>";

        ?>

        <!-- php working with numbers -->
        <?php

            echo "<h2>PHP Number Excercise</h2>";
            echo "<hr>";

            echo 40;
            echo "<br>";
            echo 40.998;
            echo "<br>";
            echo 5 + 9;
            echo "<br>";
            echo 10 % 3;
            echo "<br>";
            echo 4 + 5 * 10;
            echo "<br>";
            echo (4 + 5) * 10;
            echo "<br>";
            $num = 10;
            echo $num;
            echo "<br>";
            $num++;
            echo $num;
            echo "<br>";
            $num + 25;
            echo $num;
            echo "<br>";
            echo abs(-100);
            echo "<br>";
            echo pow(2, 4);
            echo "<br>";
            echo sqrt(144);
            echo "<br>";
            echo max(2, 10);
            echo "<br>";
            echo min(2, 10);
            echo "<br>";
            echo round(3.2);
            echo "<br>";
            echo ceil(3.3);
            echo "<br>";
            echo floor(3.3);
            echo "<br>";
            echo "<br>";

            ?>

            <h2>PHP User Input Excercise</h2>
            <hr>
            
            <!-- php getting user input -->
            <form action="site.php" method="get">

                Name: <input type="text" name="name">
                <br>
                <br>
                Age: <input type="number" name="age">
                <br>
                <br>
                <input type="submit">

            </form>
            <br> 
            Your name is <?php echo $_GET["name"] ?>
            <br>
            Your age is <?php echo $_GET["age"] ?>
        
            <br>
            <br>

            <!-- php getting user input -->
            <form action="site.php" method="get">
                <input type="number" name="num1">
                <br>
                <br>
                <input type="number" name="num2">
                <br>
                <br>
                <input type="submit">
                <br>
                <br>
            </form>

            <?php echo $_GET["num1"] + $_GET["num2"] ?>
</div>
    </body>
</html>