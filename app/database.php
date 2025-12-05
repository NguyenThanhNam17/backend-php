<?php
function getDB() {
    $dbPath = __DIR__ . '/../database/database.db';

    // Nếu file chưa tồn tại — SQLite tự tạo
    $db = new SQLite3($dbPath);

    return $db;
}
