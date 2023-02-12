<h1 align="left"> SIGvagas </h1>


Comandos que devem ser rodados

-composer update
-alterar o .env.example para .env
-se aparecer na tela um erro e pedir pra gerar uma key, clique que gera.
-npm install
-npm run dev
-npm run build
-configurar o .env
-php artisan migrate
-php artisan db:seed
-php artisan module:seed
-php artisan storage:link
-php artisan serve

Laravel version - 9.51.0
composer version - 2.5.2
php version - 8.2.0

Aplicação idealizada como um site de vagas.

Tipo de Usuário 
-Admin: 
    -Funções
      -Cadastrar vagas
      
      -Consutar  vagas
          -Consultar usuários que se candidataram de cada vaga
          -Editar vaga
              -Inativar Vaga
          -Deletar vaga
          -Deletar todas as vagas
          
      -Consultar Candidatos
-Usuário comum:
      -Cadastrar Informações(Quando é feito o cadastro de informações libera "Consultar Vagas" e "Minhas Vagas")
      -Editar Informações
      -consultar Informações
      -Minhas vagas(Vagas que o usuário se cadastrou)
 
