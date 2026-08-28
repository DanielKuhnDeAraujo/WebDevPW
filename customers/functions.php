<?php
ob_start();
include "../config.php";
include DBAPI;

$customers = null;
$customer = null;
/**
 *  Formatar a data
 */ 
function formatadata($data,$formato){
	$dt = new DateTime($data, new DateTimeZone("America/Sao_Paulo"));
	return $dt->format($formato);
}
/**
 *  Formatar telefones
 */ 
function telefone($tel){
	return "(" . substr($tel,0,2) .")" . substr( $tel,2,5) . 
	"-" . substr($tel,7,4);
}
/**
 *  Formatar cep
 */ 
function cep($cep){
	// se vira pra fazer 
	// 5 caracteres concatena traço e concatena os 3 últimos
	return  substr($cep,0,5) . "-" . substr($cep,5,3);
}
/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all("customers");
}
//n precisa fechar pq é puro php
/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('customers', $id);
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['customer'])) {
    
	//$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	$today = new DateTime('now', new DateTimeZone('-0300'));
	  
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('customers', $customer);
    header('location: index.php');
  }
}

?>