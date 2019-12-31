{{--Add designation modal start--}}
<div class="modal fade modal-primary" id="add_designation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>

            <div class="modal-body">
                <p id="ad_designation" class=" text-center text-dark mx-auto">Add Designation </p>
                <div class="row">
                    <div class="input-group col-md-6 mx-auto">
                        <input type="text" name="designation" id="new_designation" class="form-control" required placeholder="Name">
                    </div>
                </div>
            </div>

            <div class="modal-footer p-0 " style="border-radius: 0">
                <button data-dismiss="modal" class="btn btn-danger float-left" type="button">Close</button>
                <button  class="btn btn-primary btn-save-class float-right" id="add_designation_save" type="button">Save</button>
            </div>

        </div>
    </div>
</div>
{{--Add designation modal end--}}

{{--Add shift modal start--}}
<div class="modal fade modal-primary" id="add_shift_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>

            <div class="modal-body">
                    <div class="row">

                        <div class="col-md-4">
                            <label for="" style="color: #000000">Chose Color</label>
                            <input type="hidden" id="shift_color_modal" name="shift_color">
                            <div class="colorPickSelector bg-secondary  " id="colorPickSelector" style="z-index: 1000"></div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group mx-auto {{ $errors->has('shift_name') ? ' has-error' : '' }}">
                                        <label for="shift_name">Shift Name</label>
                                        <input type="text" name="shift_name" id="shift_name_modal" class="form-control py-0" required placeholder="Shift Name">
                                        @if ($errors->has('shift_name'))
                                            <div class="help-block text-danger text-xs mt-5">
                                                <strong>{{ $errors->first('shift_name') }}</strong>
                                                <style>
                                                    #shift_name{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                            </div>
                                        @endif
                                    </div>


                                    <div class="row text-center mx-auto">
                                        <div class="col-md-6">
                                            <div class="form-group mx-auto {{ $errors->has('first_half_start_time') ? ' has-error' : '' }}">
                                                <label for="first_half_start_time">First Half</label>
                                                <input type="text" name="first_half_start_time" id="first_half_start_time_modal" class="form-control py-0 clockpicker" required placeholder="Start Time">
                                                @if ($errors->has('first_half_start_time'))
                                                    <div class="help-block text-danger text-xs mt-5">
                                                        <strong>{{ $errors->first('first_half_start_time') }}</strong>
                                                        <style>
                                                            #first_half_start_time{
                                                                border-bottom: solid 1px;
                                                                color: red;
                                                            }
                                                        </style>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mx-auto {{ $errors->has('first_half_end_time') ? ' has-error' : '' }}">
                                                <label for="first_half_end_time">First Half</label>
                                                <input type="text" name="first_half_end_time" id="first_half_end_time_modal" class="form-control py-0 clockpicker" required placeholder="End Time">
                                                @if ($errors->has('first_half_end_time'))
                                                    <div class="help-block text-danger text-xs mt-5">
                                                        <strong>{{ $errors->first('first_half_end_time') }}</strong>
                                                        <style>
                                                            #first_half_end_time{
                                                                border-bottom: solid 1px;
                                                                color: red;
                                                            }
                                                        </style>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="shift_name">Select Schedule </label>
                                        <select id="schedule"  name="schedule" class="form-control mb-2 py-0 input_size"  style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                            <option >Schedule</option>
                                        </select>
                                    </div>

                                    <div class="row text-center mx-auto">
                                        <div class="col-md-6">
                                            <div class="form-group mx-auto {{ $errors->has('second_half_start_time') ? ' has-error' : '' }}">
                                                <label for="second_half_start_time">Second Half</label>
                                                <input type="text" name="second_half_start_time" id="second_half_start_time_modal" class="form-control py-0 clockpicker" required placeholder="Start Time">
                                                @if ($errors->has('second_half_start_time'))
                                                    <div class="help-block text-danger text-xs mt-5">
                                                        <strong>{{ $errors->first('second_half_start_time') }}</strong>
                                                        <style>
                                                            #second_half_start_time{
                                                                border-bottom: solid 1px;
                                                                color: red;
                                                            }
                                                        </style>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mx-auto {{ $errors->has('second_half_end_time') ? ' has-error' : '' }}">
                                                <label for="second_half_end_time">Second Half</label>
                                                <input type="text" name="second_half_end_time" id="second_half_end_time_modal" class="form-control py-0 clockpicker" required placeholder="End Time">
                                                @if ($errors->has('second_half_end_time'))
                                                    <div class="help-block text-danger text-xs mt-5">
                                                        <strong>{{ $errors->first('second_half_end_time') }}</strong>
                                                        <style>
                                                            #second_half_end_time{
                                                                border-bottom: solid 1px;
                                                                color: red;
                                                            }
                                                        </style>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>





                    {{--color_select--}}





















                    {{--<div class="form-row">--}}
                    {{--<div class="table-responsive border-0">--}}
                    {{--<table class="table border-0" id="dataTable" width="100%" cellspacing="0">--}}
                    {{--<thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                    {{--<td>--}}
                    {{--<div class="form-group">--}}
                    {{--<div class="row">--}}
                    {{--<div class="form-group col-md-3 mx-auto {{ $errors->has('shift_name') ? ' has-error' : '' }}">--}}
                    {{--<label for="shift_name">Name</label>--}}
                    {{--<input type="text" name="shift_name" id="new_shift" class="form-control py-0" required placeholder="Shift Name">--}}
                    {{--@if ($errors->has('shift_name'))--}}
                    {{--<div class="help-block text-danger text-xs mt-5">--}}
                    {{--<strong>{{ $errors->first('shift_name') }}</strong>--}}
                    {{--<style>--}}
                    {{--#new_shift{--}}
                    {{--border-bottom: solid 1px;--}}
                    {{--color: red;--}}
                    {{--}--}}
                    {{--</style>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</div>--}}



                    {{--<div class="form-group col-md-3 mx-auto">--}}
                    {{--<label for="shift_start_time">Start Time</label>--}}
                    {{--<input type="time" name="shift_start_time" id="shift_start_time" class="form-control py-0" required placeholder="Start Time">--}}
                    {{--</div>--}}

                    {{--<div class="form-group col-md-3 mx-auto">--}}
                    {{--<label for="shift_end_time">End Time</label>--}}
                    {{--<input type="time" name="shift_end_time" id="shift_end_time" class="form-control py-0" required placeholder="End Time">--}}
                    {{--</div>--}}

                    {{--<div class="col-md-3">--}}
                    {{--<label for="allowance">Late/Early Minutes</label>--}}
                    {{--<div class="form-group ">--}}
                    {{--<input type="number" class="form-control py-0 input_size" id="minutes" name="minutes" placeholder="Minutes">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--</div>--}}


                    {{--</div>--}}
                    {{--</td>--}}


                    {{--</tr>--}}

                    {{--</tbody>--}}
                    {{--</table>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="text-center p-2">--}}
                    {{--<button type="reset" class="btn btn-info float-left mb-3 mt-1 p-1">Cancel</button>--}}
                    {{--<button type="submit" class="btn btn-success float-right mb-1 mt-1 p-1">Save shift</button>--}}
                    {{--</div>--}}









                {{--<div class="row">--}}
                    {{--<div class="form-group col-md-3 mx-auto">--}}
                        {{--<label for="shift_name">Name</label>--}}

                        {{--<input type="text" name="shift_name" id="new_shift_modal" class="form-control" required placeholder="Shift Name">--}}
                    {{--</div>--}}

                    {{--<div class="form-group col-md-3 mx-auto">--}}
                        {{--<label for="shift_start_time">Start Time</label>--}}
                        {{--<input type="time" name="shift_start_time" id="shift_start_time_modal" class="form-control py-0" required placeholder="Start Time">--}}
                    {{--</div>--}}

                    {{--<div class="form-group col-md-3 mx-auto">--}}
                        {{--<label for="shift_end_time">End Time</label>--}}
                        {{--<input type="time" name="shift_end_time" id="shift_end_time_modal" class="form-control py-0" required placeholder="End Time">--}}
                    {{--</div>--}}

                    {{--<div class="col-md-3">--}}
                        {{--<label for="allowance">Late/Early Minutes</label>--}}
                        {{--<div class="form-group ">--}}
                            {{--<input type="number" class="form-control py-0 input_size" id="minutes_modal" name="minutes" placeholder="Minutes">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            </div>


            <div class="modal-footer p-0">
                <button data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                <button  class="btn btn-primary btn-save-shift" id="add_shift_save_modal" type="button">Save</button>
            </div>

        </div>
    </div>
</div>
{{--Add shift modal end--}}


{{--documents Upload modal start--}}

{{--documents Upload modal End--}}


{{--Add department modal start--}}
<div class="modal fade modal-primary" id="add_department_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4 mx-auto">
                        <label for="department_name">Department</label>
                        <input type="text" name="department_name" id="new_department" class="form-control py-0" required placeholder="Department Name">
                    </div>
                </div>
            </div>


            <div class="modal-footer p-0">
                <button data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                <button  class="btn btn-primary btn-save-department" id="add_department_save" type="button">Save</button>
            </div>

        </div>
    </div>
</div>
{{--Add shift modal end--}}


{{--Emoloyee serach modal start--}}
<div class="modal fade modal-primary" id="employee_search_moda." tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-10 mx-auto">
                        <input type="text" name="search_employee" id="search_employee" class="form-control" required placeholder="search_employee">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Emoloyee serach modal end--}}



<!-- Modal -->
<div class="modal fade" id="employee_search_modal" tabindex="-1" role="dialog" aria-labelledby="Sponsor" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>
            <div class="modal-body ">
                <div class="row form-group">

                    <div class="col-2">
                        <label style="font-size: 8pt!important; font-weight: bolder">Search:</label>
                    </div>

                    <div class="col-md-6">
                        <input type="text" required="" placeholder="search" class="form-control rounded-pill" value=""  id="search_employees" name="search_employees" autocomplete="off" />  </div>
                </div>


                <table class="table col" >
                    <thead>
                    <tr>
                        <th scope="col"style="font-size: 8pt!important">Employee code.</th>
                        <th scope="col"style="font-size: 8pt!important">Employee name</th>
                        <th scope="col"style="font-size: 8pt!important">Employee Mobile</th>

                    </tr>
                    </thead>

                    <tbody id="tbody">

                    {{--<td></td>--}}
                    {{--<td></td>--}}
                    {{--<td></td>--}}

                    </tbody>
                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>





{{--BirthDay Gift modal start--}}
<div class="modal fade modal-primary birthday_gift_modal" id="birthday_gift_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid green 2px">

            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-10 mx-auto">
                        <label for="birthday_message">Send Birthday_message</label>
                        <textarea type="text" rows="5" name="birthday_message" id="birthday_message" class="form-control py-0" required style="border-radius: 30px"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer p-0 " style="border-radius: 0">
                <button data-dismiss="modal" class="btn btn-danger  float-left" type="button">Close</button>
                <button  class="btn btn-primary btn-save-class float-right" id="send_birthday_message_button" type="button">Send</button>
            </div>

        </div>
    </div>
</div>
{{--BirthDay Gift modal end--}}




{{--Employee documents upload modal--}}

<!-- Modal -->
<div class="modal fade" id="employee_documents_modal" tabindex="-1" role="dialog" aria-labelledby="Sponsor" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content shadow border-0" style="border-radius: 0;opacity: .9">

            <div class="modal-header p-0 bg-gradient-primary " style="border-radius: 0;border-top: solid blue 2px">

            </div>
            <div class="modal-body ">





                <div class="container">
                    <div class="ml-8 col-sm-12">
                        <div id="msg"></div>
                        <form method="post" id="image-form" enctype="multipart/form-data" onSubmit="return false;">
                            <div class="form-group">
                                <input type="file" name="file" class="file">
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    <div class="input-group-append">
                                        <button type="button" class="browse btn btn-primary">Browse...</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Upload" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>






                {{--<form action="" enctype="multipart/form-data" id="employee_document_upload_form">--}}

                {{--<div class="row form-group mx-auto ">--}}

                    {{--<div class="col-4">--}}
                        {{--<label style="font-size: 8pt!important; font-weight: bolder"> <i class="fa fa-book"></i>Upload Document:</label>--}}
                    {{--</div>--}}


                    {{--<div class="col-md-4">--}}
                        {{--<input type="file" required=""  placeholder="upload" class="form-control py-0 rounded-pill" value=""  id="file" name="file"  multiple/>--}}
                    {{--</div>--}}


                    {{--<div class="col-4">--}}
                        {{--<a class="btn btn-success float-right  shadow-none" id="employee_document_upload_button"><i class="fa fa-upload"></i>Upload</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--</form>--}}


                <table class="table col" >
                    <thead>
                    <tr>
                        <th scope="col"style="font-size: 8pt!important">Document Name.</th>
                        <th scope="col"style="font-size: 8pt!important">Download</th>
                        <th scope="col"style="font-size: 8pt!important">Delete</th>

                    </tr>
                    </thead>

                    <tbody id="employee_documents_tbody">

                    {{--<td></td>--}}
                    {{--<td></td>--}}
                    {{--<td></td>--}}

                    </tbody>
                </table>



            </div>



            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
</div>
</div>