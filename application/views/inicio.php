<section class="main container">
    <section id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                    <img src="<?= base_url()?>images/maraton_1.jpg" class="adaptar">
                </div>
                <div class="item">
                    <img src="<?= base_url()?>images/maraton_2.jpg" class="adaptar">
                </div>
                <div class="item">
                    <img src="<?= base_url()?>images/maraton_3.jpg" class="adaptar">
                </div>
                 <div class="item">
                    <img src="<?= base_url()?>images/maraton_4.jpg" class="adaptar">
                </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </section>

    <section id="video">
    <div class="block-title"><span class="deco"></span><span class="text">Videos</span></div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m1JnoH_d5xY"></iframe>
                    </div>
            </div>
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OBfMzR9jk5Q"></iframe>
                    </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <h1>Carrea Internacional San Silvestre</h1>
                  <p>Descripción del video</p>
            </div> -->
        </div>
  </section>
    <section id="imagenes_principales">
    <div class="block-title"><span class="deco"></span><span class="text">Novedades</span></div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <img class="img-thumbnail img-responsive" src="<?php echo base_url();?>images/ElsaNoguera_principal.jpg" alt="Generic placeholder image" width="100%">
          <a href="#" class="btn btn-info btn-sm btn-block active" role="button" aria-pressed="true">La carrera</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="<?php echo base_url();?>lacarrera/recorridos"><img class="img-thumbnail img-responsive" src="<?php echo base_url();?>images/recorrido_p.png" alt="Generic placeholder image" width="100%"><a>
           <a href="<?php echo base_url();?>lacarrera/recorridos" class="btn btn-info btn-sm btn-block active" role="button" aria-pressed="true">Recorrido</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="<?php echo base_url();?>lacarrera/categorias"><img class="img-thumbnail img-responsive" src="<?php echo base_url();?>images/premio_p.jpg" alt="Generic placeholder image" width="100%"></a>
          <a href="<?php echo base_url();?>lacarrera/categorias" class="btn btn-info btn-sm btn-block active" role="button" aria-pressed="true">Categorias y Premios</a>
        </div><!-- /.col-lg-4 -->
      </div>
    </section>
</section>