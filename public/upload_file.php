<!DOCTYPE html>
<html>
<body>

<p>Click on the "Choose File" button to upload a file:</p>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" id="file_id" name="file_name">
    <input type="submit">
</form>

</body>
</html>

<?php

var_dump($_FILES);

// https://www.w3schools.com/php/php_file_upload.asp
