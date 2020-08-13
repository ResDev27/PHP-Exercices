<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $name = "Resa";
        $age = 27;
        $eyes_color = "brown";
        $my_family = array(
            0 => 'Matthieu <3',
            1 => 'André', 
            2 => 'Clara',
            3 => 'Jeanel',
            4 => '',
            5 => 'Robien');
        $hunger_state = true;

        echo "
            <p>Hi! My name is $name.</p>
            <p>I'm $age years old.</p>
            <p>My eyes are $eyes_color.</p>
            <p>The first person in my family is $my_family[0].</p>
            ";

    ?>
</body>
</html>