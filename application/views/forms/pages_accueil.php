<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        
    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="<?php echo site_url("assets/images/women.jpg");?>" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Femme</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="<?php echo site_url("assets/images/children.jpg");?>" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Enfant</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="<?php echo site_url("assets/images/men.jpg");?>" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Homme</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Accueil</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">

                <?php
                if ($listeobjets != null) {
                  for ($i = 0; $i < count($listeobjets['idobjet']); $i++) { ?>   
                  <div class="item">
                        <div class="block-4 text-center">
                          <figure class="block-4-image">
                            <img src="<?php echo site_url("assets/images/shoe_1.jpg"); ?>" alt="Image placeholder" class="img-fluid">
                          </figure>
                          <div class="block-4-text p-4">
                            <h3><?php echo $listeobjets['titre'][$i]; ?></h3>
                            <p class="mb-0"><?php echo $listeusers[$i]['nom']; ?></p>
                            <p class="text-primary font-weight-bold"><?php echo $listeobjets['prixestime'][$i]; ?></p>
                            <a href="<?php echo site_url('frontoffice/pagedeproposition')."?idobjet=".$listeobjets['idobjet'][$i]; ?>" class="buy-now btn btn-sm btn-primary">Proposer</a>
                          </div>
                        </div>
                    
                  </div>
                  
                <?php }
                }?>

            </div>
          </div>
        </div>
      </div>
    </div>
