<?php
class Produto {

    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
    var $Porc;
    var $valor;

    function ImprimeEtiqueta()
    {
        print 'Código: '.$this -> Codigo ."<br>";
        print 'Descrição: '.$this -> Descricao ."<br>";
        print 'Quantidade: '.$this -> Quantidade." <br>";
        print 'Desconto: R$'.$this -> Preco ." - " . $this -> Porc . "%  = R$". $this -> valor . "<br><br>";
    }


    function DescontarSub()
    {
    
    $this -> valor = $this -> Preco - ($this->Preco * $this->Porc / 100);
    $this ->valor = $this -> Quantidade * $this ->valor;
    }
    function DescontarSom()
    {
    $this -> valor = $this -> Preco + ($this->Preco * $this->Porc / 100);
    $this ->valor = $this -> Quantidade * $this ->valor;

    }
}

?>