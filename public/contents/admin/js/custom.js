    setTimeout('function'),
    $('.alert_success').slideUp(1000);
    (5000);
    
    setTimeout('function'),
    $('.alert_error').slideUp(1000);
    (10000);

    // Modal Code Start

    $(document).ready(function(){
        $(document).on("click", "#softDelete", function (){
        var deleteID = $(this).data('id');
        $(".modal_body #modal_id").val( deleteID );
    });
    });