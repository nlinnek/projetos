# Sistema de Agenda 📅

Este é um projeto avançado desenvolvido em PHP durante meus estudos no IF, aplicando conceitos sólidos de arquitetura de software e persistência de dados.

## 🛠️ Tecnologias e Padrões Aplicados:
*   **Padrão DAO (Data Access Object):** Separação da lógica de negócios da lógica de persistência de dados (camada `/model/dao` para comandos SQL e `/model/bean` para mapeamento dos objetos).
*   **Estrutura de Sub-módulos:** Divisão clara na camada de visão (`/views`) para gerenciar entidades distintas de forma independente: Categoria, Status e Usuário.
*   **Interface Moderna:** Uso de componentes e exemplos oficiais do **Bootstrap 5.3** para estruturação visual responsiva.
*   **Autoloading:** Carregamento dinâmico de classes integrado via `autoload.php`.
*   **Banco de Dados:** Pasta `/bd` dedicada para os scripts e mapeamento das tabelas SQL do sistema.
