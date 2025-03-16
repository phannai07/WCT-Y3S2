<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$action = $_POST["action"];

		if ($action == "add") {
			$name = $_POST["name"];
			$age = $_POST["age"];
			$grade = $_POST["grade"];

			if (empty($name) || empty($age) || empty($grade)) {
				echo json_encode(['success' => false, 'message' => 'All fields are required.']);
				exit;
			}

			echo json_encode(['success' => true]);
		} elseif ($action == "delete") {
			$index = $_POST["index"];

			echo json_encode(['success' => true]);
		} elseif ($action == "edit") {
			$index = $_POST["index"];
			$name = $_POST["name"];
			$age = $_POST["age"];
			$grade = $_POST["grade"];

			if (empty($name) || empty($age) || empty($grade)) {
				echo json_encode(['success' => false, 'message' => 'All fields are required.']);
				exit;
			}

			echo json_encode(['success' => true]);
		}
	}
?>