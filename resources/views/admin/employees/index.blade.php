@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="row w-100">
            <div class="container-fluid bg-transparent">
                <a href="" id="employee_search_modal_button" class="btn btn-sm float-right"><i class="fa fa-search"></i>&nbsp;&nbsp;Quick Search</a>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="container-fluid">
            <div class="card border-0 mb-4" style="border-radius: 0">
                <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0;">
                    Manage Employees
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center" style="font-size: 10px">
                        <table class="table text-center" id="dataTable" width="100%" cellspacing="0" style="color: black">
                            <thead>
                            <tr>
                                <th class="text_font" >Employee Email</th>
                                <th class="text_font" >Employee Name</th>
                                <th class="text_font" >Department </th>
                                <th class="text_font" >Employee Status</th>
                                <th class="text_font" >Employee Photo</th>
                                <th class="text_font" >Full info</th>
                                <th class="text_font" >Edit</th>
                                <th class="text_font" >Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($employees as $employee)
                                <tr style="font-size: 12px;color: #1b1e21;'Roboto', sans-serif;">
                                    <td class="text_font" >{{$employee->email}}</td>
                                    <td class="text_font" >{{$employee->first_name}} {{$employee->last_name}}</td>
                                    <td class="text_font" >{{$employee->department->department_name}}</td>
                                    <td class="text_font" >{{$employee->employee_status}}</td>


                                    @if(env('APP_ENV') === 'production')
                                        <td class="hover_to_enlarge"><img class="img-fluid rounded-circle " width="20px" height="20px" src="{{asset("public/upload/employees/images/$employee->profile_photo")}}"></td>
                                    @else
                                        <td class="hover_to_enlarge"><img class="img-fluid rounded-circle " width="20px" height="20px" src="{{asset("upload/employees/images/$employee->profile_photo")}}"></td>
                                    @endif
                                    {{--<td><a class="btn btn-link " method="get"  name="student_id" href="{{route('full_info',$employee->id)}}" style="font-size: 8pt">view</a></td>--}}
                                    {{--<td style="font-size: 8pt"><a class="btn btn-link " method="get"  name="employee_id" href="{{route('upload_employee_documents_link',$employee->id)}}"style="font-size: 8pt">Documents</a></td>--}}

                                    <td><a class="btn btn-success btn-sm " method="get"  name="student_id" href="{{route('full_info',$employee->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;view</a></td>
                                    <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('employee_edit',$employee->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                    <td>
                                        <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('employee_delete',$employee->id)}}">
                                            {!! csrf_field() !!}
                                            <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$employee->first_name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                        </form>
                                    </td>








                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                                <h3>{{ $employees->links() }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->


    {{--static form--}}
    {{--<div class="panel-heading">Search Employee Data</div>--}}
    {{--<div class="panel-body">--}}
        {{--<div class="form-group">--}}
            {{--<input type="text" name="search_employees" id="search_employees" class="form-control" placeholder="Search Customer Data" />--}}
        {{--</div>--}}
        {{--<div class="table-responsive">--}}
            {{--<h3 align="center">Total Data : <span id="total_records"></span></h3>--}}
            {{--<table class="table table-striped table-bordered">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>Id</th>--}}
                    {{--<th>Name</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}

                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--end of static form--}}


@endsection