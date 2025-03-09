<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>
<h1>User Create!</h1>
<!--<h2>Paramos de estudar na Aula 32 >>> <a href="https://www.youtube.com/watch?v=BzXjRd309o4&list=PLyugqHiq-SKegiaCBJ4XaFp-yr87oFKts&index=32"> Link para aula!</a></h2>-->
<br>

<?php //if (session()->has('errors')): ?>
<?php //echo session()->getFlashdata('errors'); ?>
<?php //endif; ?>

<form action="<?php echo url_to('user.store')?>" method="post">
    <input type="text" name="firstName" placeholder="First Name" value="<?php echo old('firstName') ?>">
    <?php echo session()->getFlashdata('errors')['firstName'] ?? ''; ?>

    <input type="text" name="lastName" placeholder="Last Name" value="<?php echo old('lastName') ?>">
    <?php echo session()->getFlashdata('errors')['lastName'] ?? ''; ?>

    <input type="text" name="email" placeholder="E-mail" value="<?php echo old('email') ?>">
    <?php echo session()->getFlashdata('errors')['email'] ?? ''; ?>

    <input type="text" name="password" placeholder="Password" value="<?php echo old('password') ?>">
    <?php echo session()->getFlashdata('errors')['password'] ?? ''; ?>

    <button type="submit">Create</button>

</form>

<?php echo $this->endSection() ?>
