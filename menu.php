<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if($db) : ?>

<div class="row">
    <ul class="collapsible popout">
        <li><?php include(PETISCOS_TEMPLATE); ?></li>
        <li><?php include(COMBOS_TEMPLATE); ?></li>
        <li><?php include(CHURRASCOS_TEMPLATE); ?></li>
        <li><?php include(LA_CARTE_TEMPLATE); ?></li>
        <li><?php include(PIZZARIA_TEMPLATE); ?></li>
    </ul>
    </div>
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>	
<?php endif; ?>
    
<?php include(FOOTER_TEMPLATE); ?>