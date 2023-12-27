<?php

namespace src\extrator;

class Xlsx extends Arquivo
{

  public function lerArquivo(string $caminho): array
  {
    //lógica para leitura

    
    return $this->getDados();
  }
}