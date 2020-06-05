<?php 
$title = 'Exercice1';
$age = 18;
include 'header.php';

if ($age >= 18)
{
    echo 'Vous etes majeur';
}
else
{
    echo 'Vous etes mineur';
}

include 'footer.php';?>