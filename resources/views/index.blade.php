<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
    <title>Message</title>
  </head>
  <body>
    <form class="ui small form" action="/saveMessageToDB" method="post">
      {{ csrf_field() }}
      <div class="contentField">
        <label for="content">Contenu du message</label>
        <input type="text" name="content">
      </div>
      <div class="offsetField">
        <label for="offset">Décalage</label>
        <input type="text" name="offset">
      </div>
      <button class="ui purple button" type="submit" name="button">Envoyer</button>
    </form>
    @foreach ($messages as $message)
       {{$message->content}}
    @endforeach
  </body>
</html>
