        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <button href="" id="btn-menu" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Sub Menu Menu
            </button>
          </div>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

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
                      <th>Nama Menu</th>
                      <th>Menu Parent</th>
                      <th>Icon</th>
                      <th>Url</th>                      
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sub_menu as $sub): ?>
                      <tr>
                        <td><?= $sub['name'] ?></td>
                        <td><?= $sub['menu_name'] ?></td>
                        <td><i class="<?= $sub['icon'] ?>"></i> (<?= $sub['icon'] ?>)</td>
                        <td><?= $sub['url'] ?></td>
                        <td>
                          <a href="" class="badge badge-dark px-2 py-1 update-menu" data-toggle="modal" data-target="#exampleModal" data-menuid="<?= $sub['sub_id']; ?>"><i class="fas fa-fw fa-edit"></i> Update</a>
                          <a href="<?= base_url('menu/delete'); ?>/<?= $sub['sub_id']; ?>" class="badge badge-danger px-2 py-1 ml-1" onclick="return confirm('Are you sure about it?')"><i class="fas fa-fw fa-trash"></i> Delete</a>
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
              <h5 class="modal-title" id="label">Insert New Sub Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

               <form id="form-input-sub-menu" action="" method="post">
                
                <div class="form-group">                  
              <label><b>Menu</b></label>
              <select name="menu_id" id="menu_id" class="form-control" required="">
                <option value="">Select Menu...</option>
                <?php foreach ($menu as $menu): ?>
                  <option value="<?= $menu['menu_id']; ?>"><?= $menu['menu_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label><b>Title Sub menu</b></label>
              <input type="text" id="title" name="title" autocomplete="off" class="form-control" placeholder="Enter name..." required="">
            </div>          
            <div class="form-group">
              <label><b>Icon</b></label>
              <input type="text" id="icon" name="icon" autocomplete="off" class="form-control" placeholder="Enter name..." required="">
            </div>
            <div class="form-group">
              <label><b>Url</b></label>
              <input type="text" id="url" name="url" autocomplete="off" class="form-control" placeholder="Enter name..." required="">
            </div>  
            <div class="form-group">
              <label for=""><b>Status</b></label>
              <select name="is_active" required="" class="form-control" id="is_active">
                <option value="1">Active</option>
                <option value="0">Not active</option>
              </select>
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
