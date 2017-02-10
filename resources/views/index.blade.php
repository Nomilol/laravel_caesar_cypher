<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
    <title>Message</title>
  </head>
  <body>
    <form class="ui small form" action="/addMessageToDataBase" method="post">
      <div class="contentField">
        <label for="content">Contenu du message</label>
        <input type="text" name="content">
      </div>
      <div class="offsetField">
        <label for="offset">Décalage</label>
        <input type="text" name="offset">
      </div>
      <button class="ui purple button" type="button" name="button">Envoyer</button>
    </form>
  </body>
</html>
