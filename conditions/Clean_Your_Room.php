<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Create the array of possible states
        $possible_states = array(
            0 => 'Health hazard',
            1 => 'Filthy',
            2 => 'Dirty',
            3 => 'Clean',
            4 => 'Immaculate');
        
        //When testing, change the index of value to navigate to the possible array values
        $room_filthiness = $possible_states[0];

        if( $room_filthiness == $possible_states[0] OR $room_filthiness == $possible_states[1]){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if ( $room_filthiness == $possible_states[2]){
            echo "Yuk, Room is dirty : let's clean it up !";
        } else {
            echo "<br>Nothing to do, room is neat.";
        }

    ?>
</body>
</html>