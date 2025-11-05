<?php
/*Hello World*/
echo "<h1>Hello World!</h1>";
echo "Hello World.";

/*tipos de dados suportados pela linguagem*/
echo "<h1>Lista de tipos de dados suportados</h1>";
echo "<li>Integer: números inteiros [positivo ou negativo].</li>";
echo "<li>Double: números com vírgula ou ponto [podem ser positivo ou negativo também].</li>";
echo "<li>String: texto.</li>";
echo "<li>Boolean: verdadeiro ou falso.</li>";
echo "<li>Object: tipo de estrutura de dados criado por uma classe, guarda os dados e encapsula seus métodos durante a execução do programa</li>";
echo "Encapsulamento é, basicamente, esconder os detalhes internos do código e mostrar apenas o que é necessário para o funcionamento do programa.<br><br><br>";

$Integer = -20;
$Double = -0.002;
$String = "Text";
$Boolean = True;
$Object = " como todo objeto é criado por classes, uma classe pessoa por exemplo, vai ter acesso público ao nome e a função speak(), mas, na execução, tudo é compacto
e como um novo objeto é instanciado, o '$ p' é do tipo object por causa disso tudo e também porquê ele: instancia novas coisa apartir dessa fonte que fica encapsulada
pra todos saberem que essa fonte existe, mas que pode ser restrita, como todo objeto é composto por propriedades e valores, nesse caso, podemos a partir dessa nova
instância, um nome desejado e a função, o método que ele atua, a classe é o nome e o atributo é o nome, o comportamento é o falar. e como ele são criados, por meio
de uma construction function, ou seja, uma função com parâmetros e a construção baseada neles, o '$ this' definirá o nome dessa pessoa, ou desse objeto, 
criado por essa classe chamada [Pessoa]. <br><br>

-- Object na prática -- <br>
class Pessoa { <br>
    public $ nome; <br>
    public function falar() { <br>
        echo 'Olá, meu nome é $ this->nome!'; <br>
    } <br>
} <br>

$ p = new Pessoa(); <br>
$ p->nome = 'Lucas'; <br>
$ p->falar(); <br><br>

";

echo "Integer [$Integer] <br>";
echo "Double [$Double] <br>";
echo "String [$String] <br>";
echo "Boolean [$Boolean] <br>";
echo "Object [$Object] <br><br><br>";

/*Condicioanais IF e ELSE*/
echo "<h1>IF, ELSE IF e ELSE</h1>";
$idade_atual = 17;
$idade_permitida = 18;
if ($idade_atual > $idade_permitida) {
    echo "não pode dirigir.";
} else if ($idade_atual <= $idade_permitida) {
    echo "pode dirigir.";
} else {
    echo "infelizmente não tem idade suficiente.";
}
echo "<br><br><br>";

/*Loops*/
echo "<h1>Loops</h1>";
echo "<h1>For</h1>";
for ($counter = 1; $counter <= 10; $counter++){
    echo $counter. "<br>";
}

echo "<br><br>";

echo "<h1>While</h1>";
$counter = 0;
while ($counter++ < 10){
    echo $counter . "<br>";
}

/*Array*/
echo "<h1>Array</h1>";
$meuArrayLindo = array(1,2,3,"Guga",5);
$meuArrayVazio = array();
echo "------------------------- <br>";
echo $meuArrayLindo[0] ." [primeiro índice.] <br>";
echo $meuArrayLindo[1] ." [segundo índice.] <br>";
echo $meuArrayLindo[2] ." [terceiro índice.] <br>";
echo $meuArrayLindo[3] ." [quarto índice.] <br>";
echo $meuArrayLindo[4] ." [quinto índice.] <br>";
echo "------------------------- <br>";

/*Functions*/
echo "<h1>Functions</h1>";
?>