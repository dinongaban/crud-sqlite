<?php
$sql = 'SELECT id, deskripsi, waktu FROM tugas';

$statement = $conn->query($sql);
$tugas = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($tugas) {
 foreach ($tugas as $t) {
  echo $t['deskripsi'] . '<br>';
 }
}

