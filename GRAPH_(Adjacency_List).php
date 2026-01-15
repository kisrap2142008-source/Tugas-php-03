<?php
$graph = [
    "A" => ["B", "C"], // Node A terhubung ke B dan C 
    "B" => [],
    "C" => []
];

foreach ($graph as $node => $neighbors) {
    echo "Node $node terhubung ke: " . implode(", ", $neighbors) . "\n"; // Tampilkan hubungan 
}
?>