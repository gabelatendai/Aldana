<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.toast.toast', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.employees.modals.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.delete.deletemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Begin Page Content -->
    <?php
    $conn=mysqli_connect("localhost", "root", "","al_danahr");

?>
    <div class="container-fluid animated fadeInLeft">
        <div class="container-fluid text-center">
            <div class="card shadow mb-4 text-center"  style="border-radius: 0">
                <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0">
                    Manage Attendances Reports
                </div>

                <ul class="nav tabs-orange text-center mx-auto" id="attendance_reports" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link btn-hover color-2 shadow-none active show " id="profile-tab-classic-orange" data-toggle="tab" href="#profile-classic-orange"
                           role="tab" aria-controls="profile-classic-orange" aria-selected="true">
                            
                            Daily Report</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-3" id="awesome-tab-classic-orange" data-toggle="tab" href="#date_range_reports"
                           role="tab" aria-controls="awesome-tab-classic-orange" aria-selected="false">
                            
                            Date Range</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-9" id="awesome-tab-classic-orange" data-toggle="tab" href="#awesome-classic-orange"
                           role="tab" aria-controls="awesome-classic-orange" aria-selected="false">
                            
                            Custom Report</a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            
                            Shift wise </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            
                            Absents</a>
                    </li>


                </ul>

                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade active show" id="profile-classic-orange" role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="show_attendance_byDate_form" action="<?php echo e(route('show_attendances_byDate')); ?>" method="get" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <?php $today= \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="col-md-6 mx-auto ">
                                        <div class="form-group  text-center mx-auto">
                                            <label for="leave_start_date">Date</label>
                                            <input type="text" class="form-control input_size text-center py-0"  value="<?php echo e($today); ?>" required name="checkdate" placeholder="Date" id="leave_start_date">
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDate" class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2" style="width: 100px;height: 30px">Load</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade show" id="profile-classic-orange " role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="profile-classic-orange" action="<?php echo e(route('show_attendances_byDateRange')); ?>" method="get" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <?php $today= \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="row">

                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Start Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"  value="<?php echo e($today); ?>" required name="checkdate_start" placeholder="Date" id="leave_start_date">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">End Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"  required name="checkdate_end" placeholder="Date" id="leave_start_date">
                                            </div>
                                        </div>


                                    </div>





                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDateRange" class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2" style="width: 100px;height: 30px">Load</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>










                <style>
                    .box22{
                        width:20px;
                        height:20px;
                    }
                </style>






                <?php if($employees): ?>
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text_font font-weight-bolder">
                            <th>Employee Name</th>
                            <?php

                            $date=\Carbon\Carbon::now()->day;


                            //        print_r($date) ;


                            for($i=1;$i<29;$i++){?>
                            <th><?php echo e($i); ?></th>
                            <?php } ?>

                            <?php if(date('t')>28):?><th>29</th><?php endif;?>
                            <?php if(date('t')>29):?><th>30</th><?php endif;?>
                            <?php if(date('t')>30):?><th>31</th><?php endif;?>

                        </tr>
                        </thead>
                        <tbody>



                        <?php
                        //$employee_name=$employee->id;
                        //dd($employees);

                        //@foreach($attendances ->where('user_id','=','8') as $employee)
                        // $Attends = \App\Attends::where('user_id', $employee->id);
                        // dd($Attends);
                        //for($k=$i;$k=<31;$k++){
                       // @if($attendances->daynum== $i)

                        //$Attends->checktime //This value is to be entered in the tooltip to replace 222

                        // $employee->checkdate =\Carbon\Carbon::now();
// @if(!empty($check->day_number) && $check->day_number==$employee->employee_number)
                        $depart=mysqli_query($conn,"SELECT * from users");
                      //  $department=;


                        while($employee=mysqli_fetch_array($depart)){
                            $sh=$employee['shift_id'];
                        $id = $employee['employee_number'];

                        $dg=mysqli_query($conn,"SELECT * from shifts where id = '$sh'");
                        $shift=mysqli_fetch_array($dg);

                        if($shift['shift_name']=="red"){
                             $color = '<div class="box22 red" data-toggle="tooltip" data-placement="top" title="{{222}}"></div>' ;
                        } elseif($shift['shift_name']=="green"){

                          $color = '<div class="box22 green" data-toggle="tooltip" data-placement="top" title="{{222}}"></div>';
}
                        elseif($shift['shift_name']=="blue"){

                            $color = '<div class="box22 blue" data-toggle="tooltip" data-placement="top" title="{{222}}"></div>';

                        }

                        $d=mysqli_query($conn,"SELECT * from attends where user_id = '$id'");

                        ?>
                            <tr class="text_font">
                                <td> <?php echo $employee['first_name']  .'  '   . $employee['last_name'];?></td>
                                <?php $count=mysqli_num_rows($d);?>
                                <?php  while( $attend=mysqli_fetch_array($d)){ ?>
<td class="td"><?php echo $color; ?></td>

                                <?php } ?>
                            <!--  <td><div class="box22 red" data-toggle="tooltip" data-placement="top" title="<?php echo e(222); ?>">{{}}</div></td>
        <td><div class="box22 green"></div></td>
        <td><div class="box22 blue"> </div></td>-->

                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <?php if(date('t')>28):?><td> </td><?php endif;?>
                                <?php if(date('t')>29):?><td> </td><?php endif;?>
                                <?php if(date('t')>30):?><td> </td><?php endif;?>


                            </tr>

                            <?php
                            }
                            //dd($Attends);
                            ?>


                     

                        </tbody>
                    </table>
    <?php endif; ?>









<?php $__env->stopSection(); ?>

<style>
  .table .tr .td  .box22 {
height: 70px;
        width:100px;
      background-color: red;

    }
</style>
<?php echo $__env->make("admin.layout.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>