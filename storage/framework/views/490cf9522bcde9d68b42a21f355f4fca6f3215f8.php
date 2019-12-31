<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.toast.toast', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.employees.modals.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.delete.deletemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr style="font-size: 12px;color: #1b1e21;'Roboto', sans-serif;">
                                    <td class="text_font" ><?php echo e($employee->email); ?></td>
                                    <td class="text_font" ><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></td>
                                    <td class="text_font" ><?php echo e($employee->department->department_name); ?></td>
                                    <td class="text_font" ><?php echo e($employee->employee_status); ?></td>


                                    <?php if(env('APP_ENV') === 'production'): ?>
                                        <td class="hover_to_enlarge"><img class="img-fluid rounded-circle " width="20px" height="20px" src="<?php echo e(asset("public/upload/employees/images/$employee->profile_photo")); ?>"></td>
                                    <?php else: ?>
                                        <td class="hover_to_enlarge"><img class="img-fluid rounded-circle " width="20px" height="20px" src="<?php echo e(asset("upload/employees/images/$employee->profile_photo")); ?>"></td>
                                    <?php endif; ?>
                                    
                                    

                                    <td><a class="btn btn-success btn-sm " method="get"  name="student_id" href="<?php echo e(route('full_info',$employee->id)); ?>" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;view</a></td>
                                    <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="<?php echo e(route('employee_edit',$employee->id)); ?>" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                    <td>
                                        <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="<?php echo e(route('employee_delete',$employee->id)); ?>">
                                            <?php echo csrf_field(); ?>

                                            <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete <?php echo e($employee->first_name); ?> ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                        </form>
                                    </td>








                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                                <h3><?php echo e($employees->links()); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->


    
    
    
        
            
        
        
            
            
                
                
                    
                    
                
                
                

                
            
        
    
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>