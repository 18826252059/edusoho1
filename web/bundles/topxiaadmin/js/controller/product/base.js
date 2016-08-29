define(function(require, exports, module) {
    var Notify = require('common/bootstrap-notify');
    exports.run = function() {
        $('body').on('click', '#delete-productBase', function() {
            if (!confirm('确认要删除基地信息吗？')) return false;
            var $btn = $(this);
            $.post($btn.data('url'), function(response) {
                console.log(response);
                if (response.status == 'ok') {
                    $('#productBase-tr-' + $btn.data('target')).remove();
                    Notify.success('删除成功!');
                } else {
                    alert('服务器错误!');
                }
            }, 'json');
        });
    };

});