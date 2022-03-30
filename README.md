# PHPtest

Teste de seleção para vaga PHP

## Requisitos
  - PHP 7.4
  - MySQL

## Como executar

1. Clone o projeto na pasta publica do seu servidor Apache (`git clone https://github.com/LeanFicagna/PHPtest` para clonar)
    * No meu caso, utilizei o XAMPP, então clonarei o repositório na pasta `xampp\htdocs`
2. Configurações do Bando de Dados
    - Usuário: '`root`'
    - Senha: ''
    - Hostname: '`localhost`'
      * Caso precise alterar esses dados, vá até `config\config.php`
3. Importe o arquivo endereco.sql em seu servidor MySQL devidamente configurado.
4. Execute o IP: `http://localhost/PHPTest/`

## Interface




## Faça um fork desse projeto e siga as intruções a seguir utilizando esse projeto.

Construir uma aplicação web para buscar endereço. Aplicação deve fazer uma chamada na API via cep : https://viacep.com.br/.
Premissas:

  ● Usar PHP 5.6 ou superior.
  
  ● Usar Bootstrap.
  
  ● JavaScript (Não usar framework).
  
  ● Retorno deve ser em xml.
  
  ● Salvar os dados em uma base e antes de uma nova consulta verificar se o cep já foi consultado, caso tenha sido, trazer    informação da base e não deve efetuar uma nova consulta.
  
  ● Tratar o erro. Dar um retorno amigável para usuário leigo.
  
  
## PS: Valorizamos a criatividade no layout.

# Entrega: 
 * Disponibilizar um link do repositório no GitHub e encaminhar para developer@cd2.com.br
.
