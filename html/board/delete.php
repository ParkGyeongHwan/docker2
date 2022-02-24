<?php
    $id = $_GET["_id"];
    include "../db.php";
    echo $id;
$sql = "DELETE FROM 
    board
where
    _id = $id
";

$conn->query($sql);

$conn->close();

?>

<script>

    location.href="list.php";

</script>