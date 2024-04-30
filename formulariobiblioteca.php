<?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST ['sobrenome'];
    $email = $_POST ['email'];
    $cpf = $_POST ['cpf'];
    $dtnasc = $_POST ['dtnasc'];
    $categoria = $_POST ['categoria'];

    echo $nome;
    echo '<p></p>';
    echo $sobrenome;
    echo '<p></p>';
    echo $email;
    echo '<p></p>';
    echo $cpf;
    echo '<p></p>';
    echo $dtnasc;
    echo '<p></p>';
    echo $categoria;
    echo '<p></p>';


    $autor = $_POST['autor'];
    $nomedolivro = $_POST ['nomedolivro'];
    $numero_pag = $_POST ['numero_pag'];

    echo $autor;
    echo $nomedolivro;
    echo $numero_pag;

    $class = $_POST ['class'];
    echo $class;

    $comentarios = $_POST ['comentarios'];
    echo $comentarios;
?>