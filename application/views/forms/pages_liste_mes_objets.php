<div class="site-section site-section-sm site-blocks-1">
    <div class="container">


    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h3><a href="<?php echo site_url('frontoffice/pageajout'); ?>">+ ajouter nouvel objet</a></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">

                <?php if ($mesobjets!=null) {
                    
                
                for($i = 0 ; $i < count($mesobjets['idobjet']) ; $i ++){ ?>   
                  <div class="item">
                        <a href="<?php echo site_url('frontoffice/detailsmesobjets')."?idobjet=".$mesobjets['idobjet'][$i] ; ?>">
                        <div class="block-4 text-center">
                          <figure class="block-4-image">
                            <img src="<?php echo site_url("assets/images/shoe_1.jpg"); ?>" alt="Image placeholder" class="img-fluid">
                          </figure>
                          <div class="block-4-text p-4">
                            <h3><a href="#"><?php echo $mesobjets['titre'][$i]; ?></a></h3>
                            <p class="mb-0"><?php echo $user['nom']; ?></p>
                            <p class="text-primary font-weight-bold"><?php echo $mesobjets['prixestime'][$i]; ?></p>
                            
                          </div>
                        </div>
                        </a>
                  </div>
                  
                <?php } 
            } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
