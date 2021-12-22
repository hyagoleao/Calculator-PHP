<?php
$num = "";
$result = "";
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";
$icon = "&#8730;";


if(isset($_POST['display'])){
    $num = $_POST['display'];
}else{
    $num= "";
}


if(isset($_POST['submit'])){
    $num = $_POST['display'] . $_POST['submit'];
}else{
    $num = "";

}

if(isset($_POST['op'])){
    $cookie_value1 = $_POST['display'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}

if(isset($_POST['equals'])) {
    $num = $_POST['display'];
    $pull_sqrt = sqrt($_COOKIE['num']);
    
    switch($_COOKIE['op']){
        case "*";
        $result = $num * $_COOKIE['num']; 
            break;
        case "-";
        $result = abs($num - $_COOKIE['num']); 
            break;
        case "+";
        $result = $num + $_COOKIE['num']; 
            break;
        case "/";
        $result = $_COOKIE['num'] / $num; 
            break;
        case "√";
        $result = $pull_sqrt;
            break;
        case "%";
        $result = ($num / 100) * $_COOKIE['num'];
            break;
    }
    
    $num = $result;    
}