<?php 

//conexao com base de dados  mysql
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//messagem
include_once 'includes/mensagem.php';
?>
<!----criando a Dev row ---->
    <div class="row">
        <div class="col s12 m6 push-m3">
        <h3 class="light"> Estudantes </h3>
        <!---vamos criar a nossa tabela --->
       <table class="striped">
        <thead>
            <tr> 
                <th>Nome:</th>
                <th>Disciplinas: </th>
                <th>Celular:</th>
            </tr>
            <tbody>
                <?php
                    $sql= "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);

                    //condicao para o lope ocorrer
                    if(mysqli_num_rows($resultado) > 0 ):

                    //abrindo o lope
                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['disciplinas']?></td>
                    <td><?php echo $dados['celular']?></td>
                    <td>
                    <a  href="editar.php?id=<?php echo $dados['id']?>" class="btn-floating blue">
                    <i class="material-icons">edit</i>
                    </a>
                    </td>
                    <td> 

                    <!---Parte para excluir registo----->
                    <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger">
                    <i class="material-icons">delete</i>
                    </a>
                    </td>
                    </tr>

                    <!---Modal structure---->
                    <div id="modal<?php echo $dados['id']; ?>"  class="modal">
                        <div class="modal-content">
                            <h4>Opa !</h4>
                            <p>tem certeza que deseja excluir esse cliente ? </p>
                            </div>
                            <div class="modal-footer">
                              
                                <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                                <button type="submit" name="btn-deletar" class="btn red ">sim,quero deletar</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>

                </tr>
                <?php
                //fechando o loope
                    endwhile;
                else:
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                endif;
                ?>
            </tbody>
        </thead>
        </table>
            <br>
            <a href="adicionar.php" class="btn"> Adicionar estudante </a>
             </br>
        </div>
    </div>
<?php
//footer
include 'includes/footer.php';
?>


