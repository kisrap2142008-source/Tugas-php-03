<?php
class TreeNode {
    public $data;
    public $left;
    public $right;
    function __construct($data) { $this->data = $data; }
}

$root = new TreeNode("Root"); // Memiliki 1 root 
$root->left = new TreeNode("Child Kiri"); // 1 child kiri 
$root->right = new TreeNode("Child Kanan"); // 1 child kanan 

echo "Data Tree: " . $root->data . ", " . $root->left->data . ", " . $root->right->data . "\n"; // Tampilkan semua data 
?>
