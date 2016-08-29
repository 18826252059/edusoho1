define(function (require, exports, module) {

    var Widget = require('widget');

    exports.run = function () {

        var ids = [];

        $('#sure').on('click', function () {
                $('#sure').button('submiting').addClass('disabled');
                var ids = [];//定义一个数组
                $('input[name="newsIds"]:checked').each(function () {//遍历每一个名字为productBaseIds的复选框，其中选中的执行函数
                    var t=$("#category-tr-" + $(this).val());
                    var tr = t.children();
                    var data = {
                        toId: tr.eq(2).text(),
                        toPath: tr.eq(3).text(),
                        toName: t.data('name'),
                    };

                    ids.push(data);//将选中的值添加到数组chk_value中
                });

                $.ajax({
                    type : "post",
                    url : $('#sure').data('url'),
                    data : "ids="+JSON.stringify(ids),
                    async : false,
                    success : function(data){

                        $('.modal').modal('hide');
                        window.location.reload();
                    }

                });

            }
        )
        ;

        var Notify = require('common/bootstrap-notify');

        $('a.delete').on('click', function () {
            var id=$(this).data('id');
            $.ajax({
                type: "post",
                url: $(this).data('url'),
                async: false,
                success: function (data) {
                    Notify.success('操作成功!');
                    $("#category-tr-" + id).remove();
                }

            });
        })


    };


})
;