<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 2</title>
</head>
<body>
    <header>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Ejercicios</span>
  </div>
</nav>
 
    <div class="container">
        <div class="row m-2" >
            <div class="col">
            <h5>Quiz Tipo B</h5>
            <p>Desarrollar una Aplicación Web, que permita registrar un numero, 
            y el mismo sea tomado en cuenta para imprimirlo y luego no imprimir el 
            siguiente, pero, imprimir el próximo numero. De este modo, será impreso 
            un numero si y otro numero no, y adicionalmente los números 2, 5, 9 y 11 
            no deben ser mostrados nunca.</p>
   
            </div>
            <div class="col">
            <h5>Resultado</h5>
            <form method="post" action="quiz2.php">
                Ingrese un Número: <input type="text" name="numero_i">
                <input type="submit">
            </form>
       
            <?php
                 if (isset($_POST["numero_i"])){ 
               
                   	$numero_i = $_POST["numero_i"];
                    $imprimir = true;
          
                    
                 class Numero {
                   public $numero;
                   public $imprimir = true;
                 
                   function __construct($numero) {
                     $this->numero = $numero;
                   }
                 
                   function imprimir() {
                     if ($this->imprimir) {
                       echo "<p>$this->numero</p>";
                     }
                     $this->imprimir = !$this->imprimir;
                   }
                 }
                 
                 $numero1 = new Numero($numero_i);
                 $numero2 = new Numero($numero_i+1);
                 $numero3 = new Numero($numero_i+2);
                 $numero4 = new Numero($numero_i+3);
                 $numero5 = new Numero($numero_i+4);
                 $numero6 = new Numero($numero_i+5);
                 $numero7 = new Numero($numero_i+6);
                 $numero8 = new Numero($numero_i+7);
                 $numero9 = new Numero($numero_i+8);
                 $numero10 = new Numero($numero_i+9);
                 $numero12 = new Numero($numero_i+10);
                 $numero13 = new Numero($numero_i+11);
                 $numero14 = new Numero($numero_i+12);
                 $numero15 = new Numero($numero_i+13);
                 
                

                $numeros = array($numero1, $numero2, $numero3, $numero4, $numero5, $numero6, $numero7, $numero8, $numero9, $numero10, $numero12, $numero13, $numero14, $numero15);
                 
                foreach ($numeros as $numero) {
                   if ($numero->numero == 2 || $numero->numero == 5 || $numero->numero == 9 || $numero->numero == 11) {
                    $imprimir = true;
                    continue;
                   }
                   else if($imprimir){
                        
                        $numero->imprimir();
                        $imprimir= !$imprimir;
                   } 
                   else{
                    $imprimir = true;
                  
                   }
                  
                 }

                        


            } 
        ?>

            </div>
        </div>
    </div>
         </header>
    
   </body>
</html>