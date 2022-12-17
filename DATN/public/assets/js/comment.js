$(".save_comment").on('click',function(){
    var comment=$(".comment").val();
    let id_reply = $(this).attr('data-id');
    let order_id=$(this).attr('alt');
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
            order_id:order_id,
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
                $(".comments").prepend(html);
                $(".comment").val('');
                $(".comment-count").text($('blockquote').length);
                $(".no-comments").hide();
            }
            vm.text('Save').removeClass('disabled');
        }   
    });
});