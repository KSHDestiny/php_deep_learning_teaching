<?php
    // try{
    //     throw new Exception("Error: Message", statusCode);
    // }catch(Exception $exception){
    //     echo $exception->function();     // function() => getMessage(), getCode(), getLine(), getFile()
    // }finally{
    //  Codes that will be executed where there is exception or not
    // }
    
    $x = 100; $y =20;


    try{
        echo $x+$y;
    }catch(Exception $e1){
        echo $e1->getMessage();
    }finally{
        echo " Testing 1 is Finished.";
    }

    echo "<br>";


    try{
        echo $x*$y;
        throw new Exception(" Hello Mello");
    }catch(Exception $e2){
        echo $e2->getMessage();
    }finally{
        echo " Testing 2 is Finished.";
    }

    echo "<br>";


    try{
        if($y > $x){
            echo $y - $x;
        }else{
            throw new Exception("<b>Exception error</b>: x is greater than y. So, you can't subtract!", 505);
        }
    }catch(Exception $e3){
        echo "<span style='color : red;'>";
        echo $e3->getMessage();
        echo " Error code : " . $e3->getCode();
        echo " in <b>" .$e3->getFile() . "</b>";
        echo " on line " . $e3->getLine();
        echo "</span>";
    }
?>