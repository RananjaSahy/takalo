<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-section block-3 site-blocks-2 bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 site-section-heading text-center pt-4">
                                <h2><?php echo $objet['titre']; ?></h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <a class="block-2-item" href="#">
                                <figure class="image">
                                    <img src="<?php echo site_url("assets/images/children.jpg");?>" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>          
                        <div class="col-md-6">
                            <p>Description : <?php echo $objet['description']; ?></p>     
                            <p>Proprietaire : Moi</p>   
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <form action="frontoffice/ajouterphoto" method="post">
                                    <p><input type="file" ><input type="submit" value="ajouter une photo"></p>
                                    
                                    </form>
                                </div> 
                            </div>          
                            <div class="mb-5">
                                <a href="<?php echo site_url('frontoffice/supprimerobjet')."?idobjet=".$objet['idobjet']; ?>" class="btn btn-sm btn-primary">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
