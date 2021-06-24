<?php
require __DIR__ . '/../templates/db.php';
header('Content-Type:application/json');
echo json_encode($rock);
