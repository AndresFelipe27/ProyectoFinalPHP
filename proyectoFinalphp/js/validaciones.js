$().ready(function () {
    $("#formU").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                    apellido: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                     }, 
                     cedula: {
                        required: true,
                        minlength: 1,
                        number: true
                     },
                     telefono: {
                        required: true,
                        minlength: 1,
                        number: true
                     },
                     direccion: {
                        required: true,
                        minlength: 1
                     },
                     correo: {
                        required: true,
                        email: true
                     },
                     contraseña: {
                        required: true,
                        minlength: 1
                     }
        }, 
        messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                lettersonly: "Nombre Invalido, Ingrese solo letras",
                minlength: "Ingrese mas de 2 caracteres"
            },
            apellido: {
                required: "Campo Vacio, Ingrese un apellido",
                lettersonly: "Nombre Invalido, Ingrese solo letras",
                minlength: "Ingrese mas de 2 caracteres"  
            },
            cedula: {
                required: "Campo Vacio, Ingrese una cadula",
                minlength: "Ingrese mas de 1 caracteres",
                number: "Invalido, Ingrese solo numeros"
            },
            telefono: {
                required: "Campo vacio, Ingrese un telefono",
                minlength: "Ingrese mas de 1 caracter",
                number: "invalido, Ingrese solo numeros"
            },
            direccion: {
               required: "Campo vacio, Ingrese una direccion",
               minlength: "Inrese mas de 1 caracter"
            },
            correo: {
               required: "Campo vacio, Ingrese un correo",
               email: "Ingrese un email valido"
            },
            contraseña: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 1 caracter"
            }
        }
    });
});

$().ready(function () {
    $("#formE").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                     telefono: {
                        required: true,
                        minlength: 1,
                        number: true
                     },
                     direccion: {
                        required: true,
                        minlength: 1
                     },
                     correo: {
                        required: true,
                        email: true
                     },
                     contraseña: {
                        required: true,
                        minlength: 1
                     }
        }, 
         messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                lettersonly: "Nombre Invalido, Ingrese solo letras",
                minlength: "Ingrese mas de 2 caracteres"
            },
            telefono: {
                required: "Campo vacio, Ingrese un telefono",
                minlength: "Ingrese mas de 1 caracter",
                number: "invalido, Ingrese solo numeros"
            },
            direccion: {
               required: "Campo vacio, Ingrese una direccion",
               minlength: "Inrese mas de 1 caracter"
            },
            correo: {
               required: "Campo vacio, Ingrese un correo",
               email: "Ingrese un email valido"
            },
            contraseña: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 1 caracter"
            }
        }
    });
});


$().ready(function () {
    $("#formR").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                     codigo: {
                        required: true,
                        minlength: 1,
                        number: true
                     },
                     precio: {
                        required: true,
                        minlength: 1,
                        digits: true
                     },
                     fechaF: {
                        required: true,
                        date: true
                     },
                     fechaE: {
                        required: true,
                        date: true
                     },
                     descri: {
                        required: true,
                        minlength: 1
                     }
        }, 
        messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                lettersonly: "Nombre Invalido, Ingrese solo letras",
                minlength: "Ingrese mas de 2 caracteres"
            },
            codigo: {
                required: "Campo vacio, Ingrese un telefono",
                minlength: "Ingrese mas de 1 caracter",
                number: "invalido, Ingrese solo numeros"
            },
            precio: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 1 caracter",
            digits: "Ingrese  solo numeros"
            },
            fechaF: {
                required: "Campo vacio, Ingrese una fecha",
                date: "Fecha invalida, (dd/mm/aa)"
            },
            fechaE: {
                required: "Campo vacio, Ingrese una fecha",
                date: "Fecha invalida, (dd/mm/aa)"
            },
            descri: {
                required: "Campo vacio, Ingrese una descripcion",
                minlength: "Ingrese mas de 1 caracter"
            }

        }
    });
});

$().ready(function () {
    $("#formL").validate({
                rules: {
                    usuario: {
                        required: true,
                        minlength: 1
                    },
                     contraseña: {
                        required: true,
                        minlength: 1,
                     },
        }, 
        messages: {
            usuario: {
            required: "Campo vacio, Ingrese un usuario",
            minlength: "Ingrese mas de 1 caracter"  
            } 
        }
    });
});