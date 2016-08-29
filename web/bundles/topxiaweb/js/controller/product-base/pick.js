define(function(require, exports, module) {

    var Widget = require('widget');

    exports.run = function() {

        var ids=[];

        $('#sure').on('click',function(){
            $('#sure').button('submiting').addClass('disabled');
            var ids =[];//定义一个数组
            $('input[name="productBaseIds"]:checked').each(function(){//遍历每一个名字为productBaseIds的复选框，其中选中的执行函数
                ids.push($(this).val());//将选中的值添加到数组chk_value中
            });

            $.ajax({
                type : "post",
                url : $('#sure').data('url'),
                data : "ids="+ids,
                async : false,
                success : function(data){
                    
                    $('.modal').modal('hide');
                    window.location.reload();
                }

             });

        });

        $('#search').on('click',function(){
            if($('[name=key]').val() != "" ){

                $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                    $('#modal').html(data);
                });
            }

        });

        $('#enterSearch').keydown(function(event){

            if(event.keyCode==13){

                $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                    $('#modal').html(data);
                
                });
                return false;
            }
        });

        $('#all-courses').on('click',function(){

            $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                $('#modal').html(data);
            });

            
        });
        var Notify = require('common/bootstrap-notify');

        $('button.delete-btn').on('click',function(){
            var productBaseId=$(this).data('id');
            $.ajax({
                type : "post",
                url : $(this).data('url'),
                data : "productBaseId="+$(this).data('id'),
                async : false,
                success : function(data){
                    Notify.success('操作成功!');
                    $("#product-base-"+productBaseId).remove();
                }

            });
        })


    };

    
});