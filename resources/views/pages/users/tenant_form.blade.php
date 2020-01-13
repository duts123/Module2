@extends('layouts.main')

@section('title','Create User')

@section('content')
@section('extracss')
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Users Managemet</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Manage Users <small>...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-2 -->

        <!-- end col-2 -->
        <!-- begin col-10 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">

                        <a class="btn btn-xs btn-success" href="{{action('manageUsersController@manageTenants')}}"><i class="fa fa-list"></i> List </a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create Users</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin alert -->

            <!-- end alert -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="panel-body panel-form">
                        <form method="post" id="taxModal" action="{{route('addTenant')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="POST" />
                            <div class="row">

                                    <div class="col-md-4">
                                        <label>First Name</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=fname placeholder="Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Middle Name</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">&nbsp;&nbsp;</span></div>
                                            <input class="form-control" name=mname type="text" placeholder="Middle Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Last Name</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=lname type="text" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=email type="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Telephone/Cellphone No.</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">&nbsp;&nbsp;</span></div>
                                            <input class="form-control" name=number type="number" placeholder="9223441629" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Company</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">&nbsp;&nbsp;</span></div>
                                            <input class="form-control" name=company type="text" placeholder="Company" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Owner</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=owner type="text" placeholder="Owner" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Floor</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=floor type="number" placeholder="2" required>
                                        </div>
                                    </div><div class="col-md-3">
                                        <label>Unit</label>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend"><span class="input-group-text">*</span></div>
                                            <input class="form-control" name=unit type="number" placeholder="3" required>
                                        </div>
                                    </div>
                                    {{--<div class="col-md-6">
                                        <label>Role</label>
                                        <select class="form-control " name="affiliate" style="width: 100%;" required>
                                            <option selected="selected" value=""  disabled>Please Select Affiliate</option>
                                            @foreach($aff as $item)
                                                <option value= >{{$item->AFF_NAME}}</option>
                                            @endforeach
                                        </select>
                                    </div>--}}
                                    <!-- /.row -->
                                    <div class="col-md-12" >
                                        <div class="pull-right" style="margin-right: 10px;">
                                            <button class="btn btn-success submit_btn" type="submit" >Submit</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-10 -->
    </div>
    <!-- end row -->
@endsection

@section('extrajs')
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->


   <!--  <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script> -->

    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>

        // $('select').select2();

        // $('.submit_btn').click(function() {
        //     var fname = $('input[name=fname]').val();
        //     var mname = $('input[name=mname]').val();
        //     var lname = $('input[name=lname]').val();
        //     var email = $('input[name=email]').val();
        //     var number = $('input[name=number]').val();
        //     var company = $('input[name=company]').val();
        //     var owner = $('input[name=owner]').val();
            

        //     data = {
        //         fname:fname,
        //         mname:mname,
        //         lname:lname,
        //         email:email,
        //         number:number,
        //         company:company,
        //         owner:owner,
        //     }


        // });
    </script>
@endsection
