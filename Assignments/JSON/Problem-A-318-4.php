<!-- Problem-A-318-4

Write a json program that will call php page. The php file should contain addition of two numbers 19,78 using json encode method.  -->

<?php
    $a = 19;
    $b = 78;
    $add = $a + $b;
    $response = array("result" => $add);
    echo json_encode($response);
?>
