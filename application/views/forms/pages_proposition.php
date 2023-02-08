<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container">
    <div class="site-section">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/cloth_1.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <p>Description :Test</p>     
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Echanger contre:</h2>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">

            <?php for($i = 0 ; $i < 20 ; $i ++){ ?>   
              <div class="item">
                  <a href="<?php echo site_url('#'); ?>">
                    <div class="block-4 text-center">
                      <figure class="block-4-image">
                        <img src="<?php echo site_url("assets/images/shoe_1.jpg");?>" alt="Image placeholder" class="img-fluid">
                      </figure>
                      <div class="block-4-text p-4">
                        <h3><a href="#">Titre</a></h3>
                        <p class="mb-0">Proprietaire</p>
                        <p class="text-primary font-weight-bold">200 000Ar</p>
                      </div>
                    </div>
                  </a>
              </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
