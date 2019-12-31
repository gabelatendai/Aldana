<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.toast.toast', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.employees.modals.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.delete.deletemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft card">
        <div class="row w-100">
            <div class="row w-100 text-center mx-auto"><div class="col-md3 mx-auto   text-center "><p class="text-center">Employee salary Data</p></div></div>
        </div>

        <div class="card-header py-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px;padding: 0">
            <div class="row text-center mx-auto ">
                <div class="col-md-2 mt-3">
                    <form action="<?php echo e(route('employee_salary_calculator')); ?>" id="submit_employee_salary_form">
                        <div class="form-group ">
                            <label for="">Select Employee</label>
                            <select id="employee_salary"  name="employee_salary" class="form-control mb-2 py-0 input_size text_font" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                <option value="<?php echo e($employee->id); ?>" class="text_font" ><?php echo e($employee->first_name); ?></option>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text_font" value="<?php echo e($y->id); ?>"><?php echo e($y->employee_number); ?>|<?php echo e($y->first_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-2  mt-3">
                    <div class="form-group <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                        <label for="">Month|Year</label>
                        <?php
                        $year=\Carbon\Carbon::now()->year;
                        $month=\Carbon\Carbon::now()->month;

                        $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                        $date->format('F Y');

                        ?>

                        <input type="text" class="form-control input-sm input_size date_text_input_salary_period text_font " value="<?php echo e($date->format('F Y')); ?>" required name="salary_period" id="salary_period" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                        <?php if($errors->has('salary_period')): ?>
                            <dive class="text-danger mt-4">
                                <strong><?php echo e($errors->first('salary_period')); ?></strong>
                                <style>
                                    #salary_period{
                                        border-bottom: solid 1px;
                                        color: red;
                                        font-size: 10px;
                                    }
                                </style>
                            </dive>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn-hover color-4 mb-4">Load</button>
                </div>
                </form>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->employee_number); ?>"  name="code" required id="code" placeholder="Code"  >
                    </div>
                </div>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->designations->first()->designation); ?>"  name="designation" required id="designation" placeholder="Designation"  >
                    </div>
                </div>

                <div class="col-md-2 mt-3">
                    <div class="form-group">
                        <label for="">Date Joined</label>
                        <input type="text" class="form-control  py-0   input_size"  value="<?php echo e($employee->start_date); ?>"  name="date_joined" required id="date_joined" placeholder="date_joined"  >
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4">Payment Method
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                            <label for="" class="text_font" >Cash</label>
                            <input type="radio" class="form-control text-left input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            <?php if($errors->has('salary_period')): ?>
                                <dive class="text-danger mt-4">
                                    <strong><?php echo e($errors->first('salary_period')); ?></strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                            <label for="" class="text_font" >Check</label>
                            <input type="radio" class="form-control text-white text-left input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            <?php if($errors->has('salary_period')): ?>
                                <dive class="text-danger mt-4">
                                    <strong><?php echo e($errors->first('salary_period')); ?></strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                            <label for="" class="text_font" >Bank</label>
                            <input type="radio" class="form-control input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                            <?php if($errors->has('salary_period')): ?>
                                <dive class="text-danger mt-4">
                                    <strong><?php echo e($errors->first('salary_period')); ?></strong>
                                    <style>
                                        #salary_period{
                                            border-bottom: solid 1px;
                                            color: red;
                                            font-size: 10px;
                                        }
                                    </style>
                                </dive>
                            <?php endif; ?>
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
                            <input type="text" class="form-control  py-0   input_size" value="<?php echo e($years); ?>"  name="service_duration_years"  id="service_duration_years" placeholder="Years"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-inline">
                            <label for="service_duration_months">Months</label>
                            <input type="text" class="form-control  py-0   input_size" value="<?php echo e($months); ?>"  name="service_duration_months"  id="service_duration_months" placeholder="months"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-inline">
                            <label for="service_duration_days">Days</label>
                            <input type="text" class="form-control  py-0   input_size" value="<?php echo e($days-($years*365)-($months*30)); ?>"  name="service_duration_days"  id="service_duration_days" placeholder="Days"  >
                        </div>
                    </div>

                    <div class="col-md-2 mt-3">
                        <div class="form-group">
                            <label for="service_duration_leaving">Date Leaving</label>
                            <input type="text" class="form-control  py-0   input_size" value="<?php echo e($start_date->addYears($employee->contract_period)->toDateString()); ?>"  name="service_duration_leaving"  id="service_duration_leaving" placeholder="Date Leaving"  >
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
                <div class="input-group <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                    <label for="" class="text_font" >Gaoing for leave</label>
                    <input type="checkbox" class="form-control input-sm input_size payment_method " required name="payment_method" id="payment_method"  style="border-radius: 2rem!important;font-size: 0.7rem">
                    <?php if($errors->has('salary_period')): ?>
                        <dive class="text-danger mt-4">
                            <strong><?php echo e($errors->first('salary_period')); ?></strong>
                            <style>
                                #salary_period{
                                    border-bottom: solid 1px;
                                    color: red;
                                    font-size: 10px;
                                }
                            </style>
                        </dive>
                    <?php endif; ?>
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

                            <?php if(env('APP_ENV') === 'production'): ?>
                                <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="<?php echo e(asset("public/upload/employees/images/$employee->profile_photo")); ?>">
                            <?php else: ?>
                                <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="<?php echo e(asset("upload/employees/images/$employee->profile_photo")); ?>">
                            <?php endif; ?>
                            <input hidden="" type="file" name="photo" value="<?php echo e($employee->profile_photo); ?>" id="photo" value="" accept="image/x-png,image/png,image/jpg,image/jpeg">
                            


                        </td>

                        </tbody>

                    </table>

                </div>

            </div>


            <div class="col-md-2 mt-md-3">
                
                
                

                
                
                

                
                
                
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
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->basic_salary); ?>"   name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Accommodation Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->accommodation_allowance); ?>"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Experience Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->experience_allowance); ?>"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>


    <div class="form-group">
    <label for="" class="text_font" >Responsibilities</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->responsibility_allowance); ?>"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Other Allowance</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->other_allowance); ?>"   name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Transportation</label>
    <input type="text" class="form-control  py-0   input_size"  value="<?php echo e($employee->transport_allowance); ?>"  name="date_joined" required id="date_joined" placeholder=""  >
    </div>

    
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
                <input type="text" class="form-control  py-0   input_size" value="<?php echo e($late_hours); ?>" name="absent_hours"  id="absent_hours" placeholder=""  >
        </div>
    </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Amount</label>
                <input type="text" class="form-control  py-0   input_size" value="<?php echo e(round($one_hour_total)); ?>" name="absent_hours"  id="absent_hours" placeholder=""  >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Absent without Excuse(days)</label>
                <input type="text" class="form-control  py-0   input_size" value="<?php echo e($late_days); ?>"   name="absent_without_reason"  id="absent_without_reason" placeholder=""  >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="text_font" >Amount</label>
                <input type="text" class="form-control  py-0   input_size" value="<?php echo e(round($one_day_total)); ?>"   name="absent_without_reason"  id="absent_without_reason" placeholder=""  >
            </div>
        </div>

    </div>

    
    
    
    

    
    
    
    

    
    
    
    

    <div class="form-group">
        <label for="" class="text_font" >Pension Authority</label>
        <input type="text" class="form-control  py-0   input_size" value=""  name="pension_authority"  id="Pension_authority" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Other Deduction</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->other_deductions); ?>"   name="other_deductions"  id="other_deductions" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Gratuity Advance</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->gratuity_advance); ?>"  name="gratuity_advance"  id="gratuity_advance" placeholder=""  >
    </div>

    <div class="form-group">
    <label for="" class="text_font" >Salary Advance</label>
    <input type="text" class="form-control  py-0   input_size" value="<?php echo e($employee->salary_advance); ?>"  name="salary_advance" required id="salary_advance" placeholder=""  >
    </div>

    </div>


        <div class="col-md-4">Salary Computation
                <div class="form-group ">
                    <label for="">Total Salary</label>
                    <input type="text" class="form-control  py-0 bg-warning  font-weight-bolder  input_size text-white" value="<?php echo e(number_format($total_allowances,2)); ?>"  name="date_joined"  id="date_joined"   style="color: #ffffff;!important; font-size: 18px;">
                </div>



                <div class="form-group">
                    <label for="">Total Deductions</label>
                    <input type="text" class="form-control  py-0 bg-info   font-weight-bolder input_size text-white" value="<?php echo e(number_format(round($total_deductions,2))); ?>"  name="date_joined"  id="date_joined"   style="color: #ffffff;!important; font-size: 18px;">
                </div>


                <div class="form-group">
                    <label for="">Net Salary</label>
                    <input type="text" class="form-control  py-0 bg-success font-weight-bolder text-white   input_size" value="<?php echo e(number_format(($total_allowances-$total_deductions-$total_late_amount),2)); ?>"   name="date_joined"  id="date_joined" style="color: #ffffff;!important; font-size: 18px;" >
                </div>

            <hr class="bg-secondary">



            <div class="form-group">
            <a href="<?php echo e(route('print_salary',$employee->id)); ?>" target="_blank">
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
    
        
            
            
                
                    
                        
                        
                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            
                        

                        
                        
                        
                            
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                            
                            
                        
                    
                
            
        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>