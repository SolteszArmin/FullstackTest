
		<?php
		session_start();
			include 'Head.php';
			
				if (isset($_SESSION['username'])) {
					}
					else{
						include 'Login.php';
					}
			
			include "Body.php";
		?>