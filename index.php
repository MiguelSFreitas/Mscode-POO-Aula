<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Carro {
        public $cor;

        public function ligar() {
            return "O carro está ligado!";
            }
        }

        $meuCarro = new Carro();
        $meuCarro->cor = "Vermelho";

        echo $meuCarro->ligar(); 
    ?>

</body>
</html>