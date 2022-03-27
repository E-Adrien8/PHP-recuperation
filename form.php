<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>
<form  action="./thanks.php" method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_nom">
    </div>
    <div>
        <label for="prenom">Prénom : </label>
        <input type="text" id="prenom" name="user_prenom">
    </div>
    <div>
        <label for="telephone">Téléphone : </label>
        <input type="tel" id="telephone" name="user_telephone">
    </div>
    <div>
        <label  for="email">Email :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <br>
    <div>
        <label>
            <select name="user_sujet">
                <option value="">Exemple de sujet</option>
                <option value="contact">Contact</option>
                <option value="depot">Dépot de dossier</option>
            </select>
        </label>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>




