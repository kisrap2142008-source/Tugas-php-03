<?php
$queue = [];
array_push($queue, "A", "B", "C"); // Menambahkan data A, B, C 
array_shift($queue); // Menghapus 1 data paling depan (A) 

echo "Isi Queue: " . implode(", ", $queue) . "\n"; // Menampilkan isi queue 
?>
