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
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <title>FullStack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
    </head>

    <body>
        <?php
            include('menu.html')
        ?>
        

        <br>
        <header>
            <h1>Produtos</h1>
        </header>
        <hr>


        <container class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos (9)</li>
                <li onclick="exibir_categoria('geladeiras')">Geladeiras (2)</li>
                <li onclick="exibir_categoria('notebooks')">Notebooks (2)</li>
                <li onclick="exibir_categoria('celulares')">Celulares (3)</li>
                <li onclick="exibir_categoria('microondas')">Micro-ondas (2)</li>
            </ul>
        </container>

        <container class="produtos">
            <?php 
                $sql = "select * from produtos";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($rows = $result -> fetch_assoc()){
            ?>
    
            <div class="box_produto" style="display: block;" id="<?php echo $rows["categoria"];?>">
                <img src=" <?php echo $rows["imagem"];?> " width="100px" onclick="destaque(this)">
                <br>
                <p class="descricao"> <?php echo $rows["descricao"];?> </p>
                <hr>
                <p><strike><em> <?php echo $rows["preco"];?> </em></strike></p>
                <p class="preço"> <?php echo $rows["preco_venda"];?> </p>
            </div>

            <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado";
                }
            ?>
        </container>

        <br><br>

            
        </section>

        <br><br>

        <footer id="rodape">
            <span>
                <p>Formas de pagamento:</p>
                <img src="./produtos/pagamento.png">
                <p class="copy">&copy; Recode Pro</p>
            </span>
        </footer>

    </body>
</html>