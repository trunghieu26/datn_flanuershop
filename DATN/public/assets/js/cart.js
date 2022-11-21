$( document ).ready(function() {
    $(".add-to-cart").on('click', function() {
        let quantity = $('#form1').val();
        let amount = $(".product-description").attr('value');
        let csrf_token = $(".product_id").attr('alt');
        let id = $(".product_id").attr('value');
        $.ajax({
            url :"/add-to-cart/" + id,
            method: "POST",
            dataType:'json',
            data : {
                quantity : quantity,
                amount : amount,
                product_id : id,
                _token : csrf_token
            },
            success: function() {
                return true
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    })
    
    // $(".remove-from-cart").click(function (e) {
    //     e.preventDefault();
    
    //     var ele = $(this);
    
    //     if(confirm("Are you sure want to remove?")) {
    //         $.ajax({
    //             url: '/remove-from-cart',
    //             method: "DELETE",
    //             data: {
    //                 _token: '{{ csrf_token() }}', 
    //                 id: ele.parents("tr").attr("data-id")
    //             },
    //             success: function (response) {
    //                 window.location.reload();
    //             }
    //         });
    //     }
    // });

    $('.login-modal').on('click', function () {
        let email = $('.email').val();
        let password = $('.password').val();
        let csrf_token = $(".form_login_modal").attr('alt');
        $.ajax({
            url : '/login',
            method: "POST",
            dataType:'json',
            data : {
                email : email,
                password : password,
                _token : csrf_token
            },
            success: function(data) {
                console.log(data);
                window.location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    })
});