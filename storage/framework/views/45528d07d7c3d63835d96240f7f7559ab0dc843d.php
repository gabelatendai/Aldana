<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.toast.toast', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.employees.modals.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.delete.deletemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card mb-2 border-0 mt-2" style=" border-radius: 0" >
            <div class="card-header custom_card_header text-center py-0" style="border-radius: 0">Employee Information</div>
            <div class="card-body">
                <!-- Classic tabs -->
                <div class="classic-tabs mx-auto">


                    <div class="row">
                        <div class="col-md-11">
                            <ul class="nav tabs-orange " id="myClassicTabOrange" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn-hover btn-danger shadow-none active show " id="profile-tab-classic-orange" data-toggle="tab" href="#profile-classic-orange"
                                       role="tab" aria-controls="profile-classic-orange" aria-selected="true">
                                        
                                        Personal info</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-secondary" id="contact-tab-classic-orange" data-toggle="tab" href="#contact-classic-orange"
                                       role="tab" aria-controls="contact-classic-orange" aria-selected="false" style="font-family: 'Roboto', sans-serif;">
                                        

                                        Official Documents</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-dark" id="awesome-tab-classic-orange" data-toggle="tab" href="#awesome-classic-orange"
                                       role="tab" aria-controls="awesome-classic-orange" aria-selected="false">
                                        
                                        Salary info</a>
                                </li>




                                <li class="nav-item">
                                    <a class="nav-link btn-hover btn-primary  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                                       role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                                        

                                        Documents</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link btn-hover btn-success  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                                       role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                                        

                                        Performance</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-elegant" id="previousjob-tab-classic-orange" data-toggle="tab" href="#previousjob-classic-orange"
                                       role="tab" aria-controls="previousjob-classic-orange" aria-selected="false">
                                        
                                        Previous Job</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-unique" id="trainingcouse-tab-classic-orange" data-toggle="tab" href="#trainingcouse-classic-orange"
                                       role="tab" aria-controls="trainingcouse-classic-orange" aria-selected="false">
                                        
                                        Training Courses</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-pink" id="awesome-tab-classic-orange" data-toggle="tab" href="#awesome-classic-orange"
                                       role="tab" aria-controls="awesome-classic-orange" aria-selected="false">
                                        
                                        Health Insurance</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover btn-purple" id="contractinfo-tab-classic-orange" data-toggle="tab" href="#contractinfo-classic-orange"
                                       role="tab" aria-controls="contractinfo-classic-orange" aria-selected="false">
                                        
                                        Contract Info</a>
                                </li>


                                
                                
                                
                                
                                
                                


                                <li class="nav-item">
                                    <a class="nav-link shadow-none btn-hover  btn-cyan" id="emergencycontact-tab-classic-orange" data-toggle="tab" href="#emergencycontact-classic-orange"
                                       role="tab" aria-controls="emergencycontact-classic-orange" aria-selected="false">
                                        
                                        Emergency Contacts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1 justify-content-center">
                            <div class="row  text-center justify-content-center">
                                <?php if(env('APP_ENV') === 'production'): ?>
                                    <img class=" img-fluid rounded-5" id="showPhoto"  style="width: 100px;height: 80px" src="<?php echo e(asset("public/upload/employees/images/$employee->profile_photo")); ?>">
                                <?php else: ?>
                                    <img class=" img-fluid rounded-5 " id="showPhoto"  style="width: 100px;height: 80px" src="<?php echo e(asset("upload/employees/images/$employee->profile_photo")); ?>">
                                <?php endif; ?>

                            </div>
                            <h6 class="text-info text-center"> <?php echo e($employee->last_name); ?></h6>

                        </div>
                    </div>


                    <div class="tab-content card border-0 " id="myClassicTabContentOrange">
                        <div class="tab-pane fade active show" id="profile-classic-orange" role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                            <div class="container-fluid mt-2">
                                <div class="row text-center mx-auto">
                                    <div class="col-md-3">
                                        <?php if(env('APP_ENV') === 'production'): ?>
                                            <img class="  img-fluid rounded-5"  style="width: 100%;height: auto" src="<?php echo e(asset("public/upload/employees/images/$employee->profile_photo")); ?>">
                                        <?php else: ?>
                                            <img class=" img-fluid  rounded-5 "  style="width: 100%;height: auto" src="<?php echo e(asset("upload/employees/images/$employee->profile_photo")); ?>">
                                        <?php endif; ?>
                                        <button class="btn-hover color-2"> <?php echo e($employee->last_name); ?></button>

                                    </div>


                                    <div class="col-md-3">
                                        <p class="card-header text_font text-left"><i class="fa fa-user"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Family Name: &nbsp;&nbsp;  <?php echo e($employee->first_name); ?></span></p>
                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-user"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Last Name: &nbsp;&nbsp;  <?php echo e($employee->last_name); ?></span></p>
                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-phone"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Phone: &nbsp;&nbsp;  <?php echo e($employee->mobile_number); ?></span></p>
                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Email: &nbsp;&nbsp;  <?php echo e($employee->email); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-flag"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Nationality: &nbsp;&nbsp;  <?php echo e($employee->nationality); ?></span></p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="card-header text_font text-left"><i class="fa fa-house-damage"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Department: &nbsp;&nbsp;  <?php echo e($employee->department->department_name); ?></span></p>
                                        
                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-flag"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Designation: &nbsp;&nbsp;  <?php echo e($employee->designations->first()->designation); ?></span></p>

                                        

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-lightbulb"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Status: &nbsp;&nbsp;  <?php echo e($employee->employee_status); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Joining Date: &nbsp;&nbsp;  <?php echo e($employee->start_date); ?></span></p>

                                    </div>

                                    <div class="col-md-3">
                                        <p class="card-header text_font text-left"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Education: &nbsp;&nbsp;  <?php echo e($employee->education_status); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Date of Birth: &nbsp;&nbsp;  <?php echo e($employee->date_of_birth); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-passport"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Passport Number: &nbsp;&nbsp;  <?php echo e($employee->passport_number); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-passport"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Visa Number: &nbsp;&nbsp;  <?php echo e($employee->visa_number); ?></span></p>

                                        <hr class="bg-success">
                                        <p class="card-header text_font text-left"><i class="fa fa-money-bill"></i>&nbsp;&nbsp;<span class="font-weight-bolder" style="font-size: 12px">Basic Salary: &nbsp;&nbsp;  </span></p>

                                    </div>
                                </div>



                            </div>
                        </div>


                        <div class="tab-pane fade" id="follow-classic-orange" role="tabpanel" aria-labelledby="follow-tab-classic-orange">
                            <div class="card-body">
                                <div class="table-responsive text-center" style="font-size: 10px">
                                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th class="text_font" >Document type</th>
                                            <th class="text_font" >Document scan </th>
                                            <th class="text_font" >Download</th>
                                            <th class="text_font" >Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $employee->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr style="font-size: 8pt">
                                                <td class="text_font text-left" ><?php echo e($employee_all->document_type); ?></td>
                                                <td class="text_font  text-left" ><?php echo e($employee_all->document_scan_file); ?></td>

                                                <td><a class="btn btn-warning btn-sm " target="_blank" href="/upload/employees/documents/<?php echo e($employee_all->document_scan_file); ?>" style="width: 100px;height: 30px"><i class="fa fa-download" style="font-size: 10px;color: white"></i>&nbsp;</a></td>

                                                <td>
                                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="<?php echo e(route('employee_delete',$employee_all->id)); ?>">
                                                        <?php echo csrf_field(); ?>

                                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete <?php echo e($employee_all->document_type); ?> ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-classic-orange" role="tabpanel" aria-labelledby="contact-tab-classic-orange">

                            <div class="row" >
                                <div class=" container-fluid">
                                    <table class="table table-white text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th class="text_font" scope="col" class="text-left">Document type</th>
                                            <th class="text_font" scope="col">document number</th>
                                            <th class="text_font" scope="col">issue place</th>
                                            <th class="text_font" scope="col">issue date</th>
                                            <th class="text_font" scope="col">Expiry Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr >
                                            <td class="text_font text-left" >Passport</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center   input_size text_font" value="<?php echo e($employee->passport_number); ?>" name="passport_number" id="passport_number">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font"  value="<?php echo e($employee->passport_issue_place); ?>"  name="passport_issue_place" id="passport_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->passport_issue_date); ?>" name="passport_issue_date" id="passport_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->passport_expiry_date); ?>" name="passport_expiry_date" id="passport_expiry_date">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <select id="visa_type" name="visa_type" class="form-control mb-2 py-0 input_size text_font" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                        <option class="text_font" ><?php echo e($employee->visa_type); ?></option>
                                                        <option class="text_font"  value="residential">Residential</option>
                                                        <option class="text_font"  value="visit">Visit</option>
                                                        <option class="text_font"  value="sponsor">Sponsor</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center   input_size text_font" value="<?php echo e($employee->visa_number); ?>" name="visa_number" id="visa_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->visa_issue_place); ?>"  name="visa_issue_place" id="visa_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->visa_issue_date); ?>" name="visa_issue_date" id="visa_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="visa_expiry_date" value="<?php echo e($employee->visa_expiry_date); ?>"  id="visa_expiry_date">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  class="text_font text-left">Labour Contract</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->labour_card_number); ?>" name="labour_card_number" id="labour_card_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->labour_card_issue_place); ?>" name="labour_card_issue_place" id="labour_card_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="labour_card_issue_date" value="<?php echo e($employee->labour_card_issue_date); ?>" id="labour_card_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="labour_card_expiry_date" value="<?php echo e($employee->labour_card_expiry_date); ?>" id="labour_card_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text_font text-left">Emirates Id</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->emirates_id_number); ?>" name="emirates_id_number" id="emirates_id_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->emirates_id_issue_place); ?>" name="emirates_id_issue_place" id="emirates_id_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->emirates_id_issue_date); ?>" name="emirates_id_issue_date" id="emirates_id_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->emirates_id_card_expiry_date); ?>" name="emirates_id_card_expiry_date" id="emirates_id_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text_font text-left" >Medical card</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->medical_card_number); ?>" name="medical_card_number" id="medical_card_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->medical_card_issue_place); ?>" name="medical_card_issue_place" id="medical_card_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->medical_card_issue_date); ?>" name="medical_card_issue_date" id="medical_card_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->medical_card_expiry_date); ?>" name="medical_card_expiry_date" id="medical_card_expiry_date">
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text_font text-left" >Driving Licence</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->driving_licence_number); ?>" name="driving_licence_number" id="driving_licence_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->driving_licence_issue_place); ?>"  name="driving_licence_issue_place" id="driving_licence_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->driving_licence_issue_date); ?>"   name="driving_licence_issue_date" id="driving_licence_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->driving_licence_expiry_date); ?>"   name="driving_licence_expiry_date" id="driving_licence_expiry_date">
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text_font text-left" >Work Permit</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->work_permit_number); ?>"  name="work_permit_number" id="work_permit_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->work_permit_issue_place); ?>"  name="work_permit_issue_place" id="work_permit_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->work_permit_issue_date); ?>"  name="work_permit_issue_date" id="work_permit_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="<?php echo e($employee->work_permit_expiry_date); ?>"  name="work_permit_expiry_date" id="work_permit_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <td class="text_font text-left" >Personal Code</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font"  value="<?php echo e($employee->personal_code); ?>" name="personal_code" id="personal_code">
                                            </div>
                                        </td>

                                        <td>
                                            <h6 class="text_font" >Passport possession</h6>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <select id="gender" name="passport_possession" class="form-control  py-0 input_size" style=" padding: 10px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                    <option class="text_font" value="<?php echo e($employee->passport_possession); ?>" ><?php echo e($employee->passport_possession); ?></option>
                                                    <option class="text_font" value="Company">Company</option>
                                                    <option class="text_font" value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="form-inline">
                                                <label class="text_font" for="passport_scan_file">Passport Scan</label> &nbsp;&nbsp;&nbsp;
                                                <input type="file" value="<?php echo e($employee->passport_scan_file); ?>" name="passport_scan_file" id="passport_scan_file" class="form-control py-0" >
                                            </div>
                                        </td>


                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="awesome-classic-orange" role="tabpanel" aria-labelledby="awesome-tab-classic-orange">
                            <div class="row mt-3">
                                <div class="col-md-6 mx-auto">Allowances
                                    <div class="form-group">
                                        <label for="" class="text_font" >Basic Salary</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="basic_salary"  id="date_joined" placeholder=""  >
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="text_font" >Accommodation Allowance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="accommodation_allowance"  id="date_joined" placeholder=""  >
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="text_font" >Experience Allowance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="experience_allowance"  id="date_joined" placeholder=""  >
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="text_font" >Responsibilities</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="responsibility_allowance"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Other Allowance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="other_allowance"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Transportation</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="transport_allowance"  id="date_joined" placeholder=""  >
                                    </div>

                                </div>

                                <div class="col-md-6 mx-auto"> Deductions


                                    <div class="form-group">
                                        <label for="" class="text_font" >Loan Amount</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="loan_amount"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Loan Installments</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="loan_installments"  id="date_joined" placeholder=""  >
                                    </div>



                                    <div class="form-group">
                                        <label for="" class="text_font" >Remaining Balance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="remaining_loan_balance"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Other Deduction</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="other_deductions"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Gratuity Advance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="gratuity_advance"  id="date_joined" placeholder=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text_font" >Salary Advance</label>
                                        <input type="text" class="form-control  py-0   input_size text_font "   name="salary_advance"  id="date_joined" placeholder=""  >
                                    </div>
                                </div>
                            </div>





                        </div>

                        

                        <div class="tab-pane fade" id="previousjob-classic-orange" role="tabpanel" aria-labelledby="previousjob-tab-classic-orange">

                                    <div class="card-body">
                                        <form action="<?php echo e(route('previous_job',$employee->id)); ?>" method="post" class="needs-validation" novalidate>
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Company Name</label>
                                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name"  required>
                                                    <div class="invalid-feedback">
                                                       Choose Company Name
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Position Held</label>
                                                    <input type="text" class="form-control" name="position_held" id="position_held" placeholder="Position "  required>
                                                    <div class="invalid-feedback">
                                                        Please enter Position Held
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="date_of_previous_leaving">Date of leaving</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control date_text_input" name="date_of_leaving"  id="date_of_leaving" placeholder="Date of leaving" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Please choose Date of Leaving
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <label for="reason_for_leaving">Reason for Leaving</label>
                                                <div class="input-group">
                                                    <textarea type="text" class="form-control" name="reason_for_leaving" id="reason_for_leaving"  aria-describedby="inputGroupPrepend" required></textarea>
                                                    <div class="invalid-feedback">
                                                        Please provide a reason for leaving
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn shadow-none    btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                            
                                        </form>


                                        <script>
                                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                                            (function() {
                                                'use strict';
                                                window.addEventListener('load', function() {
                                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                    var forms = document.getElementsByClassName('needs-validation');
                                                    // Loop over them and prevent submission
                                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                                        form.addEventListener('submit', function(event) {
                                                            if (form.checkValidity() === false) {
                                                                event.preventDefault();
                                                                event.stopPropagation();
                                                            }
                                                            form.classList.add('was-validated');
                                                        }, false);
                                                    });
                                                }, false);
                                            })();
                                        </script>
                                    </div>
                            <div class="table-responsive text-center" style="font-size: 10px">
                                <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                                    <theade>
                                        <tr>
                                            <th class="text_font" >Company name</th>
                                            <th class="text_font" >Position Held</th>
                                            <th class="text_font" >Leaving date</th>
                                            <th class="text_font" >Reason for leaving</th>
                                            <th class="text-danger">Delete</th>
                                        </tr>
                                    </theade>
                                    <tbody>
                                    <?php $__currentLoopData = $employee->previousjobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $previousjob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text_font" ><?php echo e($previousjob->company_name); ?></td>
                                            <td class="text_font" ><?php echo e($previousjob->position_held); ?></td>
                                            <td class="text_font" ><?php echo e($previousjob->date_left); ?></td>
                                            <td class="text_font" ><?php echo e($previousjob->reason_for_leaving); ?></td>
                                            <td class="text_font" ><a href=""><i class="fa fa-trash-alt text-danger"></i></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>



                        </div>




                        <div class="tab-pane fade" id="trainingcouse-classic-orange" role="tabpanel" aria-labelledby="trainingcouse-tab-classic-orange">
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('save_trainings',$employee->id)); ?>" class="needs-validation mb-4" novalidate>
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="institution_name">Institution Name</label>
                                            <input type="text" class="form-control" id="institution_name" name="institution_name" placeholder="Institution Name"  required>
                                            <div class="invalid-feedback">
                                                Please provide institution name
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="training_subject">Training Subject</label>
                                            <input type="text" class="form-control" id="training_subject" name="training_subject" placeholder="Training Subject "  required>
                                            <div class="invalid-feedback">
                                                Please enter training subject
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="date_of_previous_leaving">Training Start Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control date_text_input"  id="training_start_date" name="training_start_date" placeholder="Training Start Date" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose start Date
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="date_of_previous_leaving">Training End Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control date_text_input"  id="training_end_date" name="training_end_date" placeholder="Training End Date" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose start Date
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="certification">Certification</label>
                                            <input type="text" class="form-control" id="certification" name="certification" placeholder="Certification "  required>
                                            <div class="invalid-feedback">
                                                Please enter Certificate Awarded
                                            </div>
                                        </div>


                                        <div class="col-md-3 mb-3">
                                            <div class="form-group">
                                            <label for="hours_trained">Hours trained</label>
                                            <input type="text" class="form-control" id="hours_trained" name="hours_trained" placeholder="Training Hours "  required>
                                            <div class="invalid-feedback">
                                                Please enter Certificate Awarded
                                            </div>
                                            </div>
                                        </div>

                                            <div class="col-md-3 mt-4">
                                                <div class="input-group">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile03">
                                                        <label class="custom-file-label" for="inputGroupFile03">Upload Certificate</label>
                                                </div>
                                            </div>
                                        </div>
                                    <button type="submit" class="btn shadow-none mb-5  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                    
                                </form>

                                <hr class="bg-success">
                                </div>


                            <div class="table-responsive text-center" style="font-size: 10px">
                                <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                                    <theade>
                                        <tr>
                                            <th class="text_font" >Institution Name</th>
                                            <th class="text_font" >Training Subject</th>
                                            <th class="text_font" >Date start</th>
                                            <th class="text_font" >Date End</th>
                                            <th class="text_font" >Number of Hours</th>
                                            <th class="text_font" >Certification</th>
                                            <th class="text_font" >Certificate</th>
                                            <th class="text-danger">Delete</th>
                                        </tr>
                                    </theade>

                                    <tbody>
                                    <?php $__currentLoopData = $employee->trainings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text_font" ><?php echo e($training->institute_name); ?></td>
                                            <td class="text_font" ><?php echo e($training->training_subject); ?></td>
                                            <td class="text_font" ><?php echo e($training->training_start_date); ?></td>
                                            <td class="text_font" ><?php echo e($training->training_end_date); ?></td>
                                            <td class="text_font" ><?php echo e($training->number_of_hours); ?></td>
                                            <td class="text_font" ><?php echo e($training->certification); ?></td>
                                            <td class="text_font" ><?php echo e($training->certificate); ?></td>
                                            <td class="text_font" ><a href=""><i class="fa fa-trash-alt text-danger"></i></a></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>





                        <div class="tab-pane fade" id="contractinfo-classic-orange" role="tabpanel" aria-labelledby="contractinfo-tab-classic-orange">
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('save_contract',$employee->id)); ?>" class="needs-validation" novalidate>
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-row mx-auto">
                                        <div class="col-md-3 mb-3 mx-auto">
                                            <div class="form-group ">
                                                <label for="">Contract type</label>
                                                <select id="employee_salary"  name="contract_type" class="form-control mb-2 py-0 input_size text_font" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                    <option value="limited" class="text_font" >Limited</option>
                                                    <option value="unlimited" class="text_font" >Unlimited</option>
                                                    <option value="special condition" class="text_font" >Special Condition</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3 mx-auto">
                                            <label for="date_of_previous_leaving">Contract Start Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control date_text_input" name="contract_start_date"  id="contract_start_date" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose Contract start Date
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 mx-auto">
                                            <label for="date_of_previous_leaving">Contract End Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control date_text_input" name="contract_end_date"  id="contract_end_date" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose Contract End Date
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn shadow-none  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                    
                                </form>




                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>



                            <div class="table-responsive text-center" style="font-size: 10px">
                                <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                                    <theade>
                                        <tr>
                                            <th class="text_font" >Contract Type</th>
                                            <th class="text_font" >Contract Start Date</th>
                                            <th class="text_font" >Contract End Date</th>
                                            <th class="text-danger">Delete</th>
                                        </tr>
                                    </theade>

                                    <tbody>
                                    <?php $__currentLoopData = $employee->contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text_font" ><?php echo e($contract->contract_type); ?></td>
                                            <td class="text_font" ><?php echo e($contract->contract_start_date); ?></td>
                                            <td class="text_font" ><?php echo e($contract->contract_end_date); ?></td>
                                            <td class="text_font" ><a href=""><i class="fa fa-trash-alt text-danger"></i></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>




                        </div>





                        <div class="tab-pane fade" id="emergencycontact-classic-orange" role="tabpanel" aria-labelledby="emergencycontact-tab-classic-orange">
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('save_emergency',$employee->id)); ?>" class="needs-validation" novalidate>
                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-row mx-auto">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Contact Person</label>
                                            <input type="text" class="form-control" id="emergency_contact_person" name="emergency_contact_person" placeholder="Contact Person Name"  required>
                                            <div class="invalid-feedback">
                                               Please provide Contact Person name
                                            </div>
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <label for="contact_person_number">Contact Number</label>
                                            <input type="tel" class="form-control" id="contact_person_number" name="contact_person_number" placeholder="Contact Person Number "  required>
                                            <div class="invalid-feedback">
                                                Please Provide Contact Persons Number
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="contact_person_relationship">Contact Person Relationship</label>
                                            <input type="text" class="form-control" id="contact_person_relationship" name="contact_person_relationship" placeholder="Contact Person Relationship"  required>
                                            <div class="invalid-feedback">
                                                Please Provide Person relationship
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn shadow-none mt-4   btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                    
                                </form>




                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>

                            <div class="table-responsive text-center" style="font-size: 10px">
                                <table class="table text-center text_font" id="dataTable" width="100%" cellspacing="0" style="">
                                    <theade>
                                        <tr>
                                            <th class="text_font" >Contact Person Name</th>
                                            <th class="text_font" >Contact Person Number</th>
                                            <th class="text_font" >Contact Person Relationship</th>
                                            <th class="text-danger">Delete</th>
                                        </tr>
                                    </theade>

                                    <tbody>
                                    <?php $__currentLoopData = $employee->emergencycontacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emergency_contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text_font" ><?php echo e($emergency_contact->contact_person_name); ?></td>
                                            <td class="text_font" ><?php echo e($emergency_contact->contact_person_phone_number); ?></td>
                                            <td class="text_font" ><?php echo e($emergency_contact->contact_person_relationship); ?></td>
                                            <td class="text_font" ><a href=""><i class="fa fa-trash-alt text-danger"></i></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>

                </div>
                <!-- Classic tabs -->



            </div>
        </div>



    </div>

    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>