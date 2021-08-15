<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url() ?>assets/admin/img/brand/sariputta.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <?php $url = $this->uri->segment(1); ?>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= ($url == 'admin') ? 'active' : ''; ?>" href="<?= base_url('admin') ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url == 'admin') ? 'active' : ''; ?>" href="<?= base_url('admin/Romania') ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Romania </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>