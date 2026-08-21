<?php

include "../config.php";
include DBAPI;

$customers = null;
$customer = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all("customers");
}
//n precisa fechar pq é puro php
?>