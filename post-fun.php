<HTML>
<HEAD>
    <title>post fun</title>
    <meta charset="UTF-8">
</HEAD>
<BODY>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {?>
<form action="/post-fun.php" method="post">
    単語を入力してください: <input type="text" name="word"><br>

    何個の単語に分解しますか？
    <input type="text" name="number"><br>
    <input type="submit" value="分解！">
</form>
<?php } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $word = $_POST['word'];
    $number = $_POST['number'];

    $chunks = ceil(strlen($word) / $number);

    for ($i = 0; $i < $chunks; $i++) {
        $chunk = substr($word, $i * $number, $number);
        printf("%d; %s<br>\n", $i + 1, $chunk);
    }
} else {
    die("このスクリプトは、GETとPOST以外のリクエストでは動作しません");
}
?>
</BODY>
</HTML>
