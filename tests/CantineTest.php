<?php

include_once('../src/Cantine.php');
use PHPUnit\Framework\TestCase;

class CantineTest extends PHPUnit_Framework_TestCase
{
	public function testToString(){
		$c = new Cantine();
		$resultat = $c->toString();
		
		$this->assertSame("Cantine dirigee par inconnu", $resultat);
	}
	
	public function testMaxRepas(){
		$c = new Cantine();
		$c->setCuilleres(100);
		$c->setFourchettes(100);
		$c->setCouteaux(100);
		// simulation d'une cantine avec 2 assiettes cassées, c'est donc 98 convives simultanément qui devra resortir
		$c->setAssiettes(98);
		
		$resultat = $c->maxRepas();
		
		$this->assertSame(98, $resultat);
	}
}


?>
