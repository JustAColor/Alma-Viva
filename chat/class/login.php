<?php
    
    
 
        session_start();    
    
        

    function loginForm(){
        echo '
            <link rel="stylesheet" href="style/style.css">
            <div id="loginform">
                <form action="index.php" method="post">
                    <p>por favor ingrese su nombre para continuar:</p>
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name">
                    <input type="submit" name="enter" id="enter" value="Entrar">
                </form>
            </div>
        ';
    }

    if (isset($_POST['enter'])) {
        if ($_POST['name']!= "") {
            $_SESSION['name'] = stripcslashes(htmlspecialchars($_POST['name']));
        }else{
            echo '<span class="error">porfavor intenta de nuevo</span>';
        }
    }
?>