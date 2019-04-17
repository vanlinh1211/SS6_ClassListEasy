<?php
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);

print_r($listInteger->get(0). "<br>");
print_r($listInteger->get(1). "<br>");
print_r($listInteger->remove(2));
