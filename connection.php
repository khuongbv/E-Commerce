<?php
const DB_DSN = 'mysql:host=localhost;dbname=PHP0720E_PHP0720E_nhom2;port=3306;charset=utf8';
// Username kết nối vào CSDL
const DB_USERNAME = 'PHP0720E_nhom2';
// Password kết nối vào CSDL
const DB_PASSWORD = 'QP08Rgbbq4';

try {
    $connection = new PDO(DB_DSN,
        DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    die("Lỗi kết nối: " . $e->getMessage());
}
echo "<h1>Kết nối CSDL thành công theo cơ chế PDO</h1>";

?>