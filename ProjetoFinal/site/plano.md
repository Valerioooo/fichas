# Planos

__Principal__

- menu com dropdown e ligações a cada tabela

  - Inserir
  - Remover
  - Listar

- login na direita do menu

  - login.php

    - cria a sessão
    - valida o utilizador e a passe
    - Passa por post para o indexlog.php
		if ($_SESSION['ligado'] != 1) {
			header("location: /index.php");
		}
