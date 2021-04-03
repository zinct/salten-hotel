<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          

			<div class="row">
				<div class="col-lg-6">
					<?php echo form_open_multipart('user/edit');?>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="text" class="form-control" name="email" id="email" value="<?= $user['email']; ?>" readonly>
					  </div>
					  <div class="form-group">
					    <label for="full_name">Full Name</label>
					    <input type="text" name="name" class="form-control" id="full_name" value="<?= $user['name']; ?>">
					    <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
					  </div>
					  <div class="containers mt-4">
						  <div class="row">
						  	<div class="col-3">
						  		<label for="image">Image Profile</label>
						  	</div>
						  	<div class="col-3">
						  		<img class="img-thumbnail " src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="User Profile">
						  	</div>
						  	<div class="col-6">
						  		<div class="input-group mb-3">
								  <div class="custom-file">
								    <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">								    
								    <label class="custom-file-label" id="label-image" for="image">Choose file</label>
								  </div>
								</div>
						  	</div>
						  </div>
						</div>
						<div class="btns mt-4">
							<button type="submit" class="btn btn-outline-primary px-5 mr-1">Edit</button>	
						</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



      

