/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 19/10/2015
 * Time: 14:46
 */

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>
        <?php
        // . = + in Java
        echo "Hello" . " " .  "World";

        echo 5 * 7;

        $myname = "Frodo Baggins";
        $myage = 111;
        echo "my name is" . $myname . "and i am" . $myage;

        $name = "Edgar";
        if ($name == "Simon"){
            print "I know you!";
        }
        else{
            print "who are you?";
        }

        //Specs, Mugs and Sausage Rolls Activity
        $myage = 17;
        print $myage;
        if ($myage > 21){
            print "Sauasage Rolls, Mugs and Specs";
        }
        elseif ($myage > 18){
            print "Mugs and Specs";
        }
        elseif ($myage > 16){
            print "Specs";
        }
        else {
            print "No items allowed";
        }

        ?>
    </p>
    </body>
</html>
