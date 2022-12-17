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

    $(".save_comment").on('click',function(){
        var comment=$(".comment").val();
        let id_reply = $(this).attr('data-id');
        let product_id=$(this).attr('alt');
        let name = $('.name-comment').data('name');
        let token = $('.save_comment').attr('value');
        var vm=$(this);
        // Run Ajax
        $.ajax({
            url:"/comment",
            type: "POST",
            dataType:'json',
            data:{
                parent_id: id_reply,
                comment:comment,
                product_id:product_id,
                _token: token
            },
            beforeSend:function(){
                vm.text('Saving...').addClass('disabled');
            },
            success:function(res){
                $('.comment').val('');
                var html='<blockquote class="blockquote">\
                            <div class="comment-parent"><img  class="avatar" src="http://placeimg.com/40/40/animals">\
                                <div class="comment-group" data-comment="" >\
                                    <p class="name-comment" data-name >'+name+'</p>\
                                    <p>'+comment+'</p>\
                                </div> \
                            </div>\
                            <small class="mb-0"></small>\
                        </blockquote>\
                        <div class="button-post" style="margin-left: 64px; margin-bottom:12px;">\
                            <a title="Likes" id="saveLike"  data-comment="" data-type="like" alt=""class="btn btn-sm btn-default btn-outline-primary btn_like ">\
                                Like\
                                <label class="like_count"></label>\
                            </a>\
                            <a id="reply" data-id="" class="btn btn-sm btn-default btn-outline-danger btn-show-form-reply ">\
                                Reply\
                            </a>\
                        </div>';
                if(res.bool==true){
                    console.log(123);
                    $(".comments").prepend(html);
                    $(".comment").val('');
                    $(".comment-count").text($('blockquote').length);
                    $(".no-comments").hide();
                }
                vm.text('Save').removeClass('disabled');
            }   
        });
    });

    $('.comments').on('click','#reply',function(){
        let id = $(this).attr('data-id');
        if($(this).hasClass('open')){
            $(this).parent().next().remove();
            $(this).removeClass('open');
            $(this).parent().hide()
        } else {
            let html = `<div style="margin-top :24px;" id="${id}" class="add-comment mb-3 ">
                            <textarea class="form-control comment-reply" id="${id}" placeholder="Enter Comment"></textarea>
                            <button data-post="{{ $post->id }}" data-id='${id}' class="btn btn-dark btn-sm mt-2 save-reply">Submit</button>
                        </div>`
            $(this).parent().append(html);
        }
        $(this).addClass('open');
    })

    $(".comments").on('click','.save-reply',function(){
        let comment=$(this).parent().children('textarea').val();
        let id_reply = $(this).attr('data-id');
        let token = $('.save_comment').attr('value')
        let cmtprepend = '.reply_system-'+ id_reply;
        let product_id=$('.save_comment').attr('alt');
        let vm=$(this);
        $.ajax({
            url:"/comment",
            type:"POST",
            dataType:'json',
            data:{
                parent_id: id_reply,
                comment:comment,
                product_id:product_id,
                _token: token,
            },
            beforeSend:function(){
                vm.text('Saving...').addClass('disabled');
            },
            success:function(res){
                var html='<blockquote class="blockquote animate__animated animate__bounce">\
                <p style="" class="mb-0">'+comment+'</p>\
                </blockquote>\
                <div class="button-post" style="margin-left: 24px; margin-bottom:12px;">\
                    <span title="" id="" data-type="like"  class="mr-2 btn btn-sm btn-primary d-inline font-weight-bold like">\
                        Like\
                        <span class="like-count"></span>\
                    </span>\
                    <span id="reply" data-id="" class="mr-2 btn btn-sm btn-danger d-inline font-weight-bold btn-show-form-reply ">\
                        Reply\
                    </span>\
                </div>';
                if(res.bool==true){
                    $(cmtprepend).append(html);
                    $(".comment").val('');
                    $(".comment-count").text($('blockquote').length);
                    $(".no-comments").hide();
                }
                vm.text('Save').removeClass('disabled');
            }   
        });
    });

    $(document).on('click','#saveLike',function(){
        var type=$(this).data('type');
        let object_id = $(this).data('comment');
        let product_id=$('#saveLike').attr('alt');
        let token = $('.save_comment').attr('value')
        var vm=$(this);
        // Run Ajax
        $.ajax({
            url:"/like",
            type:"POST",
            dataType:'json',
            data:{
                product_id:product_id,
                object_type: type,
                _token:token,
                object_id : object_id
            },
            success:function(result){
                if(result.bool==true){
                    console.log(result)
                    if(result.like_type==0){
                        vm.removeClass('active');
                    }else if(result.like_type==1){
                        vm.addClass('active');
                    }
                    else {
                        alert(result)
                    }
                }
            }
        });
    })
});