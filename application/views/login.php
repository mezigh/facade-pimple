<?php $template="master";?>
       
<?php $title = "LOGIN";?>
<!-- faire panel pour login -->

<form method="post" action="http://localhost:8000/loginprocess" >
    <fieldset>
        <legend>LOGIN</legend>
        <label for="name">Nom d'utilisateur</label>
        <input type="text" name="name" id="name" placeholder="votre nom">
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password" placeholder="votre mot de passe">
        <input type="submit" value="Envoyer">
    </fieldset>
</form>


 