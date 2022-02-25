<?php

    session_start();        //세션 사용 선언

    $_SESSION["test"] ="123"; //test에 123값을 넣어줌

    echo $_SESSION["test"];  //세션변수값 표시

?>