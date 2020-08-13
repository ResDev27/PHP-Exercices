<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //Get the current date and time of the day
        $now = date('d-m-y H:i:s');
            echo "$now";
        
        // Get the current hour of the day without displaying it
        $hour = date('G');

        //Function processing the current hour and send back the appropriate greeting
        if ($hour >= 5 AND $hour <= 9){
            echo "<br>Good Morning !";
        } else if ($hour > 9 AND $hour <= 12){
            echo "<br>Good Day !";
        } else if ($hour > 12 AND $hour <= 16){
            echo "<br>Good Afternoon !";
        } else if ($hour > 16 AND $hour <= 21){
            echo "<br>Good Evening !";
        } else if ($hour > 21 AND $hour < 5){
            echo "<br>Good Night !";
        }

    ?>

</body>
</html>