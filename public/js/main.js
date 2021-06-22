$('#status').on('change', function(){ 
    var value = $(this).val();
    var id = $(this).data('id');
    $.ajax({
        type: 'POST',
        url: 'somepage.php', // this is your target page where post will go
        data: {update:value, hidden:id},
        success: function (response) {
            console.log(response); // here you can get response
        }

    });

})