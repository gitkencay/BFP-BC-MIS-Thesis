<?php require 'error.php'; ?>

<?php if (count($errors) > 0 ):?>
    <div class = "errors">
        <?php foreach ($errors as $error ); ?>
            <p> <?php echo $error; ?> </p>
        <?php endforeach ?>
    </div>

<?php endif ?>

value = "<?php echo $offtype; ?>"
