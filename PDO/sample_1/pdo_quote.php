<?php
if (isset($_GET['search'])) {
    try {
        require_once '../pdo_connect.php';
        $searchtearm = '%' . $_GET['searchterm'] . '%';
        $sql = 'SELECT name, meaning FROM names
                WHERE name LIKE ' . $db->quote($searchtearm);
        $result = $db->query($sql);
        $errorInfo = $db->errorInfo();
        if (isset($errorInfo[2])) {
            $error = $errorInfo[2];
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
/**
*  Disadvatages of quote()
*   + Not supported by all PDO drivers
*   + Dependent on the database's character set
*   + Character set must be set at server level or in the DSN 
*   + Often slower than prepared statements
*  Always use input with a prepared statement in PDO 
* */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Using quote()</title>
    <link href="../../conf/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PDO: Escaping Input with quote()</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="searchterm">Enter a name or part of one:</label>
        <input type="search" name="searchterm" id="searchterm">
        <input type="submit" name="search" value="Go">
    </p>

</form>
<?php if (isset($error)) {
    echo "<p>$error</p>";
} elseif (isset($result)) {
    $allResults = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($allResults) {
        foreach ($allResults as $row) { ?>
            <p>The name <?php echo $row['name']; ?> means <?php echo $row['meaning']; ?>.</p>
    <?php }
    } else { ?>
        <p>No results found</p>
   <?php }
} ?>
</body>
</html>