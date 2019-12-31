<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::post('/select_login', function (\App\Request $request) {
//
//    if ($request->admin_login){
//        echo 'admin_login';
//    }
//    if ($request->employee_login){
//        echo 'employee_login';
//    }
//});








Route::get('/', 'Landing\LandingController@landing_page')->name('landing_page');
Route::get('/getlogin', 'Auth\AdminLoginController@getloginFform')->name('admin.login');
Route::post('/postlogin', 'Auth\AdminLoginController@adminpostlogin')->name('admin.login.submit');


//fullcalender
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');



//+++++++++Employees Guard Routes++++++++++++++
Auth::routes();
Route::prefix('employee')->group(function() {
Route::get('/dashboard', 'User\HomeController@dashboard')->name('employee_dashboard');
Route::get('/show_leaves', 'User\HomeController@show_leaves')->name('employee_show_leaves');
Route::post('/leave_request', 'User\HomeController@leave_request')->name('leave_request');
Route::get('/get_unread_messages', 'User\HomeController@get_unread_messages')->name('get_unread_messages');
Route::get('/manage_messages', 'User\HomeController@manage_messages')->name('manage_messages');
Route::get('/update_message/{id}', 'User\HomeController@update_message')->name('update_message');
Route::post('/delete_message/{id}', 'User\HomeController@delete_message')->name('delete_message');
Route::get('/employee-change-password', 'User\HomeController@changepassword')->name('employee-change-password');
Route::post('/employee-update-password/{id}', 'User\HomeController@updatepassword')->name('employee-update-password');
Route::get('/show_details', 'User\HomeController@show_details')->name('show_details');



});
//+++++++++End of Employees Guard Routes++++++++++++++



//===============admin Management Area====================
Route::prefix('admin')->group(function() {



    Route::get('/show_attendances', 'Attendance\AttendanceController@show_attendances')->name('show_attendances');
    Route::get('/upload_csv_data', 'Attendance\AttendanceController@upload_csv_data')->name('upload_csv_data');


    Route::get('/show_attendances_byDate', 'Attendance\AttendanceController@show_attendances_byDate')->name('show_attendances_byDate');


    Route::get('/show_attendances_byDateRange', 'Attendance\AttendanceController@show_attendances_byDateRange')->name('show_attendances_byDateRange');







    Route::post('/adminlogout', ['as' => 'adminlogout', 'uses' => 'Auth\AdminLoginController@logout']);
    //admin Authentication===
    //Route::get('/', 'AdminAdminController@index')->name('admin.dashboard');
    Route::get('/admin', 'Admin\AdminController@show_dashboard')->name('show_dashboard');
    //adding admins to the database
    Route::get('/getadminform', 'AdminController@getadminform')->name('getadminform');
    Route::post('/createpostadmin', 'AdminController@createpostadmin')->name('createpostadmin');

    //password resset========
    route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //manage pages staff======
    Route::get('/getCreateStaff', 'AdminController@getCreateStaff')->name('getCreateStaff');
    Route::post('/createPostStaff', 'AdminController@createPostStaff')->name('createPostStaff');
    Route::get('/editgetStaff/{id}', 'AdminController@editgetStaff')->name('editgetStaff');
    Route::post('/updatePostStaff/{id}', 'AdminController@updatePostStaff')->name('updatePostStaff');
    Route::post('/deletePostStaff/{id}', 'AdminController@deletePostStaff')->name('deletePostStaff');


    Route::get('/show_admin', 'Admin\AdminController@show_admin')->name('show_admin');

    Route::get('/show_employees', 'Employee\EmployeeController@show_employees')->name('show_employees');

    Route::post('/post_employees', 'Employee\EmployeeController@post_employees')->name('post_employees');
    Route::get('/upload_employee_documents', 'Employee\EmployeeController@upload_employee_documents')->name('upload_employee_documents');

    Route::get('/upload_employee_documents_link/{id}', 'Employee\EmployeeController@upload_employee_documents_link')->name('upload_employee_documents_link');
    Route::get('/redirect_after_register', 'Employee\EmployeeController@redirect_after_register')->name('redirect_after_register');


    Route::any('/post_event', 'Announcement\AnnouncementController@post_event')->name('post_event');
    Route::get('/add_employees', 'Employee\EmployeeController@add_employees')->name('add_employees');
    Route::get('/search_employees', 'Employee\EmployeeController@search_employees')->name('search_employees');
    Route::get('/show_employees', 'Employee\EmployeeController@show_employees')->name('show_employees');
    Route::post('/post_employees', 'Employee\EmployeeController@post_employees')->name('post_employees');
    Route::get('/employee_edit/{id}', 'Employee\EmployeeController@employee_edit')->name('employee_edit');
    Route::post('/employee_delete/{id}', 'Employee\EmployeeController@employee_delete')->name('employee_delete');

    Route::post('/update_employees/{id}', 'Employee\EmployeeController@update_employees')->name('update_employees');

    Route::post('/save_documents', 'Employee\EmployeeController@save_documents')->name('save_documents');
    Route::get('/full_info/{id}', 'Employee\EmployeeController@full_info')->name('full_info');





    Route::post('/save_trainings/{id}', 'Employee\EmployeeController@save_trainings')->name('save_trainings');
    Route::post('/save_contract/{id}', 'Employee\EmployeeController@save_contract')->name('save_contract');


    Route::post('/save_emergency/{id}', 'Employee\EmployeeController@save_emergency')->name('save_emergency');
    Route::post('/previous_job/{id}', 'Employee\EmployeeController@previous_job')->name('previous_job');











    Route::get('/fetch_send_to', 'Employee\EmployeeController@fetch_send_to')->name('fetch_send_to');
    Route::get('/show_departments', 'Department\DepartmentController@show_departments')->name('show_departments');
    Route::get('/json_departments', 'Department\DepartmentController@json_departments')->name('json_departments');
    Route::get('/json_events', 'Department\DepartmentController@json_events')->name('json_events');
    Route::get('/department_edit/{id}', 'Department\DepartmentController@department_edit')->name('department_edit');
    Route::post('/department_update/{id}', 'Department\DepartmentController@department_update')->name('department_update');
    Route::post('/department_delete/{id}', 'Department\DepartmentController@department_delete')->name('department_delete');
//json returning data routes
    Route::get('/get_employees_json', 'Employee\EmployeeController@get_employees_json')->name('get_employees_json');
    Route::get('/get_departments_json', 'Employee\EmployeeController@get_departments_json')->name('get_departments_json');
    Route::get('/get_designations_json', 'Employee\EmployeeController@get_designations_json')->name('get_designations_json');

    Route::get('/get_announcements_json', 'Employee\EmployeeController@get_announcements_json')->name('get_announcements_json');

    Route::any('/post_department', 'Department\DepartmentController@post_department')->name('post_department');
    Route::get('/show_roles', 'Role\RoleController@show_roles')->name('show_roles');
    Route::get('/show_designations', 'Designation\DesignationController@show_designations')->name('show_designations');
    Route::post('/post_designation', 'Designation\DesignationController@post_designation')->name('post_designation');
    Route::get('/edit_designation/{id}', 'Designation\DesignationController@edit_designation')->name('edit_designation');
    Route::post('/delete_designation/{id}', 'Designation\DesignationController@delete_designation')->name('delete_designation');
    Route::post('/update_designation/{id}', 'Designation\DesignationController@update_designation')->name('update_designation');

//    expiring soon
    Route::get('/expiring_soon', 'Employee\EmployeeController@expiring_soon')->name('expiring_soon');

//    Ajax
    Route::get('/get_documents_expiry_dates', 'Employee\EmployeeController@get_documents_expiry_dates')->name('get_documents_expiry_dates');

//send Birthday Message
    Route::post('/send_birthday', 'Announcement\AnnouncementController@send_birthday')->name('send_birthday');




    //holidays
    Route::get('/get_holiday', 'Leave\LeaveController@get_holiday')->name('get_holiday');
    Route::post('/post_holiday', 'Leave\LeaveController@post_holiday')->name('post_holiday');

    Route::get('/update_holiday', 'Leave\LeaveController@update_holiday')->name('update_holiday');
    Route::get('/edit_holiday', 'Leave\LeaveController@edit_holiday')->name('edit_holiday');
    Route::post('/delete_holiday/{id}', 'Leave\LeaveController@delete_holiday')->name('delete_holiday');


    //employee details
    Route::get('/employee_salary', 'Employee\EmployeeController@employee_salary')->name('employee_salary');

    Route::get('/employee_salary_calculator', 'Employee\EmployeeController@employee_salary_calculator')->name('employee_salary_calculator');

    Route::get('/employee_salary_calculator_department', 'Employee\EmployeeController@employee_salary_calculator_department')->name('employee_salary_calculator_department');


    Route::get('/employee_salary_calculator_all', 'Employee\EmployeeController@employee_salary_calculator_all')->name('employee_salary_calculator_all');


    //print salary
    Route::get('/print_salary/{id}', 'Employee\EmployeeController@print_salary')->name('print_salary');









//policies
    Route::get('/show_policy', 'Leave\LeaveController@show_policy')->name('show_policy');
    Route::post('/post_policy', 'Leave\LeaveController@post_policy')->name('post_policy');
    Route::get('/edit_policy/{id}', 'Leave\LeaveController@edit_policy')->name('edit_policy');
    Route::post('/delete_policy/{id}', 'Leave\LeaveController@delete_policy')->name('delete_policy');


    Route::post('/update_leave/{id}', 'Leave\LeaveController@leave_designation')->name('leave_designation');

    Route::get('/leave_edit/{id}', 'Leave\LeaveController@leave_edit')->name('leave_edit');

    Route::post('/leave_delete/{id}', 'Leave\LeaveController@leave_delete')->name('leave_delete');






    Route::get('/exceltest', 'Leave\LeaveController@exceltest')->name('exceltest');
    Route::get('/show_announcements', 'Announcement\AnnouncementController@show_announcements')->name('show_announcements');
    Route::get('/get_unread_notifications', 'Announcement\AnnouncementController@get_unread_notifications')->name('get_unread_notifications');

    Route::get('/get_notifications_reject/{id}', 'Announcement\AnnouncementController@get_notifications_reject')->name('get_notifications_reject');
    Route::post('/post_notifications_reject/{id}', 'Announcement\AnnouncementController@post_notifications_reject')->name('post_notifications_reject');
    Route::get('/get_notifications/{id}', 'Announcement\AnnouncementController@get_notifications')->name('get_notifications');



    Route::get('/show_leaves', 'Leave\LeaveController@show_leaves')->name('show_leaves');
    Route::get('/show_requested_leaves', 'Leave\LeaveController@show_requested_leaves')->name('show_requested_leaves');
    Route::post('/post_leave', 'Leave\LeaveController@post_leave')->name('post_leave');
    Route::post('/delete_notification/{id}', 'Announcement\AnnouncementController@delete_notification')->name('delete_notification');
    Route::get('/show_shifts', 'Shift\ShiftController@show_shifts')->name('show_shifts');
    Route::get('/shift_edit/{id}', 'Shift\ShiftController@shift_edit')->name('shift_edit');
    Route::post('/post_shift', 'Shift\ShiftController@post_shift')->name('post_shift');
    Route::post('/shift_update/{id}', 'Shift\ShiftController@shift_update')->name('shift_update');
    Route::post('/shift_delete/{id}', 'Shift\ShiftController@shift_delete')->name('shift_delete');
//company settings routes
    Route::get('/company_seetings', 'Admin\AdminController@company_seetings')->name('company_seetings');
    Route::post('/add_company','Admin\AdminController@add_company')->name('add_company');
    Route::get('/edit_company/{id}','Admin\AdminController@edit_company')->name('edit_company');
    Route::post('/update_company{id}','Admin\AdminController@update_company')->name('update_company');
    Route::post('/delete_company/{id}','Admin\AdminController@delete_company')->name('delete_company');
//get staff form
    Route::get('/staff-form','Admin\AdminController@staffform')->name('staff-form');
//post staff
    Route::post('/add-staff','Admin\AdminController@addstaff')->name('add-staff');
//get staff edit form
    Route::get('/staff-edit/{id}','Admin\AdminController@editstaff')->name('staff-edit');
//update staff
    Route::post('/staff-update/{id}','Admin\AdminController@staffupdate')->name('staff-update');
//delete staffs
    Route::post('/staff-deletestaff/{id}','Admin\AdminController@deletestaff')->name('staff-delete');
    Route::post('/send_messages', 'Announcement\AnnouncementController@send_messages')->name('send_messages');
    Route::post('/employee_document_upload_ajax', 'Employee\EmployeeController@employee_document_upload_ajax')->name('employee_document_upload_ajax');
});

