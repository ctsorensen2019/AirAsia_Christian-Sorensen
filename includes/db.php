<?php
// Shared database connection. Pages load this with require_once.
$pdo = new PDO('sqlite:' . __DIR__ . '/../database/rewards.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->exec('PRAGMA foreign_keys = ON');