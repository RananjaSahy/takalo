
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo site_url("assets/images/shoe_1.png");?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <p>Titre :<?php echo $objet['titre'] ;?></p>     
            <p>Description :<?php echo $objet['description'] ;?></p>     
               
          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_subject" class="text-black">Categorie</label>
              <select style="  width: 50%;border-radius: 2px;height:100%;">
                <?php for ($i=0; $i <count($categories['nomcategorie']) ; $i++) { ?>
                
                  <option value=""><?php echo $categories['nomcategorie'][$i];?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          
          <div class="mb-5">
              <a href="#" class="btn btn-sm btn-primary">Modifier</a>
              <div class="input-group mb-3" style="max-width: 120px;">
              </div>

            </div>
            <p><a href="#" class="buy-now btn btn-sm btn-primary">Supprimer</a></p>

          </div>
        </div>
      </div>
    </div>
