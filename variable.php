<?php
  //      $txt="hello world";
    //    $number=145;
      //  echo "the number is $number ";
        //$a=12;
        #$b=10;
        #$result=$a+$b;
        #echo "the result is $result";
     #$a=10;
      # $b=20;
       #result =$GLOBALS['a']+$GLOBALS['b'];
       # echo "total value is$result";
      # }
      ## echo "<br>";
      # echo $GLOBALS['a'];
      # echo "<br>";
       #echo "the value is $result";
    function display()
    {
         static $a=1;
        echo $a;
        $a++;

    }
    display();
    echo "<br>";
    
    display();
    echo "<br>";
    display();


        ?>