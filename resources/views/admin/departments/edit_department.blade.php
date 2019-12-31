@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="card shadow mb-2 mt-2" style="border-radius: 0">
            <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0;">
                Update Departments
            </div>
            <div class="card-block">
                <div class="container-fluid mt-5">
                    <form class="form-horizontal " method="POST" action="{{route('department_update',$department->id)}}">
                        {{csrf_field()}}
                        <div class="row mb-2">
                            <div class="form-group col-md-4 {{ $errors->has('department_name') ? ' has-error' : '' }}">
                                <input class="form-control input-sm input_size text_font" value="{{$department->department_name}}" name="department_name" id="department_name" placeholder="Department Name" style="border-radius: 2rem!important;font-size: 0.7rem">
                                <label for="department_name" class="label text_font">Department Name</label>
                                @if ($errors->has('department_name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('department_name') }}</strong>
                                                <style>
                                                    #role{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="container-fluid">
                            <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                            <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>




    </div>

    <!-- end of the Employees summary -->



    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card shadow mb-4"  style="border-radius: 0">
            <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0;">
               manage departments
            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="font-size: 14px;color: #1b1e21;font-family: 'Roboto', sans-serif;">
                            <th class="text_font" >Department</th>
                            <th class="text_font">Edit</th>
                            <th class="text_font">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($departments as $department)
                            <tr style="font-size: 12px;color: #1b1e21;font-family: 'Roboto', sans-serif;">
                                <td class="text_font" >{{$department->department_name}}</td>
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('department_edit',$department->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                <td>
                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('department_delete',$department->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$department->department_name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection