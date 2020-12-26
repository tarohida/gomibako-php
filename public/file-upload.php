<HTML>
    <HEAD>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <form enctype="multipart/form-data"
          action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10240">
        ファイル名: <input name="toProcess" type="file">
        <input type="submit" value="アップロード">
    </form>
    </BODY>
</HTML>

<?php
var_dump($_FILES);
?>