<?php

class Db {

	public function get_table($table, $where) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if ($where != 'no') {
				$data = $conn->query('SELECT * FROM ' . $table . ' WHERE ' . $where);
			} else {
				$data = $conn->query('SELECT * FROM ' . $table);
			}

			foreach ($data as $key => $row) {
				$result[$key] = $row;
			}
			if (isset($result)) {
				return $result;
			} else {
				return "no";
			}
		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}

	public function put_query($query_in) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$data = $conn->query($query_in);


			foreach ($data as $key => $row) {
				$result[$key] = $row;
			}
			if (isset($result)) {
				return $result;
			} else {
				return "no";
			}
		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}

	public function put_query_last_id($query_in) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$conn->query($query_in);

			return $conn->lastInsertId();
		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
	public function add_form($fio, $mob, $email, $msg) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
         		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			$q = "INSERT INTO `form_q` (`fio`, `mob`, `email`, `text`) VALUES (:fio, :mob, :email, :msg);";
			$query = $conn->prepare($q);
			$results = $query->execute(array(
				":fio" => $fio,
				":mob" => $mob,
				":email" => $email,
				":msg" => $msg,
			));
			return $results;
		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}

}
