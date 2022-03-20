<?php 
include __DIR__.'./../pdo/Formulaire.php';
$form = new Formulaire();
$form->save();
?>

<form action="action" method="post">
    Tod <input type="email" name="email" required/><br>
    subject : <input type="text" name="subject" /><br>
    <textarea name="message" required></textarea>
    <input type="submit" value="OK">
</form>

