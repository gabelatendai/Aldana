<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> AL DANA</title>
    <link rel="icon" href="<?php echo asset('/img/logo_raster.jpg'); ?>"/>
    <link href="<?php echo e(asset('css/font_awesome/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dnata_hr_main_css.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/mdb_bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/mdb.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/jquery-ui.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/colorPick.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/colorPick.dark.theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/jquery-clockpicker.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/jquery-ui-git.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fullcalendar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/sb-admin-2.css')); ?>" rel="stylesheet">

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <style>



        .dashboard_card:hover{
            animation: pulse 1s infinite;
            animation-timing-function: linear;
        }

        @keyframes  pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1)}
            100% { transform: scale(1); }
            }



        .colorPickSelector {
            border-radius:5px;
            width:50px;
            height:36px;
            cursor:pointer;
            -webkit-transition:all linear .2s;
            -moz-transition:all linear .2s;
            -ms-transition:all linear .2s;
            -o-transition:all linear .2s;
            transition:all linear .2s;
            z-index: 10;
        }


        /*Calendar one css*/
        .fc-fri{
            background-color: transparent!important;
        }

        .fc-title{
            font-size: 15px;
            color: #880E4F;
        }


        .fc-left h2{

            font-size: 15px;
            color: #0b51c5;

        }
        .fc-head{
            background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
            box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
            color: ghostwhite;
        }

        .fc-month-button {
            width: 80px;
            font-size: 10px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 2px;
            height: 20px;
            text-align:center;
            border: none;
            background-size: 300% 100%;
            background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
            box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
        }


        .fc-agendaWeek-button{
            width: 80px;
            font-size: 10px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 2px;
            height: 20px;
            text-align:center;
            border: none;

            background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
            box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);

        }

        .fc-content-skeleton>table>thead>tr{
            border: 2px solid aquamarine;

        }


        fc-button-group{


        }
        .fc-today{

            color: maroon;

        }

        /*End of calendar one css*/


        /*.fc-sat{*/
            /*background-color: aqua;*/
        /*}*/


        legend.salary-border {
            width:inherit; /* Or auto */
            padding:0 10px; /* To give a bit of padding on the left and right */
            border-bottom:none;
        }


        .colorPickSelector:hover { transform: scale(1.1); }


            .gift_icon:hover {
            cursor: pointer;
            }




        .fade-scale {
            transform: scale(0);
            -webkit-transition: all .25s linear;
            -o-transition: all .25s linear;
            transition: all .25s linear;
        }

        #official_documents_row{
            display: none;
        }


        #employee_documents_row{
            display: none;
        }

        #salary_row{
            display: none;
        }

        .list_card:hover{
            cursor: pointer;
        }

        .fade-scale.in {
            opacity: 1;
            transform: scale(1);
        }

        /*#calendar_row{*/

            /*display:none;*/
        /*}*/






        .file {
            visibility: hidden;
            position: absolute;
        }


        .display_hidden{
            display: none;

            transition: all 2s;
        }

        .display_shown{
            display: block;
            transition: all 2s;
        }



    </style>


</head>

<body id="page-top" style="color: black;!important;">

