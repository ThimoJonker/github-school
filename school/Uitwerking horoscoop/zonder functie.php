<html>
  <head>
    <meta charset="utf-8" />
    <title>De horoscoop opdracht</title>
    <link rel="stylesheet" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id="container">
	
	  
	  
	  
		 <form action="php/horoscoop.php" method="post">
				
			<select name="dag">
			<?php			
				for ($i=1; $i <32; $i++){
					echo "<option value=\"".$i."\">".$i."</option>\n\r";
				}
				?>
			</select> - 
			<select name="maand">
			<?php			
				for ($i=1; $i <13; $i++){
					echo "<option value=\"".$i."\">".$i."</option>\n\r";
				}
				?>
			</select> - 
			<select name="jaar">
			<?php			
				for ($i=1910; $i <2015; $i++){
					echo "<option value=\"".$i."\">".$i."</option>\n\r";
				}
				?>
			</select>
			<br \>
	

				<input type="submit" value="Wat is mijn sterrenbeeld?">
		</form>

	  
    </div>
  </body>
</html>