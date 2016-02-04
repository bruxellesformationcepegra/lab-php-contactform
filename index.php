<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Contactez-nous</title>
  
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
    <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">  
</head>
<body>
  
  <div class="contact">
      <h1>Contactez nous</h1>
      <div class='error'></div>

    <form id="contact-form" class="form-horizontal" action="index.php" method="POST">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="fullName">Nom</label>
                <div class="controls">
                    <input type="text" id="fullName" name="fullName" placeholder="Entrez votre nom et prénom" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="emailField">Adresse mail</label>
                <div class="controls">
                    <input type="text" id="emailField" name="email" placeholder="Entrez votre adresse e-mail" />
                </div>
            </div>
           
           
            <div class="control-group">
                <label class="control-label" for="message">Message</label>
                <div class="controls">
                    <textarea id="message" rows="5" name="message" placeholder="Entrez votre message"></textarea>

                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </fieldset>
    </form>
</div>


</body>
</html>

