<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiros Passos</title>
</head>
<body>
    <h1>Mesclando conhecimentos em PHP</h1>

    <!-- Tag PHP -->
    <?php
    $Variavel = "Felipe";
    $Variavel2 = (string)"Felipe"; // Aqui você força conversão com type cast
    echo "Seu nome é $Variavel<br>";   // Aspas Duplas

    // Exemplo While em PHP
    $i = 0;

    while ($i < 5) {
        echo "Contador (while): $i<br>";
        $i++;  // incrementa $i em 1 a cada iteração
    }

    // Exemplo For em PHP
    for ($i = 0; $i < 5; $i++) {
        echo "Contador2 (for): $i<br>";
    }

    // Exemplo Foreach em PHP
    $frutas = ["Maçã", "Banana", "Laranja"];

    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }

    // Exemplo Foreach em PHP 2
    $pessoas = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 20
    ];

    foreach ($pessoas as $nome => $idade) {
        echo "$nome tem $idade anos<br>";
    }

    // Exemplo While com break
    $i = 0;

    while (true) {
        echo "Contador (while com break): $i<br>";
        $i++;
        if ($i >= 5) {
            break;  // sai do loop quando $i >= 5
        }
    }

    // Exemplo Do... While
    $i = 0;

    do {
        echo "Contador (do...while): $i<br>";
        $i++;
    } while ($i < 5);

    // Exemplo Funções em PHP
    function saudacao($nome) {
        return "<br>Olá, $nome!<br>";
    }

    echo saudacao($Variavel);

    // Exemplo POO em PHP
    class Pessoa {
        public $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        public function saudacao() {
            return "Olá, meu nome é " . $this->nome;
        }
    }

    // Use argumentos nomeados só se o PHP for 8+
    $p = new Pessoa("Felipe");  //$p = new Pessoa(nome: "Felipe"); se PHP for 8+ de  phpinfo(); no terminal
    echo $p->saudacao();
    ?>
    
</body>
</html>
