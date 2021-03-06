@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header p-0 text-center custom_card_header text-white text-lowercase"  style="border-radius: 0">Edit Designation</div>
            <div class="card-block ">
                <div class="container-fluid mt-2 ">
                    <form class="form-horizontal designation_form_validation_class" method="post" action="{{route('update_designation',$designation->id)}}">
                        {{csrf_field()}}
                        <div class="form-group col-md-4 mt-5 mb-5 {{ $errors->has('designation') ? ' has-error' : '' }}">
                            <input class="form-control input-sm input_size " value="{{$designation->designation}}" name="designation" id="designation" placeholder="designation" style="border-radius: 2rem!important;font-size: 0.7rem">
                            <label for="designation" class="label">designation</label>
                            @if ($errors->has('designation'))
                                <div class="help-block text-danger mt-5">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                                <style>
                                                    #designation{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </div>
                            @endif
                        </div>

                        <div class="container-fluid">
                            <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                            <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>




        <div class="card shadow mb-4 mt-4"  style="border-radius: 0">
            <div class="card-header p-0 custom_card_header text-center"  style="border-radius: 0">
                Manage Designations
            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($designations as $designation)
                            <tr>
                                <td>{{$designation->designation}}</td>
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('edit_designation',$designation->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                <td>
                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('delete_designation',$designation->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$designation->designation}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
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

    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection