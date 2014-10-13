<?php if (($lastname!="") && ($firstname!="")): ?>

Hola <?php echo $lastname . ", " . $firstname; ?>

<?php else: ?>

No has introduit res. 

<?php endif; ?>

<form action="<?php echo base_url('/index.php/bondia/example_form'); ?>" method="POST">
Nom: <input type="text" name="firstname"><br>
Cognom: <input type="text" name="lastname"><br>
<input type="submit" value="Envia">
</form>