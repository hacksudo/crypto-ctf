<?php

$db = new SQLite3('ctf.db');

$db->exec("CREATE TABLE IF NOT EXISTS users (
id INTEGER PRIMARY KEY,
username TEXT,
password TEXT
)");

$db->exec("INSERT OR IGNORE INTO users VALUES (1,'admin','admin123')");
