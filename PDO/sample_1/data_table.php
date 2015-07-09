<?php
try {
    require_once '../pdo_connect.php';
    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: SELECT Loop</title>
    <link href="../../conf/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PDO: Looping Directly over a SELECT Query</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($db->query($sql) as $row) { ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['meaning']; ?></td>
        <td><?php echo $row['gender']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>