<!-- Page Wrapper -->
<div id="wrapper">
<?php echo $__env->make('admin.layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
        <div id="content">
        <?php echo $__env->make('admin.layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid " id="pageTransition">
                <i class="fa fa-external-link-alt" id="full-screen-btn"></i>
                <!-- Body Contents here -->
                <?php echo $__env->yieldContent("content"); ?>
                <!-- end of body contents -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->


        <?php echo $__env->make('admin.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>




<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center" >Edit Holiday</h4>

                
                
                
                Start time:
                <br />
                <input type="text" class="form-control" name="start_time" id="start_time">

                End time:
                <br />
                <input type="text" class="form-control" name="finish_time" id="finish_time">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="appointment_update" value="Save">
            </div>
        </div>
    </div>
</div>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo e(asset('js/jquery/jquery-3.4.1.min.js')); ?>"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="<?php echo e(asset('js/font_awesome/all.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-clockpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/colorPick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>



<script src="<?php echo e(asset('js/dnata_hr_main.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrapValidator.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.twbsPagination.js')); ?>"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="<?php echo e(asset('js/form_validation_client.js')); ?>"></script>
<script src="<?php echo e(asset('js/sweetalert2.all.js')); ?>"></script>
<script src="<?php echo e(asset('js/ckeditor.js')); ?>"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>






<?php echo $__env->yieldContent('script'); ?>

<script>
$(document).ready(function(){



    //HOLIDAY COLOR
    //ColorPick Configuaration
    $("#holiday_background_color_selector").colorPick({
        // 'initialColor':'#3498db',
        'allowRecent':true,
        'recentMax': 5,
        'allowCustomColor':true,
        'palette': ["#1abc9c","#16a085","#2ecc71","#27ae60","#3498db","#2980b9","#9b59b6","#8e44ad","#34495e","#2c3e50","#f1c40f","#f39c12","#e67e22","#d35400","#e74c3c","#c0392b","#ecf0f1","#bdc3c7","#95a5a6","#7f8c8d"],

        'onColorSelected':function() {
            this.element.css({'color':this.color});
            this.element.css({'background-color':this.color});

            var input_value=$('#background_color').val()

            $('#background_color').val(this.color);

            console.log('bg color'+input_value)
        }
    });


    //ColorPick Configuaration
    $("#holiday_text_color_selector").colorPick({
        // 'initialColor':'#3499db',
        'allowRecent':true,
        'recentMax': 5,
        'allowCustomColor':true,
        'palette': ["#1abc9c","#16a085","#2ecc71","#27ae60","#3498db","#2980b9","#9b59b6","#8e44ad","#34495e","#2c3e50","#f1c40f","#f39c12","#e67e22","#d35400","#e74c3c","#c0392b","#ecf0f1","#bdc3c7","#95a5a6","#7f8c8d"],

        'onColorSelected':function() {
            this.element.css({'color':this.color});
            this.element.css({'background-color':this.color});

            var input_value=$('#text_color').val()

            $('#text_color').val(this.color);

            console.log('text color'+input_value)
        }
    });

    //ColorPick Configuaration
    $("#holiday_border_color_selector").colorPick({
        // 'initialColor':'#3499db',
        'allowRecent':true,
        'recentMax': 5,
        'allowCustomColor':true,
        'palette': ["#1abc9c","#16a085","#2ecc71","#27ae60","#3498db","#2980b9","#9b59b6","#8e44ad","#34495e","#2c3e50","#f1c40f","#f39c12","#e67e22","#d35400","#e74c3c","#c0392b","#ecf0f1","#bdc3c7","#95a5a6","#7f8c8d"],

        'onColorSelected':function() {
            this.element.css({'color':this.color});
            this.element.css({'background-color':this.color});

            var input_value=$('#border_color').val()

            $('#border_color').val(this.color);

            console.log('border'+input_value)
        }
    });

//END OF HOLIDAY COLOR




// HOLIDAY SAVE
    $('#btn-save-holiday').click(function (e) {
        e.preventDefault()
        var background_color=$('#background_color').val();
        var border_color=$('#border_color').val();
        var text_color=$('#text_color').val()

        var holiday_name=$('#holiday_name').val();
        var start_date = $('#holiday_start_date').val();
        var end_date = $('#holiday_end_date').val();

        $.ajax({
            type: "POST",
            url: "<?php echo e(route('post_holiday')); ?>",
            dataType:'json',
            data: { background_color: background_color,border_color:border_color,text_color:text_color,holiday_name:holiday_name,start_date:start_date,end_date:end_date},
            success: function(data) {
                $('#holiday_calendar_modal').modal('hide');


                console.log(data)

            }


        });


        // console.log(department_array);
    });



    // loading Holiday calendar to the view
    $("#holiday_calendar").fullCalendar({
        // // put your options and callbacks here
        // dayClick: function(date, jsEvent, view) {
        //     // console.log($("#background_color")).val();
        //
        //     $('#holiday_calendar_modal').modal(
        //         {
        //             keyboard: true,
        //             // backdrop: 'static'
        //         }
        //     );
        //
        //     $('#holiday_start_date').val(date.format("YYYY-MM-DD"));
        //     // alert('Clicked on: ' + date.format());
        //     // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        //     // alert('Current view: ' + view.name);
        //
        //     // change the day's background color just for fun
        //     $(this).css('background-color', 'cyan');
        // },


        select:function (start, end){
            $('#holiday_calendar_modal').modal(
                {
                    keyboard: true,
                    // backdrop: 'static'
                }
            );
            console.log('selection')

            $('#holiday_start_date').val(start.format("YYYY-MM-DD"));
            $('#holiday_end_date').val(end.format("YYYY-MM-DD"));

        },


        editable:true,
        selectable: true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        defaultView: 'month',
        events : [
                <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holidays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {
                title : '<?php echo e($holidays->holiday_name); ?>',
                start : '<?php echo e($holidays->start_date); ?>',
                color:      '<?php echo e($holidays->background_color); ?>',
                textColor:      '<?php echo e($holidays->text_color); ?>',
                borderColor: '<?php echo e($holidays->border_color); ?>'
                <?php if($holidays->end_date): ?>,
                end: '<?php echo e($holidays->end_date); ?>',
                <?php endif; ?>
            },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        eventClick: function(calEvent, jsEvent, view) {
            $('#event_name').val(moment(calEvent.start));
            $('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
            $('#finish_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
            $('#editModal').modal();
        }
    });

    // END OF HOLIDAY JS







//==================================CHANGE THIS IN FUTER==============================
//     ColorPick Configuaration
    $("#shift_colorPickSelector").colorPick({
    // 'initialColor':'#3498db',
    'allowRecent':true,
    'recentMax': 5,
    'allowCustomColor':true,
    'palette': ["#1abc9c","#16a085","#2ecc71","#27ae60","#3498db","#2980b9","#9b59b6","#8e44ad","#34495e","#2c3e50","#f1c40f","#f39c12","#e67e22","#d35400","#e74c3c","#c0392b","#ecf0f1","#bdc3c7","#95a5a6","#7f8c8d"],

        'onColorSelected':function() {
        this.element.css({'color':this.color});
            // this.element.css({'background-color':this.color});

            var input_value=$('#shift_color').val()

            $('#shift_color').val(this.color);

            // console.log(input_value)
    }
});

    // =========================================CHANGE THIS IN FUTRE======================






    //Ajax  csrf-token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('.clockpicker').clockpicker({
        placement: 'bottom',
        align: 'left',
        donetext: 'Ok'
    })


    //remove auto complete on the form inputs
    $(':input').on('focus', function () {

        $(this).attr('autocomplete', 'off');

    });





$('#btn-save-event').click(function (e) {
e.preventDefault()
var department_array=[];
var event_name=$('#event_name').val();
var start_date = $('#start_date_event').val();
var message=$('#message').val();
var selected_group=$('#select_depart').val();
var sender="<?php echo e(Auth::user('admin')->roles->first()->role_name); ?>";
    $('#found_send_to input[type=checkbox]:checked').each(function(index, element){
        console.log($(element).val());
       var  department=$(element).val()
        department_array.push(department)
    });
    $.ajax({
        type: "POST",
        url: "<?php echo e(route('send_messages')); ?>",
        dataType:'json',
        data: { department_array: department_array,message:message,event_name:event_name,start_date:start_date,selected_group:selected_group,sender:sender},

        success: function(data) {
        $("#add-event-show").modal('hide');

            console.log(data);

            // $("#close_event_modal")[0].click();
            //

        },

        fail:function () {

            alert('hhhh');

        }
    });
});




//fetch the unread notifications
function fetchUnreadNotifications(option=''){
        $.ajax({

        url:"<?php echo e(route('get_unread_notifications')); ?>",
        data:{option:option},
        dataType:"json",
        method:"GET",
        success:function (data) {

                $('#unread_notification_list').html(data.table_data);

                $('#unread_notification_count').text(data.total_data);

                if (data.total_data>0){
                    $('#unread_notification_count').addClass('animated')

                }

                console.log(data.total_data);
            }
        });

    }

    setInterval(function () {
        fetchUnreadNotifications();
    },1000);


    //format the date picker
    $(function() {
        $("#start_date_event").datepicker({ dateFormat: "yy-mm-dd"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#passport_issue_date").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#passport_expiry_date").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#date_of_birth").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+0"}).val()
        $("#start_date_joining").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#document_date_of_issue").datepicker({ dateFormat: "dd-mm-yy"  ,changeMonth: true, changeYear: true, yearRange: "-50:+10" }).val()
        $("#document_date_of_expiry").datepicker({ dateFormat:"dd-mm-yy"  ,changeMonth: true, changeYear: true, yearRange: "-50:+10" }).val()
        $("#start_date_joining").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#start_date_insert").datepicker({ dateFormat: "dd-mm-yy"  ,changeMonth: true, changeYear: true,  yearRange: "-50:+10"}).val()
        $("#leave_start_date").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $("#leave_end_date").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()
        $(".date_text_input").datepicker({ dateFormat: "dd-mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val()

        $(".date_text_input_salary_period").datepicker({ dateFormat: "mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val();


        $(".date_text_input_salary_period").datepicker({ dateFormat: "mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val();

        $(".date_text_input_salary_period_department").datepicker({ dateFormat: "mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val();
        $(".date_text_input_salary_period_all").datepicker({ dateFormat: "mm-yy"   ,changeMonth: true, changeYear: true, yearRange: "-50:+10"}).val();










    });

    $(".date_text_input_salary_period").attr("placeholder", "mm-yy");

    $(".date_text_input").attr("placeholder", "dd-mm-yy");



    // load the list of employees in the dashboard
    $('#employees_list_card').click(function () {

        $('#employee_dashboard_card').removeClass('display_hidden');
        $('#employee_dashboard_card').addClass('display_shown');

        $('#department_dashboard_card').removeClass('display_shown');
        $('#department_dashboard_card').addClass('display_hidden');

        $('#designation_dashboard_card').removeClass('display_shown');
        $('#designation_dashboard_card').addClass('display_hidden');

        $('#announcements_dashboard_card').removeClass('display_shown');
        $('#announcements_dashboard_card').addClass('display_hidden');

        $('#calendar_row').hide();



        // $('#employee_dashboard_card').hide();
        $.ajax({
            url:"<?php echo e(route('get_employees_json')); ?>",
            cache: false,
            type: "GET",
            dataType:'json',
            success:function (data) {
                $('#employees_dashboard').html(data.table_data);
                // $('#employees_list_card').text(data.total_data);
                var numberOfItems= $("#employees_dashboard .tr").length;
                var limitPerpage=5;

                $("#employees_dashboard .tr:gt(" + (limitPerpage -1) +")").hide();
                var totalPages=Math.round(numberOfItems / limitPerpage  );


                $('.pagination').append("<li class='page-item current-page active' ><a class='page-link'  href='#'  tabindex='-1' >"+1+" </a></li>");
                for (var i=2; i<=totalPages;i++) {

                    $('.pagination').append("<li class='page-item current-page ' ><a class='page-link'  href='#'  tabindex='-1' >"+i+" </a></li>");
                }

                $('.pagination').append("<li class='page-item ' id='next-page'><a class='page-link' href='#'>"+ 'Next'+"</a></li>");

                $('.pagination li.current-page').on("click", function () {

                    if ($(this).hasClass("active")){

                        return false
                    } else {

                        var currentPage=$(this).index();
                        $('.pagination li').removeClass("active");
                        $(this).addClass("active");
                        $("#employees_dashboard .tr").hide();
                        var grandTotal=limitPerpage*currentPage;
                        
                        
                        for (var i=grandTotal-limitPerpage; i<grandTotal;i++) {

                            $("#employees_dashboard .tr:eq("+ i +")").show();
                        }
                    }

                })


                $("#next-page").on("click",function () {



                    var currentPage=$(".pagination li.active").index();
                    if (currentPage===totalPages){
                        return false
                    } else {

                        currentPage++ ;
                        $(".pagination li ").removeClass("active");

                        $("#employees_dashboard .tr").hide();


                        var grandTotal=limitPerpage * currentPage;



                        for (var i=grandTotal - limitPerpage;i < grandTotal; i++){

                            $("#employees_dashboard .tr:eq("+ i +")").show();
                        }


                        $(".pagination li.current-page:eq("+ (currentPage - 1)  +")").addClass("active");
                    }



                });




                $("#previous-page").on("click",function () {

                    var currentPage=$(".pagination li.active").index();
                    if (currentPage===1){
                        return false
                    } else {

                        currentPage-- ;
                        $(".pagination li ").removeClass("active");

                        $("#employees_dashboard .tr").hide();


                        var grandTotal=limitPerpage * currentPage;



                        for (var i=grandTotal - limitPerpage;i < grandTotal; i++){

                            $("#employees_dashboard .tr:eq("+ i +")").show();
                        }


                        $(".pagination li.current-page:eq("+ (currentPage - 1)  +")").addClass("active");
                    }

                })























            }


        });



















































        // end  list pagination



    });





    // load the list of departments in the dashboard
    $('#department_list_card').click(function () {

        $('#department_dashboard_card').removeClass('display_hidden');
        $('#department_dashboard_card').addClass('display_shown');

        $('#employee_dashboard_card').removeClass('display_shown');
        $('#employee_dashboard_card').addClass('display_hidden');

        $('#designation_dashboard_card').removeClass('display_shown');
        $('#designation_dashboard_card').addClass('display_hidden');

        $('#announcements_dashboard_card').removeClass('display_shown');
        $('#announcements_dashboard_card').addClass('display_hidden');
        $('#calendar_row').hide();

        $.ajax({
            url:"<?php echo e(route('get_departments_json')); ?>",
            cache: false,
            type: "GET",
            dataType:'json',
            success:function (data) {
                $('#department_dashboard').html(data.table_data);
                // $('#employees_list_card').text(data.total_data);

            }

        });

    });


    // load the list of departments in the dashboard
    $('#designations_list_card').click(function () {


        $('#designation_dashboard_card').removeClass('display_hidden');
        $('#designation_dashboard_card').addClass(' display_shown');


        $('#department_dashboard_card').removeClass('display_shown');
        $('#department_dashboard_card').addClass(' display_hidden');

        $('#employee_dashboard_card').removeClass('display_shown');
        $('#employee_dashboard_card').addClass('display_hidden');



        $('#announcements_dashboard_card').removeClass('display_shown');
        $('#announcements_dashboard_card').addClass('display_hidden');
        $('#calendar_row').hide();


        $.ajax({
            url:"<?php echo e(route('get_designations_json')); ?>",
            cache: false,
            type: "GET",
            dataType:'json',
            success:function (data) {
                $('#designation_dashboard').html(data.table_data);
                // $('#employees_list_card').text(data.total_data);

            }

        });

    });

    // load the list of announcements in the dashboard
    $('#announcements_list_card').click(function () {


        $('#announcements_dashboard_card').removeClass('display_hidden');
        $('#announcements_dashboard_card').addClass('display_shown');


        $('#designation_dashboard_card').removeClass('display_shown');
        $('#designation_dashboard_card').addClass('display_hidden');


        $('#department_dashboard_card').removeClass('display_shown');
        $('#department_dashboard_card').addClass(' display_hidden');

        $('#employee_dashboard_card').removeClass('display_shown');
        $('#employee_dashboard_card').addClass('display_hidden');

        $('#calendar_row').hide();

        $.ajax({
            url:"<?php echo e(route('get_announcements_json')); ?>",
            cache: false,
            type: "GET",
            dataType:'json',
            success:function (data) {
                $('#announcents_dashboard').html(data.table_data);
                // $('#employees_list_card').text(data.total_data);
            }

        });

    });




    $("#salary_button").click(function(e){
        e.preventDefault();
        $("#official_documents_row").hide(1500);
        $("#salary_row").slideToggle(1500);
    });



    $("#employees_documents_button").click(function(e){
        e.preventDefault();
        $("#official_documents_row").hide(1500);
        $("#salary_row").hide(1500);
        $("#employee_documents_row").slideToggle(1500);

    });




    //=====================Upload button in the edit Employee Page==================================================

                    $("#document_upload_button").on('click',function (e) {
                        if ($("#upload_document_type").val()=="") {

                            alert('Document type required');
                        }

                        if ($("#document_scan_file").val()==""){

                            alert('Document required');
                        }

                        if ($("#document_scan_file").val()!="" && $("#upload_document_type").val()!="" ) {

                            $("#document_upload_form").submit;
                        }

                    })

    //=====================End Upload button in the Edit Employee Page==============================================






    $("#official_documents_button").click(function(e){
        e.preventDefault();
        $("#salary_row").hide(1500);
        $("#official_documents_row").slideToggle(1500);

    });

    $("#employee_details_button").click(function(e){
        e.preventDefault();
        $("#employee_details_row").slideToggle(1500);
    });


        $("#full-screen-btn").click(function(){
            $("#accordionSidebar").slideToggle(300);
            $("#qdmin_navbar").slideToggle(1000);
        });


        // $('.modal-backdrop').remove()
        // $(document.body).removeClass("modal-open");

        // page is now ready, initialize the calendar...
        $('#calendar_one').fullCalendar({
            // put your options and callbacks here
            dayClick: function(date, jsEvent, view) {
                $('#add-event-show').modal(
                    {
                        keyboard: true,
                        // backdrop: 'static'
                    }
                );

                $('#start_date_event').val(date.format("YYYY-MM-DD"))
                // alert('Clicked on: ' + date.format());
                // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                // alert('Current view: ' + view.name);

                // change the day's background color just for fun
                $(this).css('background-color', 'cyan');
            },

            plugins: [ 'bootstrap' ],
            themeSystem: 'bootstrap',

            editable:true,
            // header:{
            //     left:'prev,next today',
            //     center:'title',
            //     right:'month,agendaWeek,agendaDay'
            // },


            header: {
                right: 'month,agendaWeek,timelineCustom,agendaDay,prev,today,next',
                left: 'title',
            },
            fixedWeekCount: false,
            // contentHeight: 650,
            views: {
                timelineCustom: {
                    type: 'timeline',
                    buttonText: 'Year',
                    dateIncrement: { years: 1 },
                    slotDuration: { months: 1 },
                    visibleRange: function (currentDate) {
                        return {
                            start: currentDate.clone().startOf('year'),
                            end: currentDate.clone().endOf("year")
                        };
                    }
                }
            },

            // defaultView: 'month',

            events : [
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                title : '<?php echo e($appointment->event_name); ?>',
                start : '<?php echo e($appointment->start_date); ?>',
                color:'#ffffff',

                <?php if($appointment->end_date): ?>
                end: '<?php echo e($appointment->end_date); ?>',
                <?php endif; ?>
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],





















      // eventClick: function(calEvent, jsEvent, view) {
      //           $('#event_name').val(moment(calEvent.start));
      //           $('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
      //           $('#finish_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
      //           $('#editModal').modal();
      //       }
        });





    //Create a search of employee
    fetch_employee_data();

    function fetch_employee_data(query = '')
    {
        $.ajax({
            url:"<?php echo e(route('search_employees')); ?>",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }

    $(document).on('keyup', '#search_employees', function(){
        var query = $(this).val();
        fetch_employee_data(query);
    });


    // get the data to send to from db
    $('#select_depart').on('change', function() {
        fetchRecordsfromDB(this.value);
    });

    function fetchRecordsfromDB(data){
        $.ajax({
            url: "<?php echo e(route('fetch_send_to')); ?>",
            cache: false,
            type: "GET",
            dataType:'json',
            data: {id : data},
            success:function(data)
            {
                $('#found_send_to').html(data.table_data);
                $('#total_records_send_to').text(data.total_data);

            }
        });
    }


        $.get( "json_departments", function( data ) {
            $( "#sel_depart" )
                .append( data.department_name );
        }, "json" );


        $('#calendar').fullCalendar({

            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },

    });



        //get Employee search modal
        //get add calendar event
        $('#employee_search_modal_button').on('click',function (e) {
            e.preventDefault();
            $('#employee_search_modal').modal(
                {
                    keyboard: true,
                    // backdrop: 'static'
                }
            );
        });


    //close modal with escape
    $(document).keypress(function(e) {
        if (e.keyCode === 27) {
            $("#search_employees").val("");
            $("#employee_search_modal").modal('hide');
            $(".modal").modal('hide');

        }
    });




        //send search to controller
        // function search() {
        //     var resultsDiv = document.getElementById("results");
        //     var req = new XMLHttpRequest();
        //     req.responseType = "json";
        //     req.open("GET", url, true);
        //     req.onload = function() {
        //         var users = req.response;
        //         var content = "<ul>";
        //         for (var user in users) {
        //             content += "<li>" + user.name + "</li>";
        //         }
        //         content += "</ul>";
        //         resultsDiv.innerHTML = content;
        //     };
        //     req.send(null);
        // }








        //get add calendar event
        // $('#add_event_id').on('click',function () {
        //     $('#add-event-show').modal(
        //         {
        //             keyboard: true,
        //             // backdrop: 'static'
        //         }
        //     );
        // });


    //get add calendar event
    $("#gift_icon").on('click',function () {
        $('#birthday_gift_modal').modal(
            {
                keyboard: true,
                // backdrop: 'static'

            },
        );


    });



    //add the department to database
    $("#send_birthday_message_button").on('click',function() {

        message= $("#birthday_message").val();
        id=         $("#birthday_budy_id").val();

        $.post("<?php echo e(route('send_birthday')); ?>",{message:message,id:id}, function (data) {

            console.log(data);


            $("#birthday_message").val("");
            $("#birthday_gift_modal").modal('hide');

        });
    })












    //===========PUSH EVENT TO DATABASE
    var formevent = $('#event-form');
    formevent.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'post_event',
            type: "POST",
            data: formevent.serialize(),
            dataType: "json",
        })
            .done(function (response) {

                console.log(data)
                if (response.success) {

                    swal({
                        title: "Hi " + response.name,
                        text: response.success,
                        timer: 1000,
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                    });
                    $("#event-name").val("");
                    $("#start-date").val("");
                    $("#endt-date").val("");
                    setTimeout(location.reload.bind(location),1000);
                } else {

                    swal({
                        title: "Sorry " + response.errors,
                        text: response.error,
                        timer: 6000,
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                        customClass:'sweetalert-sm',
                        width:'600px',
                        background:'deepskyblue'
                    });
                }
            })
            .fail(function () {
                swal("Fail!", "An error occured!", 'error');
                // setTimeout(location.reload.bind(location),1000);

            });
    });

    //===============




    // //get basic designation modal modal
    $('#add_department_button').on('click',function () {
        $('#add_department_modal').modal(
            {
                keyboard: true,
                // backdrop: 'static'
            }
        );
    });




    //get add calendar event
    $('#employee_documents_button').on('click',function (e) {
        e.preventDefault();
        $('#employee_documents_modal').modal(
            {
                keyboard: true,
                // backdrop: 'static'
            }
        );
    });







    // Add designation to database
    //get basic designation modal modal
    $('#add_designation_button').on('click',function () {
        $('#add_designation_modal').modal(
            {
                keyboard: true,
                // backdrop: 'static'
            }
        );
    });

    //add the data to database
    $('#add_designation_save').on('click',function() {
        designation= $("#new_designation").val();
        $.post("<?php echo e(route('post_designation')); ?>",{designation:designation}, function (data) {
            $('#designation_list').append($("<option/>",{
                value : data.id,
                text  : data.designation
            }));
            $("#new_designation").val("");
            $('#add_designation_modal').modal('hide');

        });
    });


    //get the shift modal modal
    $('#add_shift_button').on('click',function () {
        $('#add_shift_modal').modal(
            {
                keyboard: true,
                // backdrop: 'static'
            }
        );
    });


    // shift_name','shift_start_time','shift_end_time'
    //add the data to database
    $('#add_shift_save_modal').on('click',function() {
        shift_name= $("#shift_name_modal").val();
        first_half_start_time= $("#first_half_start_time_modal").val();
        first_half_end_time= $("#first_half_end_time_modal").val();
        second_half_start_time= $("#second_half_start_time_modal").val();
        second_half_end_time= $("#second_half_end_time_modal").val();
        shift_color= $("#shift_color_modal").val();



        $.post("<?php echo e(route('post_shift')); ?>",{shift_name:shift_name,first_half_start_time:first_half_start_time, first_half_end_time:first_half_end_time, second_half_start_time:second_half_start_time, shift_color:shift_color, second_half_end_time:second_half_end_time}, function (data) {

            $('#shift_list').append($("<option/>",{
                value : data.id,
                text  : data.shift_name
            }));

            $("#shift_name_modal").val("");
            $("#first_half_start_time_modal").val("");
            $("#first_half_end_time_modal").val("");
            $("#second_half_start_time_modal").val("");
            $("#second_half_end_time_modal").val("");
            $("#shift_color_modal").val("");

            $("#add_shift_modal").modal('hide');

        });
    });



    //add the department to database
    $('#add_department_save').on('click',function() {
        department_name= $("#new_department").val();
        $.post("<?php echo e(route('post_department')); ?>",{department_name:department_name}, function (data) {
            $('#department_list').append($("<option/>",{
                value : data.id,
                text  : data.department_name
            }));
            $("#new_department").val("");
            $("#add_department_modal").modal('hide');

        });
    })


    // fix modal backdrop

    //delete modal
    $('#pageTransition').on('show.bs.modal', function (event) {
        // Fix Animate.css
        $('#parent_div_have_error').removeClass('fadeInLeft');
    });

    $('#pageTransition').on('hidden.bs.modal', function (e) {
        // Fix Animate.css
        $('#parent_div_have_error').addClass('fadeInLeft');
    });

    // end of delete modal



    //==============DELETING WITH A MODAL===================
    $('#confirmDelete').on('show.bs.modal', function (e) {
        var message = $(e.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text(message);
        var title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text(title);
        var form = $(e.relatedTarget).closest('form');
        $(this).find('.modal-footer #confirm').data('form', form);
    });

    $('#confirmDelete').find('.modal-footer #confirm').on('click', function () {
        $(this).data('form').submit();
    });
    //==============END DELETING WITH A MODAL===================

    $(".toast").toast('show', {
        delay: 2000
    });




    //========================FETCH_DOCUMENTS EXPIRY DATES==============================================
    function fetcthDocumentsExpiry(data) {
        $.ajax({
            url: "<?php echo e(route('get_documents_expiry_dates')); ?>",
            method: 'GET',
            data: {column : data},
            dataType: 'json',
            success: function (data) {
                $('#tbody_documents_expiry').html(data.table_data);
                // $('#total_records_documents_expiry').text(data.total_data);

                        console.log(data);
            }
        })
    }


    $("#employee_documents_expiry").on('change',function () {

        $("#documents_expiry_table").addClass('display_shown')
        $("#documents_expiry_table").removeClass('display_hidden')
        $("#documents_expiry_table").addClass('display_shown')



        $("#expiring_soon_documents_card").hide();
        fetcthDocumentsExpiry(this.value);
    });

    //========================END_FETCH_DOCUMENTS EXPIRY DATES==============================================







    //=====================================Select between slipt and full shift===============================


// $("#id_radio1").click(function()

    $("#full_shift_radio").on('click',function () {
        $("#split_shift_column").hide();
        $("#full_shift_column").show("slow");
        $("#full_shift_name").attr("required", "true");
        $("#full_start_time").attr("required", "true");
        $("#full_end_time").attr("required", "true");
    });


    $("#split_shift_radio").on('click',function () {
        $("#full_shift_column").hide();
        $("#split_shift_column").show("slow");
        $("#split_shift_name").attr("required", "true");
        $("#first_half_start_time").attr("required", "true");
        $("#first_half_end_time").attr("required", "true");
        $("#second_half_start_time").attr("required", "true");
        $("#second_half_end_time").attr("required", "true");
    })
    //=====================================Select between end slipt and full shift===============================




    //===================================attendances reports by day==============================================

    $("#submit_show_attendance_byDate").on('click',function (e) {
        e.preventDefault();


        // alert('that could happen');

        $("#show_attendance_byDate_form").submit();

    })



//    Pick date for month and year only

    $.fn.monthYearPicker = function(options) {
        options = $.extend({
            dateFormat: "MM yy",
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            showAnim: ""
        }, options);
        function hideDaysFromCalendar() {
            var thisCalendar = $(this);
            $('.ui-datepicker-calendar').detach();
            // Also fix the click event on the Done button.
            $('.ui-datepicker-close').unbind("click").click(function() {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                thisCalendar.datepicker('setDate', new Date(year, month, 1));
            });
        }
        $(this).datepicker(options).focus(hideDaysFromCalendar);
    }


    $('input.monthYearPicker').monthYearPicker();



});

</script>

</body>

</html>