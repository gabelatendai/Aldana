
<div class="modal fade modal-primary" id="add-event-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="border-radius: 0;border-top: solid 2px green">

            </div>

            <p class="text-dark text-center">Send Announcement</p>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="event_name">Title</label>
                        <input type="text" name="event_name" id="event_name" class="form-control py-0"  placeholder="Title Name">
                    </div>


                    <div class="form-group col-md-4">
                        <label for="event_target">Send To</label>
                        <select id="select_depart" name="event_target" class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                            <option value="all_departments" id="everyone" >All Departments</option>
                            <option value="selected_departments" id="Departments">Selected Departments</option>
                            <option value="selected_employee" id="employees">Selected Employee</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="start_date">Date</label>
                        <input type="text" name="start_date" id="start_date_event" class="form-control py-0" >
                    </div>




                </div>
                <div class="row w-100">
                    <div class="form-group col-md-10 mx-auto text-center">
                        <label for="message">description</label>
                        <textarea type="text" name="message" rows="3" id="message" class="form-control py-0 text-center" style="border-radius: 50px"></textarea>
                    </div>
                </div>


                <table class="table col" >
                    <tbody id="found_send_to">



                    </tbody>
                </table>

            </div>
            <div class="modal-footer text-center">

                <div class="container-fluid">
                    <button type="submit" id="btn-save-event"  class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Send</button>
                    <button data-dismiss="modal"  class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 " id="close_event_modal"  style="width: 100px;height: 30px">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>