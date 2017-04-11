@extends('layouts.index')
@section('content')
    <div class="col-lg-6">

        <hr class="new-section-sm bord-no">
        <nav class="breadcrumb"> 首页
            <span class="c-gray en">&gt;</span>
            用户管理
            <span class="c-gray en">&gt;</span>
            用户添加 <a class="btn btn-success radius r"  href="javascript:location.replace(location.href);" title="刷新" ></a> </nav>
            <div class="panel" style="width:1260px;">
                <div class="eq-height clearfix">

                    <div class="col-md-4 eq-box-md text-center box-vmiddle-wrap bord-hor">

                        <!-- Simple Promotion Widget -->
                        <!--===================================================-->
                        <div class="box-vmiddle pad-all">
                            <h3 class="text-main">用户添加</h3>
                            <div class="pad-ver">
                                <i class="ion-person-stalker" style="width:100px;height: 100px;"></i>
                            </div>
                            <p class="pad-btn text-sm">Members get <span class="text-lg text-bold text-main">50%</span> more points, so register today and start earning points for savings on great rewards!</p>
                            <br>
                            <a class="btn btn-lg btn-primary" href="#">Learn More...</a>
                        </div>
                        <!--===================================================-->

                    </div>
                    <div class="col-md-8 eq-box-md eq-no-panel">

                        <!-- Main Form Wizard -->
                        <!--===================================================-->
                        <div id="demo-main-wz">

                            <!--nav-->
                            <ul class="row wz-step wz-icon-bw wz-nav-off mar-top wz-steps">
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-main-tab1" aria-expanded="false">
                                        <span class="text-danger"><i class="ion-person-add"></i></span>
                                        <p class="text-semibold mar-no">Account</p>
                                    </a>
                                </li>

                            </ul>

                            <!--progress bar-->
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-primary" style="width: 25%; left: 50%; position: relative; transition: all 0.5s;"></div>
                            </div>


                            <!--form-->
                            <form class="form-horizontal form_user_add" method="post" >
                                {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="tab-content">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                    {{--@if(count($errors)>0)--}}
                                    {{--<span style="color: orangered">{{ $errors->first('name') }}</span>--}}
                                    {{--@endif--}}
                                        <!--First tab-->
                                        <div id="demo-main-tab1" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">用户名</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="name" placeholder="用户名不能重复">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">邮箱</label>
                                                <div class="col-lg-9">
                                                    <input type="email" class="form-control" name="email" placeholder="邮箱必须真实有效">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">密码</label>
                                                <div class="col-lg-9 pad-no">
                                                    <div class="clearfix">
                                                        <div class="col-lg-4">
                                                            <input type="password" class="form-control mar-btm" name="password" placeholder="Password">
                                                        </div>
                                                        <div class="col-lg-4 text-lg-right"><label class="control-label">手机号</label></div>
                                                        <div class="col-lg-4"><input type="number" class="form-control" name="phone" placeholder="请输入手机号"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <!--Footer buttons-->
                                <div class="pull-right pad-rgt mar-btm">
                                    <button type="button" class="finish btn btn-success" >添加</button>
                                </div>

                            </form>
                        </div>
                        <!--===================================================-->
                        <!-- End of Main Form Wizard -->

                    </div>
                </div>
            </div>


    </div>
    <script>
        $('.finish').click(function(){
         $.ajax({
            type:'post',
            dataType:'json',
            url:'{{url('admin/useradddo')}}',
            data:$('.form_user_add').serialize(),
                success:function(data){
                if(data.status==2){
                    alert('添加失败');
                    }else if(data.status==1){
                    location.href ='{{url('admin/userlist')}}'
                    }
                },
                error:function (msg) {
                    var json =JSON.parse(msg.responseText);
                    $('#name').html(json.name);
                    $('#password').html(json.password);
                    $('#email').html(json.email);
                    $('#phone').html(json.phone);

                }
            })
        })
    </script>
@endsection