<?php

include "ComparableCircle.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
echo $circleComparator->compareto($circleOne, $circleTwo);