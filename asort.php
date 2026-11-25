
<!DOCTYPE html>
<html>
<head>
    <title>SORT</title>

    <style>
        body {
            background-color: lightblue;
            font-size: medium;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

<?php

$students = array("Alice", "Bob", "Charlie", "David", "Eve");

echo "<h2>Original Array:</h2>";
print_r($students);

asort($students);

echo "<h2>Array sorted in Ascending Order (asort):</h2>";
print_r($students);

arsort($students);

echo "<h2>Array sorted in Descending Order (arsort):</h2>";
print_r($students);

?>

