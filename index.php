<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarLGPD Code</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="container">
        <form method="post" action="gerar.php">
            <h1>Editor cores e código:</h1>
            <table>
            <tr>
                <td>Escolha a cor do botão de aceite:</td> 
                <td><input type="color" class="bt-press" name="bot" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Escolha a cor da barra:</td> 
                <td> <input type="color" class="bt-press" name="barracor" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Escolha a cor do texto da barra:</td> 
                <td><input type="color" class="bt-press" name="text" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Escolha a altura da barra:</td> 
                <td> <input type="number" class="bt-press" name="barra" min="60" max="300" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Escolha a posição do botão:</td> 
                <td><select  class="" name="direcao">
                <option value="direita">Direita</option>
                <option value="esquerda">Esquerda</option>
              </select></td>
            </tr>
            <tr>
                <td>Endereço da pagina lgpd:</td> 
                <td> <input type="text" class="bt-press end" name="end" min="60" max="300" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Gerar código" name="env" class="bt"><br> </td>
            </tr>
            </table> 
            
        </form>
    </div>
</body>
</html>