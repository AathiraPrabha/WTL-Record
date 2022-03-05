<html>
  <head>
    <title>PHP form select box example</title>
    <style>
      label,a 
      {
        font-family : Arial, Helvetica, sans-serif;
        font-color:blue;
        font-size : 12px; 
      }
    </style>    
  </head>
  <body>
    <?php
      if(isset($_POST['formSubmit'])) 
      {
        $aLanguages = $_POST['formLanguages'];        
        if(!isset($aLanguages)) 
        {
            echo("<p>You didn't select any language!</p>\n");
        } 
        else 
        {
            $nLanguages = count($aLanguages);
            echo("<p>You selected $nLanguages languages: ");
            echo "<br/>";
            for($i=0; $i < $nLanguages; $i++)
            {
                echo($aLanguages[$i] . " ");
                echo "<br/>";
            }
            echo("</p>");
        }
      }
    ?>
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
     <H2> Submit details:</h2>
     <label for='formLanguages[]'><h4>Select the Languages in which you are experienced:</h4></label><br>
     <select multiple="multiple" name="formLanguages[]">
        <option value="C">C Language</option>
        <option value="C++">C++ Language</option>
        <option value="C#">C#.NET Language</option>
        <option value="VB">VB.NET Language</option>
        <option value="JAVA">Java Language</option>
        <option value="PHP">PHP Language</option>
        <option value="PYTHON">PYTHON Language</option>
     </select><br><br><br>
     <input type="submit" name="formSubmit" value="Submit" >
   </form>
  </body>
</html>