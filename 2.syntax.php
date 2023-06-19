<?php 
    echo "Hello World". "<br>";      // document.write  // Hello World
    echo 13 . "<br>";
    echo 25.35 . "<br>";
    echo true . "<br>";

    var_dump(true);
    var_dump("Hello Mello");
    echo "<h1>Hello World</h1>";    // Hello World
    
?>

<!-- 

    Snake Case      :   hello_world     (database, table_column, css class)
    Camel Case      :   helloWorld      (variable, function, formKey, jsId )
    Capital Case    :   HelloWorld      (Obj-ClassName)

 -->

 <?php 
    $assoArray = ["name" => "Aung Aung", "age" => 23, "job" => "developer"];
    $job = "designer";

    echo $job;
    echo $assoArray["name"];

    echo "My position is $job";
    echo "My name is {$assoArray['name']}";
 ?>