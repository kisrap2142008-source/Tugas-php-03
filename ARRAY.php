<?php
$nilai = [80, 85, 90, 75, 95]; // Menyimpan 5 nilai 

echo "Isi Array: " . implode(", ", $nilai) . "\n"; // Menampilkan seluruh isi array 

$total = array_sum($nilai);
$rataRata = $total / count($nilai);

echo "Total: $total\n"; // Menghitung total 
echo "Rata-rata: $rataRata\n"; // Menghitung rata-rata 
?>
