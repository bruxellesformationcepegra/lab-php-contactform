# Un beau formulaire de contact

Quoi de plus pratique et courant qu'un formulaire de contact ?

1. Le formulaire envoie les données vers index.php, il faut donc créer une logique pour dire "Quand j'arrive sur la page en GET, j'affiche le formulaire, quand j'y arrive en POST, je traite les données du formulaire et je l'affiche"
2. Il faut bien évidemment récupérer les données du formulaire, les **nettoyer** et les **valider** côté serveur.
3. Si les données sont valides, utilisez PHPMailer (https://github.com/PHPMailer/PHPMailer) ou SendGrid (https://sendgrid.com/docs/Integrate/Code_Examples/php.html) pour envoyer le mail. Le serveur SMTP de Bruxelles Formation (uniquement accessible depuis notre réseau) est smtp.brufor.be, port 25.
4. Si les données ne sont pas valides, il faut afficher le formulaire avec les messages d'erreur pour chaque champ. Veillez à conserver les données remplies dans les champs (hé oui, ça ne se fait pas tout seul)
5. Checker si le mail a été bien envoyé. Si ce n'est pas le cas, affichez un message d'erreur dans la page. Si c'est OK, faites une redirection vers confirmation.html avec `header('Location: http://www.example.com/'); exit;`

Bon c'est plutôt expéditif comme brief, à détailler !