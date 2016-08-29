define(function (require, exports, module) {
    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);
    var Notify = require('common/bootstrap-notify');

    exports.run = function () {

        var $list = $("#classroom-announcement-table");

        $list.on('click', '.delete-classroom-announcement', function () {
            var $tr = $(this).parents('tr');
            if (!confirm('您真的要移除该课程吗？')) {
                return;
            }

            $.post($(this).data('url'), function () {
                Notify.success('移除成功！');
                $tr.remove();
            }).error(function () {
                Notify.danger('移除失败，请重试！');
            });
        });

        var $modal = $('#create-form').parents('.modal');
        var $table = $('#offlineSchedule-table');


        var validator = new Validator({
            element: '#create-form',
            autoSubmit: false,
            onFormValidated: function (error, results, $form) {
                if (error) {
                    return false;
                }


                var $btn = $("#create-form-submit");
                $btn.button('submiting').addClass('disabled');
                $.post($form.attr('action'), $form.serialize(), function (html) {
                    $modal.modal('hide');
                    window.location.reload();
                    Notify.success('操作成功!');
                }).error(function () {
                    var user_name = $('#student-create-form-submit').data('user');
                    Notify.danger('操作失败!');
                    $btn.button('reset').removeClass('disabled');
                });

            }
        });

        validator.addItem({
            element: '#title',
            required: true,
        });

        validator.addItem({
            element: '#content',
            required: true,
            rule: 'minlength{min:1} maxlength{max:200}',
            errormessageUrl: '长度为1-200位'
        });


    };

});