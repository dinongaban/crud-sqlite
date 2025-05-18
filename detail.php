<?php 
$id = 1;
$sql = 'SELECT id, deskripsi, waktu FROM tugas WHERE id = :tugas_id';

$statement = $conn->prepare($sql);
$statement->bindParam(':tugas_id', $id, PDO::PARAM_INT);

