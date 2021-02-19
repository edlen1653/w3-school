<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
}

myTest();
echo $y; // outputs 15


function repeatThis() {
    static $x = 0;
    echo $x;
    $x++;

}
echo "<p>Repeat This</p>";

repeatThis();
repeatThis();
repeatThis();

?>