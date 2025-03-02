<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>
    <h1>Contact!</h1>
    <h2>Paramos na Aula 32 >>> <a href="https://www.youtube.com/watch?v=BzXjRd309o4&list=PLyugqHiq-SKegiaCBJ4XaFp-yr87oFKts&index=32"> Link para aula!</a></h2>
    <br>

    <?php //if (session()->has('errors')): ?>
        <?php //echo session()->getFlashdata('errors'); ?>
    <?php //endif; ?>

    <form action="<?php echo url_to('contact.store')?>" method="post">
        <input type="text" name="name" placeholder="Name" value="<?php echo old('name') ?>">
        <?php echo session()->getFlashdata('errors')['name'] ?? ''; ?>

        <input type="text" name="email" placeholder="E-mail" value="<?php echo old('email') ?>">
        <?php echo session()->getFlashdata('errors')['email'] ?? ''; ?>

        <input type="text" name="subject" placeholder="Subjetct" value="<?php echo old('subject') ?>">
        <?php echo session()->getFlashdata('errors')['subject'] ?? ''; ?><br>

        <textarea name="message" id="" cols="30" rows="12"><?php echo old('message') ?></textarea>
        <?php echo session()->getFlashdata('errors')['message'] ?? ''; ?>

        <button type="submit">Send</button>

        <select name="colors" id="">
            <option value="green" <?php echo old('colors') == 'green' ? 'selected' : ''; ?>>green</option>
            <option value="yellow" <?php echo old('colors') == 'yellow' ? 'selected' : ''; ?>>Yellow</option>
            <option value="red" <?php echo old('colors') == 'red' ? 'selected' : ''; ?>>Red</option>
        </select>

    </form>

<?php echo $this->endSection() ?>
