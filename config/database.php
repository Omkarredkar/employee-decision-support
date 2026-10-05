<?php
try { $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=employee_decision_support;charset=utf8mb4', 'root', '', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); }
catch(PDOException $e) { exit('Database error: start MySQL and import database.sql first.'); }
