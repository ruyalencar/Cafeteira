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
    require_once 'Cafeteira.php';
    require_once 'preparo.php';
    ?>
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
    <pre>
    <?php 
    $n1 = $_GET['n1'] ?? null;
    $n2 = $_GET['n2'] ?? null;
    
    switch($n1){
        case 0:
            aguarde($n1);
            break;
        
        case 1:
            aguarde($n1);
            break;

        case 2:
            aguarde($n1);
            break;

        case 3:
            aguarde($n1);
            break;            
    }
    switch($n2){
        case 0:
            aguarde2($n2);
            break;

        case 1:
            aguarde2($n2);
            break;
        
        case 2:
            aguarde2($n2);
            break;
    
        case 3:
            aguarde2($n2);
            break;
    }
    ?>
    </pre>
   
    </main>
</body>
</html>