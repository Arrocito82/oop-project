<?php 
function myClassesLoader($className)
{
    $path = "Classes/";
    $extension=".php";
    $className=str_replace('\\', '/', $className);
    $fullPath=$path.$className.$extension;
    if(!file_exists($fullPath)){
        echo $fullPath;
        return false;
    }
    include_once $fullPath;
}
spl_autoload_register('myClassesLoader');
