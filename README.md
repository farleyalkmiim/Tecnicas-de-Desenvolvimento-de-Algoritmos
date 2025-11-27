# Tecnicas-de-Desenvolvimento-de-Algoritmos
Material da disciplina de Técnicas de Desenvolvimento de Algoritmos.

Esse repositorio contém atividades do curso Analise e Desenvolvimento de Sistemas

🚗 NETRIUM – Sistema de Gestão de Concessionária

CRUD completo • PHP + MySQL • Bootstrap 5

📘 Sobre o Sistema

O NETRIUM é um sistema web desenvolvido para gerenciar todos os processos internos de uma concessionária.
Ele permite administrar Funcionários, Clientes, Marcas, Modelos e Vendas, utilizando operações CRUD completas.

O projeto utiliza uma estrutura modular baseada em:

index.php?page=nome-da-pagina


O que torna o sistema leve, organizado e fácil de expandir.

🛠️ Tecnologias Utilizadas
🎨 Front-end

HTML5

CSS3

Bootstrap 5

JavaScript

⚙ Back-end

PHP (estilo estruturado)

🗄 Banco de Dados

MySQL / MariaDB

🖥 Ambiente

XAMPP (Apache + MySQL)

📂 Estrutura do Projeto
/index.php
/config.php

# Funcionários
/cadastrar-funcionario.php
/listar-funcionario.php
/editar-funcionario.php
/salvar-funcionario.php

# Clientes
/cadastrar-cliente.php
/listar-cliente.php
/editar-cliente.php
/salvar-cliente.php

# Marcas
/cadastrar-marca.php
/listar-marca.php
/editar-marca.php
/salvar-marca.php

# Modelos
/cadastrar-modelo.php
/listar-modelo.php
/editar-modelo.php
/salvar-modelo.php

# Vendas
/cadastrar-venda.php
/listar-venda.php
/editar-venda.php
/salvar-venda.php

/css/bootstrap.min.css
/js/bootstrap.bundle.min.js

🚀 Funcionalidades
✔ Funcionários

Cadastrar

Listar

Editar

Excluir

✔ Clientes

CRUD completo

✔ Marcas

CRUD completo

✔ Modelos

Cadastro de modelos vinculados a marcas

Relacionamento via chave estrangeira (id_marca)

✔ Vendas

Registrar vendas

Listar vendas

Relacionar Clientes • Funcionários • Modelos

🔗 Navegação

Toda navegação funciona via parâmetro:

?page=cadastrar-funcionario
?page=listar-modelo
?page=salvar-venda


O arquivo index.php utiliza switch-case para carregar cada página.

🧠 Funcionamento do CRUD

Todos os arquivos salvar-xxx.php seguem a estrutura:

acao=cadastrar → INSERT  
acao=editar → UPDATE  
acao=excluir → DELETE  


Com mensagens de sucesso ou erro via alert() + redirecionam para a listagem correspondente.

🗄 Banco de Dados
Tabela Funcionário
CREATE TABLE funcionario (
  id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
  nome_funcionario VARCHAR(100),
  email_funcionario VARCHAR(120),
  telefone_funcionario VARCHAR(20)
);

Tabela Marca
CREATE TABLE marca (
  id_marca INT AUTO_INCREMENT PRIMARY KEY,
  nome_marca VARCHAR(100)
);

Tabela Modelo
CREATE TABLE modelo (
  id_modelo INT AUTO_INCREMENT PRIMARY KEY,
  nome_modelo VARCHAR(100),
  id_marca INT,
  FOREIGN KEY (id_marca) REFERENCES marca(id_marca)
);

Tabela Venda
CREATE TABLE venda (
  id_venda INT AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT,
  id_modelo INT,
  id_funcionario INT,
  data_venda DATE,
  FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
  FOREIGN KEY (id_modelo) REFERENCES modelo(id_modelo),
  FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario)
);

# Olá, eu sou o Farley Alkmim! 👋

Sou um desenvolvedor apaixonado por tecnologia e programação web. Atualmente, estou focado em aprofundar meus conhecimentos em desenvolvimento **Back-end** e criação de sistemas robustos.
