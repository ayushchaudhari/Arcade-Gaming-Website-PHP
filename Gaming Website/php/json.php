<?php

session_start();
//echo $_SESSION['name'];
//echo $_SESSION['username'];
$array = array('name' => $_SESSION['name'],'username' => $_SESSION['username'] );
$fp = fopen('./user_data.json', 'w');
fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));   // here it will print the array pretty
fclose($fp);
?>
<?php   
        echo "<script> location.href='../user/gamePage(2).html';</script>";
        exit;
?>