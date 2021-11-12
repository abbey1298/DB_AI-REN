<?php

		//connection
		$conn = mysqli_connect("localhost", "root", "", "db_airen");

		if(mysqli_connect_error()){
			echo "Failed to connect to Database". mysqli_connect_error();
		}
?>		
