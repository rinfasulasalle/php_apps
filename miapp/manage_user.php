<?php 
include('db_connect.php');
if(isset($_GET['id'])){
    $user = $conn->query("SELECT * FROM users where id =".$_GET['id']);
    foreach($user->fetch_array() as $k =>$v){
        $meta[$k] = $v;
    }
}
?>

<style>
    .avatar-container {
        display: flex;
        align-items: center;
    }

    .avatar-preview {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 20px;
    }
</style>

<div class="container-fluid">
    <form action="" id="manage-user">
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <div class="avatar-container">
                <?php
                $avatar = isset($meta['avatar']) ? $meta['avatar'] : 'default_avatar.png';
                echo '<img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" id="avatar-preview" class="avatar-preview">';
                ?>
                <input type="file" name="avatar" id="avatar" accept="image/*">
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
        <div class="form-group row">
            <div class="col-md-4">
                <label for="name">Nombres</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
            </div>
            <div class="col-md-4">
                <label for="last_name">Apell. Paterno</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo isset($meta['last_name']) ? $meta['last_name']: '' ?>" required>
            </div>
            <div class="col-md-4">
                <label for="mother_last_name">Apell. Materno</label>
                <input type="text" name="mother_last_name" id="mother_last_name" class="form-control" value="<?php echo isset($meta['mother_last_name']) ? $meta['mother_last_name']: '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="username">Nombre de Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required>
            </div>
            <div class="col-md-6">
                <label for="ci">Carnet de Identidad</label>
                <input type="text" name="ci" id="ci" class="form-control" value="<?php echo isset($meta['ci']) ? $meta['ci']: '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="phone">Teléfono Celular</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($meta['phone']) ? $meta['phone']: '' ?>" required>
            </div>
            <div class="col-md-6">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="type">Rol</label>
            <select name="type" id="type" class="form-control">
                <option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Administrador</option>
                <option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>Usuario</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo isset($meta['password']) ? $meta['password']: '' ?>" required>
        </div>

        <!--<button type="submit" class="btn btn-primary">Guardar</button> -->
    </form>
</div>

<script>
    $('#manage-user').submit(function(e){
        e.preventDefault();
        start_load()
        $.ajax({
            url:'ajax.php?action=save_user',
            method:'POST',
            data:$(this).serialize(),
            success:function(resp){
                if(resp ==1){
                    alert_toast("Datos guardados correctamente",'success')
                    setTimeout(function(){
                        location.reload()
                    },1500)
                }
            }
        })
    })
</script>

<style>
    /* Ajusta los estilos para el diseño de los campos */
    .form-group.row {
        margin-bottom: 20px;
    }
</style>
