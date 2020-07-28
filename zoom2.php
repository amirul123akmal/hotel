<?php
    $size1 = '1';
    $size2 = '4';
    $size3 = '2';
    $size4 = '2';
    $plus = '+';

    if (isset($_POST['plus'])) {
        $size1 = $size1+1;
        $size2 = $size2+1;
        $size3 = $size3+1;
    }

    if (isset($_POST['minus'])) {
    $size1 = $size1-1;
    $size2 = $size2-1;
    $size3 = $size3-1;
    }
?>