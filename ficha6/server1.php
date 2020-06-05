<?php

  set_time_limit(0);

  $address = "127.0.0.1";
  $port = "8884";

  if(($sock = socket_create(AF_INET, SOCK_STREAM, 0)) === false){
    echo "ERRO - Falha na criação do socket! \n";
  }else{
    echo"funcionou 1";
  }

  if(socket_bind($sock, $address, $port) === false){
    echo "ERRO - Falha na passagem do Endereço e porta para o socket! \n";
    socket_strerror(socket_last_error());
  }else{
    echo"funcionou 2";
  }

  if(socket_listen($sock) === false){
    echo "ERRO - Falha na escuda da ligação ao socket! \n";
  }else{
    echo"ligação estabelecida \n";
  }

do{
    if(($msgsock = socket_accept($sock)) == false){
      echo "ERRO - Falha na escuda da ligação ao socket! \n";
      break;
    }else{
      echo"ligação estabelecida \n";
    }

    $msgOla = "Bem-Vindo ao PHP server socket V1 \n";
    socket_write($msgsock, $msgOla, strlen($msgOla));

    $msgAdeus = "Agora não tenho tempo vou fechar, Adeus! \n";
    socket_write($msgsock, $msgAdeus, strlen($msgAdeus));

    sleep(2);

    socket_close($msgsock);
  }while(true);

  socket_close($sock);
 ?>
