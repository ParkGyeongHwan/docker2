<?php
     include "../db.php";

     $id = $_GET["_id"]; 

     $sql = "SELECT _id,name,title,content FROM board WHERE _id = ".$id;
     
     $result = $conn->query($sql);

     $row = $result->fetch_row();
      
     $conn->close();
?>

<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>
 

            작성자 : <?php echo $row[1]?> <br />

            제목 : <?php echo $row[2]?> <br />

            내용 : <?php echo nl2br($row[3])?>
            <br />
            <a href="edit.php?_id=<?php echo $id ?>">수정</a> 
            <a href="list.php">목록으로</a>

    </body>
</html>