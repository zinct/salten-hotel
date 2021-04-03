 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <div class="row">
          	<div class="col-lg-5">
          		<!-- Message -->                      
                    <?= message_helper(); ?>                      
                <!-- Message -->
          	</div>
          </div>

			<div class="row">
				<div class="col-5">
		          	<div class="card mb-3" >
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src="<?= base_url('assets/img/profile') ?>/<?= $user['image']; ?>" class="card-img" alt="...">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title"><b><?= $user['name']; ?></b></h5>
					        <p class="card-text"><?= $user['email']; ?></p>
					        <p class="card-text"><small class="text-muted">Member Since <?= date('d, F Y', $user['time_created']) ?></small></p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

