<?php
// Simple expression calculator for the pricing widget.
$expr = $_GET['expr'] ?? '1+1';

eval('$result = ' . $expr . ';');
echo 'Result: ' . $result;
