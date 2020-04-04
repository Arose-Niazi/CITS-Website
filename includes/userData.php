<?php
	$query = "SELECT * FROM Members WHERE ID = '".$toLookID."'";
	if ($result = $mysqli->query($query)) 
		if($row = $result->fetch_assoc())
		{
			$ID = $row["ID"];
			$Name = $row["Name"];
			$RankDisplay = $row["RankDisplay"];
			$Contact = $row["Contact"];
			$Rank = $row["Rank"];
			$Email = $row["Email"];
			$About = $row['About'];
			$Img = $row['Image'];
			$Joined = $row['Joined'];
			$result->close();		
		}
		else
			exit;
	else
		exit;
?>		