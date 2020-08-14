<?php
try {
    // host=XXXの部分のXXXにはmysqlのサービス名を指定します
    $dsn = 'mysql:host=mysql;dbname=sample_db;';
    $db = new PDO($dsn, 'sample_user', 'sample_pass');

    $sql = 'SELECT * FROM sample_table;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
