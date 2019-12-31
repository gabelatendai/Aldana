<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 5px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 2px;
            padding-bottom: 12px;
            text-align: left;
            font-size: 8px;
            color: black;
        }
    </style>
</head>
<body>

{{--@if($company_info)--}}
{{--<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">--}}
    {{--<div class="sidebar-brand-icon rotate-n-15">--}}
        {{--@if(env('APP_ENV') === 'production')--}}
            {{--<img class="img-fluid rounded-circle rounded-5  "  width="60" height="60" src="{{asset("public/img/com-logo.jpg")}}">--}}
        {{--@else--}}
            {{--<img class="img-fluid rounded-circle rounded-5  "  width="60" height="60" src="{{asset("/img/com-logo.jpg")}}">--}}
        {{--@endif--}}
    {{--</div>--}}
    {{--<div class="sidebar-brand-text mx-3 text-success">{{$company_info->name}}</div>--}}
{{--</a>--}}
{{--@endif--}}

<div class="div">
    <h3 style="text-align: center">Employee Information</h3>
    <div class="row">
        <div class="div">
           <h4> name: <b>{{$user->first_name}} &nbsp;&nbsp;{{$user->last_name}}</b></h4>
        </div>
        <div class="div">
            <h3>Employee Code:{{$user->employee_number}}</h3>
        </div>

    </div>

</div>

<div class="container-fluid">
    <div class="card border-0 shadow mb-4" style="border-radius: 0">
        <div class="card-header py-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px"> </div>
        <div class="card-body">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                    <h3>DATE:</h3>
                    <thead>
                        <tr style="border-bottom: black">
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
                    </thead>

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
                        <tr style="border: 2px solid black">
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

</div>
<script>

    window.print();

</script>
</body>
</html>

