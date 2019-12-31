@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
    <div class="row">
        <div class="col-md-4">
            <h4>Single Employee</h4>
            <form action="{{route('employee_salary_calculator')}}" id="submit_employee_salary_form_single">
                <div class="form-group  ">
                    <select id="employee_salary"  name="employee_salary" class="form-control mb-2 py-0 input_size text_font" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                        <option value="" class="text_font" >Select Employee</option>
                        @foreach($employees as $key=>$y)
                            <option class="text_font" value="{{$y->id}}">{{$y->employee_number}},{{$y->first_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group  {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                    <?php
                    $year=\Carbon\Carbon::now()->year;
                    $month=\Carbon\Carbon::now()->month;
                    $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                    $date->format('F Y');
                    ?>
                    <input type="text" class="form-control input-sm input_size monthYearPicker text_font " value="{{$date->format('F Y')}}" required name="salary_period" id="salary_period" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">

                    <div class="col-md-2 mt-3">
                        <button type="submit" class="btn-hover color-8 mb-4">Load</button>
                    </div>
                </div>
            </form>
        </div>




        <div class="col-md-4">
            <h4>By Department</h4>
            <form action="{{route('employee_salary_calculator_department')}}" id="submit_employee_salary_form_department">
                <div class="form-group  ">
                    <select id="employee_salary"  name="employee_salary_department" class="form-control mb-2 py-0 input_size text_font " required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                        <option value="" class="text_font" >Select Department</option>
                        @foreach($departments as $key=>$y)
                            <option class="text_font" value="{{$y->id}}">{{$y->department_name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group  {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                    <?php
                    $year=\Carbon\Carbon::now()->year;
                    $month=\Carbon\Carbon::now()->month;
                    $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                    $date->format('F Y');
                    ?>
                    <input type="text" class="form-control input-sm input_size monthYearPicker  text_font " value="{{$date->format('F Y')}}" required name="salary_period" id="salary_period_department" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">

                <div class="col-md-2 mt-3">
                    <button type="submit" class="btn-hover color-4 mb-4">Load</button>
                </div>
        </div>
        </form>
        </div>


        <div class="col-md-4">
            <h4>All Employees</h4>
                    <form action="{{route('employee_salary_calculator_all')}}" id="submit_employee_salary_form_all">
                        <div class="form-group  {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                            <?php
                            $year=\Carbon\Carbon::now()->year;
                            $month=\Carbon\Carbon::now()->month;
                            $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                            $date->format('F Y');
                            ?>
                            <input type="text" class="form-control input-sm input_size  monthYearPicker text_font" value="{{$date->format('F Y')}}" required name="salary_period_all" id="salary_period_all" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                            <div class="col-md-2 mt-3">
                                <button type="submit" class="btn-hover color-5 mb-4">Load</button>
                            </div>
                        </div>
                    </form>
        </div>

    </div>

    </div>

    {{--<div class="row mx-auto">--}}
        {{--<div class="col-md-4">Allowances--}}
            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Basic Salary</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}


            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Accommodation Allowance</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}


            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Experience Allowance</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}


            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Responsibilities</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Other Allowance</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="" class="text_font" >Transportation</label>--}}
                {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
            {{--</div>--}}

            {{--<hr>--}}
            {{--<p>Overtime</p>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Hours</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Amount</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-6">--}}

            {{--<div class="row mx-auto text-center">--}}
                {{--<div class="col-md-3 mx-auto">--}}
                    {{--Deductions--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Absent Hours</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Absent without reason(days)</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Absent with reason(days)</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Loan Installment</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Fees Deduction</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Other Deduction</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Gratuity Advance</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >Salary Advance</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                {{--</div>--}}


                {{--<div class="col-md-6">--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="" class="text_font" >penalty</label>--}}
                        {{--<input type="text" class="form-control  py-0   input_size"   name="date_joined" required id="date_joined" placeholder=""  >--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}


        {{--</div>--}}

    {{--</div>--}}

    {{--<hr>--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-4">--}}
            {{--<div class="form-group ">--}}
                {{--<label for="">Total Salary</label>--}}
                {{--<input type="text" class="form-control  py-0 bg-warning  font-weight-bolder  input_size text-white"   name="date_joined" required id="date_joined" placeholder="4750"  style="color: #ffffff;!important; font-size: 18px;">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-4">--}}
            {{--<div class="form-group">--}}
                {{--<label for="">Total Deductions</label>--}}
                {{--<input type="text" class="form-control  py-0 bg-info   font-weight-bolder input_size text-white"   name="date_joined" required id="date_joined" placeholder="250"  style="color: #ffffff;!important; font-size: 18px;">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-4">--}}
            {{--<div class="form-group">--}}
                {{--<label for="">Net Salary</label>--}}
                {{--<input type="text" class="form-control  py-0 bg-success font-weight-bolder text-white   input_size"   name="date_joined" required id="date_joined" placeholder="50000" style="color: #ffffff;!important; font-size: 18px;" >--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection