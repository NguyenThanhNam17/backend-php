<?php
require_once __DIR__ . '/../app/database.php';

$db = getDB();
$result = $db->query("SELECT datetime('now') as current_time")->fetchArray();

echo "<h1>PHP + SQLite Deploy bằng Render + GitHub Actions</h1>";
echo "<p>Thời gian hiện tại trong DB: " . $result['current_time'] . "</p>";
echo "<p>Thi cuối kì mã nguồn mở</p>";
echo "<p>Nguyễn Thành Nam - DH52201080</p>";
?>
