<?php 

    $assoArray = [
        "name" => "Kaung Sat",
        "email" => "kaungsat@gmail.com",
        "phone" => "09111111111"
    ];

    // isset() -> check value
    var_dump(isset($assoArray["phone"]));

    // empty()  -> check value
    var_dump(empty($assoArray["phone"]));


    if(isset($assoArray["phone"])){
        $userPhone = $assoArray["phone"];
    } else {
        $userPhone = null;
    }
    var_dump($userPhone);
?>