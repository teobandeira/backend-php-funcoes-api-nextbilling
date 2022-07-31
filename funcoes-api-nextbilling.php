<?php
//FUNÇÕES COM API NOVA DO NEXTBILLING
# 20/07/2022
# TIMOTEO BANDEIRA ALVES
# timoteo.bandeira@gmail.com

//api next via delete dados
function nextdeletedados($api, $dados, $url, $token, $key)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via delete dados

//api next delete
function nextdelete($api, $id, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next delete

//api next via post
function nextpost($api, $dados, $url, $token, $key)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via post

//api next via put
function nextput($api, $dados, $url, $token, $key)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via put

//api next via post altera assinante
function nextpostAltera($api, $dados, $url, $token, $key, $id_plataforma)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id_plataforma");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via post altera assinante

//api next via get
function nextget($api, $id, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via get

//api next via get //consulta de saldo
function nextsaldo($id, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "getCustomerBalance";

	$ch = curl_init("http://$url/api/$api/$token/$key/$id");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via get //consulta de saldo

//api next via cdr
function nextcdr($id_record, $date_ini, $date_end, $inicio, $total_por_pagina, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "cdr";
	if($inicio > '0') $offset = "&offset=$inicio";
	else $offset = "";

	$ch = curl_init("http://$url/api/$api/$token/$key/$id_record?date_ini=$date_ini&date_end=$date_end&start=0&limit=$total_por_pagina.$offset");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via cdr

//api next via  cdrDID - ligações recebidas
function nextDIDcdr($id_record, $date_ini, $date_end, $inicio, $total_por_pagina, $url, $token, $key)
{
  $data = '';
  $data_string = json_encode($data);
  $api = "cdrDid";
  if($inicio > '0') $offset = "&offset=$inicio";
  else $offset = "";

  $ch = curl_init("http://$url/api/$api/$token/$key/$id_record?date_ini=$date_ini&date_end=$date_end&start=0&limit=$total_por_pagina.$offset");
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Content-Length: " . strlen($data_string))
  );

  $retorno = curl_exec($ch);
  $retorno = json_decode($retorno,true);

  return $retorno;
}
//FIM //api next via cdrDID

//api next consulta grava��es
function nextgravacoes($id_record, $date_ini, $date_end, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "recording";

	$ch = curl_init("http://$url/api/$api/$token/$key/$id_record?date_ini=$date_ini&date_end=$date_end&start=0");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next consulta grava��es

//api next via get //lista assinantes
function nextassinantes($id, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "listCustomers";

	$ch = curl_init("http://$url/api/$api/$token/$key/$id");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via get //lista assinantes

//api next via get //lista contatos
function nextcontatos($limit, $offset, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "contacts";

	$ch = curl_init("http://$url/api/$api/$token/$key?limit=$limit&offset=$offset");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via get //lista contatos

//api next via get //chamadas ativas
function nextchamadas($id_record, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);
	$api = "onlineCalls";

	$ch = curl_init("http://$url/api/$api/$token/$key?id_record=$id_record");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next via get //chamadas ativas

//api next via get //download grava��es
function nextdownloadgravacoes($id_assinante, $id_gravacao, $url, $token, $key)
{
    $api = "recording";
	$retorno = "https://$url/api/$api/$token/$key/$id_assinante?id_record=$id_gravacao&is_download=1";

	return $retorno;
}
//FIM //api next via get //download grava��es

//api next adiciona
function next_adiciona($api, $id_assinante, $dados, $url, $token, $key)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id_assinante");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next adiciona

//api next delete
function next_delete($api, $id_assinante, $id_record, $url, $token, $key)
{
    $data = '';
	$data_string = json_encode($data);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id?id_record=$id_record");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next delete

//api next altera
function next_altera($api, $id_assinante, $id_record, $dados, $url, $token, $key)
{
    $data_string = json_encode($dados);

	$ch = curl_init("http://$url/api/$api/$token/$key/$id?id_record=$id_record");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"Content-Length: " . strlen($data_string))
	);

	$retorno = curl_exec($ch);
	$retorno = json_decode($retorno,true);

    return $retorno;
}
//FIM //api next altera
