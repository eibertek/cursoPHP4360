<?php if(validateUser()) { ?>
    <div><?php include("Login/home.php");?></div>
<?php } ?>
<?php if(!validateUser()) { ?>
<form action="" method="POST">
    <input placeholder="Usuario" name="user"/>
    <input type="password" name="passd" placeholder="Contraseña"/>
    <input type="submit" value="submit" />
</form>
    <?php if(validate()) { ?>
    No funciono
    <?php } ?>
<?php } ?>