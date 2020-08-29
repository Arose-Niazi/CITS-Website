<?php
	$query = "SELECT * FROM members WHERE ID = '".$toLookID."'";
	if ($result = $mysqli->query($query)) 
		if($row = $result->fetch_assoc())
		{
			$ID = $row["ID"];
			$Name = $row["Name"];
			$RankDisplay = $row["RankDisplay"];
			$Contact = $row["ContactNo"];
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