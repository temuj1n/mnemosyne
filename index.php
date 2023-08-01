<?php
$mot_de_passe = '****';
if (isset($_POST['variable_du_formulaire']) AND $_POST['variable_du_formulaire'] == $mot_de_passe)
{
    header( 'Location: ./_mnemosyne/index.php' ); // Redirige vers l'accueil du site
    exit();
}
?>
<?php
    // Vérification des champs vides ou incorrects et affichage du formulaire
    $pass ='password';
    if (!isset($_POST['pass']) OR $_POST['pass'] != $pass)
    {
?>
<div>
    <title>Archives photographiques</title>
        <style>
            div {
                text-align: center;
                 top: 50%;
                 position: absolute;
                 transform: translate(-50%,-50%);
                left: 50%;
                }
        </style>
    <p>Mot de passe nécessaire pour parcourir la base de données :
    </p>
    <form method="post" action="index.php">
    <input type="password" name="pass" />
    <input type="submit" value="Valider" />
    </form>
</div>
<?php
    }
    else
    {
        header( 'Location: ./_mnemosyne/index.php' ); // Redirige vers l'accueil du site
        exit();
    }
?>
