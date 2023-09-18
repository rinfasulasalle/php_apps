
<nav id="sidebar" class='mx-lt-5 bg-dark'>
<br><br><br>
    <div class="sidebar-list">
        <br>
        <div class="text-center">
            <a class="nav-item">
                <img class="user-avatar" width="100" src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" alt="img">
                <div class="user-info">
                    <span class="user-name"><?php echo $_SESSION['login_name']; ?></span><br>
                    <span class="user-role"><?php echo $_SESSION['login_type'] == 1 ? 'Admin' : 'User'; ?></span>
                </div>
            </a>
        </div>
        <a href="index.php?page=docs" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-file"></i></span> Nuevo Doc</a>
        <a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Inicio</a>
        <a href="index.php?page=files" class="nav-item nav-files"><span class='icon-field'><i class="fa fa-file"></i></span> Archivos</a>
        <?php if($_SESSION['login_type'] == 1): ?>
        <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Usuarios</a>
        <?php endif; ?>
		<a href="index.php?page=regulations" class="nav-item nav-files"><span class='icon-field'><i class="fa fa-files"></i></span> Reglamentos</a>
        <a href="index.php?page=guide" class="nav-item nav-guide"><span class='icon-field'><i class="fa fa-book"></i></span> Guía</a>
        <div class="text-center mt-3">
            <a class="nav-item logout-link list-group-item list-group-item-danger" href="ajax.php?action=logout">
                <i class="fa fa-power-off mr-2"></i> Cerrar sesión
            </a>
        </div>

    </div>
</nav>
<script>
    $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active');
</script>
