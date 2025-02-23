<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>
    <h1>Home!</h1>

    <ul>
        <?php foreach($registros as $registro): ?>
            <li> <?php echo $registro->firstName;  ?> </li>
        <?php endforeach;  ?>
    </ul>

<!--    --><?php //echo $pager->only(['s'])->links('default', 'teste_full');  ?>
    <?php echo $pager->simpleLinks('default', 'default_simple');  ?>

<?php echo $this->endSection() ?>
