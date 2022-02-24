<?php
     include "../db.php";

     $id = $_POST["_id"]; 
     $title = $_POST["title"];
     $name = $_POST["name"];
     $content = $_POST["content"];


     $sql = "
     UPDATE 
        board
    SET 
        title = '".$title."',
        name = '".$name."',
        content = '".$content."'
    WHERE 
        _id = ".$id."
    ;
     ";
     $result = $conn->query($sql);
     $conn->close();
     ?>
<script>
    location.href="view.php?_id=<?php echo $id ?>";
</script>