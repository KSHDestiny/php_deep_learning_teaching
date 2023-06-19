<?php
    date_default_timezone_set("Asia/Rangoon");

    // date(format,timestamp)   -> string       // strtotime()
    echo date("d-F-Y(D) h:i:s");    // current time
    echo "<br>";
    echo date("d-M-Y(D)",strtotime("2022-06-21"));      // strtotime(day-month-year) // (year-month-day)
    echo "<br>";

    // date_create() -> object    // date_format(object,format)     // date()
    $currentDate = date_create(date("c"));
    echo date_format($currentDate,"d-F-Y(D) h:i:s");
    echo "<br>";

    // date_add(object,interval)    // interval -> date_interval_create_from_date_string()
    $current = date_create(date("d-m-Y"));
    date_add($current,date_interval_create_from_date_string("5 days")); // actually change
    echo date_format($current,'d-m-Y'); // 04-02-2023
    echo "<br>";

    $expireDate = date_create(date("c"));
    date_add($expireDate,date_interval_create_from_date_string("2 years"));
    echo date_format($expireDate,"d-m-Y");  // 30-01-2025

    // date_sub(object,interval)
    $last3months = date_create(date("c"));
    date_sub($last3months,date_interval_create_from_date_string("3 months"));
    echo date_format($last3months,"d-m-Y"); // 30-10-2022
?>