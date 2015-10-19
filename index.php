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
        echo "Hello" . " " .  "World<br />";

        echo 5 * 7 . "<br />";

        $myname = "Frodo Baggins";
        $myage = 111;
        echo "my name is " . $myname . "and i am " . $myage . "<br />";

        $name = "Edgar";
        if ($name == "Simon"){
            print "I know you!<br />";
        }
        else{
            print "who are you?<br />";
        }

        //Specs, Mugs and Sausage Rolls Activity
        $myage = 17;
        print $myage;
        if ($myage > 21){
            print " Sauasage Rolls, Mugs and Specs<br />";
        }
        elseif ($myage > 18){
            print " Mugs and Specs<br />";
        }
        elseif ($myage > 16){
            print " Specs<br />";
        }
        else {
            print " No items allowed<br />";
        }

        //Specs, Mugs and Sausage Rolls Activity II



        ?>
    </p>
    </body>
</html>
