<?php 

// SISTEMA DE CONTROLE DE PRODUÇÃO INDUSTRIAL

//1.CLASSE ABSTRATA 

abstract class Maquina {
    public $nome;
    private $producao;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->producao = 0;
    }

    //ESCAPSULAMENTO - GETTER
    public function getProducao(){
        return $this->producao;
    }

    //ENCAPSULAMENTO - ALTERACAO CONTROLADA
    public function registrarProducao($quantidade){
        if ($quantidade <=0) {
            return false;
        }
        $this->producao += $quantidade;
        return true;
    }

    //ABSTRACAO
    abstract public function operar();
}

// 2. HERANÇA
class Esteira extends Maquina{
    public function operar(){
        return "Trasportando peças...";
    }
}

class Prensa extends Maquina{
    public function operar(){
        return "Prensabdo peças...";
    }
}

class RoboSoldagem extends Maquina{
    public function operar(){
        return "Soldando peças...";
    }
}

//3.SESSÃO = ARMAZENAMENTO TEMPORARIO

if (!isset($_SESSION["maquinas"])){
$_SESSION["maquinas"] = [];
}

$mensagem = "";

//4.RECEBER FORMULARIO VIA POST

if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome = $_POST["nome"] ?? "";
    $tipo = $_POST["tipo"] ?? "";
    $quantidade = $_POST["quantida"] ?? null;

    if(
        $nome === "" ||
        $quantidade === false ||
        $quantidade <= 0
    ){
        $mensagem = "Preencha os campos corretamente!";
    } else {
        //CRIANDO OBJETOS COM BASE NO FORMULARIO 
        if($tipo === "esteira"){
            $maquina = new Esteira($nome);
        } elseif ($tipo === "prensa") {
            $maquina = new Prensa($nome);
        } elseif($tipo === "roboSoldagem"){
            $maquina = new RoboSoldagem($nome);
        }
    


    //EXECUTANDO OS METODOS DE OBJETO 
    $maquina->registrarProducao($quantidade);

    //GUARDANDO O OBEJTO NA SESSAO
    $_SESSION["maquinas"][] = $maquina;

    $mensagem = "Máquina cadastrada com sucesso!";

    }
}

//EVITAR INTERPRETAR TEXTOS COMO HTML
function escapar($texto){
    return htmlspecialchars(
        (string) $texto,
        ENT_QUOTES,
        "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROLE DE PRODUÇÃO INDUSTRIAL</title>
</head>
<body>
    
</body>
</html>