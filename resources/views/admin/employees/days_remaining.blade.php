@extends("admin.layout.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.toast.toast')
    @include('admin.delete.deletemodal')
    <!-- Add Employee Form -->
    <div class="card shadow border-0" style="border-radius: 0">
    <div class="card-header border-0 bg-gradient-primary py-0 text-white text-center" style="border-radius: 0">
        <div class="col-md-2 mt-3">
            <div class="form-group ">
                <select id="employee_documents_expiry"  name="employee_documents_expiry" class="form-control mb-2 py-0 input_size" required style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                    <option >Select Document to view</option>
                    <option value="passport_expiry_date">passport</option>
                    <option value="labour_card_expiry_date">work permit</option>
                    <option value="emirates_id_card_expiry_date">emirates_id</option>
                    <option value="medical_card_expiry_date">medical card</option>
                    <option value="driving_licence_expiry_date">driving licence</option>
                    <option value="withdrawing_passport">withdrawing passport</option>
                    <option value="vehicles_ownership">vehicles ownership</option>
                    <option value="miscellaneous_documents">miscellaneous documents</option>
                    <option value="residence_visa">residence visa</option>
                    <option value="trade_licence">trade licence</option>
                    <option value="vehicle_insurance">vehicle insurance</option>
                    <option value="visa_expiry_date">visit visa</option>
                </select>
            </div>
        </div>
    </div>



        <div class="card-body display_hidden" id="documents_expiry_table">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Employment Code</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Expiry Date</th>
                    </tr>
                    </thead>

                    <tbody id="tbody_documents_expiry">



                    </tbody>

                </table>

            </div>
        </div>




    <div class="card-body" id="expiring_soon_documents_card">
        <div class="table-responsive text-center" style="font-size: 10px">
            <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Document Type</th>
                    <th>Employee</th>
                    <th>Expiry Date</th>
                    <th>Days Remaining</th>
                </tr>
                </thead>
                <tbody>
                @php   $now =\Carbon\Carbon::now()  @endphp
                @foreach($passport_expiry_date as $passport_expiry_date)
                    <?php
                    $passport_expiry_dat = \Carbon\Carbon::parse($passport_expiry_date->passport_expiry_date);

                    $passport_days_remaining=$now->diffInDays($passport_expiry_dat, false);
                    ?>
                    <tr style="font-size: 8pt">
                        <td>{{"Passport"}}</td>
                        <td>{{$passport_expiry_date->first_name}}</td>
                        <td>{{$passport_expiry_date->passport_expiry_date}}</td>
                        @if($passport_days_remaining<=$document_setup->passport)
                            <td class="bg-danger text-white">{{$passport_days_remaining}}</td>
                        @endif
                        @if($passport_days_remaining>$document_setup->passport)
                            <td>{{$passport_days_remaining}}</td>
                        @endif

                    </tr>
                @endforeach


                @foreach($emirates_id_card_expiry_date as $emirates_id_card_expiry_date)
                    <?php
                    $emirates_id_card_expiry_dat = \Carbon\Carbon::parse($emirates_id_card_expiry_date->emirates_id_card_expiry_date);

                    $emirates_id_days_remaining=\Carbon\Carbon::now()->diffInDays($emirates_id_card_expiry_dat,false);
                    ?>
                    <tr style="font-size: 8pt">
                        <td>{{"Emirates ID"}}</td>
                        <td>{{$emirates_id_card_expiry_date->first_name}}</td>
                        <td>{{$emirates_id_card_expiry_date->emirates_id_card_expiry_date}}</td>
                        @if($emirates_id_days_remaining<=$document_setup->emirates_id)
                            <td class="bg-danger text-white">{{$emirates_id_days_remaining}}</td>
                        @endif
                        @if($emirates_id_days_remaining>$document_setup->emirates_id)
                            <td>{{$emirates_id_days_remaining}}</td>
                        @endif
                    </tr>
                @endforeach


                @foreach($medical_card_expiry_date as $medical_card_expiry_date)
                    <?php
                    $medical_card_expiry_dat = \Carbon\Carbon::parse($medical_card_expiry_date->medical_card_expiry_date);

                    $medical_card_days_remaining=\Carbon\Carbon::now()->diffInDays($medical_card_expiry_dat,false);
                    ?>
                    <tr style="font-size: 8pt">
                        <td>{{"Medical Card"}}</td>
                        <td>{{$medical_card_expiry_date->first_name}}</td>
                        <td>{{$medical_card_expiry_date->medical_card_expiry_date}}</td>
                        @if($medical_card_days_remaining<=$document_setup->medical_card)
                            <td class="bg-danger text-white">{{$medical_card_days_remaining}}</td>
                        @endif
                        @if($medical_card_days_remaining>$document_setup->medical_card)
                            <td>{{$medical_card_days_remaining}}</td>
                        @endif
                    </tr>
                @endforeach


                @foreach($driving_licence_expiry_date as $driving_licence_expiry_date)
                    <?php
                    $driving_licence_expiry_dat = \Carbon\Carbon::parse($driving_licence_expiry_date->driving_licence_expiry_date);

                    $driving_licence_days_remaining=\Carbon\Carbon::now()->diffInDays($driving_licence_expiry_dat,false);
                    ?>
                    <tr style="font-size: 8pt">
                        <td>{{"Driving Licence"}}</td>
                        <td>{{$driving_licence_expiry_date->first_name}}</td>
                        <td>{{$driving_licence_expiry_date->driving_licence_expiry_date}}</td>
                        @if($driving_licence_days_remaining<=$document_setup->driving_licence)
                            <td class="bg-danger text-white">{{$driving_licence_days_remaining}}</td>
                        @endif
                        @if($driving_licence_days_remaining>$document_setup->driving_licence)
                            <td>{{$driving_licence_days_remaining}}</td>
                        @endif

                    </tr>
                @endforeach


                @foreach($work_permit_expiry_date as $work_permit_expiry_date)
                    <?php
                    $work_permit_expiry_dat = \Carbon\Carbon::parse($work_permit_expiry_date->work_permit_expiry_date);

                    $work_permit_days_remaining=\Carbon\Carbon::now()->diffInDays($work_permit_expiry_dat,false);
                    ?>
                    <tr style="font-size: 8pt">
                        <td>{{"Work Permit"}}</td>
                        <td>{{$work_permit_expiry_date->first_name}}</td>
                        <td>{{$work_permit_expiry_date->work_permit_expiry_date}}</td>
                        @if($work_permit_days_remaining<=$document_setup->work_permit)
                            <td class="bg-danger text-white">{{$work_permit_days_remaining}}</td>
                        @endif
                        @if($work_permit_days_remaining>$document_setup->work_permit)
                            <td>{{$work_permit_days_remaining}}</td>
                        @endif


                    </tr>
                @endforeach




                </tbody>
            </table>

        </div>
        </div>



@endsection