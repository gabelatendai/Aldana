@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <?php
    //    $total_allowances=$employee->basic_salary+$employee->accommodation_allowance+$employee->experience_allowance+$employee->responsibility_allowance+$employee->other_allowance+$employee->transport_allowance;
    //
    //    $total_salary=$total_allowances+$employee->basic_salary;
    //
    //
    //    $late_days=2;
    //    $late_hours=5;
    //
    //    $one_day_total=$total_salary/30*$late_days;
    //
    //    $one_hour_total=$total_salary/30/8*$late_hours;
    //
    //    $total_late_amount=$one_day_total+$one_hour_total;
    //
    //    $total_deductions=$employee->loan_installments+ $employee->other_deductions+ $employee->gratuity_advance+ $employee->salary_advance+$total_late_amount;

    ?>
    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card border-0 shadow mb-4" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px"> </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                        <h3>DATE:{{$date}}</h3>
                        <theade>
                            <tr>
                                <th class="text_font" >Employee Name</th>
                                <th class="text_font" >Employee Code</th>
                                <th class="text_font" >Designation</th>
                                <th class="text_font" >Basic Salary</th>
                                <th class="text_font" >Total Allowances</th>
                                <th class="text_font" >Total Deductions</th>
                                <th class="text_font" >Net Salary</th>
                                <th class="text_font" >Payment Type</th>
                                <th class="text_font" >Date Joined</th>
                            </tr>
                        </theade>

                            <tbody>
                            @foreach($employees as $employee)
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
                                <tr>
                                    <td class="text_font" >{{$employee->first_name}}&nbsp;&nbsp;{{$employee->last_name}}</td>
                                    <td class="text_font" >{{$employee->employee_number}}</td>
                                    <td class="text_font" >{{$employee->designations->first()->designation}}</td>
                                    <td class="text_font" >{{$employee->basic_salary}}</td>
                                    <td class="text_font" >{{round($total_allowances,2)}}</td>
                                    <td class="text_font" >{{number_format(round($total_deductions,2))}}</td>
                                    <td class="text_font" >{{number_format((round($total_allowances-$total_deductions-$total_late_amount)),2) }}</td>
                                    <td class="text_font" >{{"Cash"}}</td>
                                    <td class="text_font" >{{$employee->start_date}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <button class="btn-hover color-9">download</button>

    </div>
@endsection