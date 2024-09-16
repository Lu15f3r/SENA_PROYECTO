// VAMOS A IMPLEMENTAR UNA FUNCION que obtenga elementos cuando el usuario haga click en el boton ingresar del formulario login, 
//esta funciona debe enviar lo que el usuario escriba en los inputs usuario y clave,  y estos datos los envie a el archivo usuario de la carpeta ajax, 
//y despues este lo envie a la funcion verificar del modelo y verifique si este usuario existe o no en la tabla usuario de la BD para accedor o no al sistema

$("#frmAcceso").on('submit', function(e) // cuando se haga click en el boton  de tip0 submit  se ejecuta el codigo entre parentesis
    {
        e.preventDefault(); // para que no se ejecute el atributo action del formulario, si no se ejecute esta funcion
        logina = $("#logina").val(); // almacenar lo que el usuario escriba en el objeto del formulario con id logina
        clavea = $("#clavea").val(); // almacenar lo que el usuario escriba en el objeto del formulario con id clavea

        //funcion metodo post
        $.post("../ajax/usuario.php?op=verificar", { "logina": logina, "clavea": clavea }, // rul donde vamos a recibir los datos, a la variable op se le envia el valor verificar
            function(data) {

                if (data != "null") { // si no es nulo
                    $(location).attr("href", "escritorio.php");
                } else { // si es nulo
                    bootbox.alert("Usuario y/o Password incorrectos!"); // bootbox es una clase 
                }

            });

    })