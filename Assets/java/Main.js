function validacion(){
    var nombre;
    var email;
    var password;
    var grado;
    var grupo;
    var tipo;
    var combinacion = /\w+@\w+\.+[a-z]/;

    nombre = document.getElementById('user').value;
    email = document.getElementById('email').value;
    password = document.getElementById('password').value;
    grado = document.getElementById('grado').value;
    grupo = document.getElementById('grupo').value;
    tipo = document.getElementById('tipo').value;

   
    if(isNaN(grado)){
        aleta("Ingrese un grado valido");
        return false;
    }else{
        if(!combinacion.test(email)){
            alert("El correo no es valido");
            return false;
        }else{
            if(nombre.length > 30){
                alert("El nombre es muy largo");
                return false;
            }else{
                if(tipo != 'Alumno' || tipo != 'Profesor'){
                    alert("Solo existen 2 usuarios: Alumno o Profesor")
                    return false;
                }
            }
        }
    }

}