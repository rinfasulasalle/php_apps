<?php include 'db_connect.php'; ?>
<br>

<div class="container-fluid">
    <h1>Tramite para nuevo Documento</h1>
</div>
    
    <div class="container mt-4">
        <form method="post" action="generate_pdf.php">
            <div class="form-group">
                <label for="tipoTramite">Tipo de Trámite</label>
                <select class="form-control" id="tipoTramite" name="tipoTramite">
                    <option value="autoevaluacion">Autoevaluación</option>
                    <option value="evaluacionInterna">Evaluación Interna</option>
                    <option value="evaluacionExterna">Evaluación Externa por Pares Académicos</option>
                    <option value="evaluacionSintesis">Evaluación Síntesis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fechaDocumento">Fecha de Documento</label>
                <input type="date" class="form-control" id="fechaDocumento" name="fechaDocumento">
            </div>
            <div class="form-group">
                <label for="remitente">Remitente</label>
                <input type="text" class="form-control" id="remitente" name="remitente">
            </div>
            <div class="form-group">
                <label for="tipoDocumento">Tipo de Documento</label>
                <select class="form-control" id="tipoDocumento" name="tipoDocumento">
                    <option value="normasJuridicas">Normas Jurídicas e Institucionales</option>
                    <option value="misionObjetivos">Misión y Objetivos</option>
                    <option value="curriculum">Currículo</option>
                    <option value="adminGestion">Administración y Gestión Académica</option>
                    <option value="docentes">Docentes</option>
                    <option value="estudiantes">Estudiantes</option>
                    <option value="investigacion">Investigación e Interacción Social - Extensión Universitaria</option>
                    <option value="recursosEducativos">Recursos Educativos</option>
                    <option value="adminFinanciera">Administración Financiera</option>
                    <option value="infraestructura">Infraestructura</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numeroDocumento">Número de Documento</label>
                <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento">
            </div>
            <div class="form-group">
                <label for="referencia">Referencia</label>
                <input type="text" class="form-control" id="referencia" name="referencia">
            </div>
            <div class="form-group">
                <label for="anexos">Anexos</label>
                <input type="text" class="form-control" id="anexos" name="anexos">
            </div>
            <!--
            <div class="form-group">
                <label for="carpeta">Carpeta de Subida</label>
                <input type="text" class="form-control" id="carpeta" name="carpeta">
            </div> -->
            <div class="form-group">
                <label for="carpeta">Carpeta de Subida</label>
                <select class="form-control" id="carpeta" name="carpeta">
                    <option value="" selected>Seleccionar una carpeta</option>
                    <?php 
                    $folders = $conn->query("SELECT name FROM folders");
                    while ($row = $folders->fetch_assoc()) {
                        echo '<option>' . $row['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Documento</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    
    
