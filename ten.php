<?php
$colors = array('white', 'green', 'red');
foreach($colors as $key => $color){
    echo $color." ";
}

sort($colors);

echo "<br>";
foreach($colors as $key => $color){
    echo "<li>$color</li>"."<br>";
}