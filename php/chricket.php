<!DOCTYPE html>
<html>
	<body
		
		<h2>table of cricket players</h2>
		<table border="1">
			<tr>
				<th>player name</th>
			</tr>
			<?php

				$players=["Rohit sharma","Rahul","Ravidra jadeja","pandya","kohli","kumar","abhinav","bobban"];
				foreach ( $players as $player){
					echo "<tr><td> $player </td></tr>";
				}
						 
			?>
		</table>
		
	</body>

</html>

