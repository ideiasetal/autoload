<?php
spl_autoload_register(function($class){
	if(file_exists($class.'class.php')) {
		require_once($class.'class.php');
	}
});

$obj = new bola();
$obj->setCor('azul');

echo "A cor da bola é:".$obj->getCor().<br/><br/>;

$campo = new campo();
$campo->setDados(20,80,90);

echo "Me de a largura do meu campo: ".$campo->getlargura();
