<?php
//conexao com base de dados
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select na base de dados
if(isset($_GET['id'])):
    //filtrando
    $id = mysqli_escape_string($connect, $_GET['id']);
    //dando select na base  de dados
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql );
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<!----criando a Dev  para cadastro de clientes---->
    <div class="row">
        <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Estudante </h3>
        <!----processando o formulario---->
        <form action="php_action/update.php" method="POST">
        <input type="hidden"  name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>">
                <label for="nome">Nome</label>
        </div>
            <div class="input-field col s12">
                <input type="text" name="disciplinas" id="disciplinas" value= "<?php echo $dados['disciplinas']?>">
                <label for="disciplinas">Disciplinas</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="celular" id="celular" value="<?php echo $dados['celular'] ?>">
                <label for="nome">Celular</label>
        </div>
        <button type="submit" name="btn-editar"   class="btn">Atualizar</button>
        <a href="index.php" class="btn red">Lista de estudantes</a>
        </form>
        </div>
    </div>
<?php
//footer
include 'includes/footer.php';
?>


