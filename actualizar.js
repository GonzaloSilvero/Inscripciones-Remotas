$(document).ready(function(){
    $('[name="checkbox"]').on("change",function(){
        let id = $(this).attr("id")
        let valor = $(this).is(':checked')
        
        $.ajax({
            url: "actualizar.php",
            type: "POST",
            data: { nid : id, 
                    val : valor},

            success: function(respuesta) {
                alert(respuesta)
            },

            error: function() {
                console.log("No se ha podido obtener la información");
            }
            
        })
    })
})