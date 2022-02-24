<?php 





$mysql_hostname = 'host.docker.internal';

$mysql_username = 'Hwan';

$mysql_password = '159753';

$mysql_database = 'HwanDB';

$mysql_port = '52000';

$mysql_charset = 'UTF8';

 

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

 

if($connect->connect_errno){

    echo '[연결실패..] : '.$connect->connect_error.'';

}


 

?>