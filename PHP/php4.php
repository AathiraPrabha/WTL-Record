<!DOCTYPE html>
<html>
<head>
    <title>
        PHP program illustraing buttons and functions
    </title>
</head>
  
<body>     
    <h4>
        PHP program illustraing buttons and functions
    </h4>
  
    <?php
      
        if(isset($_POST['button1'])) 
		{
            echo "This is Button1 that is selected<br>";
        }
        if(isset($_POST['button2'])) 
		{
            echo "This is Button2 that is selected<br>";
        }
    ?>
      
    <form method="post">
        <input type="submit" name="button1"
                value="Button1"/>
        <input type="submit" name="button2"
                value="Button2"/>
    </form>
</head>
</html>