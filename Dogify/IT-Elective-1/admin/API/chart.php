<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=dogify_db", "root", "");

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT pet_breed, COUNT(pet_id) AS Total 
		FROM pet_table 
		GROUP BY pet_breed
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'pet_breed'		=>	$row["pet_breed"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>