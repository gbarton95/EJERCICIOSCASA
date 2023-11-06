<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Orientada a Objetos</title>
</head>

<body>
    <?php
    //creación de clase (vacía)
    class Moto{    }
    //creación de instancia de la clase
    $yamada = new Moto();

    //vamos a darle atributos a una nueva clase:
    class Coche
    {
        var $ruedas;
        var $color;
        var $motor;

        //para hacer el método CONSTRUCTOR (estado incial del objeto):
        function Coche()
        {

            $this->ruedas = 4;
            $this->color = "";
            $this->motor = 1600;

        }


        //Las funciones dentro de una clase son sus MÉTODOS
        function arrancar(){
            echo "Arranco <br>";
        }

        function girar(){
            echo "Giro <br>";
        }

        function frenar(){
            echo "Freno <br>";
        }

    }

    //instancias:
    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    //Para pedirle que ejecute un método, ->
    $mazda->girar();

    //Para acceder a propiedades del objeto ->
    echo $renault->ruedas;

    ?>
</body>

</html>