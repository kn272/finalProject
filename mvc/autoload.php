<?php
class Manage
{
public static function core($class)
{
//echo $class . '<br>';
$path = 'core/' . str_replace('\\', '/', $class) . '.php';
//echo $path . '<br>';

if (is_file($path)) {
include $path;
return;
}
}

public static function controllers($class)
{
//echo $class . '<br>';
$path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function models($class)
{
//echo $class . '<br>';
$path = 'models/' . str_replace('\\', '/', $class) . '.php';
//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function collections($class)
{
//echo $class . '<br>';
$path = 'collections/' . str_replace('\\', '/', $class) . '.php';
//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function routes($class)
{
//echo $class . '<br>';
$path = 'routes/' . str_replace('\\', '/', $class) . '.php';
//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}
}

spl_autoload_register(array('Manage', 'routes'));
spl_autoload_register(array('Manage', 'controllers'));
spl_autoload_register(array('Manage', 'collections'));
spl_autoload_register(array('Manage', 'models'));
spl_autoload_register(array('Manage', 'core'));