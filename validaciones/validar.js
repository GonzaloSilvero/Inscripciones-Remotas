$(document).ready(function(){
    $('#enviar').on("click",function(){
        let errores = ''
        let dni1 = $('#dni1').val()
        let dni2 = $('#dni2').val()

        if(isNaN(dni1)){
            errores += 'el usuario no es un dni valido\n'
        }

        if(dni1!=dni2){
            errores += 'No coinciden los usuarios'
        }

        if (errores==''){
            alert('Se pudo enviar');
            $('#formulario').submit();
        } else {
            alert(errores);            
        }
    })
})