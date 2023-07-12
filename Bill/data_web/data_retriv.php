<?php
    shell_exec('conda run -n base python data_extractor.py temp/img.jpg');
    $my_file = fopen("temp/values.txt", "rw");
    $pattern = fgets($my_file);
    fclose($my_file);

    if($pattern == 1){
        header('location:pattern_1.php');
    }else{
        header('location:pattern_0.php');
    }
?>