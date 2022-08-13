<?php 
spl_autoload_register('myClassesLoader');
function myClassesLoader($className)
{
    $path = "Classes/";
    $extension=".php";
    $fullPath=$path.$className.$extension;
    if(!file_exists($fullPath)){
        echo $fullPath;
        return false;
    }
    include_once $fullPath;
}
