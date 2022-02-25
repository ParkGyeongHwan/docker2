<?php
    include "../db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];

    $sql2 =
    "
    SELECT
        id
    FROM
        member
    WHERE
        id = '".$id."'
    ";
    // echo $sql2;
    // exit();

    $result = $conn->query($sql2);
    $row = $result->fetch_row();   
    // $conn->close();

    if ($row[0] == '') {
    $sql = 
"
INSERT INTO member (id,pw,name)
VALUES ('". $id ."','". $pw ."','". $name ."')
";

$conn->query($sql);

$conn->close();

} else {
    echo "이미 있는 아이디입니다";
}

?>
