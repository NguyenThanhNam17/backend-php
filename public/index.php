<?php
require_once __DIR__ . '/../app/database.php';

$db = getDB();
$result = $db->query("SELECT datetime('now', '+7 hours') as current_time")->fetchArray();

 <h1><u>Nguyễn Thành Nam- Cuối kỳ</u></h1>
?>
