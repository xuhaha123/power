@extends('layouts.index')
@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">用户列表</h3>
        </div>

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 table-toolbar-left">
                       <button id="demo-btn-addrow" class="btn btn-purple"><i class="ion-person-add"></i>  <a href="{{url('admin/useradd')}}" style="color: white">添加用户</a></button>

                    </div>
                    <div class="col-sm-6 table-toolbar-right">
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" name="seach" placeholder="请搜索用户名" class="form-control" autocomplete="off">
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default"><i class="ion-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th>用户名</th>
                        <th>邮箱</th>
                        <th>手机号码</th>
                        <th>状态</th>
                        <th>用户角色</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $r)
                    <tr>
                        <td><a class="btn-link" href="#">{{$r['id']}}</a></td>
                        <td><span class="text-muted">{{$r['name']}}</span></td>
                        <td>{{$r['email']}}</td>
                        <td>{{$r['phone']}}</td>
                        <td></td>
                        <td></td>
                        <td class="f-14 td-manage">
                            <a style="text-decoration:none" class="ml-5" href="{{ url('admin/useredit?id='.$r['id']) }}" title="编辑">
                                <i class="ion-checkmark-circled"></i>
                            </a>&nbsp;
                            <a style="text-decoration:none" class="ml-5" onClick="new_del(this,'{{$r['id']}}')" href="javascript:;" title="删除">
                                <i class="ion-close-circled"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->

    </div>
    <script>
        function new_del(obj,id){

//            layer.confirm('确认要删除吗？',function(index){
                var ids = "{{ url('admin/userdel?id=') }}"+id;
                $.ajax({
                    type: 'get',
                    url: ids,
                    dataType: 'json',
                    success: function(data){
                        if (data.status==1){
                            $(obj).parents("tr").remove();
                        }
                    },
                    error:function() {
                    }
                });
        }

    </script>

@endsection

