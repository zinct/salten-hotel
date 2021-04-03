        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">

            <!-- Slide show -->
            <div class="slide">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active bg-login">
                    <img src="<?= BASE_URL('assets'); ?>/img/slideshow/slide1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Promo Kamar Exclusive</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= BASE_URL('assets'); ?>/img/slideshow/slide2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= BASE_URL('assets'); ?>/img/slideshow/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

            <!-- End of slideshow -->
            
            <div class="list-hotel my-5">
              <div class="card">
                <div class="card-body mx-auto">
                  <?php foreach ($jenis_kamar as $jenis): ?>
                    <button type="submit" data-kategori="<?= $jenis['jenis'] ?>" class="kategori btn btn-outline-<?= $jenis['warna']; ?> px-5 py-2 mx-2">
                      <i class="<?= $jenis['icon'] ?> mr-3"></i> <?= $jenis['jenis'] ?>
                    </button>
                  <?php endforeach ?>                  
                </div>
              </div>
            </div>

            <?php  ?>

            <!-- List Room -->
            <div class="row list-kamar">
            <?php foreach ($kamar as $kamar): ?>
              
                <div class="col mx-0">
                  <div class="card" style="width: 15rem;">
                    <img src="<?= BASE_URL('assets/img/kamar/') . $kamar['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?= $kamar['nama_kamar'] ?></h5>

                      <p class="card-text">
                        <b class="text-<?= $kamar['warna']; ?>"><?= $kamar['jenis'] ?></b> : <br>
                        <?= word_limiter($kamar['fasilitas'], 14); ?>
                      </p>
                      <p><small class="text-danger">Harga Rp.<?= number_format($kamar['harga'],0,",","."); ?>.00.-</small></p>
                      <?php if ($this->session->userdata('email')): ?>
                        <a href="#" class="btn btn-primary">Check in</a>
                      <?php else: ?>
                        <a href="<?= BASE_URL('Auth/index'); ?>" class="btn btn-light">Login terlebih dahulu</a>
                      <?php endif ?>                
                    </div>
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            
            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
