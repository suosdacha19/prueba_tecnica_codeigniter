<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #138776;">
    <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Practice Pharmasan 2</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if(session('rol') === 'administrator'){ ?>
                        <a <?php echo "href=".base_url("/users"); echo (session('page_name') == 'users' ? ' class="nav-link active"' :  ' class="nav-link"'); ?>>Users</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a <?php echo 'href='.base_url('/clients'); echo (session('page_name') == 'clients' ? ' class="nav-link active"' : ' class="nav-link"'); ?>>Clients</a>
                </li>
                <li class="nav-item">
                    <a <?php echo 'href='.base_url('/reports'); echo (session('page_name') == 'reports' ? ' class="nav-link active"' : ' class="nav-link"'); ?>>Reports</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <span class="mx-3 text-light">Bienvenido <?php echo session('name').' ( '.session('rol').' )' ?></span>
        <a href="<?php echo base_url('/logout') ?>" class="btn btn-outline-warning my-2 my-sm-0">Logout</a>
    </form>
    </div>
</nav>
