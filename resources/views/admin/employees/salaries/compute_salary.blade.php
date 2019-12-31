@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft card">
        <div class="row w-100">
            <div class="row w-100 text-center mx-auto"><div class="col-md3 mx-auto   text-center "><p class="text-center">Employee salary Data</p></div></div>
        </div>

        <div class="card-header py-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px;padding: 0">
            <div class="row text-center mx-auto ">
                <div class="col-md-2 mt-3">
                    <form action="{{route('employee_salary_calculator')}}" id="submit_employee_salary_form">
                        <div class="form-group ">
                            <label for="">Select Employee</label>
                            <select id="employee_salary"  name="employee_salary" class="form-control mb-2 py-0 input_size text_font" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                <option value="{{$employee->id}}" class="text_font" >{{$employee->first_name}}</option>
                                @foreach($employees as $key=>$y)
                                    <option class="text_font" value="{{$y->id}}">{{$y->employee_number}}|{{$y->first_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-2  mt-3">
                    <div class="form-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                        <label for="">Month|Year</label>
                        <?php
                        $year=\Carbon\Carbon::now()->year;
                        $month=\Carbon\Carbon::now()->month;

                        $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                        $date->format('F Y');

                        ?>

                        <input type="text" class="form-control input-sm input_size date_text_input_salary_period text_font " value="{{$date->format('F Y')}}" required name="salary_period" id="salary_period" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                        @if ($errors->has('salary_period'))
                            <dive class="text-danger mt-4">
                                <strong>{{ $errors->first('salary_period') }}</strong>
                                <style>
                                    #salary_period{
                                        border-bottom: solid 1px;
                                        color: red;
                                        font-size: 10px;
                                    }
                                </style>
                            </dive>
                        @endif
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn-hover color-4 mb-4">Load</button>
                </div>
                </form>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" class="form-control  py-0   input_size" value="{{$employee->employee_number}}"  name="code" required id="code" placeholder="Code"  >
                    </div>
                </div>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control  py-0   input_size" value="{{$employee->designations->first()->designation}}"  name="designation" required id="designation" placeholder="Designation"  >
                    </div>
                </div>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Date Joined</label>
                        <input type="text" class="form-control  py-0   input_size"  value="{{$employee->start_date}}"  name="date_joined" required id="date_joined" placeholder="date_joined"  >
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4">Payment Method
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                            <label for="" class="text_font" >Cash</label>
                            <input type="radio" class="form-control text-left input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            @if ($errors->has('salary_period'))
                                <dive class="text-danger mt-4">
                                    <strong>{{ $errors->first('salary_period') }}</strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                            <label for="" class="text_font" >Check</label>
                            <input type="radio" class="form-control text-white text-left input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            @if ($errors->has('salary_period'))
                                <dive class="text-danger mt-4">
                                    <strong>{{ $errors->first('salary_period') }}</strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                            <label for="" class="text_font" >Bank</label>
                            <input type="radio" class="form-control input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            @if ($errors->has('salary_period'))
                                <dive class="text-danger mt-4">
                                    <strong>{{ $errors->first('salary_period') }}</strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-8">

                <?php
                $start_date= \Carbon\Carbon::parse($employee->start_date);
                $years=$start_date->diffinYears(\Carbon\Carbon::now());
                $months=$start_date->diffInMonths(\Carbon\Carbon::now())-($start_date->diffinYears(\Carbon\Carbon::now())*12);
                $days=$start_date->diffInDays(\Carbon\Carbon::now());
                ?>
                <div class="row mx-auto"><span class="mt-3">Service duration</span>

                    <div class="col-md-2 mt-3">
                        <div class="form-inline">
                            <label for="service_duration_years">Years</label>
                            <input type="text" class="form-control  py-0   input_size" value="{{$years}}"  name="service_duration_years"  id="service_duration_years" placeholder="Years"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-inline">
                            <label for="service_duration_months">Months</label>
                            <input type="text" class="form-control  py-0   input_size" value="{{$months}}"  name="service_duration_months"  id="service_duration_months" placeholder="months"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-inline">
                            <label for="service_duration_days">Days</label>
                            <input type="text" class="form-control  py-0   input_size" value="{{$days-($years*365)-($months*30)}}"  name="service_duration_days"  id="service_duration_days" placeholder="Days"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-group">
                            <label for="service_duration_leaving">Date Leaving</label>
                            <input type="text" class="form-control  py-0   input_size" value="{{$start_date->addYears($employee->contract_period)->toDateString()}}"  name="service_duration_leaving"  id="service_duration_leaving" placeholder="Date Leaving"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-group">
                            <label for="service_duration_gratuity">Gratuity</label>
                            <input type="text" class="form-control  py-0   input_size"   name="service_duration_gratuity" required id="service_duration_gratuity" placeholder="Gratuity"  >
                        </div>
                    </div>

                </div>
            </div>


        </div>


        <div class="row mt-4 mx-auto">

            <div class="col-md-2  mt-3">For leave Salary
                <div class="input-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                    <label for="" class="text_font" >Gaoing for leave</label>
                    <input type="checkbox" class="form-control input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                    @if ($errors->has('salary_period'))
                        <dive class="text-danger mt-4">
                            <strong>{{ $errors->first('salary_period') }}</strong>
                            <style>
                                #salary_period{
                                    border-bottom: solid 1px;
                                    color: red;
                                    font-size: 10px;
                                }
                            </style>
                        </dive>
                    @endif
                </div>
            </div>


            <div class="col-md-2 mt-md-3">
                <div class="form-inline">
                    <label for="join_date_after_last_leave">Join date After last Leave</label>
                    <input type="text" class="form-control  py-0   input_size date_text_input"   name="join_date_after_last_leave" required id="join_date_after_last_leave" placeholder="Join Date After last Leave"  >
                </div>
            </div>

            <div class="col-md-2 mt-md-3">
                <div class="form-inline">
                    <label for="date_of_leave_from">Date of Leave from</label>
                    <input type="text" class="form-control  py-0   input_size date_text_input"   name="date_of_leave_from" required id="date_of_leave_from"  >
                </div>
            </div>


            <div class="col-md-2 mt-md-3">
                <div class="form-inline">
                    <label for="leave_start">Date of Leave to</label>
                    <input type="text" class="form-control  py-0   input_size date_text_input"   name="leave_end" required id="leave_end"   >
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <table style="margin: 0 auto;">
                        <td class="photo">

                            @if(env('APP_ENV') === 'production')
                                <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("public/upload/employees/images/$employee->profile_photo")}}">
                            @else
                                <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("upload/employees/images/$employee->profile_photo")}}">
                            @endif
                            <input hidden="" type="file" name="photo" value="{{$employee->profile_photo}}" id="photo" value="" accept="image/x-png,image/png,image/jpg,image/jpeg">
                            {{--<input type="button" name="browse_file" id="browse_file" class=" btn-info btn-block btn-browse" value="browse">--}}


                        </td>

                        </tbody>

                    </table>

                </div>

            </div>


            <div class="col-md-2 mt-md-3">
                {{--<div class="form-group">--}}
                {{--<button type="button" class="form-control  py-0  btn btn-info   input_size date_text_input       text-white font-weight-bolder"   name="leave_end" required id="leave_end" >Save and Print Pay Slip</button>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--<button type="button" class="form-control  py-0  btn btn-warning   input_size date_text_input text-white font-weight-bolder"   name="leave_end" required id="leave_end" >Send Pay Slip</button>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--<button type="button" class="form-control  py-0  btn btn-success   input_size date_text_input text-white font-weight-bolder"   name="leave_end" required id="leave_end">New Salary Sheet</button>--}}
                {{--</div>--}}
            </div>

        </div>

    </div>
    <hr>

    <?php
    $total_allowances=$employee->basic_salary+$employee->accommodation_allowance+$employee->experience_allowance+$employee->responsibility_allowance+$employee->other_allowance+$employee->transport_allowance;

    $total_salary=$total_allowances+$employee->basic_salary;


    $late_days=2;
    $late_hours=5;

    $one_day_total=$total_salary/30*$late_days;

    $one_hour_total=$total_salary/30/8*$late_hours;

    $total_late_amount=$one_day_total+$one_hour_total;

    $total_deductions=$employee->loan_installments+ $employee->other_deductions+ $employee->gratuity_advance+ $employee->salary_advance+$total_late_amount;

    ?>

    <div class="row mx-auto">
    <div class="col-md-4">Allowances
    <div class="form-group">
    <label for="" class="text_font" >Basic Salary</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->basic_salary}}"   name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Accommodation Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->accommodation_allowance}}"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Experience Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->experience_allowance}}"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Responsibilities</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->responsibility_allowance}}"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Other Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->other_allowance}}"   name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Transportation</label>
    <input type="text" class="form-control  py-0   input_size"  value="{{$employee->transport_allowance}}"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    {{--<p>Overtime</p>--}}
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="" class="text_font" >Total Invoice Made</label>
    <input type="text" class="form-control  py-0   input_size"  value=""  name="date_joined" required id="date_joined" placeholder=""  >
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
    <label for="" class="text_font" >Amount</label>
    <input type="text" class="form-control  py-0   input_size"  value=""  name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    </div>

    </div>
    </div>


    <div class="col-md-4">Deductions
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Late  Hours</label>
                <input type="text" class="form-control  py-0   input_size" value="{{$late_hours}}" name="absent_hours"  id="absent_hours" placeholder=""  >
        </div>
    </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Amount</label>
                <input type="text" class="form-control  py-0   input_size" value="{{round($one_hour_total)}}" name="absent_hours"  id="absent_hours" placeholder=""  >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Absent without Excuse(days)</label>
                <input type="text" class="form-control  py-0   input_size" value="{{$late_days}}"   name="absent_without_reason"  id="absent_without_reason" placeholder=""  >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Amount</label>
                <input type="text" class="form-control  py-0   input_size" value="{{round($one_day_total)}}"   name="absent_without_reason"  id="absent_without_reason" placeholder=""  >
            </div>
        </div>

    </div>

    {{--<div class="form-group">--}}
    {{--<label for="" class="text_font" >Total Amount</label>--}}
    {{--<input type="text" class="form-control  py-0   input_size" value="{{round(number_format($total_late_amount,2))}}"  name="absent_with_reason"  id="absent_with_reason" placeholder=""  >--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label for="" class="text_font" >Loan Installment</label>--}}
    {{--<input type="text" class="form-control  py-0   input_size"  value="{{$employee->loan_installments}}" name="loan_installments" required id="loan_installments" placeholder=""  >--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label for="" class="text_font" >Loan Amount</label>--}}
    {{--<input type="text" class="form-control  py-0   input_size" value="{{$employee->loan_amount}}"  name="loan_amount"  id="loan_amount" placeholder=""  >--}}
    {{--</div>--}}

    <div class="form-group">
        <label for="" class="text_font" >Pension Authority</label>
        <input type="text" class="form-control  py-0   input_size" value=""  name="pension_authority"  id="Pension_authority" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Other Deduction</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->other_deductions}}"   name="other_deductions"  id="other_deductions" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Gratuity Advance</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->gratuity_advance}}"  name="gratuity_advance"  id="gratuity_advance" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Salary Advance</label>
    <input type="text" class="form-control  py-0   input_size" value="{{$employee->salary_advance}}"  name="salary_advance" required id="salary_advance" placeholder=""  >
    </div>

    </div>


        <div class="col-md-4">Salary Computation
                <div class="form-group ">
                    <label for="">Total Salary</label>
                    <input type="text" class="form-control  py-0 bg-warning  font-weight-bolder  input_size text-white" value="{{number_format($total_allowances,2)}}"  name="date_joined"  id="date_joined"   style="color: #ffffff;!important; font-size: 18px;">
                </div>



                <div class="form-group">
                    <label for="">Total Deductions</label>
                    <input type="text" class="form-control  py-0 bg-info   font-weight-bolder input_size text-white" value="{{number_format(round($total_deductions,2))}}"  name="date_joined"  id="date_joined"   style="color: #ffffff;!important; font-size: 18px;">
                </div>


                <div class="form-group">
                    <label for="">Net Salary</label>
                    <input type="text" class="form-control  py-0 bg-success font-weight-bolder text-white   input_size" value="{{number_format(($total_allowances-$total_deductions-$total_late_amount),2)}}"   name="date_joined"  id="date_joined" style="color: #ffffff;!important; font-size: 18px;" >
                </div>

            <hr class="bg-secondary">



            <div class="form-group">
            <a href="{{route('print_salary',$employee->id)}}" target="_blank">
            <button  class=" py-0  btn-hover color-3 btn-block "   name="leave_end"  id="leave_end" ><i class="fa fa-print"></i>Print</button>
            </a>
            </div>

            <div class="form-group">
            <button type="button" class="btn-hover color-6  py-0 btn-block      text-white font-weight-bolder"   name="leave_end" required id="leave_end" >Send Pay Slip</button>
            </div>

            <div class="form-group">
            <button type="button" class="btn-hover color-9  py-0 btn-block    text-white font-weight-bolder"   name="leave_end" required id="leave_end">New Salary Sheet</button>
            </div>



