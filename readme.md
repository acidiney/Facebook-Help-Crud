# Crud Com PHP

Fiz esse pequeno exercício para ajudar alguém do grupo de linguagens de programação no [facebook](https://www.facebook.com/groups/programadoresincriveis/).

## Como Funciona

Dividi o projecto numa arquitetura de pastas semelhante a essa:
```
  > database
    .test.sql
  >tests
      .Base.Test.php
      .Crud.Test.php
      .Db.Test.php
  .Crud.Class.php
  .db.php
  .readme.md
```

### Pasta Database
  Normalmente nos SGBD's ``Mysql's`` já têm por default um banco de dados com o nome de ``test`` porém se por venturae no seu não existir pode abrir o arquivo ``test.sql`` e tirar os comentários da linha 31.

### Pasta tests
  Basicamente é nesta pasta que possui toda a execução do arquivo ``Crud.Class.php``,  Então se puder dê uma olhada no arquivo ``Crud.Test.php``.

  O arquivo ``Base.Test.php`` possui uma classe com um único método o ``expect`` que é usado no arquivo que testa a conexão com o banco de dados ``Db.Test.php``.

### Ordem de execução recomendada
  Antes de sair abrindo o arquivo ``Crud.Test.php`` no seu browser, recomendo que abra primeiro o arquivo ``Db.Test.php``, só para se certificar que tudo está nos conformes mesmo.

  No arquivo ``Crud.Test.php`` existem 4 métodos que traduzem a sigla ``Crud``, Então para testar cada método abra o arquivo e na ultima linha altere para o método que deseja experimentar.

## Licença
MIT
Criado por [Acidiney Dias](https://www.facebook.com/acidiney.dias)
