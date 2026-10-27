//POO = Programação orientada a objetos
<?php

    // Encapsulamento
    // Proteger informações para que não sejam alteradas de qualquer jeito
    // HERANÇA
    // Criar uma classe nova aproveitando características de outra
    // POLIFORMISMO
    // Permitir que objetos diferentes respondam à mesma ação de maneiras diferentes
    // ABSTRAÇÃO
    // Mostrar o que é necessário e esconder detalhes complicados de funcionamento

    // Exemplo com POO
    class Personagem {
        public $nome;
        public $vida;
        public $dano;

        public function __construct($nome, $vida, $dano) {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->dano = $dano;
        }

        public function getVida(){

            return $this->vida;

        }

        public function setVida($vida){
            
            if ($vida<0) {
                echo "A vida não pode ser negativa!\n";
                return;
            }
            $this->vida = $vida;
        }

        public function atacar () {
            echo "$this->nome realizou um ataque!";
        }
    }

    $pedro = new Personagem("Pedro", 100, 10);

    $pedro->setVida(50);

    $aurora = new Personagem("Aurora", 50, 5);
    $chloe = new Personagem("Chloe", 30, 3);
    
    $pedro->atacar(); //metodo proprio

    class Guerreiro extends Personagem {

        public function atacar () {
            echo "$this->nome atacou com uma espada!\n";
        }

        public function defender(){
            echo "$this->nome levantou o escudo!";
        }
    }

    class Mago extends Personagem {
        public function atacar(){
            echo "$this->nome lançou uma bola de fogo!\n";
        }
    }

    $guerreiro = new Guerreiro ("Pedro", 100, 10);
    $guerreiro->atacar();  //metodo herdado
    $guerreiro->defender();  //metodo proprio

    $personagens = [$guerreiro, $mago, $personagem];

    foreach($personagens as $p) {
        $p->atacar();
    }

    //1. O que é uma classe?
    //Um molde para criar objetos

    //2. O que significa new Personagem()?
    //Criar um objeto da classe Personagem

    //3. Para que serve $this->nome?
    //Acessar o nome do objeto atual

    //4. O que significa extends?
    //Herdar caracteristicas e metodos de outra classe
    ?>