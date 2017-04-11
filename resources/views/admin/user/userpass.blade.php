@extends('layouts.index')
@section('content')
    <div class="col-lg-6">

        <hr class="new-section-sm bord-no">

        <div class="panel" style="width:1260px;">
            <div class="eq-height clearfix">
                <div class="col-md-4 eq-box-md text-center box-vmiddle-wrap bord-hor">

                    <!-- Simple Promotion Widget -->
                    <!--===================================================-->
                    <div class="box-vmiddle pad-all">
                        <h3 class="text-main">修改密码</h3>
                        <div class="pad-ver">
                            <i class="demo-pli-bag-coins icon-5x"></i>
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
                                    <span class="text-danger"><i class="ion-person"></i></span>
                                    <p class="text-semibold mar-no">信息</p>
                                </a>
                            </li>

                        </ul>

                        <!--progress bar-->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-primary" style="width: 25%; left: 50%; position: relative; transition: all 0.5s;"></div>
                        </div>


                        <!--form-->
                        <form class="form-horizontal form_user_edit" method="post" >
                            {{csrf_field()}}
                            <div class="panel-body">
                                <div class="tab-content">

                                    <!--First tab-->
                                    <div id="demo-main-tab1" class="tab-pane">
                                        {{--<input type="hidden" name="id" value="{{$res->id}}">--}}
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户名</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="name" placeholder="请输入用户名" value="{{session('admin')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">密码</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" name="pass" placeholder="请输入密码" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">确认密码</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" name="repass" placeholder="请确认密码" value="">
                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>


                            <!--Footer buttons-->
                            <div class="pull-right pad-rgt mar-btm">
                                <button type="button" class="finish btn btn-success" >修改</button>
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
                url:'{{url('admin/userupdate')}}',
                data:$('.form_user_edit').serialize(),
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