<!DOCTYPE html>
<html>
<body>

<?php
$x = 1;
$y = 41;
$z = 100;

while($x <= $z) {
    if ($x % $y == 0)
    {
        echo "$x </br>";
    }
    $x++;
}
echo "==================================</br></br>";
$x = 0; $y = 0; $z = 1;

do {
    $x = $y + $z;
    echo $x . "</br>";
    $y = $z; $z = $x;

} while ($x < 1000);

for ($x = 0; $x <= 8; $x++) {
    echo "Item $x </br>";
}

?>

</body>
</html>
