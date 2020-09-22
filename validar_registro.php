<?php if(isset($_POST['submit'])): //revisa que  la variable exista 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $ocupacion = $_POST['id_ocupacion'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $tyc = $_POST['tyc'];
    try{ //statement ayuda a prevenir SQL INJECTION
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO Registrados (nombre_registrado, apellido_registrado, email_registrado, telefono_registrado, pais_registrado, id_ocupacion, departamento_registrado, ciudad_registrado, direccion_registrado, tyc) VALUES (?,?,?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("ssssssssss", $nombre, $apellido, $email, $telefono, $pais, $ocupacion, $departamento, $ciudad, $direccion, $tyc);
        $stmt->execute();
        $stmt->close();
        header("Refresh:4; url=index.php");
        $conn->close();
    } catch(\Exception $e){
            echo $e->getMessage();
    }
    ?>

<?php endif; ?>

<?php   include_once 'includes/templates/header.php'; ?>


<section class="seccion contenedor">
<h2>Registro Éxitoso</h2>




    

</section>



<?php   include_once 'includes/templates/footer.php'; ?>



    