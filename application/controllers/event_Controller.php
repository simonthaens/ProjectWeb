<?php 

class Contact_controller extends CI_Controller {
               
	public function __construct()
    {
        parent::__construct();
       // $this->load->helper(array('form','url'));
        //$this->load->library(array('session', 'form_validation', 'email'));

			
		
	}
	
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
					$db = new PDO('mysql:host=http://159.253.7.3/;dbname=Events;charset=UTF8', 'simontz93_proj', 'project');
					$stmt = $db->prepare("INSERT INTO Events (name, date, time, zip, city, address, description)VALUES(:name,:date,:time,:zip,:city,:address,:description)");
					$stmt->bindParam(':name', $name, PDO::PARAM_STR);	
					$stmt->bindParam(':date', $date, PDO::PARAM_STR);
					$stmt->bindParam(':time', $time, PDO::PARAM_STR);
					$stmt->bindParam(':zip', $zip, PDO::PARAM_STR);
					$stmt->bindParam(':city', $city, PDO::PARAM_STR);
					$stmt->bindParam(':address', $address, PDO::PARAM_STR);
					$stmt->bindParam(':description', $description, PDO::PARAM_STR);
					$stmt->execute();
				} catch (PDOException $ex) {
					echo "<p>FOUT: " . $ex -> getMessage() . "</p>";
				}
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