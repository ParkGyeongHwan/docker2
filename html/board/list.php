<?php 
    include "../db.php";

    $sql = "SELECT _id,name,title FROM board order by _id desc";
    $result = $conn->query($sql);
     
    $conn->close();
?>
<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>

        <table style="border:1px solid #000; width:100%">
            <tr>
                <td>번호</td>
                <td>제목</td>
                <td>작성자</td>
            </tr>

<?php 
  
  while($row = $result->fetch_assoc()) { 
    ?>

            <tr>
                <td><?php echo $row["_id"]?></td>
                <td><?php echo $row["title"]?>
                    <a href="delete.php?_id=<?php echo $row["_id"]?>">삭제 </a></td>
             <td><?php echo $row["name"]?></td>
  </form>
            </tr> 
<?php 
    }
?>

        </table>
        <br />

        <a href="input.php">글쓰기</a>

    </body>
</html>