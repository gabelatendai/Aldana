{{--@extends("admin.layout.master")--}}
{{--@section("content")--}}
    {{--@include('admin.toast.toast')--}}
    {{--@include('admin.employees.modals.index')--}}
    {{--@include('admin.delete.deletemodal')--}}
    {{--<div class="container-fluid animated fadeInLeft">--}}
        {{--<form class="form-horizontal " action="" method="post" enctype="multipart/form-data">--}}
            {{--<div class="card shadow border-0 shadow mb-2 mt-2" style="border-radius: 0">--}}
                {{--<div class="card-header" style="border-radius: 0;border-top: solid 2px green">--}}

                {{--</div>--}}

                {{--<div class="card-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="event_name">Title</label>--}}
                            {{--<input type="text" name="event_name" id="event_name" class="form-control py-0"  placeholder="Title Name">--}}
                        {{--</div>--}}


                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="event_target">Send To</label>--}}
                            {{--<select id="select_depart" name="event_target" class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >--}}
                                {{--<option value="all_departments">All Departments</option>--}}
                                {{--<option value="selected_departments">Selected Departments</option>--}}
                                {{--<option value="selected_employee">Selected Employee</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="start_date">Date</label>--}}
                            {{--<input type="text" name="start_date" id="start_date_insert" class="form-control py-0" >--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-3">--}}
                        {{--<label for="end_date">End Date</label>--}}
                        {{--<input type="date" name="end_date" id="end_date" class="form-control py-0" >--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row w-100">--}}
                        {{--<div class="form-group col-md-10 mx-auto text-center">--}}
                            {{--<label for="message">description</label>--}}
                            {{--<textarea type="text" name="message" rows="3" id="message" class="form-control py-0 text-center" style="border-radius: 50px"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<table class="table col" >--}}
                        {{--<tbody id="">--}}

                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}



                {{--</div>--}}
                {{--<div class="card-footer text-center">--}}
                    {{--<button data-dismiss="modal" class="btn btn-danger  float-left" type="button">Close</button>--}}
                    {{--<button class="btn btn-primary btn-save-event___a float-right " id="btn-save-event_ssdsdd" type="submit">save</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}





        {{--<div class="card shadow mb-4 mt-3">--}}
            {{--<div class="card-header p-0 bg-gradient-primary text-center">--}}
                {{--<p class="m-0  text-white">manage announcements</p>--}}


            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div class="table-responsive  text-center">--}}
                    {{--<table class="table text-center " id="dataTable" width="100%" cellspacing="0" style="font-size: 10px">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Title</th>--}}
                            {{--<th>Message</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@foreach($events as $events)--}}
                        {{--<tr>--}}


                        {{--</tr>--}}
                        {{--@endforeach--}}

                        {{--</tbody>--}}
                    {{--</table>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}



    {{--</div>--}}

    {{--<!-- End of Add Employee Form -->--}}
    {{--<!-- /.container-fluid -->--}}
{{--@endsection--}}