<?php
    $test = 'i am tommy.huang';

    $result1 = explode(' ', $test);
    print_r($result1);
    echo '<br>-------------<br>';
    $result2 = explode(',', $test);
    print_r($result2);
    echo '<br>-------------<br>';

    $test_array1 = array(
        'apple',
        'pear',
        'orange',
    );
    $test_array2 = array(
        'apple',
    );

    $result3 = implode(' -> ', $test_array1);
    $result4 = implode(' -> ', $test_array2);
    print_r($result3);
    echo '<br>-------------<br>';
    print_r($result4);