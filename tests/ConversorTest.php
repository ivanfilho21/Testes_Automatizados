<?php

namespace App\Exemplos;

require "./vendor/autoload.php";

use App\Exemplos\Conversor;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorTest extends PHPUnit
{
	private function converter($str)
	{
		$conversor = new Conversor();
		return $conversor->converter($str);
	}

	public function testMustUnderstandSymbolI()
	{
		$n = $this->converter("I");
		$this->assertEquals(1, $n);
	}

	public function testMustUnderstandSymbolV()
	{
		$n = $this->converter("V");
		$this->assertEquals(5, $n);
	}

	public function testMustUnderstandSymbolII()
	{
		$n = $this->converter("II");
		$this->assertEquals(2, $n);
	}

	public function testMustUnderstandSymbolXXX()
	{
		$n = $this->converter("XXX");
		$this->assertEquals(30, $n);
	}

	// 4 symbols
	public function testMustUnderstandSymbolXXII()
	{
		$n = $this->converter("XXII");
		$this->assertEquals(22, $n);
	}

	// First symbol less than the second
	public function testMustUnderstandSymbolIV()
	{
		$n = $this->converter("IV");
		$this->assertEquals(4, $n);
	}

	public function testMustUnderstandSymbolXXIV()
	{
		$n = $this->converter("XXIV");
		$this->assertEquals(24, $n);
	}
}