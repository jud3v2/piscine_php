<?php

function teacher() {
     echo "I am a Teacher";
}

function student($name) {
    echo "I am a student and my name is ".$name;
}

$func_teacher = function() {
    teacher();
};

$func_student = function($name) {
    student($name);
};