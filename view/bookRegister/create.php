<?php 
require_once('/Applications/MAMP/htdocs/02_TutorialCRUD/view/head/head.php');

?>

<form action = "store.php" method = "POST" autocomplete = "off">
  <div class="mb-3">
    <label for="exampleInputISBN"  class="form-label">ISBN</label>
    <input type="text" name ="ISBN" required placeholder = "Inserta el ISBN" class="form-control" id="exampleInputTitle">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputAutor" class="form-label">Autor</label>
    <input placeholder = "Inserta el nombre del autor" type="text" name = "autor" class="form-control" id="exampleInputAutor">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputTitle"  class="form-label">Titulo</label>
    <input type="text" name = "titulo" placeholder = "Inserta el título" class="form-control" id="exampleInputTitle" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputYear"  class="form-label">Año</label>
    <input type="number" name = "año" placeholder = "Inserta el año" class="form-control" id="exampleInputYear">
  </div>

  </div>
  <div class="mb-3">
    <label for="exampleInputDescripcion"  class="form-label">Descripcion</label>
    <input type="text" name = "descripcion" placeholder = "Inserta una descripcion breve" class="form-control" id="exampleInputYear">
  </div>

  <!--<div class="mb-3">
    <label for="exampleInputFile"  class="form-label">Imagen</label>
    <input type="file" name= "img-file" placeholder = "Inserta la imagen de portada" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
    <div id="fileHelp" class="form-text">Inserta una imagen.</div>
  </div>-->
  
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class= "btn btn-danger" href="./index.php">Cancelar</a> <!--xq no funciona la ruta-->
</form>



<?php 
require_once('/Applications/MAMP/htdocs/02_TutorialCRUD/view/head/footer.php');

?>