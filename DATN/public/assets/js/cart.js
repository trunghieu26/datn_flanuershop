$( document ).ready(function() {
    $(".add-to-cart").on('click', function() {
        let quantity = $('#form1').val();
        let amount = $(".product-description").attr('value');
        let csrf_token = $(".product_id").attr('alt');
        let id = $(".product_id").attr('value');
        let user_id = $(".add-to-cart").attr('value');
        $.ajax({
            url :"/add-to-cart/" + id,
            method: "POST",
            dataType:'json',
            data : {
                quantity : quantity,
                amount : amount,
                product_id : id,
                user_id : user_id,
                _token : csrf_token
            },
            success: function() {
                window.location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    })

    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '/update-cart',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    
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