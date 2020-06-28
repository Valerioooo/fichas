<?php
  error_reporting(E_ALL);

  set_time_limit(0);

  ob_implicit_flush();
  $address = "127.0.0.1";
  $port = "8888";

  $cliente = array();

  if( ($sock = socket_create(AF_INET, SOCK_STREAM, 0)) === false){
    echo "ERRO - Falha na criação do socket! \n".
    socket_strerror(socket_last_error())."\n";
  }

  if(socket_bind($sock, $address, $port) === false){
    echo "ERRO - Falha na passagem do Endereço e porta para o socket! \n".
    socket_strerror(socket_last_error($sock))."\n";
  }

  if(socket_listen($sock) === false){
    echo "ERRO - Falha na escuda da ligação ao socket! \n".
    socket_strerror(socket_last_error($sock))."\n";
  }

do{
  echo "\nA esperar por clientes...\n";

  $read = array();
  $read[] = $sock;
  $write = array();
  $expect = array();
  $tv_sec = NULL;
	$cont = 0;

  $read = array_merge($read, $cliente);

  if(socket_select($read, $write, $expect, $tv_sec) === false){
    echo "ERRO - Falha ao aceitar a ligação ao socket! ".
    socket_strerror(socket_last_error($sock))."\n";
    continue;
  }

  if(in_array($sock, $read)){
    if(($msgsock = socket_accept($sock)) === false){
      echo "ERRO - Falha ao aceitar a ligação ao socket! ".
      socket_strerror(socket_last_error($sock))."\n";
      break;
    }
    $cliente[] = $msgsock;
    $key = array_keys($cliente, $msgsock);
		$cont = count($cliente);

		socket_getpeername($msgsock, $ip)

    echo "\n Um cliente com ip ", $ip   ," estabeleceu a ligação - cliente numero: $key[0] \n";
		echo "Neste momento esta(ao) " ,$cont, " clientes conectado(s) ao servidor";

    $msg = "\n Bem-Vindo ao PHP server socket V2 - Multi - Cliente. \n\r".
    "Voce é o cliente numero: $key[0] \n\r".
    "Para sair, digite 'quit'. Para desligar o servidor digite 'shutdown'. \n\r";

    socket_write($msgsock, $msg, strlen($msg));
  }

  foreach ($cliente as $key => $client) {
    if(in_array($client, $read)){
      if(($buf = socket_read($client, 2048, PHP_NORMAL_READ)) === false){
        echo "ERRO- Falha na leitura do socket! ".
        socket_strerror(socket_last_error($client))."\n";
        break 2;
      }

      if(!$buf = trim($buf)){
        continue;
      }

      if($buf == 'quit'){
				echo "\n O cliente $key disconectou-se!\n";
				socket_close($client);
        unset($cliente[$key]);
        break;
      } else if($buf == 'shutdown'){
          socket_shutdown($sock);
        }

      $talkback = "Cliente $key disse: '$buf' \n";


			foreach ($cliente as $key2) {
				socket_write($key2,$talkback, strlen($talkback));
			}

      echo "Cliente $key disse: '$buf' \n";
    }
  }
}while(true);
socket_close($sock);
echo "o servidor encerrou";

 ?>
