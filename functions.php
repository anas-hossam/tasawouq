<?php
//require_once 'config.php';
//function __autoload($classname){
//    require_once $classname.'.php';
//};
require_once 'constants.php';
spl_autoload_register(function ($class) {
   // include_once  'classes/'.$class. '.php';
    require_once $class.'.php';
});
function clearInputs($name){

    trim($name);
    stripcslashes($name);
    htmlspecialchars($name);

    return $name;
}

