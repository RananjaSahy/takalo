<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Ajout d'objet</h2>
          </div>
          <div class="col-md-7">

            <form action="<?php echo site_url('frontoffice/ajoutobjet'); ?>" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="titre" class="text-black">Titre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="titre" name="titre">
                  </div>
                 </div>
                
                 <div class="form-group row">
                  <div class="col-md-12">
                    <label for="description" class="text-black">Desription </label>
                    <textarea name="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                
                 <div class="form-group row">
                  <div class="col-md-12">
                    <label for="prixestime" class="text-black">Prix estimatif</label>
                    <input type="number" class="form-control" id="prixestime" name="prixestime">
                  </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="categorie" class="text-black">Categorie</label>
                        <select style="  width: 50%;border-radius: 2px;height:100%;" name="categorie">
                            <?php for ($i=0; $i < count($categories['idcategorie']); $i++) {
                              ?> <option value="<?php echo $categories['idcategorie'][$i]; ?>"><?php echo $categories['nomcategorie'][$i]; ?></option> <?php
                            } ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ajouter">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
