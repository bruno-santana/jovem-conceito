<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if($db) : ?>

    <section id="logo" class="center">
        <img src="<?php echo BASEURL; ?>images/Logo.png" width="35%" alt="Logo do restaurante">
    </section>
    <section id="botoes" class="center">
        <a class="waves-effect waves-light btn amber accent-3" style="width: 30%"
        href="<?php echo BASEURL;?>menu.php">
            <span class="black-text"><b>Cardápio</b></span>
        </a>&nbsp;
        <a class="waves-effect waves-light btn amber accent-3" style="width: 30%"
        href="<?php echo BASEURL;?>contact.php">
            <span class="black-text"><b>Fale Conosco</b></span>
        </a>
    </section>
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>	
<?php endif; ?>
    
<?php include(FOOTER_TEMPLATE); ?>