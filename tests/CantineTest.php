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
}


?>
