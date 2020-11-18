<?php

class SqliteDriverNotFoundException extends Exception
{

}

try {

    $db_file_name = 'example.db';
    if (!file_exists($db_file_name)) {
        file_put_contents($db_file_name, '');
    }

    if (!in_array('sqlite', PDO::getAvailableDrivers(), true)) {
        throw new SqliteDriverNotFoundException('sqliteのドライバがインストールされてまへんで！');
    }

    $pdo = new PDO('sqlite:example.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $create_db_sql = <<<SQL
CREATE TABLE IF NOT EXISTS fruit(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(10),
        price INTEGER
    )
SQL;
    $pdo->exec($create_db_sql);

    $stmt = $pdo->prepare("INSERT INTO fruit(name, price) VALUES (?, ?)");
    foreach ([['りんご', '200'], ['バナナ', '200']] as $params) {
        $stmt->execute($params);
    }

    $stmt = $pdo->prepare("SELECT * FROM fruit WHERE price = ?");
    $stmt->execute(['200']);
    $r1 = $stmt->fetchAll();

    var_dump($r1);

} catch (SqliteDriverNotFoundException $e) {
    echo 'エラー：' . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {

    echo $e->getMessage() . PHP_EOL;

}
