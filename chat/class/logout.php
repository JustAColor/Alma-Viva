<?php
    if (isset($_GET['logout'])) {
        $fp = fopen("log.html",'a');
        fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." a salido de la sesion de chat.</i><br></div>");
        fclose($fp);

        session_destroy();
        header('Location:index.php');


    }
?>