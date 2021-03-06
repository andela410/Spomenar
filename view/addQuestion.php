<?php
require_once __SITE_PATH . '/view/_header.php';

// Ispis u slucaju greske
if (isset($error) && isset($errorMessage) && $error) echo '<p class="alert alert-danger">' . $errorMessage . "</p>"; ?>

<!-- Forma za dodavanje novog pitanja u spomenar.
     Forma je napravljena sa Bootstrap stilom.
     Na submit se poziva funckija add_question iz SpomenarControler.php -->
<br>
<br>
<form method="post" action="<?php echo __SITE_URL . '/index.php?rt=spomenar/add_question' ?>">
    <div class="form-group">
        <h4 class="h_pitanje">Dodajte novo pitanje u spomenar</h4>
        <input class="form-control" id="question" name="question" type="text">
    </div>
    <br>
    <div class="float-end">
        <button class="btn btn-primary" type="submit">Dodaj</button>
    </div>
</form>

<?php
require_once __SITE_PATH . '/view/_footer.php';
