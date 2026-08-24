<?php

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

?>