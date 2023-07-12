<!DOCTYPE html>
<html>
<head>
    <title>Extracting data</title>
</head>
<body>
    Data is Retriving !
    <?php 
        $image=$_FILES['myfile'];
        move_uploaded_file($image['tmp_name'],"temp/img.jpg");
        $img_loc = "temp/".$image['name'];
        $Message = urlencode("conda run -n base python data_extractor.py temp/img.jpg");
        // shell_exec("conda run -n base python data_extractor.py temp/img.jpg");
        // shell_exec("echo hello world");
        header("Location:data_retriv.php?");
        die;
     ?>
</body>
</html>