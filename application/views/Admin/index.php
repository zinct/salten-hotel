Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Simpan Sebagai PDF</a>
          </div>

			<!-- ---------------------------------Jumlah Data------------------------------------------------- -->
			<div class="row">

	            <!-- Jumlah user -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user_num ?> User.</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-user fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Jumlah Kamar -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-success shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kamar</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kamar_num ?> Kamar.</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-bed fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Jumlah Jenis Kamar -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-warning shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Jenis Kamar</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenis_num ?> Jenis Kamar.</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-comments fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>



        	</div>
        <!-- ----------------------------------------------------------------------------------------------------- -->

        <!-- ------------------------------------------Sisa Kamar------------------------------------------------- -->
			<div class="row">
				<div class="col-lg-12">

				<!-- Project Card Example -->
	              <div class="card shadow mb-4">
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
	                </div>
	                <div class="card-body">
	                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
	                  <div class="progress mb-4">
	                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </div>
	              </div>
				
				</div>
			</div>





           <!-- jangan dihapus  -->
          </div>

        </div>
        <!-- /.container-fluid