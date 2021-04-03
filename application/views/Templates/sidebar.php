    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
          <i class="fas fa-hotel"></i>
        </div>
        <div class="sidebar-brand-text mx-2">salten hotel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <?php foreach ($menu as $menu): ?>
        <!-- Heading -->
        <div class="sidebar-heading mb-1">
          <?= $menu['menu_name'] ?>
        </div>

        <?php 

          $menu_id = $menu['menu_id'];
          $sub_menu = $this->db->get_where('tb_sub_menu', ['menu_id' => $menu_id])->result_array();

         ?>
        <?php foreach ($sub_menu as $sub): ?>
          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php if ($title == $sub['name']): ?>
            active
          <?php endif ?>">
            <a class="nav-link py-1" href="<?= BASE_URL(); ?><?= $sub['url'] ?>">
              <i class="<?= $sub['icon'] ?>"></i>
              <span><?= $sub['name'] ?></span></a>
          </li>
        <?php endforeach ?>

        <!-- Divider -->
      <hr class="sidebar-divider mt-3">
        
  
      <?php endforeach ?>      

      

      

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL('User/index'); ?>">
          <i class="fas fa-fw fa-door-open"></i>
          <span>Kembali</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->