</div>

        </div>


    <hr>


    <hr>


    <!-- DataTales Example -->
    {{--<div class="container-fluid">--}}
        {{--<div class="card border-0 shadow mb-4" style="border-radius: 0">--}}
            {{--<div class="card-header py-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px"> </div>--}}
            {{--<div class="card-body">--}}
                {{--<div class="table-responsive text-center" style="font-size: 10px">--}}
                    {{--<table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">--}}
                        {{--<h3>x</h3>--}}
                        {{--<theade>--}}
                            {{--<tr>--}}
                                {{--<th></th>--}}
                                {{--<th class="text_font" >Employee Name</th>--}}
                                {{--<th class="text_font" >Employee Code</th>--}}
                                {{--<th class="text_font" >Designation</th>--}}
                                {{--<th class="text_font" >Basic Salary</th>--}}
                                {{--<th class="text_font" >Allowances</th>--}}
                                {{--<th class="text_font" >Deductions</th>--}}
                                {{--<th class="text_font" >Net Salary</th>--}}
                                {{--<th class="text_font" >Payment Type</th>--}}
                                {{--<th class="text_font" >Date Joined</th>--}}
                            {{--</tr>--}}
                        {{--</theade>--}}

                        {{--@foreach($departments as $department)--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th class="text-center text_font">Department:{{$department->department_name}}</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($department->employees as $employee)--}}
                                {{--<tr>--}}
                                    {{--<td></td>--}}
                                    {{--<td class="text_font" >{{$employee->first_name}}&nbsp;&nbsp;{{$employee->last_name}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->employee_number}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->designations->first()->designation}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->basic_salary}}</td>--}}
                                    {{--<td class="text_font" >{{0}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->basic_salary}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->basic_salary}}</td>--}}
                                    {{--<td class="text_font" >{{"Cash"}}</td>--}}
                                    {{--<td class="text_font" >{{$employee->start_date}}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--@endforeach--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection