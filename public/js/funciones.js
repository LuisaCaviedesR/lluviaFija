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

$('#affiliate_id').on('change', function(e){
    var id = $(this).val();
    var request = $.get('/cabinsPrice/'+id);
    request.done(function(response) {
        $('#cabinPrice').val(response);      
              
    });
    
});

$('#quantity').on('change', function(e){
   var price = $('#days').val()*$('#cabinPrice').val()*$(this).val(); 
   $('#price').val(price); 
});

