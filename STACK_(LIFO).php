<?php
$stack = [];
array_push($stack, 10, 20, 30); // Menambahkan data 10, 20, 30 
array_pop($stack); // Menghapus 1 data teratas (30) 

echo "Isi Stack: " . implode(", ", $stack) . "\n"; // Menampilkan isi stack 
?>
