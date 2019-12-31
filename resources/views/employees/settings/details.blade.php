@extends("employees.layouts.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="container-fluid">
            <div class="card " style="border-radius: 0">
                <div class="card-header text-center py-0 custom_card_header text-white" style="border-radius: 0">Your Information</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3">
                            @if(env('APP_ENV') === 'production')
                                <img class="  img-fluid "  style="width: 100%;height: auto" src="{{asset("public/upload/employees/images/$employee->profile_photo")}}">
                            @else
                                <img class=" img-fluid "  style="width: 100%;height: auto" src="{{asset("upload/employees/images/$employee->profile_photo")}}">
                            @endif
                            {{--<button class="btn-hover color-2"> {{$employee->last_name}}</button>--}}
                        </div>


                        <div class="col-md-3">
                            <p class="card-header text-dark text-left"><i class="fa fa-user"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">First Name: &nbsp;&nbsp;  {{$employee->first_name}}</span></p>
                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-user"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Last Name: &nbsp;&nbsp;  {{$employee->last_name}}</span></p>
                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-phone"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Phone: &nbsp;&nbsp;  {{$employee->mobile_number}}</span></p>
                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Email: &nbsp;&nbsp;  {{$employee->email}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-flag"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Nationality: &nbsp;&nbsp;  {{$employee->nationality}}</span></p>
                        </div>

                        <div class="col-md-3">
                            <p class="card-header text-dark text-left"><i class="fa fa-house-damage"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Department: &nbsp;&nbsp;  {{$employee->department->department_name}}</span></p>
                            {{--@foreach($employee->designations as $designation)--}}
                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-flag"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Designation: &nbsp;&nbsp;  {{$employee->designations->first()->designation}}</span></p>

                            {{--@endforeach--}}

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-lightbulb"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Status: &nbsp;&nbsp;  {{$employee->employee_status}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Joining Date: &nbsp;&nbsp;  {{$employee->start_date}}</span></p>

                        </div>

                        <div class="col-md-3">
                            <p class="card-header text-dark text-left"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Education: &nbsp;&nbsp;  {{$employee->education_status}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Date of Birth: &nbsp;&nbsp;  {{$employee->date_of_birth}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-passport"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Passport Number: &nbsp;&nbsp;  {{$employee->passport_number}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-passport"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Visa Number: &nbsp;&nbsp;  {{$employee->visa_number}}</span></p>

                            <hr class="bg-success">
                            <p class="card-header text-dark text-left"><i class="fa fa-money-bill"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 10px">Basic Salary: &nbsp;&nbsp;  </span></p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">

                    </div>


            </div>
        </div>
    </div>
    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection