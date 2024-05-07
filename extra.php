<html>
    <body>
        <?php
            //Ex:1
            //$x=5; -- put the variable on the function
            // function mytext() {
            //     $x=5;
            //     echo "<p>This is output: $x </p>";
            // }
            // mytext()
            //Ex:2  global 
            // $x=5;
            // $y=10;
            // function mytext(){
            //     global $x , $y;
            //     echo $y=$x+$y;
            // }
            // mytext()
            //Ex:3 static
            function myfunction(){
                static $x=5;
                echo $x. "<br>";
                $x++;
            }
            myfunction(); 
            myfunction();
            myfunction();
        ?>
    </body>
</html>