<?php
try {
    require_once '../pdo_connect.php';
    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';
    $result = $db->query($sql);
    $numrows = $result->rowCount(); // Number of row's in table varible
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Counting Rows</title>
    <link href="../../conf/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PDO: Counting Rows in a Result Set</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
echo "<p>Total results found: $numrows.</p>"; // Number of row's in table
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php while($row = $result->fetch()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>