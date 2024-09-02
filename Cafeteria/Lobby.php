<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteira</title>
    <link rel="stylesheet" href="style.css">
    <style>
            .lista-container {
            display: flex;
            justify-content: space-between;
        }

        .lista {
            margin: 50px;
        }
    </style>
    <?php 
    require_once 'cafeteira.php';
    ?>
    <script>
    // Espera 15 segundos (15000 milissegundos) para mostrar a próxima mensagem
    setTimeout(function() {
    document.getElementById("mensagem").innerText = <?print "hello";?>;
    }, 5000);
</script>
</head>
<body>
    <main><h1>Informe o que gostaria abaixo⬇️</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <div class="lista-container">
        <!-- Primeira Lista -->
        <div class="lista">
            <label for="Opções">Opções Quentes ⬇️</label>
            <p><strong>Nada = 0</strong></p>
            <p><strong>Café = 1</strong></p>
            <p><strong>Chá = 2</strong></p>
            <p><strong>Chocolate = 3</strong></p>
            <input type="number" name="n1" id="n1id" min="0" max="3" require>
        </div>

        <!-- Segunda Lista -->
        <div class="lista">
            <label for="Bebidas">Bebidas Frias ⬇️</label>
            <p><strong>Nada = 0</strong></p>
            <p><strong>Suco = 1</strong></p>
            <p><strong>Refrigerante = 2</strong></p>
            <p><strong>Água = 3</strong></p>
            <input type="number" name="n2" id="n2id" min="0" max="3" require>
        </div>
    </div>

    <input type="submit" value="Fazer">
    </form>
    <?php 
    
    $n1 = $_GET['n1'] ?? null;
    $n2 = $_GET['n2'] ?? null;

    $fazer1 = new Cafeteira;
    $fazer2 = new Cafeteira;
    
    switch ($n1){
        case null:
            $fazer1 ->nada = null;
            $fazer1 ->aguarde1($fazer1);
            break;
        case 1:
            print "<p>Aguarde um pouco!</p>";   
            $fazer1 ->cafe = "Cafe";
            $fazer1->aguarde1($fazer1);
            break;
        case 2:
            print "<p>Aguarde um pouco!</p>";
            $fazer1 ->cha = "Chá";
            $fazer1->aguarde1($fazer1);
            break;
        case 3:
            print "<p>Aguarde um pouco!</p>";
            $fazer1 ->chocolate = "Chocolate";
            $fazer1->aguarde1($fazer1);

            break;
    };
    switch ($n2){
        case null:
            $fazer2 ->nada = null;
            $fazer2 ->aguarde2($fazer2);
            break;
        case 1:
            print "<p>Aguarde um pouco!</p>";
            $fazer2 ->suco = "Suco";
            $fazer2->aguarde2($fazer2);
            break;
        case 2:
            print "<p>Aguarde um pouco!</p>";
            $fazer2 ->refrigerante = "Refrigerente";
            $fazer2->aguarde2($fazer2);
            break;
        case 3:
            print "<p>Aguarde um pouco!</p>";
            $fazer2 ->agua = "Agua";
            $fazer2->aguarde2($fazer2);
            break;
    };
    ?>
   
    </main>
    <section>
    <p id="mensagem"></p>
    </section>
</body>
</html>