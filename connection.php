<?php
try {
    $db = new PDO ("mysql:hostname=localhost;dbname=jpp","root","");
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

