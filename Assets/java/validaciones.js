function validacionUsuario(){
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
        alert("Ingrese un grado valido");
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
                if(tipo != "Alumno"){
                    
                    if(tipo != "Profesor"){
                        alert("Solo existen 2 usuarios: Alumno o Profesor");
                        return false;
                    }
                   
                }else{
                    if(8<password.length || password.length>15){
                        alert("La contraseña debe contener entre 8 y 15 carácteres");
                    }
                }
            }
        }
    }
}

function validacionUsuarioMod(){
    var id;
    var nombre;
    var email;
    var password;
    var grado;
    var grupo;
    var tipo;
    var combinacion = /\w+@\w+\.+[a-z]/;

    id = document.getElementById('id').value;
    nombre = document.getElementById('user').value;
    email = document.getElementById('email').value;
    password = document.getElementById('password').value;
    grado = document.getElementById('grado').value;
    grupo = document.getElementById('grupo').value;
    tipo = document.getElementById('tipo').value;

    if(isNaN(grado)){
        alert("Ingrese un grado valido");
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
                if(tipo != "Alumno"){
                    
                    if(tipo != "Profesor"){
                        alert("Solo existen 2 usuarios: Alumno o Profesor");
                        return false;
                    }
                   
                }else{
                    if(isNaN(id)){
                        alert("Ingrese un id de usuario valido");
                        return false;
                    }
                }
            }
        }
    }
}

function validacionBajaUser(){
    var id;
    nombre = document.getElementById('id').value;
   
    if(!isNaN(id)){
        alert("Ingrese el id del Usuario(Número)");
        return false;
   }
}

function validacionLibro(){
    var nombre;
    var edicion;
    var formato;
    var idAutor;
    var desc;

    nombre = document.getElementById('nombre').value;
    email = document.getElementById('edicion').value;
    password = document.getElementById('formato').value;
    grado = document.getElementById('idAutor').value;
    grupo = document.getElementById('desc').value;

   
    if(isNaN(edicion)){
        alet("Ingrese una edición valida (número)");
        return false;
    }else{
        if(formato != 'Fisico'){
                if(formato != 'Digital'){
                    if(formato != 'Ambos'){
                        alert("Seleccione un formato valido (Fisico, Digital, Ambos)");
                        return false;
                    }
                }
            }else{
            if(isNaN(idAutor)){
                alert("Los id de autores se registran con números");
                return false;
            }else{
                if(desc.length > 254){
                    alert("La descripción es muy larga(Max. 254 caráctees)");
                    return false;
                }else{
                    if(nombre.length > 50){
                        alert("El nombre del titulo es muy largo");
                        return false;
                    }
                }
            }
        }
    }
}

function validacionModLibro(){
    var id;
    var nombre;
    var edicion;
    var formato;
    var idAutor;
    var desc;

    nombre = document.getElementById('id').value;
    nombre = document.getElementById('nombre').value;
    email = document.getElementById('edicion').value;
    password = document.getElementById('formato').value;
    grado = document.getElementById('idAutor').value;
    grupo = document.getElementById('desc').value;

   if(!isNaN(id)){
        alert("Ingrese el id del libro(Número)");
        return false;
   }else{
        if(isNaN(edicion)){
            alet("Ingrese una edición valida (número)");
            return false;
        }else{
            if(formato != 'Fisico'){
                if(formato != 'Digital'){
                    if(formato != 'Ambos'){
                        alert("Seleccione un formato valido (Fisico, Digital, Ambos)");
                        return false;
                    }
                }
            }else{
                if(isNaN(idAutor)){
                    alert("Los id de autores se registran con números");
                    return false;
                }else{
                    if(desc.length > 254){
                        alert("La descripción es muy larga(Max. 254 caráctees)");
                        return false;
                    }else{
                        if(nombre.length > 50){
                            alert("El nombre del titulo es muy largo");
                            return false;
                        }
                    }
                }
            }
        }
    }
}

function validacionBajaLibro(){
    var id;
    nombre = document.getElementById('id').value;
   
    if(!isNaN(id)){
        alert("Ingrese el id del libro(Número)");
        return false;
   }
}

function validacionLogin(){

    var email;
    var password;
    var combinacion = /\w+@\w+\.+[a-z]/;

    email = document.getElementById('user').value;
    password = document.getElementById('password').value;

        if(!combinacion.test(email)){
            alert("El correo no es valido");
            return false;
        }

}

function validacionUsuarioAdmin(){
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
        alert("Ingrese un grado valido");
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
                if(tipo != "Admin"){
                    
                    alert("Solo puedes dar de alta Administradores(Admin)");
                    return false;
                   
                }else{
                    if(8<password.length || password.length>15){
                        alert("La contraseña debe contener entre 8 y 15 carácteres");
                    }
                }
            }
        }
    }
}