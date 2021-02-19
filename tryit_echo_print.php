<?php

$heading = "";

function myHeading(){
    static $x = 0;
    $x++;

    $GLOBALS['heading'] = "<h$x>Heading $x</h$x>";
}

myHeading();
print $heading . "</br>";
myHeading();
print $heading . "</br>";
myHeading();
print $heading . "</br>";
myHeading();
print $heading . "</br>";
myHeading();
print $heading . "</br>";


