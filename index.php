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

        $numberofHobbits = 2;
        switch ($numberofHobbits){
            case 1:
                echo "1 sad hobbit<br />";
                break;
            case 2:
                echo "2 happy hobbits<br />";
                break;
            case 3:
                echo "3 hobbits are a crowd<br />";
                break;
            default:
                echo"All the hobbits have gone home<br />";
        }

        //Specs, Mugs and Sausage Rolls Activity II
        $wantedgood = "mugs";
        switch ($wantedgood){
            case "specs":
                echo "You have to be over 16 to buy specs<br />";
                break;
            case "mugs":
                echo "You have to be over 18 to buy mugs<br />";
                break;
            case "sausage rolls":
                echo "You have to be over 21 to buy sausage rolls<br />";
                break;
            default:
                echo "Error: Only keywords 'specs', 'mugs' or 'sausage rolls' are valid<br />";
        }




        ?>
    </p>
    </body>
</html>
