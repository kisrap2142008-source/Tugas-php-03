<?php
class Node {
    public $data;
    public $next;
    function __construct($data) { $this->data = $data; $this->next = null; }
}

// Memiliki 3 node 
$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);

$node1->next = $node2;
$node2->next = $node3;

// Tampilkan seluruh isi linked list 
$current = $node1;
while ($current != null) {
    echo $current->data . " -> ";
    $current = $current->next;
}
echo "NULL\n";
?>