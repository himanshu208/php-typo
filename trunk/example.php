<?php

include("typos.class.php");


if(sizeof($_POST)){
	$typo = new Typo();
	$dominios_mal_tipeados = $typo->get($_POST['name']);
}

?>
<form name="form1" method="post" action="">
  <p>
    <input name="name" type="text" id="name" value="<?= $_POST['name']; ?>"> . <input name="tld" type="text" id="tld" size="5" maxlength="3" value="<?= $_POST['tld']; ?>">
    <input type="submit" name="Submit" value="Enviar">
  </p>
  <p>
        <textarea name="domains" cols="50" rows="20" id="domains"><?php
            if (sizeof($_POST)){
                foreach ($dominios_mal_tipeados as $dominios_mal_tipeado){
                    echo $dominios_mal_tipeado . "." . $_POST['tld'] ."\n";
                }
            }
        ?>
        </textarea>
    </p>
</form>
