<?php

require_once 'controllerHome.php';

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDD Video Games</title>


</head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BDD Video Games</title>
</head>

<body class="header text-white text-center">
    <div class="border border-white text-center">
        <div class="justify-content-center p-5 ">
            <h1 class="color_text text-center  p-5">Bienvenue sur la BDD Video Games </h1>
        </div>
    </div>
    <?php foreach ($obj as $value) { ?>
        
    <div class=" games border border-light justify-content-center p-4 "style="width: 30rem;">
        <h1 class=" p-4"> <?= $value->Nom_du_jeu ?></h1>
        <div class="p-4 text-center" >
            <img src="../assets/img/<?= $value->cover ?>"style="width: 25rem;" class="border border-white" alt="">
            <div class="text-center p-2 ">
               <div class=" p-2"> <?= $value->descriptions ?></div>
               <p class="text-start"><strong class=" text-danger"> Mode de jeu:</strong> <?= $value->Mode_de_jeu ?></p>
              <p class="text-start"><strong class=" text-danger"> Genre:</strong> <?= $value->Genre ?></p>
              <p class="text-start"><strong class=" text-danger"> Studios:</strong> <?= $value->Studio ?></p>
              <p class="text-start"><strong class=" text-danger"> Date de sortie:</strong> <?= $value->Date_de_sortie ?></p>
              <p class="text-start"><strong class=" text-danger"> Pegi:</strong> <?$pegi?><?=  $value->Pegi ?></p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + d'infos
</button>



            </div>
        </div>
    </div>
 
  
  <!-- Modal -->
<div class="games modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><?= $value->Nom_du_jeu ?></h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <p class="text-start"><strong class=" text-danger"> Mode de jeu:</strong> <?= $value->Mode_de_jeu ?></p>
              <p class="text-start"><strong class=" text-danger"> Genre:</strong> <?= $value->Genre ?></p>
              <p class="text-start"><strong class=" text-danger"> Studios:</strong> <?= $value->Studio ?></p>
              <p class="text-start"><strong class=" text-danger"> Date de sortie:</strong> <?= $value->Date_de_sortie ?></p>
              <p class="text-start"><strong class=" text-danger"> Pegi:</strong> <?$pegi?><?=  $value->Pegi ?></p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
 
    </div>
  </div>
</div>
</div>
<?php }?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>