<?php
    include 'class/login.php';
    include 'class/logout.php';

    if(!isset($_SESSION['name'])){
        loginForm();
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat prueba </title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="menu">
            <p class="welcome">welcome,<b><?php echo $_SESSION['name'];?></b></p>
            <p class="logout"><a id="exit" href="">exit chat</a></p>
            <div style="clear:both;"></div>
        </div>

        <div id="chatbox">
        <?php
        if(file_exists("log.html") && filesize("log.html") > 0){
        $handle = fopen("log.html", "r");
        $contents = fread($handle, filesize("log.html"));
        fclose($handle);
     
    echo $contents;
}
?>
        </div>

        <form name="message" action="">
                <input type="text" name="usermsg" id="usermsg" size="63">
                <input type="submit" name="submitmsg" id="submitmsg" value="enviar">
        </form>
    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 //If user wants to end session
 $("#exit").click(function(){
		var exit = confirm("estas seguro que quieres salir?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});


$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("class/post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
    });
    $.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
		  	},
        });
        function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
    });
});
</script>
<?php
    }
    if (isset($_GET['logout'])) {
        $fp = fopen("log.html",'a');
        fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." a salido de la sesion de chat.</i><br></div>");
        fclose($fp);

        session_destroy();
        header('Location:index.php');


    }
?>
</body>
</html>