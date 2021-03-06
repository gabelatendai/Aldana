@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="container-fluid text-center">

            <div class="card shadow mb-4 text-center" style="border-radius: 0">
                <div class="card-header p-0 custom_card_header text-center text-white" style="border-radius: 0">
                    Manage Attendances Reports
                </div>

                <ul class="nav tabs-orange text-center mx-auto" id="attendance_reports" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link btn-hover color-2 shadow-none active show " id="profile-tab-classic-orange"
                           data-toggle="tab" href="#profile-classic-orange"
                           role="tab" aria-controls="profile-classic-orange" aria-selected="true">
                            {{--<i class="fas fa-user fa-2x pb-2"aria-hidden="true"></i>--}}
                            Daily Report</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-3" id="awesome-tab-classic-orange"
                           data-toggle="tab" href="#date_range_reports"
                           role="tab" aria-controls="awesome-tab-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-envelope fa-2x pb-2" aria-hidden="true"></i>--}}
                            Date Range</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-9" id="awesome-tab-classic-orange"
                           data-toggle="tab" href="#awesome-classic-orange"
                           role="tab" aria-controls="awesome-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-star fa-2x pb-2" aria-hidden="true"></i>--}}
                            Custom Report</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange"
                           data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-book-dead fa-2x pb-2" aria-hidden="true"></i>--}}
                            Shift wise </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange"
                           data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-book-dead fa-2x pb-2" aria-hidden="true"></i>--}}
                            Absents</a>
                    </li>


                </ul>

                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade active show" id="profile-classic-orange" role="tabpanel"
                         aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="show_attendance_byDate_form"
                                  action="{{route('show_attendances_byDate')}}" method="get"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <?php $today = \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="row">
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Employee Name</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="" required name="firstname" placeholder="Employee Name">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Category</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="" required name="category" placeholder="Category">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Management</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       required name="management" placeholder="management">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Department</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       required name="checkdate" placeholder="department">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Job Title</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="" required name="jobtitle" placeholder="Employee Name">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Nationality</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="" required name="category" placeholder="Category">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Management</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       required name="management" placeholder="management">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="{{$today}}" required name="checkdate" placeholder="Date"
                                                       id="leave_start_date">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDate"
                                                class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2"
                                                style="width: 100px;height: 30px">Load
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade show" id="profile-classic-orange " role="tabpanel"
                         aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="profile-classic-orange"
                                  action="{{route('show_attendances_byDateRange')}}" method="get"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <?php $today = \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="row">

                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Start Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       value="{{$today}}" required name="checkdate_start"
                                                       placeholder="Date" id="leave_start_date">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">End Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"
                                                       required name="checkdate_end" placeholder="Date"
                                                       id="leave_start_date">
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDateRange"
                                                class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2"
                                                style="width: 100px;height: 30px">Load
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=""></div>
            </div>

            <section class="map-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p> Vacation</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#8E44AD!important;"></div>

                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <p> Vacation</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#2980B9!important;"></div>
                                <br>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="col-md-4">

                            <p> Vacation</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#2980B9!important;"></div>

                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p> Official Holiday</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#D35400!important;"></div>

                            </div>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <p> Leave</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#C0392B!important;"></div>

                            </div>
                        </div>
                        <div class="col-md-4">

                            <p> Afternoon Shift</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#27AE60!important;"></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p> Morning Shift</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#34495E!important;"></div>

                            </div>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <p> Evening Shift</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#F1C40F!important;"></div>

                            </div>
                        </div>
                        <div class="col-md-4">

                            <p> Weekend</p>
                            <div class="imageholder">
                                <div class="colorPickSelector img-fluid float-right"
                                     style="background-color:#000000!important;"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <style>
                .box22 {
                    width: 20px;
                    height: 20px;
                }

                .col-md-4 {
                    padding-top: 1%;

                    float: left;
                    display: inline-block;
                }

                p, .imageholder {
                    width: 50%;
                    margin: 0px auto;
                    margin-left: 0px;
                    padding: 0px;
                    float: right;
                }

                img {
                    background: black;
                    width: 100%;
                    max-height: 100%;
                }
            </style>


            <br>
            <br>


            @if($employees)
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">

                    <tbody>

                   <!-- GabelaHH@!43-->
                    @foreach($names as $employee)

                        <tr class="text_font">
                            <td>{{$employee->first_name}}         {{$employee->last_name}}</td>
                            @foreach ($employee->checkin->all() as $check)
                                <td>
                                    <div class="box22 {{ $employee->shift->shift_name }}"></div>
                                </td>
                            @endforeach

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <?php if(date('t') > 28):?>
                            <td></td><?php endif;?>
                            <?php if(date('t') > 29):?>
                            <td></td><?php endif;?>
                            <?php if(date('t') > 30):?>
                            <td></td><?php endif;?>


                        </tr>

                        <?php
                        //dd($Attends);
                        ?>


                    @endforeach
                    </tbody>
                </table>
    @endif









@endsection