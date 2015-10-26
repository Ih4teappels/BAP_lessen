<?php

function writeHello() {
    echo 'Hello';
    echo '<br>';
}

function writeMsg($msg, $msg2='default message') {
    echo $msg;
    echo '<br>';
    echo $msg2;
    echo '<br>';
}

function writeMsgTo($name, $msg='default message') {
    echo $name . '<br>';
    echo $msg;
}

function calc($out1, $out2) {
    $outcome = $out1 + $out2;
    echo "The answer of " . $out1 . ' + ' . $out2 .  ' = ' . $outcome . '<br>';
}

function calcRect($out1, $out2) {
    $outcome = $out1 * $out2;
    echo 'The answer of ' . $out1 . ' * ' . $out2 . ' = ' . $outcome . '<br>';
}

function BMI() {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $outcome = $weight / ($height * $height);
    include 'form.html';
    echo $outcome;

}

