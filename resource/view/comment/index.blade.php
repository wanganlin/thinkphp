@extends('layouts.app')

@section('content')
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-form layui-card-header layuiadmin-card-header-auto">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">ID</label>
                    <div class="layui-input-inline">
                        <input type="text" name="cid" placeholder="请输入" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">评论者</label>
                    <div class="layui-input-inline">
                        <input type="text" name="username" placeholder="请输入" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">评论内容</label>
                    <div class="layui-input-inline">
                        <input type="text" name="content" placeholder="请输入" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <button class="layui-btn layuiadmin-btn-comm" data-type="reload" lay-submit
                            lay-filter="LAY-app-contcomm-search">
                        <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="layui-card-body">
            <div style="padding-bottom: 10px;">
                <button class="layui-btn layuiadmin-btn-comm" data-type="batchdel">删除</button>
            </div>
            <table id="LAY-app-content-comm" lay-filter="LAY-app-content-comm"></table>
            <script type="text/html" id="table-content-com">
                <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i
                        class="layui-icon layui-icon-edit"></i>编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i
                        class="layui-icon layui-icon-delete"></i>删除</a>
            </script>
        </div>
    </div>
</div>

<script>
    function () {
        var $ = layui.$
            , form = layui.form
            , table = layui.table;


        //监听搜索
        form.on('submit(LAY-app-contcomm-search)', function (data) {
            var field = data.field;

            //执行重载
            table.reload('LAY-app-content-comm', {
                where: field
            });
        });

        //点击事件
        var active = {
            batchdel: function () {
                var checkStatus = table.checkStatus('LAY-app-content-comm')
                    , checkData = checkStatus.data; //得到选中的数据

                if (checkData.length === 0) {
                    return layer.msg('请选择数据');
                }

                layer.confirm('确定删除吗？', function (index) {

                    //执行 Ajax 后重载
                    /*
                    admin.req({
                      url: 'xxx'
                      //,……
                    });
                    */
                    table.reload('LAY-app-content-comm');
                    layer.msg('已删除');
                });
            }
        }

        $('.layui-btn.layuiadmin-btn-comm').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    }
</script>
@endsection
