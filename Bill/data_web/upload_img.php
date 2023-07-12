<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>image_upload</title>
    <link rel="stylesheet" href="upload_image.css">
</head>
<body background="images/bg_img.jpg">
    <h1 style="color: white; text-align: center; border:2px ; border-style: solid; background: #2C5645;" onclick="location.href='home.php';"> Cancel</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="myfile">
      <p id="de" onclick="Fun()">Drag your file here or click in this area.</p>
      <button type="submit" value="upload">Upload</button>
    </form>
</body>
</html>





