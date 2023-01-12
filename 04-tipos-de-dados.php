<?php

/* escalares/
//string*/

$nome = "Olá Mundo";
Var_dump($nome);
if(is_string($nome)):
	echo "É uma String";
else:
	echo "Não é uma String";
endif; 

echo "<br>";

$numero = 123;
Var_dump($numero);
if(is_int($numero)):
	echo "É um Inteiro";
else:
	echo "Não é um inteiro";
endif;

echo "<br>";

$altura = 1.85;
Var_dump($altura);
if(is_float($altura)):
	echo "É um Float";
else:
	echo "Não é um Float";
endif;

echo "<br>";

$admin = false;
Var_dump($admin);
if(is_bool($admin)):
	echo "É um boleano";
else:
	echo "Não é um Boleano";
endif;

echo "<br>";

$carros = array ("Gol", "Uno", "Camaro", 12, 20.6, true,);
Var_dump($carros);
if(is_array($carros)):
	echo "É uma array";
else:
	echo "Não é uma array";
endif;

echo "<br>";

Class Cliente {
	public $nome;
	public function atribuirNome ($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
Var_dump($cliente);
if(is_object($cliente)):
	echo "É um Objeto";
else:
	echo "Não é um Objeto";
endif;

echo "<br>";

$cidade = NULL;
Var_dump($cidade);
if(is_null($cidade)):
	echo "É uma NULL";
else:
	echo "Não é uma NULL";
endif;

echo "<br>";