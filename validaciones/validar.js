$(document).ready(function(){
    $('#enviar').on("click",function(){
        let errores = ''
        let dni1 = $('#dni1').val()
        let dni2 = $('#dni2').val()

        if(isNaN(dni1)){
            errores += 'El usuario no es un dni valido\n'
        }

        if(dni1!=dni2){
            errores += 'No coinciden los usuarios'
        }

        if (errores==''){
            $('#formulario').submit();
        } else {
            alert(errores);            
        }
    })
})