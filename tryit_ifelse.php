<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t < "12") {
    echo "Have a good morning!";
} elseif ($t < "21") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

</body>
</html>
