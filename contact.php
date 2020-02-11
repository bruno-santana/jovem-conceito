<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php include(ENVIO_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if($db) : ?>

<form action="<?php $PHP_SELF; ?>" method="POST">
    <div class="row">
        <div class="input-field col s12 m6">
            <input type="text" name="nome">
            <label for="nome">Nome</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6">
            <input type="email" name="email">
            <label for="email">E-mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6">
            <input type="tel" name="telefone">
            <label for="telefone">Telefone</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6">
            <textarea class="materialize-textarea" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            <label for="mensagem">Mensagem</label>
        </div>
    </div>
    <div class="row">
        <button class="waves-effect waves-light btn amber accent-3" style="width: 30%" type="submit" name="BTEnvia">Enviar
            <i class="material-icons right">send</i>
        </button>
        <button class="waves-effect waves-light btn amber accent-3" style="width: 30%" type="reset" name="BTApaga">Apagar
            <i class="material-icons right">delete</i>
        </button>
    </div>
</form>

<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>	
<?php endif; ?>
    
<?php include(FOOTER_TEMPLATE); ?>