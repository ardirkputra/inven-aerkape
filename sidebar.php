  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $main_url ?> dasboard.php" class="brand-link">
      <img src="<?= $main_url ?>asset/image/Logo-MBG.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPPG CIGOMBONG</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= 'aezakmi' ?></a>
        </div>
      </div>
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?= $main_url ?> dasboard.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt text-sm"></i>
                    <p>Dashboard</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-warehouse text-sm"></i>
                    <p>
                        Gudang
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>
                               Stock Bahan Baku
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>
                                Bahan Baku Masuk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>
                                Bahan Baku Keluar
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-address-book"></i>
                    <p>
                        Relawan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-id-badge text-sm"></i>
                            <p>
                                Daftar Relawan
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-check text-sm"></i>
                            <p>
                                Absensi
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-money-check text-sm"></i>
                            <p>
                                Gaji
                            </p>
                        </a>
                    </li>
                </ul>
            </li>


             <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-wallet"></i>
                    <p>
                        Transaksi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                        <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-hand-holding-usd text-sm"></i>
                            <p>
                               Pemasukan 
                            </p>
                        </a>
                    </li>

                 <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-shopping-cart text-sm"></i>
                            <p>
                               Pengeluaran 
                            </p>
                        </a>
                    </li>
                </ul>
             </li>

             <li class="nav-item">
                <a href="#" class="nav-link">
                   <i class="fas fa-cog"></i>
                    <p>
                        Pengaturan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                        <a href="<?= $main_url ?>user/data-user.php" class="nav-link">
                           <i class="nav-icon fas fa-user-circle text-sm"></i>
                            <p>
                               Users 
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>