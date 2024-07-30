# Projeto PHP - Estrutura MVP

Este projeto é um exemplo de estrutura Model-View-Presenter (MVP) para projetos PHP, desenvolvido sem o uso de frameworks ou bibliotecas de terceiros. Ele demonstra uma abordagem de arquitetura limpa e organizada para criar aplicações web em PHP.

## Estrutura do Projeto

- **app/**: Contém os controladores que gerenciam a lógica da aplicação.
  - `controllers/`: Controladores da aplicação.
    - `ClienteController.php`: Controlador para gerenciar clientes.
    - `HomeController.php`: Controlador para a página inicial.
- **core/**: Contém classes essenciais para o funcionamento da aplicação.
  - `Controller.php`: Classe base para os controladores.
  - `Core.php`: Gerenciador da aplicação.
  - `Model.php`: Classe base para os modelos.
- **models/**: Contém os modelos da aplicação.
  - `Cliente.php`: Modelo para a entidade Cliente.
- **views/**: Contém as visões da aplicação.
  - `cliente/`: Visualizações relacionadas a clientes.
    - `Create.php`: Formulário para criar um cliente.
    - `Delete.php`: Página para excluir um cliente.
    - `Edit.php`: Formulário para editar um cliente.
    - `List.php`: Lista de clientes.
  - `cabecalho.php`: Cabeçalho da página.
  - `index.php`: Página inicial.
  - `rodape.php`: Rodapé da página.
  - `template.php`: Template base para a aplicação.
- **assets/**: Contém arquivos estáticos da aplicação.
  - `css/`: Arquivos CSS.
    - `style.css`: Folha de estilo principal.
  - `fonts/`: Fontes utilizadas na aplicação.
  - `img/`: Imagens utilizadas na aplicação.
- **config/**: Arquivos de configuração.
  - `config.php`: Arquivo de configuração da aplicação.
- **vendor/**: Contém arquivos relacionados ao autoload e Composer.
  - `composer.json`: Arquivo de configuração do Composer.
  - `autoload.php`: Arquivo de autoload do Composer.
- **.htaccess**: Configurações do servidor web.
- **index.php**: Entrada principal da aplicação.

## Como Rodar o Projeto

1. **Configuração do Ambiente**: Certifique-se de ter o PHP e um servidor web (como Apache) instalados e configurados.
2. **Configuração do Servidor**: Coloque o projeto na raiz do servidor web.
3. **Configuração do Banco de Dados**: Configure o banco de dados no arquivo `config/config.php` se necessário.
4. **Acesso ao Projeto**: Acesse o projeto através do navegador, apontando para `index.php`.

## Autor

Lincol N. Almeida - [lincolalmeida.sp@gmail.com](mailto:lincolalmeida.sp@gmail.com)

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.
