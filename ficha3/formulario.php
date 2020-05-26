<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php ?>
    <fieldset>
      <form action="tratamento.php" method="post">
        <table>
        <tr>
      <label for="nome">Nome: </label> <input type = "text" name="nome"><br>
      <label for="email">Email: </label> <input type = "email" name = "email"><br>
      <label for="telefone">Telefone/Telemóvel: </label> <input type = "text" name = "telefone"><br>
      <br>
      <br>
          <td align = "left">
            Cursos de informatica:
          </td align = "left">
          <td>
             <input name = "cursos" type="radio"  value="Android" > Android
             <br>
             <input name = "cursos"type="radio" value="Html" > Html
             <br>
             <input name = "cursos" type="radio"  value="Java"> Java
             <br>
             <input name = "cursos" type="radio"  value="PHP" > PHP
             <br>
             <input name = "cursos" type="radio" value="Python"> Python
             <br>
             <input name = "cursos" type="radio" value="SQL" > SQL
             <br>
             <input name = "cursos" type="radio" value="Scratch" > Scratch
             <br>
             <br>
           </td>

           <tr>
              <td>
                <label for="nivel">Selecione uma opção:</label>
              </td>
              <td align="left">
                  <select name="nivel">
                    <option value="init">Iniciação</option>
                    <option value="med">Intermédio</option>
                    <option value="adv">Avançado</option>
                  </select>
              </td>
           </tr>

           <tr>
              <td>
                <br>
                <br>
                <br>
                <label for="obs">Observações:</label>
                <textarea name="obs"></textarea>
              </td>
          </tr>

        </tr>
      </table>
      <input type="submit" name="submit" value="Enviar">
      </form>
    </fieldset>
  </body>
</html>
