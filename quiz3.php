<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 3</title>
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Ejercicios</span>
  </div>
</nav>
 
    <div class="container">
        <div class="row m-2" >
            <div class="col">
            <h5>Quiz Tipo C</h5>
            <p>Desarrollar una Aplicación Web, con un menú que permita procesar la 
                entrada a un país, cuando se le especifica que país quiere visitar, 
                si el país esta disponible, la aplicación debe dar un saludo en 
                función a la hora actual de ese país.
            </p>   
            </div>
            <div class="col">
            <h5>Resultado</h5>
       
            <form method="post">
                <label for="pais">Ingresa un país:</label>
                <input name="pais">
                
                <button type="submit">Saludar</button>
            </form>
           
            <?php
                

                class Pais {
                    public $nombre;
                    public $zona_horaria;
                    public $hora_actual;
                  
                    function __construct($nombre, $zona_horaria) {
                      $this->nombre = $nombre;
                      $this->zona_horaria = $zona_horaria;
                      $this->hora_actual = new DateTime("now", new DateTimeZone($zona_horaria));
                    }
                  
                    function saludo() {
                      $hora = $this->hora_actual->format('H');
                      if ($hora < 12) {
                        return "¡Buenos días desde " . $this->nombre . "!";
                      } else if ($hora < 18) {
                        return "¡Buenas tardes desde " . $this->nombre . "!";
                      } else {
                        return "¡Buenas noches desde " . $this->nombre . "!";
                      }
                    }
                  }
                  
                  $paises = array(
                    new Pais("Japón", "Asia/Tokyo"),
                    new Pais("Francia", "Europe/Paris"),
                    new Pais("Estados Unidos", "America/New_York"),
                    new Pais("Venezuela", "America/Caracas"),
                    new Pais("Colombia", "America/Bogota")
                    
                  );
                  
                  if (isset($_POST['pais'])) {
                    $pais = $_POST['pais'];
                    foreach ($paises as $p) {
                      if ($p->nombre == $pais) {
                       // echo $p->saludo();
                        break;
                      }                    
                    }
                    if ($p->nombre == $pais) {
                        echo "<br><h6>".$p->saludo()."</h6>";
                      } 
                      else
                      echo "<br><h6>El país indicado no se encuentra registrado</h6>";                   
                    
                  }
        ?>

            
            </div>
        </div>
    </div>
   
    
</body>
</html>