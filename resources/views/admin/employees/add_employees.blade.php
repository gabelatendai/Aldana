@extends("admin.layout.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="row w-100">
            <div class="container-fluid bg-transparent">
                <a href="" id="employee_search_modal_button" class="btn btn-sm float-right"><i class="fa fa-search"></i>&nbsp;&nbsp;Search Employee</a>
            </div>
        </div>
        <div class="card  bg-transparent border-0  " style="border-radius: 0">
            <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0;font-family: 'Inria Serif', serif;color: ghostwhite;font-size: 13px">
                Add Employee
            </div>
            <!-- Add Employee Form -->


            <div class="container-fluid">
                <hr class="bg-info">
                    <button class="btn-hover color-9" id="employee_details_button">Employee Details</button>

                <form class="mt-2" action="{{route('post_employees')}}" method="Post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row" id="employee_details_row">
                        <div class="col-md-3">

                            <div class="form-group    ">
                                <input type="text" class="form-control  mt-5    input_size text_font " value="{{old('employee_number')}}" id="employee_number" name="employee_number" required placeholder="employee number *"  >
                                {{--<label for="employee_number" class=" label text-dark">Employee number<span class="text-danger">*</span></label>--}}
                            </div>
                            <div class="form-group     ">
                                <input type="text" class="form-control  mt-5    input_size text_font"   value="{{old('first_name')}}" name="first_name" id="first_name" required placeholder="First Name*"  >
                                {{--<label for="first_name" class=" label text-dark">First Name<span class="text-danger">*</span></label>--}}
                            </div>
                            <div class="form-group   ">
                                <input type="text" class="form-control  mt-5   input_size text_font" value="{{old('last_name')}}" name="last_name" required id="last_name" placeholder="Last Name*"  >
                                {{--<label for="last_name" class=" label text-dark">Last Name<span class="text-danger">*</span></label>--}}
                            </div>

                            <div class="form-group  ">
                                <input type="number" class="form-control  mt-5   input_size text_font" value="{{old('mobile_number')}}" id="mobile_number" required name="mobile_number" placeholder="mobile_number*"  >
                                {{--<label for="mobile_number" class=" label text-dark">Mobile Number<span class="text-danger">*</span></label>--}}
                            </div>


                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5   input_size text_font" value="{{old('education_status')}}" id="education_status" name="education_status" placeholder="education status"  >
                                {{--<label for="education_status" class=" label text-dark">education status</label>--}}
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5 input_size  text_font" value="{{old('a_d_c')}}" id="a_d_c" name="a_d_c" placeholder="a d c">
                                {{--<label for="a_d_c" class=" label text-dark">a d c</label>--}}
                            </div>

                            <div class="form-group  ">
                                <input type="text" class="form-control  mt-5   input_size text_font" value="{{old('bank_account')}}" name="bank_account" id="bank_account" placeholder="bank account"  >
                                {{--<label for="bank_account" class=" label text-dark">bank account</label>--}}
                            </div>


                            <div class="form-group">
                                <select id="employee_status" name="employee_status"  class="form-control mt-5  input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option class="text_font" value="{{old('employee_status')}}" >Employee status</option>
                                    <option class="text_font" value="active">Active</option>
                                    <option class="text_font" value="inactive">Inactive</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <select id="gender" name="gender" class="form-control  mt-5  py-0 input_size" style=" padding: 10px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option class="text_font" value="{{old('gender')}}">Gender</option>
                                    <option class="text_font" value="male">Male</option>
                                    <option class="text_font" value="female">Female</option>
                                </select>
                            </div>


                        </div>



                        <div class="col-md-3">



                            <div class="form-group">
                                <input type="text" class="form-control   mt-5   input_size text_font" value="{{old('external_experience')}}"  name="external_experience" id="external_experience" placeholder="external experience"  >
                                {{--<label for="external_experience" class=" label text-dark">external experience</label>                     --}}
                            </div>



                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5   input_size text_font" value="{{old('internal_address')}}" id="internal_address" name="internal_address" placeholder="internal address"  >
                                {{--<label for="internal_address" class=" label text-dark">internal address</label>--}}
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5   input_size text_font" value="{{old('external_address')}}" name="external_address" id="external_address" placeholder="external address"  >
                                {{--<label for="external_address" class=" label text-dark">external address</label>--}}
                            </div>



                            <div class="form-group ">
                                <input type="email" class="form-control  mt-5 input_size text_font" value="{{old('email')}}" id="email" name="email" placeholder="email*"  >
                                {{--<label for="email" class=" label text-dark">email</label>--}}
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5 input_size  text_font" value="{{old('start_date')}}" name="start_date" id="start_date_joining" placeholder="joining  date" >
                                {{--<label for="start_date" class=" label text-dark">Joining Date date</label>--}}
                            </div>


                            <div class="form-group ">
                                <input type="number" class="form-control  mt-5 input_size  text_font " value="{{old('contract_period')}}" id="contract_period" name="contract_period" placeholder="contract period">
                                {{--<label for="contract_period" class=" label text-dark">contract period</label>--}}
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control  mt-5 input_size  text_font " value="{{old('internal_experience')}}" id="internal_experience" name="internal_experience" placeholder="internal experience">
                                {{--<label for="internal_experience" class=" label text-dark">internal experience</label>--}}
                            </div>


                            <div class="form-group ">
                                <input type="text" class="form-control   mt-5 input_size  text_font" value="{{old('social_status')}}"  id="social_status" name="social_status" placeholder="social status">
                                {{--<label for="social_status" class=" label text-dark">social status</label>--}}
                            </div>


                            <div class="form-group  ">
                                <input type="text" class="form-control    py-0 mt-5 input_size text_font" value="{{old('date_of_birth')}}" id="date_of_birth" name="date_of_birth" placeholder="date of birth"  >
                                {{--<label for="date_of_birth" class=" label text-dark">date of birth<span class="text-danger">*</span></label>--}}
                                @if ($errors->has('date_of_birth'))
                                    <style>
                                        #date_of_birth{
                                            border: solid 1px red;
                                        }
                                    </style>
                                    </p>
                                @endif
                            </div>




                        </div>


                        <div class="col-md-3">
                            <div class="form-group  ">
                                <label for="" class="text_font" >Select Designation <span class="add_button"><i id="add_designation_button" class="fa fa-plus-circle text-success"></i></span> </label>
                                <select id="designation_list"  name="designation" class="form-control py-0 mt-3  input_size" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option value="{{old('designation')}}"></option>
                                    @foreach($designations as $key=>$y)
                                        <option class="text_font" value="{{$y->id}}" >{{$y->designation}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group ">
                                <label for="" class="text_font">Select Department &nbsp;&nbsp; <span class="add_button"><i id="add_department_button" class="fa fa-plus-circle text-success"></i></span></label>
                                <select id="department_list" name="department" required class="form-control py-0  input_size" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option class="text_font" value="{{old('department')}}"></option>
                                    @foreach($departments as $key=>$y)
                                        <option class="text_font" value="{{$y->id}}" >{{$y->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group ">
                                <label for="" class="text_font">Select Shift&nbsp;&nbsp;
                                    {{--<span class="add_button">--}}
                                        {{--<i id="add_shift_button" class="fa fa-plus-circle text-success"></i></span>--}}
                                </label>
                                <select id="shift_list" name="shift_id"  required class="form-control   py-0 input_size" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option class="text_font" value="{{old('shift_id')}}"></option>
                                    @foreach($shifts as $key=>$y)
                                        <option class="text_font" value="{{$y->id}}" >{{$y->shift_name}}</option>
                                    @endforeach
                                </select>&nbsp;
                            </div>


                            <div class="form-group  ">
                                <select id="nationality"  name="nationality" class="form-control py-0   input_size" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                    <option value="{{old('nationality')}}" class="text_font" >Nationality</option>
                                    @foreach($countries as $key=>$y)
                                        <option class="text_font" value="{{$y->nicename}}"  style="height: 20px;font-size: 20px;">
                                            {{--style="background-image:url({{ URL::asset('images/slides/'.$y->code.'.png') }})"--}}
                                            <div class=" text-danger" style="height: 10px;background-color: red">{{$y->iso}}|{{$y->nicename}}</div>

                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="col-md-3 mt-5">
                            <div class="form-group  ">
                                <table style="margin: 0 auto;">
                                    <td class="photo">
                                        <img class="student-photo" id="showProfilePhoto">
                                        <input type="file" name="photo" id="profile_photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                    </td>
                                    <tr>
                                        <td style="text-align: center;background: #ddd;">
                                            <input type="button" name="browse_profile_file"  id="browse_profile_file" class="form-control bg-dark text-white btn-browse" value="Photo" style="border-radius: 0">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                    <hr class="bg-warning">



                    <div class="row">
                        <div class="col-md-6 no-gutters"><button class="btn-hover color-7" id="official_documents_button">Official Document</button></div>

                        <div class="col-md-6 no-gutters text-left"><button class="btn-hover color-10"id="salary_button" >Salary Info</button></div>
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

                    <div class="container-fluid" id="official_documents_row">



                        <div class="row" >
                            <div class="container-fluid">
                                <div class="table-responsive text-center" style="font-size: 10px" >
                                    <table class="table table-white text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="text_font">Document type</th>
                                            <th scope="col" class="text_font" >document number</th>
                                            <th scope="col" class="text_font" >issue place</th>
                                            <th scope="col" class="text_font" >issue date</th>
                                            <th scope="col" class="text_font" >Expiry Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr >
                                            <td class="text_font">Passport</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control  text-center  input_size text_font" value="{{old('passport_number')}}" name="passport_number" id="passport_number">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control  text-center  input_size text_font" value="{{old('passport_issue_place')}}"  name="passport_issue_place" id="passport_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control  text-center  input_size text_font"  value="{{old('passport_issue_date')}}" name="passport_issue_date" id="passport_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control  text-center  input_size text_font"  value="{{old('passport_expiry_date')}}" name="passport_expiry_date" id="passport_expiry_date">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <select id="visa_type" name="visa_type" class="form-control py-0  input_size" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                        <option class="text_font" >Visa select</option>
                                                        <option class="text_font"  value="residential">Residential</option>
                                                        <option class="text_font"  value="visit">Visit</option>
                                                        <option class="text_font"  value="sponsor">Sponsor</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="text-center text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font"  value="{{old('visa_number')}}" name="visa_number" id="visa_number">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font"  value="{{old('visa_issue_place')}}" name="visa_issue_place" id="visa_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font" value="{{old('visa_issue_date')}}"  name="visa_issue_date" id="visa_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font"  value="{{old('visa_expiry_date')}}" name="visa_expiry_date" id="visa_expiry_date">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_font" >Labour Contract</td>
                                            <td class="text-center text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font "  value="{{old('labour_card_number')}}" name="labour_card_number" id="labour_card_number">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font "  value="{{old('labour_card_issue_place')}}" name="labour_card_issue_place" id="labour_card_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font "  value="{{old('labour_card_issue_date')}}" name="labour_card_issue_date" id="labour_card_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font "  value="{{old('labour_card_expiry_date')}}" name="labour_card_expiry_date" id="labour_card_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text_font">Emirates Id</td>
                                            <td class="text-center text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font" value="{{old('emirates_id_number')}}" name="emirates_id_number" id="emirates_id_number">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font"  value="{{old('emirates_id_issue_place')}}" name="emirates_id_issue_place" id="emirates_id_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font"  value="{{old('emirates_id_issue_date')}}" name="emirates_id_issue_date" id="emirates_id_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font"  value="{{old('emirates_id_card_expiry_date')}}" name="emirates_id_card_expiry_date" id="emirates_id_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text_font">Medical card</td>
                                            <td class="text-center text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font" value="{{old('medical_card_number')}}"  name="medical_card_number" id="medical_card_number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font" value="{{old('medical_card_issue_place')}}"  name="medical_card_issue_place" id="medical_card_issue_place">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font" value="{{old('medical_card_issue_date')}}"  name="medical_card_issue_date" id="medical_card_issue_date">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font"  value="{{old('medical_card_expiry_date')}}" name="medical_card_expiry_date" id="medical_card_expiry_date">
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text_font">Driving Licence</td>
                                            <td class="text-center text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font " value="{{old('driving_licence_number')}}"  name="driving_licence_number" id="driving_licence_number">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font " value="{{old('driving_licence_issue_place')}}"  name="driving_licence_issue_place" id="driving_licence_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font " value="{{old('driving_licence_issue_date')}}"  name="driving_licence_issue_date" id="driving_licence_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font">
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font " value="{{old('driving_licence_expiry_date')}}"  name="driving_licence_expiry_date" id="driving_licence_expiry_date">
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text_font" >Work Permit</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font " value="{{old('work_permit_number')}}"  name="work_permit_number" id="work_permit_number">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class="form-control   text-center  input_size text_font " value="{{old('work_permit_issue_place')}}"  name="work_permit_issue_place" id="work_permit_issue_place">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font " value="{{old('work_permit_issue_date')}}"  name="work_permit_issue_date" id="work_permit_issue_date">
                                                </div>
                                            </td>
                                            <td class="text_font" >
                                                <div class="form-group">
                                                    <input type="text" class=" date_text_input form-control   text-center  input_size text_font " value="{{old('work_permit_expiry_date')}}"  name="work_permit_expiry_date" id="work_permit_expiry_date">
                                                </div>
                                            </td>
                                        </tr>

                                        <td class="text_font">Personal Code</td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control   text-center  input_size text_font" value="{{old('personal_code')}}"  name="personal_code" id="personal_code">
                                            </div>
                                        </td>

                                        <td class="text_font">
                                            <p>Passport possession</p>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <select id="gender" name="passport_possession" class="form-control   input_size py-0" style=" padding: 10px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                                    <option class="text_font" >Passport possession</option>
                                                    <option class="text_font"  value="Company">Company</option>
                                                    <option class="text_font"  value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="form-inline">
                                                <label for="" class="text_font">Passport Scan</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file" name="passport_scan_file" id="passport_scan_file" class="form-control   py-0" >
                                            </div>
                                        </td>


                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="container-fluid     ">
                        <div class="container-fluid text-center">
                            <button type="submit" class="btn shadow-none    btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                            <button type="reset" class="btn shadow-none  text-white text-white mb-3 btn-sm float-right btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection