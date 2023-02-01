<?php

try {
	$pdo = new PDO('mysql:dbname=ezyro_28692476_test; host=sql307.ezyro.com', 'ezyro_28692476', '');
} catch (PDOException $e) {
	die($e->getMessage());
}