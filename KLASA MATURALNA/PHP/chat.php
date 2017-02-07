<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../CSS/style_chat.css" media="all"/>
</head>
<body>
        <div id="chat_box">
         <?php
           include('PHP/login.php');
           $sqll = "SELECT * FROM chat ORDER BY id DESC limit 5";
           $resultt = mysqli_query($link,$sqll);
           while($row = mysqli_fetch_row($resultt))
           {
            
             print "
            <div id='chat_data'>
                <span style='color:white;align:left;font-size: 12px;margin-left: 5px;'><b>$row[1] :</b></span>
                <span style='color:white;font-size: 10px;font-family: Arial;word-wrap: break-word;'>$row[2]</span>
            </div> ";
           }
          mysqli_close($link); ?>
        </div>
        <form method="post">
        <textarea name="msg" placeholder="message max 100 char"></textarea>
        <input type="text" name="name" placeholder="name max 10 char"/>
        <input type="submit" name="submit" value="Send it"/>
        </form>
<?php 
    if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $msg = $_POST['msg'];
        if(strlen($name)>0 && strlen($name)<11 && strlen($msg)>0 && strlen($msg)<101)
        {
    include("PHP/login.php");
    $sqll="INSERT INTO `chat` (`id`, `name`, `msg`) VALUES (NULL, '$name', '$msg')";
    $resultt = mysqli_query($link,$sqll); 
    mysqli_close($link);
    echo "<meta http-equiv='refresh' content='0.5'>";}
    } ?>

</body>
</html>