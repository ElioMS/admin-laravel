
//Para ocultar el flash session
$(document).ready(function(){
    var positiveMessage = $('.alert-success');
    var existsPossitiveMessage = positiveMessage.length;

    if (existsPossitiveMessage == 1) {
        positiveMessage.delay('5000').fadeOut('slow/5000/fast');
    }
});

// Enviar formulario
$("#submit-btn").on('click' , function(){
  $("#admin-form").submit();
});

//Cerrar modal
$("#modal-regresar").on('click', function() {
    $("#modal-image").hide();
});

//Datepicker todas los campos de fecha con la clase .input-fecha
$('.input-fecha').datepicker({
      showOn: "button",
      buttonImage: "{{ asset('calendar.gif') }}",
      buttonImageOnly: false,
      buttonText: "Select date"
});

$(".date-button-adm").on('click', function(e){
  e.preventDefault();
  $(".ui-datepicker-trigger").click();
});

$(document).ready(function(e) {

    $(".eliminar-elemento").on('click', function(e) {
        var elemento = $(this).closest('tr').data('id')
        $("#elemento-id").val(elemento)
    });

    $(".f-delete").on('click', function(e) {

        var elementoId = $("#elemento-id").val();
        var form = $("#form-delete");
        var url  = form.attr('action').replace(':c_id', elementoId);
        var data = form.serialize();

        $.ajax({
            url : url,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (response) {
              if (response) {
                var trs = $('.table-rows');

                    $.each(trs, function(index, val) {
                        var value = $(this).data('id')
                        if (value === response) {
                            $("#close-modal-dl").click()
                            $(this).fadeOut('slow/400/fast');
                        }  
                    });
                }
            }
        });
    });
});

$('.f-delete').on('click', function() {
  $('#form-delete-detail').submit();
});

      
$(document).on('click', ".delete-flm" , function(e) {
    var delete_selector = $(this).closest('.imagen-array');
    delete_selector.find('input').val('');
    delete_selector.find('.title-image-flm').text('');
    delete_selector.find('.preview-flm').remove();
    $(this).remove();
});

$(document).on('click', '.icon-trash', function(e) {
    $(this).closest('.group-img-input.row').remove()
});