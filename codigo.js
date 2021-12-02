//Atividades p/ fixação do conteudo:

/*
 * 1) Crie uma aplicação capaz de identificar a faixa etária com base na idade informada pelo 
 * usuário. Considere os seguintes critérios: 
 * Se a idade informada for maior ou igual a 0 e menor que 15, exibir a mensagem “Criança”. 
 * Se a idade informada for maior ou igual a 15 e menor que 30, exibir a mensagem “Jovem”. 
 * Se a idade informada for maior ou igual a 30 e menor que 60, exibir a mensagem “Adulto”. 
 * Se a idade informada for maior ou igual a 60, exibir a mensagem “Idoso”. 
 * Fique à vontade para utilizar qualquer uma das funções aprendidas para exibição de dados 
 * para o usuário.
 *
*/

var idade = prompt(idade);

if(idade >= 0 && idade < 15)
   alert("criança");
else if(idade >= 15 && idade < 30)
   alert("jovem");
else if(idade >= 30 && idade < 60)
   alert("idoso");

/*
 * 2) Crie uma aplicação para efetuar o cálculo do índice de massa corporal.
 * Considere os seguintes critérios: 
 * 1) Ao executar o script a aplicação deve solicitar a entrada do nome da pessoa. 
 * 2) Na sequência a aplicação deve solicitar que seja informada a altura da pessoa em 
 * centímetros. 
 * 3) Na sequência a aplicação deve solicitar que seja informado o peso da pessoa. 
 * 4) Após as estradas de dados, atente-se a conversão das informações para dados do tipo 
 * float. 
 * 5) Converta a altura recebida em centímetros para metros. (basta dividir a altura por 
 * 100). 
 * 6) Internamente a aplicação deve executar o cálculo do índice de massa corporal através 
 * da expressão: M = peso (quilos) ÷ altura² 
 * 7) Após identificar o índice de massa corporal o sistema deverá classificar em faixas 
 * descritivas utilizando os critérios abaixo: 
 * a) Se M estiver abaixo de 16 : Baixo peso muito grave 
 * b) Se M estiver entre 16 e 16,99: Baixo peso grave 
 * c) Se M estiver entre 17 e 18,49: Baixo peso 
 * d) Se M estiver entre 18,50 e 24,99: Peso normal 
 * e) Se M estiver entre 25 e 29,99: Sobrepeso 
 * f) Se M estiver entre 30 e 34,99: Obesidade grau I 
 * g) Se M estiver entre 35 e 39,99: Obesidade grau II 
 * h) Se M for maior que 40: Obesidade grau III 
 * 8) Ao término o sistema deve fornecer a seguinte saída para o usuário: 
 * “<Nome> possui índice de massa corporal igual a <m>, sendo classificado como: 
 * <classificacao>.” 
 * *As informações em vermelho são variáveis e devem ser substituídas pelos seus respectivos 
 * valores calculadas dentro da aplicação.
 *
*/
