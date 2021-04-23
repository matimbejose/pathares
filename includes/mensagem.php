<?php
//iniciando a sessao mensagem
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script> 
//messagem personalizada
window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
};
</script>

<?php 
endif;
//limpando a sessao
session_unset(); 
?>