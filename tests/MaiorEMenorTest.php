<?php

namespace App\Loja\Produto;

require "./vendor/autoload.php";

use App\Loja\Carrinho\CarrinhoDeCompras,
		App\Loja\Produto\Produto,
		App\Loja\Produto\MaiorEMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorEMenorTest extends PHPUnit
{
	public function testOrdemDecrescente()
	{
		$carrinho = new CarrinhoDeCompras();

		$carrinho->adicionar(new Produto("Kit Internet Discada - Últ. Ger.", 399.45));
		$carrinho->adicionar(new Produto("Monitor de Fósforo Verde", 260.99));
		$carrinho->adicionar(new Produto("Teclado Multimídia Microsoft", 129.78));

		$mm = new MaiorEMenor();
		$mm->encontrar($carrinho);

		// Verifica se 'menor' e 'maior' são de fato objetos
		$this->assertInternalType("object", $mm->getMenor());
		$this->assertInternalType("object", $mm->getMaior());

		// Verifica se os métodos retornam um Produto
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMenor());
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMaior());

		// Verifica o resultado esperado
		$this->assertEquals("Teclado Multimídia Microsoft",
						$mm->getMenor()->getNome());

		$this->assertEquals("Kit Internet Discada - Últ. Ger.",
						$mm->getMaior()->getNome());
	}

	public function testOrdemCrescente()
	{
		$carrinho = new CarrinhoDeCompras();

		$carrinho->adicionar(new Produto("Teclado Multimídia Microsoft", 129.78));
		$carrinho->adicionar(new Produto("Monitor de Fósforo Verde", 260.99));
		$carrinho->adicionar(new Produto("Kit Internet Discada - Últ. Ger.", 399.45));

		$mm = new MaiorEMenor();
		$mm->encontrar($carrinho);

		// Verifica se 'menor' e 'maior' são de fato objetos
		$this->assertInternalType("object", $mm->getMenor());
		$this->assertInternalType("object", $mm->getMaior());

		// Verifica se os métodos retornam um Produto
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMenor());
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMaior());

		// Verifica o resultado esperado
		$this->assertEquals("Teclado Multimídia Microsoft",
						$mm->getMenor()->getNome());

		$this->assertEquals("Kit Internet Discada - Últ. Ger.",
						$mm->getMaior()->getNome());
	}

	public function testUmProduto()
	{
		$carrinho = new CarrinhoDeCompras();

		$carrinho->adicionar(new Produto("Teclado Multimídia Microsoft", 129.78));

		$mm = new MaiorEMenor();
		$mm->encontrar($carrinho);

		// Verifica se 'menor' e 'maior' são de fato objetos
		$this->assertInternalType("object", $mm->getMenor());
		$this->assertInternalType("object", $mm->getMaior());

		// Verifica se os métodos retornam um Produto
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMenor());
		$this->assertInstanceOf("App\Loja\Produto\Produto", $mm->getMaior());

		// Verifica o resultado esperado
		$this->assertEquals("Teclado Multimídia Microsoft",
						$mm->getMenor()->getNome());

		$this->assertEquals("Teclado Multimídia Microsoft",
						$mm->getMaior()->getNome());
	}
}