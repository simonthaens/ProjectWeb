<?php 

class event_Controller extends CI_Controller {
          public $dbUrl = "mysql:host=http://159.253.7.3:3306/;dbname=Events;charset=UTF8', 'simontz93_proj', 'project";   
	
	function addEvent(){
		if (isset($_POST["addEvent"]) && $_SERVER[“REQUEST_METHOD”] == “POST”) {
				$name = test_input($_POST["nameEvent"]);
				$date = test_input($_POST["dateEvent"]);
				$time = test_input($_POST["timeEvent"]);
				$zip = test_input($_POST["zipEvent"]);
				$city = test_input($_POST["cityEvent"]);
				$address = test_input($_POST["addressEvent"]);
				$description = test_input($_POST["descriptionEvent"]);
			
				try {
					$db = new PDO($this->dbUrl);
					$stmt = $db->prepare("INSERT INTO Events (name, date, time, zip, city, address, description)VALUES(:name,:date,:time,:zip,:city,:address,:description)");
					$stmt->bindParam(':name', $name, PDO::PARAM_STR);	
					$stmt->bindParam(':date', $date, PDO::PARAM_STR);
					$stmt->bindParam(':time', $time, PDO::PARAM_STR);
					$stmt->bindParam(':zip', $zip, PDO::PARAM_INT);
					$stmt->bindParam(':city', $city, PDO::PARAM_STR);
					$stmt->bindParam(':address', $address, PDO::PARAM_STR);
					$stmt->bindParam(':description', $description, PDO::PARAM_STR);
					$stmt->execute();
				} catch (PDOException $ex) {
					echo "<p>FOUT: " . $ex -> getMessage() . "</p>";
				}
			}
	}
	
	function getEvents(){
		try {
			$db = new PDO($this->dbUrl);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//selecteer 
			$stmt = $db->query('SELECT naam, email, bericht, datum FROM GastenboekORDER BY boekID DESC');
			$rijen = $stmt->fetchAll(PDO::FETCH_NUM);

			foreach($rijen as $rij) {
				$nameEvent = $rij[1];
				$dateEvent = $rij[2];
				$timeEvent = $rij[3];
				$zipEvent = $rij[4];
				$cityEvent = $rij[5];
				$addressEvent = $rij[6];
				$descriptionEvent = $rij[7];
				
				echo "<div class=\"item\">";
				echo "<img src=\"<?php echo base_url(); ?>assets/pictures/carsouselBack.png\" data-holder-rendered=\"true\" style=\"width:100%; height:30%; border-radius: 25px;\">";
				echo "<div class=\"carousel-caption\">";
				echo "<h3 class=\"section-heading\">";
				echo $nameEvent;
				echo "</h3>";
				echo "<h4>";
				echo $dateEvent;
				echo "</h4>";
				echo "<h5>";
				echo $timeEvent;
				echo "</h5>";
				echo "<p>";
				echo $descriptionEvent;
				echo "</p>";
				echo "</div>";
				echo "</div>";	
			}
		}
		catch (PDOException $ex) {
			echo "<p> FOUT: " . $ex->getMessage() . "</p>";
		}		
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	







}
?>