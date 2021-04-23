<?php
//header
include_once 'includes/header.php';

?>

<!----criando a Dev  para cadastro de clientes---->
    <div class="row">
        <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Estudante </h3>
        <!----processando o formulario---->
        <form action="php_action/creact.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
        </div>
            <div class="input-field col s12">
                <input type="text" name="disciplinas" id="disciplinas">
                <label for="disciplinas">Disciplinas</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="celular" id="celular">
                <label for="nome">Celular</label>
        </div>
        <button type="submit" name="btn-cadastrar"   class="btn">Cadastrar</button>
        <a href="index.php" class="btn red">Lista de estudantes</a>
        </form>
        </div>
    </div>
<?php
//footer
include 'includes/footer.php';
?>


