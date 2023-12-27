<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

  public function testEstadoInicialItem() 
  {
    $item = new Item();

    $item->getDescricao();
    $item->getValor();

    $this->assertEquals('', $item->getDescricao());
    $this->assertEquals(0, $item->getValor());
  }

  public function testGeteSetDescricao() 
  {
    $descricao = 'Cadeira de plástico';

    $item = new Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao, $item->getDescricao());
  }

  public function testItemValido() 
  {
    $item = new Item();

    $item->setValor(55);
    $item->setDescricao('Cadeira de plástico');
    $this->assertEquals(true, $item->itemValido());

    $item->setValor(55);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());

    $item->setValor(0);
    $item->setDescricao('Cadeira de plástico');
    $this->assertEquals(false, $item->itemValido());

    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());
  }

  /**
   * @dataProvider dataValores
   */
  public function testGeteSetValor($valor) 
  {
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor, $item->getValor());
  }

  public function dataValores()
  {
    return [
      [100], 
      [-2],
      [0]
    ];
  }

}