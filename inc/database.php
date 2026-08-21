<?php
$mysqli = new mysqli_driver();
$mysqli->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
function open_database()
{
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$conn->set_charset("utf8");
		return $conn;
	} catch (Exception $e) {
		throw new Exception("Não foi possível conectar ao banco de dados. Erro: {$e->getMessage()}");
		return null;
	}
}

function close_database($conn)
{
	try {
		$conn->close();
		//$conn =null
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find($table = null, $id = null)
{
	$found = null;
	
	try {
		$database = open_database();
		if ($id) {
			$sql = "SELECT * FROM $table WHERE id =  $id";
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
				$found = $result->fetch_assoc();
			}

		} else {

			$sql = "SELECT * FROM  $table";
			$result = $database->query($sql);

			if ($result->num_rows > 0) {
				//$found = $result->fetch_all(MYSQLI_ASSOC);

				/* Metodo alternativo*/
				$found = [];
				while ($row = $result->fetch_assoc()) {
				  array_push($found, $row);
				} 
			}
		}
	} catch (Exception $e) {
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}

	close_database($database);
	return $found;
}


function find_all($table)
{
	return find($table);
}