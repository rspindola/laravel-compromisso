$(function() {
    $.ajax({
        url: '/admin/dashboard/chart',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log(data)
            if(data){
                alert('entrou')
            }else{
                alert('Código Analytics Inválido')
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Error: " + errorThrown); 
        }  
    });
});