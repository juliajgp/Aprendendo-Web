/*var a = 10;
var b = 20;
var c = null;

document.write('A=' + a + '<br>');
document.write('B=' + b + '<br>');

c = a;
a = b;
b = c;

document.write('A=' + a + '<br>');
document.write('B=' + b + '<br>');*/

var variavel1 = prompt('Digite algum numero');
var variavel2 = prompt('Digite outro numero');

// nesse caso, como prompt pega do usuario uma variavel do tipo string, então o + aqui vai concatenar o valor das variaveis 
document.write(variavel1 + variavel2);

variavel1 = parseInt(variavel1);
variavel2 = parseInt(variavel2);

// agora que a conversão de tipos, foi feita, o + vai somar
document.write(variavel1 + variavel2);

// convertendo o int pra stringS
document.write(variavel1.toString() + variavel2);