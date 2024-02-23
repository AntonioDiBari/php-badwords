<?php 
$paragraph = $_POST["paragrafo"];
$word = $_POST["parola_censura"];

$paragraph = trim($paragraph);
$word = trim($word);


$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($word, "***", $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);



?>

<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>php-badwords</title>
    <!-- link icon Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <!-- link CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="card p-3">
                    <h1>Paragrafo Originale</h1>
                    <span>lungo ben <?= $paragraph_length ?> caratteri</span>
                    <?= $paragraph;
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-3">
                    <h1>Paragrafo censurato</h1>
                    <span>ora è lungo <?= $censored_paragraph_length ?> caratteri</span>
                    <?= $censored_paragraph;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
    