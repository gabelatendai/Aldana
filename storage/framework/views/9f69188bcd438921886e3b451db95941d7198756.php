<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.toast.toast', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.employees.modals.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.delete.deletemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
    <div class="row">
        <div class="col-md-4">
            <h4>Single Employee</h4>
            <form action="<?php echo e(route('employee_salary_calculator')); ?>" id="submit_employee_salary_form_single">
                <div class="form-group  ">
                    <select id="employee_salary"  name="employee_salary" class="form-control mb-2 py-0 input_size text_font" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                        <option value="" class="text_font" >Select Employee</option>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="text_font" value="<?php echo e($y->id); ?>"><?php echo e($y->employee_number); ?>,<?php echo e($y->first_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group  <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                    <?php
                    $year=\Carbon\Carbon::now()->year;
                    $month=\Carbon\Carbon::now()->month;
                    $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                    $date->format('F Y');
                    ?>
                    <input type="text" class="form-control input-sm input_size monthYearPicker text_font " value="<?php echo e($date->format('F Y')); ?>" required name="salary_period" id="salary_period" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">

                    <div class="col-md-2 mt-3">
                        <button type="submit" class="btn-hover color-8 mb-4">Load</button>
                    </div>
                </div>
            </form>
        </div>




        <div class="col-md-4">
            <h4>By Department</h4>
            <form action="<?php echo e(route('employee_salary_calculator_department')); ?>" id="submit_employee_salary_form_department">
                <div class="form-group  ">
                    <select id="employee_salary"  name="employee_salary_department" class="form-control mb-2 py-0 input_size text_font " required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                        <option value="" class="text_font" >Select Department</option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="text_font" value="<?php echo e($y->id); ?>"><?php echo e($y->department_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>



                <div class="form-group  <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                    <?php
                    $year=\Carbon\Carbon::now()->year;
                    $month=\Carbon\Carbon::now()->month;
                    $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                    $date->format('F Y');
                    ?>
                    <input type="text" class="form-control input-sm input_size monthYearPicker  text_font " value="<?php echo e($date->format('F Y')); ?>" required name="salary_period" id="salary_period_department" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">

                <div class="col-md-2 mt-3">
                    <button type="submit" class="btn-hover color-4 mb-4">Load</button>
                </div>
        </div>
        </form>
        </div>


        <div class="col-md-4">
            <h4>All Employees</h4>
                    <form action="<?php echo e(route('employee_salary_calculator_all')); ?>" id="submit_employee_salary_form_all">
                        <div class="form-group  <?php echo e($errors->has('salary_period') ? ' has-error' : ''); ?>">
                            <?php
                            $year=\Carbon\Carbon::now()->year;
                            $month=\Carbon\Carbon::now()->month;
                            $date = \Carbon\Carbon::createFromDate($year, $month, 1);
                            $date->format('F Y');
                            ?>
                            <input type="text" class="form-control input-sm input_size  monthYearPicker text_font" value="<?php echo e($date->format('F Y')); ?>" required name="salary_period_all" id="salary_period_all" placeholder="Salary Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                            <div class="col-md-2 mt-3">
                                <button type="submit" class="btn-hover color-5 mb-4">Load</button>
                            </div>
                        </div>
                    </form>
        </div>

    </div>

    </div>

    
        
            
                
                
            


            
                
                
            


            
                
                
            


            
                
                
            

            
                
                
            

            
                
                
            

            
            
            
                
                    
                        
                        
                    
                

                
                    
                        
                        
                    

                

            
        

        

            
                
                    
                
            
            
                
                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                    
                        
                        
                    

                


                

                    
                        
                        
                    

                

            


        

    

    

    
        
            
                
                
            
        

        
            
                
                
            
        

        
            
                
                
            
        
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>