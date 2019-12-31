
@extends("admin.layout.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.toast.toast')
    @include('admin.delete.deletemodal')
            <!-- Add Employee Form -->

            <div class="container-fluid">
                <div class="card shadow mb-4" style="border-radius: 0">
                    <div class="card-header p-0 bg-gradient-primary text-center text-white" style="border-radius: 0">
                        <h6 class="m-0 "><a> Manage Employees Documents</a><span class="float-right mx-auto"></span></h6>
                    </div>

                    <div class="row mx-3 my-2">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">Employee Code:{{$employee->employee_number}} </div>
                                <div class="col-md-6 text-dark font-weight-bold"> Employee Name:{{$employee->first_name}} {{$employee->last_name}}</div>
                            </div>

                        </div>
                    </div>
                    <hr>

                    <form  method="post" action="{{route('save_documents')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="employee_id" value="{{$employee->id}}">


                        <div class="row mx-auto" >

                            <div class="col-md-6 mx-auto">
                                <div class="container-fluid">
                                <div class="form-group mx-auto">
                                    <label for="shift_name">Document Name</label>
                                    <input type="text" name="document_type" id="document_type" class="form-control" required placeholder="Document Type">
                                </div>


                                    <div class="form-group  mx-auto">
                                        <label for="shift_start_time">Select Document</label>
                                        <input type="file" name="document_scan_file" id="document_scan_file" class="form-control py-0" required placeholder="Document Number">
                                    </div>


                                </div>
                            </div>
                        </div>


                <div class="modal-footer p-0">
                    <div class="container-fluid">
                        <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                        <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                    </div>
                </div>

                    </form>
                    </div>
                 </div>
                    <div class="card-body">
                        <div class="table-responsive text-center" style="font-size: 10px">
                            <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="text_font">document type</th>
                                    <th class="text_font">document scan </th>
                                    <th class="text_font">Download</th>
                                    <th class="text_font">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employee->documents as $employee_all)
                                    <tr style="font-size: 8pt">
                                        <td class="text_font">{{$employee_all->document_type}}</td>
                                        <td class="text_font">{{$employee_all->document_scan_file}}</td>

                                        <td><a class="btn btn-warning btn-sm " href="/upload/employees/documents/{{$employee_all->document_scan_file}}" style="width: 100px;height: 30px"><i class="fa fa-download" style="font-size: 10px;color: white"></i>&nbsp;Download</a></td>

                                        <td>
                                            <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('employee_delete',$employee_all->id)}}">
                                                {!! csrf_field() !!}
                                                <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$employee_all->document_type}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
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


@endsection