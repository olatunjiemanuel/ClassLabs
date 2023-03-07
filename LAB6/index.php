<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $my_age = 16
    ?>
    <h2>
    <?php
    if ($my_age == 16){
        print "You can buy specs";
    } else if($my_age == 18) {
        print "You can buy mugs";
    } else if ($my_age == 21) {
        print "You can buy sausage rolls";
    }
    ?>
    </h2>
    <p>
        <?php
            echo "Hello World!";
            echo "Hello,".""."world"."!";
            echo 5*7;
            $myname = "Frodo Baggins";
            $myage = 111;
            echo "My Name is". $myname."and I am".$myage;
            $name = "Edgar";
            if($name == "Simon"){
                print "I Know you!";
            }
            else {
                print"Who are you?";
            }
        ?>
    </p>
    <p>
        <?php
            $numberOfHobbits = 2;
            switch ($numberOfHobbits) {
                case 1:
                    echo "1 sad hobbit";
                break;
                case 2:
                    echo "2 happy hobbits";
                break;
                case 3:
                    echo "3 hobbits are a crowd";
                break;
                default:
                echo "All the hobbits have gone home";
            }
        ?>
    </p>
    <?php
        $myArray = array("do", "re", "mi");
        echo $myArray[0];
        $myArray[1] = "la";
        echo $myArray[1];
        unset($array[2]);
    ?>

    <?php
        $provisionedActvities = array("Specs", "Mug", "Sausage Rolls");
        foreach($provisionedActvities as $x) {
            $provisionedActvities[1] = "Hugs";
            print
            "
            <body>
                <h1>Provisioned Activities</h1>
                <p>$x</p>
            </body>
            ";
        }
    ?>

    <?php
        for ($i = 1; $i < 10; $i++)
            {
                echo "<p> Hello ! </p>";
            }
    ?>
    <br>
    <?php
    for ($i = 1; $i < 10; $i ++)
    {
        echo "
        <div id = 'form'>
            <form>
                <input type = 'password'>Please enter your password</input>
            </form>
        </div>
        ";
    }
    ?>
    <br>
     <?php
    for ($i = 1; $i < 31; $i++)
        {
            if ($i == 1) {
                print"
                    On the $i of the month, no products are available <br>
                ";
            }
            else if ($i % 2 == 0 ) {
                print"
                On the $i of the month, specs are available <br>
                ";
            }
            else if ($i % 3 == 0) {
                print"
                On the $i of the month, mugs are available <br>
                ";
            }
            else if ($i % 4 == 0) {
                print"
                On the $i of the month, specs and sausage rolls products are available <br>
                ";
            }
        }
        ?>

<br>
<!-- -->
</body>
</html>