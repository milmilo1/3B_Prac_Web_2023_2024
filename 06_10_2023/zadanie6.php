<!DOCTYPE html>
<html>
<body>

<?php
$year = 2032;

if($year % 4 == 0) {
    if($year % 100 == 0) {
        if($year % 400 == 0) {
            echo "w roku ".$year." w lutym jest 29 dni";
        }
        else {
            echo"w roku ".$year." w lutym jest 28 dni";
        }
    }
    else {
        echo "w roku ".$year. " w lutym jest 29 dni";
    }
}
else {
    echo "w roku ".$year." w lutym jest 28 dni";
}
?>

</body>
</html>