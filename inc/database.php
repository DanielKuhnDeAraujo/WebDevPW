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

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {

  $database = open_database();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
	//$columns = $columns  . trim($key, "'") . ",";
	$columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO  $table ($columns) VALUES ($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  close_database($database);
}