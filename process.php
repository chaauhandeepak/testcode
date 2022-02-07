<?php
include_once 'Output.php';
include_once 'Add.php';
include_once 'Concat.php';
include_once 'Sortasc.php';
$operations = $_POST['operation'];

$data = explode(' ', $operations);

$allowed_operations = ['add','concat','sortasc'];

if(empty($data)){
	echo "Please enter a operation";
	exit;
}

$operation = $data[0];

if(!in_array($operation, $allowed_operations)){
	echo "Operation not allowed. Allowed operations are add, concat and sortasc";
	exit;
}

unset($data[0]);


$operation = strtolower($operation);
$output = new $operation();
$answer = $output->get($data);
echo "<h3>";
echo 'Questions: '.$operations;
echo "<br>";
echo 'Answer: '.$answer;
echo "</h3>";
?>
