<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // Conexão com o Banco
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificação
    if (!$conn) {
        die("A conexão com o BD falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8"/>
    <head>

        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">

        <title>FullStack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>

        <!-- Menu Retirado daqui -->
    <?php
        include('menu.html')
    ?>
        <br>
        <h1>Fale Conosco</h1>
        <hr>

    <div class="container mt-3 ml-1">
        <table border=0 width="100%" cellpadding="20">
            <tr>
                <td>
                    <img src="./produtos/gmail.png" width="40px">
                    <font face="Arial" size="4">contato@fullstackeletro.com</font>
                </td>

                <td>
                    <img src="./produtos/whatsapp.png" width="40px">
                    <font face="Arial" size="4">(21) 99999-9999</font>
                </td>
            </tr>
        </table>

        <form action="" role="form" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="test" name="nome" class="form-control" id="nome">
            </div>
            <div class="form-group">
                <label for="msg">Mensagem:</label>
                <input type="test" name="msg" class="form-control" id="msg">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form><br><br>
    
        <?php 
            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result -> fetch_assoc()){
                    echo "Data: ", $rows['data'], "<br>";
                    echo "Nome: ", $rows['nome'], "<br>";
                    echo "Mensagem: ", $rows['msg'], "<br>";
                    echo "<br>";
                }
            } else {
                echo "Nenhum Comentário, ainda";
            }
        ?>

    </div>
        <br><br><br><br><br><br>

        <footer id="rodape">
            <span>
                <p>Formas de pagamento:</p>
                <img src="./produtos/pagamento.png">
                <p class="copy">&copy; Recode Pro</p>
            </span>
        </footer>


        </table>
    </body>

</html>