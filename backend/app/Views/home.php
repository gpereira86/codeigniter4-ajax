<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>
    <h1>Estamos na Aula 26 => <a href="https://www.youtube.com/watch?v=S7L_1UhvcQs&list=PLyugqHiq-SKegiaCBJ4XaFp-yr87oFKts&index=26">Link da Aula</a></h1>

    <ul>
        <?php foreach($registros as $registro): ?>
            <li> <?php echo $registro->firstName;  ?> </li>
        <?php endforeach;  ?>
    </ul>

<!--    --><?php //echo $pager->only(['s'])->links('default', 'teste_full');  ?>
    <?php echo $pager->simpleLinks('default', 'default_simple');  ?>

<?php echo $this->endSection() ?>
