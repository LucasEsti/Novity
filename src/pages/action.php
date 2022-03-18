<?php 
require_once __DIR__.'./../pdo/Formulaire.php';
$form = new Formulaire();
?>

<?php
    if ($request->isMethod('post')) {
?>
    <div>
        Message envoyé:
        à : <?php echo htmlspecialchars($_POST['email']); ?><br>
        Sujet: <?php echo htmlspecialchars($_POST['subject']); ?><br>
        Message: <?php echo htmlspecialchars($_POST['message']); ?><br>
    </div>
<?php 
    }
?>
