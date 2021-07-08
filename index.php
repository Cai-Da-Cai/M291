<!DOCTYPE html>
<html lang="de">	
<?php
require_once 'connect.php';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket System</title>
</head>
<body>
	<header>
		<h1>
			Was ist ihr Problem?
		</h1>
	</header>
<form method="post" action="insert.php">
	
	<label for="nutzer_name">Name</label>
    <input type="text" name="nutzer_name"  value='<?php echo "$nutzername"; ?>' id="nutzer_name"><br>
	
    <label for="standort">Standort</label>
    <input type="text" name="standort"  value='<?php echo "$standort"; ?>'id="standort"><br>

		<label for="beschreibung">Beschreibung</label>
	
    <input type="text" name="beschreibung" id="beschreibung"><br>
	
    <input type="submit" value="OK">
</form>
	
    <table style="background-color:smokewhite; width: 100wv;">
		<tr><th>Nutzer</th><th>Standort</th><th>Beschreibung</th><th colspan="2">Edit</th></tr>
	

		<?php 
print_r($_POST);
?>
<?php
$nutzername = $_POST['nutzername'];
$standort = $_POST['standort'];

if( array_key_exists('nutzername', $_POST)
    && !is_null($_POST ['nutzername']) )
    $nutzername = $_POST['nutzername'];
else 
    $nutzername = '';

    if( array_key_exists('standort', $_POST)
    && !is_null($_POST['standort']) )
    $standort = $_POST['standort'];
else 
    $standort = '';


?>
<?php 
	$query = "SELECT * FROM Entry"; 
	if($resultset = $db-> query($query)){
		foreach( $resultset as $row){
			echo " 
				<tr> 
				<td>".$row["nutzer_name"]."</td>
				<td>".$row["standort"]." </td>
				<td>".$row["Beschreibung"]." </td>
				<td>
					<form method ='post' action='delete.php'>
						<input type='hidden' name='Entry_id' value=".$row["id"].">
						<input type='submit' value='delete'>
					</form>
				</td>
				</tr>";
		}
	}
$db -> close();
?>
</table>	

<footer>
	Designed and made by SBW Neue Medien<br>M291 Work
	</footer>
</body>
	<style>
		html{
		font-family: Raleway;
		color: whitesmoke;
		background-color: black;
		
		}
	footer{
		margin-top: 4%;
		text-align: center;
		}
	body{
		margin-left: 15%;
		margin-right: 15%;
		margin-top: 10%;
		}
		h1{
			text-align: center;
		}
	 input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #d92934;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  
	table{
		width: 100%;
		border-collapse: collapse;
		}
	th, td{
		border-style: solid ;
		border-style: white;
		}
	td{
		text-align: center;	
		}
    </style>
</html>