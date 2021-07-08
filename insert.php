<?php
$nutzer_name = $_POST['nutzer_name'];
$beschreibung = $_POST['beschreibung'];
$standort = $_POST['standort'];


require_once 'connect.php';

$sql ="INSERT INTO Entry (beschreibung,nutzer_name,standort) VALUES (?,?,?)";

if($stmt = $db-> prepare ($sql)){

	$stmt -> bind_param("ssss", $beschreibung,$nutzer_name,$standort);
	$stmt -> execute();
	
		
	echo "Neuer Datensatz hinzugefügt: " . $db-> affected_rows;
	
}
else{

	echo "Konnte nicht Aufgenommen werden, bitte versuchen sie es später erneut.";
}

$db-> query($sql);

$db-> close();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB App</title>
</head>
<body>
	<header>
		<h1>
			Vielen Dank für ihre Information
		</h1>
	</header>
	<main class="animation-target">
		<p><a href="./">Zurück</a></p>
	</main>
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
		text-align: center;
		}






.animation-target {
  -webkit-animation: animation 750ms linear infinite both;
  animation: animation 750ms linear infinite both;
	animation-iteration-count: infinite;
}

/* Generated with Bounce.js. Edit at http://bouncejs.com#%7Bl%3A1%2Cs%3A%5B%7BT%3A%22k%22%2Ce%3A%22s%22%2Cd%3A750%2CD%3A0%2Cf%3A%7Bx%3A0%2Cy%3A0%7D%2Ct%3A%7Bx%3A40%2Cy%3A60%7D%2Cs%3A3%2Cb%3A4%7D%2C%7BT%3A%22c%22%2Ce%3A%22b%22%2Cd%3A750%2CD%3A0%2Cf%3A%7Bx%3A1%2Cy%3A1%7D%2Ct%3A%7Bx%3A2%2Cy%3A2%7D%2Cs%3A2%2Cb%3A4%7D%5D%7D */

@-webkit-keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  3.2% { -webkit-transform: matrix3d(1.345, 0.383, 0, 0, 0.252, 1.345, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.345, 0.383, 0, 0, 0.252, 1.345, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.5% { -webkit-transform: matrix3d(1.485, 0.5, 0, 0, 0.326, 1.485, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.485, 0.5, 0, 0, 0.326, 1.485, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.41% { -webkit-transform: matrix3d(1.673, 0.603, 0, 0, 0.393, 1.673, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.673, 0.603, 0, 0, 0.393, 1.673, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  9.01% { -webkit-transform: matrix3d(1.88, 0.616, 0, 0, 0.403, 1.88, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.88, 0.616, 0, 0, 0.403, 1.88, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  12.71% { -webkit-transform: matrix3d(2.064, 0.467, 0, 0, 0.308, 2.064, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.064, 0.467, 0, 0, 0.308, 2.064, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.51% { -webkit-transform: matrix3d(2.087, 0.424, 0, 0, 0.28, 2.087, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.087, 0.424, 0, 0, 0.28, 2.087, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  17.92% { -webkit-transform: matrix3d(2.139, 0.197, 0, 0, 0.131, 2.139, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.139, 0.197, 0, 0, 0.131, 2.139, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.92% { -webkit-transform: matrix3d(2.137, 0.155, 0, 0, 0.103, 2.137, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.137, 0.155, 0, 0, 0.103, 2.137, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.23% { -webkit-transform: matrix3d(2.075, -0.003, 0, 0, -0.002, 2.075, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.075, -0.003, 0, 0, -0.002, 2.075, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.03% { -webkit-transform: matrix3d(2.032, -0.03, 0, 0, -0.02, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.032, -0.03, 0, 0, -0.02, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  31.43% { -webkit-transform: matrix3d(2.012, -0.033, 0, 0, -0.022, 2.012, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.012, -0.033, 0, 0, -0.022, 2.012, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  34.63% { -webkit-transform: matrix3d(1.994, -0.029, 0, 0, -0.019, 1.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.994, -0.029, 0, 0, -0.019, 1.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  40.14% { -webkit-transform: matrix3d(1.985, -0.015, 0, 0, -0.01, 1.985, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.985, -0.015, 0, 0, -0.01, 1.985, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  56.46% { -webkit-transform: matrix3d(2, 0.002, 0, 0, 0.001, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0.002, 0, 0, 0.001, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  62.36% { -webkit-transform: matrix3d(2.002, 0.001, 0, 0, 0.001, 2.002, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.002, 0.001, 0, 0, 0.001, 2.002, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  81.48% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  84.68% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

@keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  3.2% { -webkit-transform: matrix3d(1.345, 0.383, 0, 0, 0.252, 1.345, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.345, 0.383, 0, 0, 0.252, 1.345, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.5% { -webkit-transform: matrix3d(1.485, 0.5, 0, 0, 0.326, 1.485, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.485, 0.5, 0, 0, 0.326, 1.485, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.41% { -webkit-transform: matrix3d(1.673, 0.603, 0, 0, 0.393, 1.673, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.673, 0.603, 0, 0, 0.393, 1.673, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  9.01% { -webkit-transform: matrix3d(1.88, 0.616, 0, 0, 0.403, 1.88, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.88, 0.616, 0, 0, 0.403, 1.88, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  12.71% { -webkit-transform: matrix3d(2.064, 0.467, 0, 0, 0.308, 2.064, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.064, 0.467, 0, 0, 0.308, 2.064, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.51% { -webkit-transform: matrix3d(2.087, 0.424, 0, 0, 0.28, 2.087, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.087, 0.424, 0, 0, 0.28, 2.087, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  17.92% { -webkit-transform: matrix3d(2.139, 0.197, 0, 0, 0.131, 2.139, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.139, 0.197, 0, 0, 0.131, 2.139, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.92% { -webkit-transform: matrix3d(2.137, 0.155, 0, 0, 0.103, 2.137, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.137, 0.155, 0, 0, 0.103, 2.137, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.23% { -webkit-transform: matrix3d(2.075, -0.003, 0, 0, -0.002, 2.075, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.075, -0.003, 0, 0, -0.002, 2.075, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.03% { -webkit-transform: matrix3d(2.032, -0.03, 0, 0, -0.02, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.032, -0.03, 0, 0, -0.02, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  31.43% { -webkit-transform: matrix3d(2.012, -0.033, 0, 0, -0.022, 2.012, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.012, -0.033, 0, 0, -0.022, 2.012, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  34.63% { -webkit-transform: matrix3d(1.994, -0.029, 0, 0, -0.019, 1.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.994, -0.029, 0, 0, -0.019, 1.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  40.14% { -webkit-transform: matrix3d(1.985, -0.015, 0, 0, -0.01, 1.985, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.985, -0.015, 0, 0, -0.01, 1.985, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  56.46% { -webkit-transform: matrix3d(2, 0.002, 0, 0, 0.001, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0.002, 0, 0, 0.001, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  62.36% { -webkit-transform: matrix3d(2.002, 0.001, 0, 0, 0.001, 2.002, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.002, 0.001, 0, 0, 0.001, 2.002, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  81.48% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  84.68% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}






    </style>
</html>


