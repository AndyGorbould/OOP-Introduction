<?php


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'exercise_1_classes.php';
            break;
        case 'extending' :
            require 'exercise_2_extending.php';
            break;
    };


}
?>