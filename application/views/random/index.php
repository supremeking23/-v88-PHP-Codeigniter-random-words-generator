<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Random Word Generator</title>
    <style>
        h1{
            border: 1px solid red;
            padding:20px
        }
    </style>
  </head>
    <body>
        <div class="container">
        <h2>Random (attempt # <?= (!empty($this->session->userdata("attempt")) ? $this->session->userdata("attempt") : 0); ?>)</h2>
        <h1><?= $this->session->userdata("random")?></h1>
            <form action="<?php echo base_url();?>/random_words/process_form" method="post">
            <input type="hidden" name="attempt" value="<?= $this->session->userdata("attempt"); ?>">
                <input type="submit" class="btn btn-primary" name="generate" value="Generate">
                <input type="submit" class="btn btn-danger" name="restart" value="Restart">
            </form>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>