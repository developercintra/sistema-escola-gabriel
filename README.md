# 📚 Sistema de Gestão Escolar

Sistema completo para administração escolar, com recursos para gerenciamento de alunos, professores, turmas, cursos, notas e muito mais, acompanhado de um site institucional responsivo.

---

## 📑 Índice
- [Visão Geral](#visão-geral)
- [Recursos Principais](#recursos-principais)
- [Tecnologias](#tecnologias)
- [Arquitetura do Projeto](#arquitetura-do-projeto)
- [Instalação](#instalação)
- [Como Utilizar](#como-utilizar)
- [Contribuição](#contribuição)
- [Licença](#licença)

---

## 📌 Visão Geral
Este sistema foi criado para simplificar e organizar a gestão escolar, oferecendo um **painel administrativo completo** e um **site institucional** para apresentação da instituição e seus cursos.  
Com ele, é possível gerenciar de forma ágil e centralizada todos os cadastros e informações escolares.

---

## 🚀 Recursos Principais
- **Site institucional responsivo** com informações sobre a instituição, cursos e equipe de professores;
- **Painel administrativo** com CRUD para:
  - Alunos
  - Professores
  - Turmas
  - Notas
  - Funcionários
  - Empresas
  - Siglas de cursos
  - Cursos
- Interface amigável e adaptável a diferentes dispositivos;
- Implementação com **arquitetura MVC** para melhor organização e manutenção do código;
- Fluxo de navegação otimizado para uso no dia a dia.

---

## 🛠 Tecnologias
- **PHP** (MVC)
- **MySQL**
- **HTML5, CSS3, Bootstrap**
- **JavaScript**
- **Git**

---

## 🏗 Arquitetura do Projeto
O desenvolvimento segue o padrão **MVC (Model-View-Controller)**, que separa a aplicação em três camadas, garantindo melhor manutenção, escalabilidade e clareza no código.

---

## 📥 Instalação
Clone este repositório:
```bash
git clone https://github.com/developercintra/sistema-escola-gabriel.git
```

Configure o banco de dados no arquivo de conexão.  

Importe o script SQL fornecido na pasta `/database`.  

Inicie o servidor local (**Apache/MySQL**) usando XAMPP, WAMP ou similar.  

Acesse no navegador:
```text
http://localhost/nome-do-projeto
```

---

## 💻 Como Utilizar
- **Site institucional**: visualizar informações da instituição e cursos.
- **Painel administrativo**: gerenciar cadastros e registros.
- **Funcionalidades CRUD**: criar, editar, excluir e consultar dados de forma prática.

---

## 🤝 Contribuição
1. Realize um **fork** do projeto.
2. Crie uma nova branch para sua modificação:
   ```bash
   git checkout -b minha-feature
   ```
3. Faça o commit das alterações:
   ```bash
   git commit -m "Descrição da minha alteração"
   ```
4. Envie para o seu repositório:
   ```bash
   git push origin minha-feature
   ```
5. Abra um **Pull Request**.

---

## 📄 Licença
Este projeto está licenciado sob a **MIT License** — sinta-se livre para usar, modificar e distribuir.
