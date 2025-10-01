$('#reverse-form').on('beforeSubmit', function(e){
    e.preventDefault();

    var form = $(this);
    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: form.serialize(),
        success: function(response){
            if(response.success) {
                $('#result').html('<strong>Результат:</strong> ' + response.data).show();
            } else {
                $('#result').html('<strong>Ошибка:</strong> ' + response.errors).show();
            }
        },
        error: function(){
            $('#result').html('<strong>Ошибка сервера</strong>').show();
        }
    });
    return false;
});