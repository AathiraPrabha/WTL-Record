<?php
echo "PHP Program for 2D Array <br>";
echo "***********************<br><br>";
echo "Enter n for nxn : <br>";
echo "<form method='POST'>
    Row:<input type='number' min='2'
            max='5' name='1d' value='1'/> &nbsp;
    Column:<input type='number' min='2'
            max='5' name='2d' value='1'/> &nbsp;
    <input type='submit' name='submit'
            value='Submit'/>
</form>";
if (isset($_POST['submit'])) 
{
    $dimention1 = $_POST["1d"];
    $dimention2 = $_POST["2d"];
     
    echo "Entered 2D matrix : " . $dimention1
            . "x" . $dimention2 . " <br>";
    $d = [];
    $k = 0;
     
    for($row = 0; $row < $dimention1; $row++) 
	{
        for ($col = 0; $col < $dimention2; $col++) 
		{
            $d[$row][$col]= $k++;
        }
    }
    for ($row = 0; $row < $dimention1; $row++) 
	{
        for ($col = 0; $col < $dimention2; $col++)
		{
            echo $d[$row][$col]." ";
        }
        echo "<br>";
    }
}
?>