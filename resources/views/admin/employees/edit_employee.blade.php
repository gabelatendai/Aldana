@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft" style="color: black!important;">
        <div class="row w-100">
            <div class="container-fluid bg-transparent">
                <a href="{{route('upload_employee_documents_link',$employee->id)}}"  class="btn btn-sm float-left"><i class="fa fa-book"></i> &nbsp; <i class="fa fa-plus"></i> &nbsp Add Document</a>
                <a href="" id="employee_search_modal_button" class="btn btn-sm float-right"><i class="fa fa-search"></i>&nbsp;&nbsp;Search Employee</a>
            </div>
        </div>
        <div class="card  border-0 mb-2 mt-2" style="border-radius: 0">
            <div class="card-header p-0  custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px">
                Update Employees Details
            </div>
            <!-- Add Employee Form -->
            <div class="container-fluid">
                <!-- Nested Row within Card Body -->
                <hr class="bg-info">
                <button class="btn-hover color-9 mb-3" id="employee_details_button">Employee Details</button>
                <form class="mt-5" action="{{route('update_employees',$employee->id)}}" method="Post" enctype="multipart/form-data" id="employee_details_row">
                    {{csrf_field()}}
                    <div class="row" >
                        <div class="col-md-9">
                            <div class="form-row">
                                <div class="form-group  col-md-3 col-sm-1 mb-3 ">
                                    <input type="text" class="form-control mb-2 py-0     input_size text_font" value="{{$employee->employee_number}}" id="employee_number" name="employee_number" required placeholder="employee number *"  >
                                    <label for="employee_number" class="label text_font">Employee number<span class="text-danger">*</span></label>
                                </div>
                                <div class="form-group   col-md-3 col-sm-1 mb-3">
                                    <input type="text"  class="form-control mb-2 py-0     input_size text_font"  name="first_name" value="{{$employee->first_name}}" id="first_name" required placeholder="First Name*"  >
                                    <label for="first_name" class="label text_font">First Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="form-group   col-md-3">
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" name="last_name" value="{{$employee->last_name}}" required id="last_name" placeholder="Last Name*"  >
                                    <label for="last_name" class="label  text_font">Last Name<span class="text-danger">*</span></label>
                                </div>


                                <div class="form-group  col-md-3">
                                    <input type="number" class="form-control mb-2 py-0   input_size text_font" value="{{$employee->mobile_number}}" id="mobile_number" required name="mobile_number" placeholder="mobile_number*"  >
                                    <label for="mobile_number" class="label text_font">Mobile Number<span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="form-row mt-5">
                                <div class="form-group  col-md-3">
                                    <input type="text" class="form-control mb-2 py-0  p-2 input_size text_font" id="date_of_birth" value="{{$employee->date_of_birth}}" name="date_of_birth" placeholder="date of birth*"  >
                                    <label for="date_of_birth" class="label text_font">date of birth<span class="text-danger">*</span></label>
                                    @if ($errors->has('date_of_birth'))
                                        <style>
                                            #date_of_birth{
                                                border: solid 1px red;
                                            }
                                        </style>
                                        </p>
                                    @endif
                                </div>

                                <div class="form-group  col-md-3">
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" id="education_status" name="education_status" value="{{$employee->education_status}}" placeholder="education status"  >
                                    <label for="education_status" class="label text_font">education status</label>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0 input_size  text_font" value="{{$employee->a_d_c}}" id="a_d_c" name="a_d_c" placeholder="a d c">
                                    <label for="a_d_c" class="label text_font">a d c</label>
                                </div>

                                <div class="form-group  col-md-3">
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" value="{{$employee->bank_account}}" name="bank_account" id="bank_account" placeholder="bank account"  >
                                    <label for="bank_account" class="label text_font">bank account</label>
                                </div>
                            </div>


                            <div class="form-row mt-5">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" id="internal_address" value="{{$employee->internal_address}}" name="internal_address" placeholder="internal address"  >
                                    <label for="internal_address" class="label text_font">internal address</label>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" value="{{$employee->external_address}}" name="external_address" id="external_address" placeholder="external address"  >
                                    <label for="external_address" class="label text_font">external address</label>
                                </div>



                                <div class="form-group col-md-3">
                                    <input type="email" class="form-control mb-2 py-0 input_size text_font" value="{{$employee->email}}" id="email" name="email" placeholder="email*"  >
                                    <label for="email" class="label text_font">email</label>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0 input_size  text_font" value="{{$employee->start_date}}" name="start_date" id="start_date_joining" placeholder="joining  date" >
                                    <label for="start_date" class="label text_font">Joining Date date</label>
                                </div>

                            </div>

                            <div class="form-row mt-5">
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control mb-2 py-0 input_size  text_font" value="{{$employee->contract_period}}" id="contract_period" name="contract_period" placeholder="contract period">
                                    <label for="contract_period" class="label text_font">contract period</label>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0 input_size  text_font " value="{{$employee->internal_experience}}" id="internal_experience" name="internal_experience" placeholder="internal experience">
                                    <label for="internal_experience" class="label text_font">internal experience</label>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0 input_size  text_font" id="nationality" value="{{$employee->nationality}}" required name="nationality" placeholder="nationality">
                                    <label for="nationality" class="label text_font">nationality</label>
                                    @if ($errors->has('nationality'))<style>#nationality{border: solid 1px red;}</style>@endif
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control mb-2 py-0 input_size  text_font" value="{{$employee->social_status}}" id="social_status" name="social_status" placeholder="social status">
                                    <label for="social_status" class="label text_font">social status</label>
                                </div>

                            </div>

                            <div class="form-row mt-5">
                                <div class="form-group col-md-3">
                                    <label for=""></label>
                                    <input type="text" class="form-control mb-2 py-0   input_size text_font" value="{{$employee->external_experience}}" name="external_experience" id="external_experience" placeholder="external experience"  >
                                    <label for="external_experience" class="label text_font">external experience</label>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="" class="text_font">Gender</label>
                                    <select id="gender" name="gender" class="form-control mb-2 py-0 input_size text_font" value="{{$employee->gender}}" style=" padding: 10px 10px;line-height: 4px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                        <option class="text_font" >Gender</option>
                                        <option class="text_font"  value="male">Male</option>
                                        <option class="text_font"  value="female">Female</option>
                                    </select>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="employee_status" class="text_font" >Employee Status</label>
                                    <select id="employee_status" name="employee_status" value="{{$employee->employee_status}}" class="form-control mb-2 py-0 input_size text_font" style=" padding: 4px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                        <option class="text_font" >{{$employee->employee_status}}</option>
                                        <option class="text_font"  value="active">Active</option>
                                        <option class="text_font"  value="inactive">Inactive</option>
                                    </select>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <table style="margin: 0 auto;">
                                    <td class="photo">

                                        @if(env('APP_ENV') === 'production')
                                            <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("public/upload/employees/images/$employee->profile_photo")}}">
                                        @else
                                            <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("upload/employees/images/$employee->profile_photo")}}">
                                        @endif
                                        <input hidden="" type="file" name="photo" value="{{$employee->profile_photo}}" id="photo" value="" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                        <input type="button" name="browse_file" id="browse_file" class=" btn-info btn-block btn-browse" value="browse">


                                    </td>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>


                    <div class="form-row mt-3">
                        <div class="form-group col-md-3 ">
                            <label for="department_list" class="text_font">Select Designation <span class="add_button"><i id="add_designation_button" class="fa fa-plus-circle text-success"></i></span> </label>
                            <select id="designation_list"  name="designation" class="form-control mb-2 py-0 input_size" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                @if($employee->designations->count()>0)
                                    <option class="text_font" value="{{$employee->designations->last()->id}}" >{{$employee->designations->last()->designation}}</option>
                                @endif
                                @foreach($designations as $key=>$y)
                                    <option class="text_font" value="{{$y->id}}" >{{$y->designation}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-3">
                            <label for="department_list" class="text_font">Select Department &nbsp;&nbsp; <span class="add_button"><i id="add_department_button" class="fa fa-plus-circle text-success"></i></span></label>
                            <select id="department_list" name="department" required class="form-control mb-2 py-0 input_size" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                <option class="text_font" value="{{$employee->department->id}}" >{{$employee->department->department_name}}</option>
                                @foreach($departments as $key=>$y)
                                    <option class="text_font"  value="{{$y->id}}" >{{$y->department_name}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group col-md-3">
                            <label for="shift_list" class="text_font">Select Shift&nbsp;&nbsp;
                                {{--<span class="add_button"><i id="add_shift_button" class="fa fa-plus-circle text-success"></i></span>--}}
                            </label>
                            <select id="shift_list" name="shift_id"  required class="form-control mb-2 py-0 input_size" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                <option class="text_font" value="{{$employee->shift->id}}" >{{$employee->shift->shift_name}}</option>
                                @foreach($shifts as $key=>$y)
                                    <option class="text_font" value="{{$y->id}}" >{{$y->shift_name}}</option>
                                @endforeach

                            </select>&nbsp;
                        </div>
                    </div>

                    <div class="row"   >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 no-gutters"><button class="btn-hover color-7" id="official_documents_button">Official Document</button></div>
                                <div class="col-md-3 no-gutters text-left"><button class="btn-hover color-10"id="salary_button" >Salary Info</button></div>
                                <div class="col-md-3 no-gutters text-left"><button class="btn-hover color-6" id="employees_documents_button" >Documents</button></div>
                                <div class="col-md-3 no-gutters text-left"><button class="btn-hover color-9" id="employee_performance_button" >Performance</button></div>
                            </div>




                            <div class="col-md-fluid mt-3" id="employee_documents_row">
                            <form  method="post" id="document_upload_form" action="{{route('save_documents')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="employee_id" value="{{$employee->id}}">


                                <div class="row mx-auto" >

                                    <div class="col-md-6 mx-auto">
                                        <div class="container-fluid">
                                            <div class="form-group mx-auto">
                                                <label for="shift_name" class="text_font" >Document Name</label>
                                                <input type="text" name="document_type" id="upload_document_type" class="form-control"  placeholder="Document Type">
                                            </div>


                                            <div class="form-group  mx-auto">
                                                <label for="shift_start_time" class="text_font" >Select Document</label>
                                                <input type="file" name="document_scan_file" id="document_scan_file" class="form-control py-0"  placeholder="Document Number">
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                    <div class="container-fluid">
                                        <button type="button" id="document_upload_button" class="btn shadow-none   mb-3  btn-sm text-center offset-md-5 text-white btn-hover color-5 " style="width: 100px;height: 30px"><i class="fa fa-file-upload"></i>Upload</button>
                                        {{--<button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>--}}
                                    </div>
                            </form>


                        <div class="card-body">
                            <div class="table-responsive text-center" style="font-size: 10px">
                                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text_font" >Document Name</th>
                                        <th class="text_font text-left" >Document scan </th>
                                        <th class="text_font" >Uploaded Date </th>
                                        <th class="text_font" >Download</th>
                                        <th class="text_font" >Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employee->documents as $employee_all)
                                        <tr style="font-size: 8pt">
                                            <td class="text_font" >{{$employee_all->document_type}}</td>
                                            <td class="text_font text-left mx-5" >{{$employee_all->document_scan_file}}</td>
                                            <td class="text_font" >{{$employee_all->created_at}}</td>

                                            <td><a class="btn btn-warning btn-sm " target="_blank" href="/upload/employees/documents/{{$employee_all->document_scan_file}}" style="width: 100px;height: 30px"><i class="fa fa-download" style="font-size: 10px;color: white"></i>&nbsp;</a></td>

                                            <td>
                                                <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('employee_delete',$employee_all->id)}}">
                                                    {!! csrf_field() !!}
                                                    <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$employee_all->document_type}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                            <div class="col-md-fluid" id="salary_row">

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

                            <hr class="bg-gradient-primary">





                            <div class="table-responsive text-center" style="font-size: 10px" id="official_documents_row">
                                <table class="table table-white text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text_font" scope="col" class="text-left">Document type</th>
                                        <th class="text_font" scope="col">document number</th>
                                        <th class="text_font" scope="col">issue place</th>
                                        <th class="text_font" scope="col">issue date</th>
                                        <th class="text_font" scope="col">Expiry Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr >
                                        <td class="text_font" >Passport</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center   input_size text_font" value="{{$employee->passport_number}}" name="passport_number" id="passport_number">
                                            </div>
                                        </td>
                                        <td class="text_font" >
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font"  value="{{$employee->passport_issue_place}}"  name="passport_issue_place" id="passport_issue_place">
                                            </div>
                                        </td>
                                        <td class="text_font" >
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->passport_issue_date}}" name="passport_issue_date" id="passport_issue_date">
                                            </div>
                                        </td>
                                        <td class="text_font" >
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->passport_expiry_date}}" name="passport_expiry_date" id="passport_expiry_date">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <select id="visa_type" name="visa_type" class="form-control mb-2 py-0 input_size text_font" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                    <option class="text_font" >{{$employee->visa_type}}</option>
                                                    <option class="text_font"  value="residential">Residential</option>
                                                    <option class="text_font"  value="visit">Visit</option>
                                                    <option class="text_font"  value="sponsor">Sponsor</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center   input_size text_font" value="{{$employee->visa_number}}" name="visa_number" id="visa_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->visa_issue_place}}"  name="visa_issue_place" id="visa_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->visa_issue_date}}" name="visa_issue_date" id="visa_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="visa_expiry_date" value="{{$employee->visa_expiry_date}}"  id="visa_expiry_date">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="text_font">Labour Contract</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->labour_card_number}}" name="labour_card_number" id="labour_card_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->labour_card_issue_place}}" name="labour_card_issue_place" id="labour_card_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="labour_card_issue_date" value="{{$employee->labour_card_issue_date}}" id="labour_card_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" name="labour_card_expiry_date" value="{{$employee->labour_card_expiry_date}}" id="labour_card_expiry_date">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text_font">Emirates Id</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->emirates_id_number}}" name="emirates_id_number" id="emirates_id_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->emirates_id_issue_place}}" name="emirates_id_issue_place" id="emirates_id_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->emirates_id_issue_date}}" name="emirates_id_issue_date" id="emirates_id_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->emirates_id_card_expiry_date}}" name="emirates_id_card_expiry_date" id="emirates_id_expiry_date">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text_font" >Medical card</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->medical_card_number}}" name="medical_card_number" id="medical_card_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->medical_card_issue_place}}" name="medical_card_issue_place" id="medical_card_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->medical_card_issue_date}}" name="medical_card_issue_date" id="medical_card_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->medical_card_expiry_date}}" name="medical_card_expiry_date" id="medical_card_expiry_date">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text_font" >Driving Licence</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->driving_licence_number}}" name="driving_licence_number" id="driving_licence_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->driving_licence_issue_place}}"  name="driving_licence_issue_place" id="driving_licence_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->driving_licence_issue_date}}"   name="driving_licence_issue_date" id="driving_licence_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->driving_licence_expiry_date}}"   name="driving_licence_expiry_date" id="driving_licence_expiry_date">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text_font" >Work Permit</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->work_permit_number}}"  name="work_permit_number" id="work_permit_number">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->work_permit_issue_place}}"  name="work_permit_issue_place" id="work_permit_issue_place">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->work_permit_issue_date}}"  name="work_permit_issue_date" id="work_permit_issue_date">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class=" date_text_input form-control mb-2 py-0 text-center  input_size text_font" value="{{$employee->work_permit_expiry_date}}"  name="work_permit_expiry_date" id="work_permit_expiry_date">
                                            </div>
                                        </td>
                                    </tr>

                                    <td class="text_font" >Personal Code</td>
                                    <td class="text-center">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-2 py-0 text-center  input_size text_font"  value="{{$employee->personal_code}}" name="personal_code" id="personal_code">
                                        </div>
                                    </td>

                                    <td>
                                        <h6 class="text_font" >Passport possession</h6>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <select id="gender" name="passport_possession" class="form-control  py-0 input_size" style=" padding: 10px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                <option class="text_font" value="{{$employee->passport_possession}}" >{{$employee->passport_possession}}</option>
                                                <option class="text_font" value="Company">Company</option>
                                                <option class="text_font" value="Employee">Employee</option>
                                            </select>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="form-inline">
                                            <label class="text_font" for="passport_scan_file">Passport Scan</label> &nbsp;&nbsp;&nbsp;
                                            <input type="file" value="{{$employee->passport_scan_file}}" name="passport_scan_file" id="passport_scan_file" class="form-control py-0" >
                                        </div>
                                    </td>


                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="container-fluid">
                            <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Update</button>
                            <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-right  btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection