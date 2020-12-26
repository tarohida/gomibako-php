<HTML>
<HEAD>
    <title>post fun</title>
    <meta charset="UTF-8">
</HEAD>
<BODY>
    <form action="/request_get_with_blank.php" method="post">
        半角スペース付きパラメータ "blank blank": <input type="text" name="blank blank"><br>
        ピリオド付きパラメータ "period.period": <input type="text" name="period.period"><br>
        <input type="submit" value="POST！">
    </form>
<?php var_dump($_POST); ?>
</BODY>
</HTML>
