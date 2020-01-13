@extends('layouts.main')

@section('title','Manage Tenants')

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
    <li class="breadcrumb-item"><a href="javascript:;">Tenants Managemet</a></li>
    <li class="breadcrumb-item active">List</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Manage Tenants <small>...</small></h1>
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

                    <a href="{{action('manageUsersController@tenantForm')}}" class="btn btn-xs btn-success"><i class="fa fa-plus-square"></i> Add new </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Manage Tenants</h4>
            </div>
            <!-- end panel-heading -->

            <div class="panel-body bg-black text-white">Tenants information. </div>
            <!-- begin alert -->

            {{--@if(session('success') || session('error') )
            <div class="alert alert-{{(session('success')?'success':'danger')}} fade show">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{(session('success'))?session('success'):session('error')}}
            </div>
            @endif--}}
            <!-- end alert -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-default" class="table table-striped table-bordered">
                    <thead>
                        <tr>

                            <th style="width: 30%; text-transform: capitalize;">Full Name</th>
                            <th>Company and Owner</th>
                            <th>Floor and Unit</th>
                            <th>Telephone No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td style="text-transform: capitalize;"><strong>{{ $item->full_name }}</strong><br><span class="label label-success">{{$item->role}}</span></td>
                            <td style="text-transform: capitalize;">{{ $item->cowner }}</td>
                            <td>{{ $item->funit }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>
                                <center>

                                    @if($item->active_flag ==1)
                                    <a data-toggle="modal" title="Edit Tenant" class="btn btn-info" href="#edit" onclick="getData('{{$item->funit}}','{{ $item->cowner }}')"> <i class="fas fa-pencil-alt text-white"></i></a>
                                    <a id=deact  vals="{{$item->user_id }}" class="btn btn-danger" data-toggle="tooltip" title="Deactivate"><i class="fa fa-ban text-white"></i></a>
                                    @else
                                    <a id=act vals="{{$item->user_id }}" class="btn btn-success" data-toggle="tooltip" title="Activate"><i class="fas fa-undo text-white"></i></a>
                                    @endif
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                       <th style="width: 30%">Full Name</th>
                       <th>Company and Owner</th>
                       <th>Floor and Unit</th>
                       <th>Telephone No.</th>
                       <th>Action</th>
                   </tfoot>
               </table>
           </div>
           <!-- end panel-body -->
       </div>
       <!-- end panel -->
   </div>
   <!-- end col-10 -->
</div>
<!-- end row -->
<!-- #modal-EDIT -->
<div class="modal fade" id="edit"  data-backdrop="static">
    <div class="modal-dialog" style="max-width: 60%">
        <form id="EditForm" method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header" style="background-color: #008a8a">
                    <h4 class="modal-title" style="color: white">Edit Barangay</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                </div>
                <div class="modal-body">
                    {{--modal body start--}}
                    <label class="form-label hide">Barangay ID</label>
                    <input id="EditBarangayID" name="EditBarangayID" type="text" class="form-control hide" name="CategoryID"/>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Barangay Name</label> <span id='ReqBarangayNameEdit'></span>
                            <input style="text-transform: capitalize;" id="EditBarangayName" name="EditBarangayName" class="form-control"  placeholder="e.g.: Merchandising" required="true">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Barangay Seal</label> <span id='ReqBarangaySealEdit'></span>
                            <input type="file" id="EditBarangaySeal" name="EditBarangaySeal" class="form-control" required="true" placeholder="Briefly define the category" >
                        </div>
                    </div>

                    {{--modal body end--}}
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>

                    <a id="EditBTN" href="javascript:;" class="btn btn-success">Update</a>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection

@section('extrajs')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>

<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        TableManageDefault.init();
    });
    function getData(owner,Company) {
        
  
    }

    $("a[id='deact']").on('click',function(){
        $id = $(this).attr('vals');

        swal({
            title: "This record will be deactivated?"
            , text: "After this action, this record is not available, unless it is activated"
            , type: "warning"
            , showLoaderOnConfirm: true
            , showCancelButton: true
            , confirmButtonColor: '#9DD656'
            , confirmButtonText: 'Yes!'
            , cancelButtonText: "No!"
            , closeOnConfirm: false
            , closeOnCancel: true
        }, function (isConfirm) {
            if (isConfirm) {

                $.ajax({
                    url: 'deactivateUser'
                    ,type: 'post'
                    ,data: {id:$id,_token:"{{csrf_token()}}"}
                    ,success:function(){
                        window.location.reload();
                    }
                    ,error:function(){

                    }
                });

            }
        });

    });

    $("a[id='act']").on('click',function(){
        $id = $(this).attr('vals');


        swal({
            title: "This record will be activated?"
            , text: "After this action, this record is now available, unless it is deactivated"
            , type: "warning"
            , showLoaderOnConfirm: true
            , showCancelButton: true
            , confirmButtonColor: '#9DD656'
            , confirmButtonText: 'Yes!'
            , cancelButtonText: "No!"
            , closeOnConfirm: false
            , closeOnCancel: true
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: 'activateUser'
                    ,type: 'post'
                    ,data: {id:$id,_token:"{{csrf_token()}}"}
                    ,success:function(){
                        window.location.reload();
                    }
                    ,error:function(){

                    }
                });
            }
        });


    });

</script>
@endsection
