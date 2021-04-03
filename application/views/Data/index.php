        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <button href="" id="btn-menu" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Menu
            </button>
          </div>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- Message -->
          <?= message_helper(); ?>
          <!-- Message -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Gambar</th>
                      <th>Nama Kamar</th>
                      <th>Jenis Kamar</th>
                      <th>Harga</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kamar as $kamar): ?>
                      <tr>
                        <td><img src="<?= BASE_URL('assets/img/kamar/') . $kamar['image'] ?>" width="200px" ></td>
                        <td><?= $kamar['nama_kamar'] ?></td>
                        <td><?= $kamar['jenis'] ?></td>
                        <td>Rp. <?= number_format($kamar['harga'],0,",","."); ?>,00,-</td>
                        <td>
                          <a href="" class="badge badge-dark px-2 py-1 update-menu" data-toggle="modal" data-target="#exampleModal" data-menuid="<?= $kamar['kamar_id']; ?>"><i class="fas fa-fw fa-edit"></i> Update</a>
                          <a href="<?= base_url('menu/delete'); ?>/<?= $kamar['kamar_id']; ?>" class="badge badge-danger px-2 py-1 ml-1" onclick="return confirm('Are you sure about it?')"><i class="fas fa-fw fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                    <?php endforeach ?>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Modal -->
      <div class="container">
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="label1">Insert New Sub Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <?= form_open_multipart('Data/index');?>
                  <div class="form-group">
                    <label for="image"><b>Gambar Kamar</b></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="image" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">                    
                        <label class="custom-file-label" id="label-image" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label><b>Nama Kamar</b></label>
                    <input type="text" name="nama_kamar" autocomplete="off" class="form-control" placeholder="Nama Kamar..." required="">
                  </div>
                  <div class="form-group">
                    <label><b>Jenis kamar</b></label>
                    <select name="jenis_id" required class="form-control">
                      <option value="">Pilih Jenis...</option>
                      <?php foreach ($jenis_kamar as $jenis): ?>
                        <option value="<?= $jenis['jenis_id'] ?>"><?= $jenis['jenis'] ?></option>
                      <?php endforeach ?>                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label><b>Harga</b></label>
                    <input type="number" name="harga" autocomplete="off" class="form-control" min="0" placeholder="Harga..." required>
                  </div>    
            </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="btn-insert" class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
