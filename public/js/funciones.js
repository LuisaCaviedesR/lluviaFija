var allowFilter = ['alquiler'];

$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
         if ( $.inArray( settings.nTable.getAttribute('id'), allowFilter ) == -1 )
         {
            // ignora las tablas que no esten en la lista
           
             return true;
        }
        var dateStart = $('#dateStart').val();
        var dateEnd = $('#dateEnd').val();
        var fechaIngreso =  data[4]; // Usa datos de la columna fecha ingreso
        if ((dateEnd=="" && dateStart=="") ||  ( dateStart=="" && fechaIngreso <= dateEnd ) || ( dateStart <= fechaIngreso   && dateEnd=="" ) || (dateStart <= fechaIngreso  && fechaIngreso <= dateEnd))
        {
            return true;
        }
        return false;
    }
); 
$(document).ready(function() {
       
         $('#alquiler').DataTable({
                responsive: true,
                "scrollX": false,
                "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
                }
        });
          $('#cabin').DataTable({
                    responsive: true,
                    "scrollX": false,
                    "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
                    }
            });
         $('#afiliado').DataTable({
                    responsive: true,
                    "scrollX": false,
                    "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
                    }
            });
        $('#usuario1').DataTable({
                    responsive: true,
                    "scrollX": false,
                    "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
                    }
            });
     $('.input-daterange').datepicker();
 
      $('#dateStart, #dateEnd').change( function() {
        $("#alquiler").DataTable().draw();
    } );
});
$(".search-select").select2({
  placeholder: "Buscar",
  allowClear: true,
  language : 'es'    
});



function datediff(datein,dateout){
    var diff =  Math.floor(( Date.parse(dateout) - Date.parse(datein) ) / 86400000);
    var days=diff+1;
    var nights=diff;
    if(isNaN(diff)){
        days=0;
        nights=0;
    }
    $('#days').val(days);
    $('#nights').val(nights);
   
}

$('#datein').change(function(e) {
    var datein=$('#datein').val();
    var dateout=$('#dateout').val();
    datediff(datein,dateout);
});
$('#dateout').change(function(e) {
    var datein=$('#datein').val();
    var dateout=$('#dateout').val();
    datediff(datein,dateout);
   
});

$('#cabin_id').on('change', function(e){
    var id = $(this).val();
    var request = $.get('/cabinsPrice/'+id);
    request.done(function(response) {
        $('#cabinPrice').val(response.price);      
        $('#cabinCapacity').val(response.capacity);       
    });
    
});

$('#quantity').on('change', function(e){
  var capacity =  $('#cabinCapacity').val(); 
  var quantity = $(this).val();    
    if(capacity < quantity){
        alert("El número de personas supera la capacidad de la cabaña. Máximo "+capacity);
        $('#quantity').val(capacity); 
        quantity= capacity;
    }
   var price = $('#days').val()*$('#cabinPrice').val()*quantity; 
   $('#price').val(price); 
});

