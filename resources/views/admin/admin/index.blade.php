@extends("admin.layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
            <form class="form-horizontal mt-3 " action="" method="post" enctype="multipart/form-data">
                <div class="card border-0  mb-4 mt-5 " style="border-radius: 0">
                    <div class="card-header py-0 text-center text-white  custom_card_header" style="border-radius: 0">
                        <p class="text-white ">Add Admin</p>
                    </div>
                            <div class="card-block border-0 mx-2">
                                <div class="row">
                                <div class="col-md-9">
                                    <div class="row">

                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="User Name" id="User Name">
                                        </div>

                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control form-control-user" name="firs_name" placeholder="First Name" id="first_name">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="Email"  id="email">
                                    </div>

                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone" id="phone">
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4 ">
                                            <label for="password" class=" control-label">Password</label>
                                            <input id="password" type="password" class="form-control form-control-user" name="password" >
                                        </div>

                                        <div class="form-group col-md-4 ">
                                            <label for="password-confirm" class=" control-label">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" >
                                        </div>

                                    </div>
                            </div>



<div class="col-md-3">
                                    <div class="form-group form-group-login col-md-2">
                                        <table  style="margin: 0 auto;">
                                            <thead>
                                            <tr class="info">
                                                <label for="image">Image</label>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="photo">
                                                    <img  class="student-photo" id="showPhoto">
                                                    <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: center;background: #ddd;">
                                                    <input type="button" name="browse_file" id="browse_file" class="form-control btn-info btn-browse" value="browse">
                                                </td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
</div>
                                </div>





                            </div>
                            <div class="card-footer my-auto bg-transparent p-0 border-0">
                                <div class="text-center m-1 clearfix">
                                    <button type="reset" class="btn btn-info float-left  ">Cancel</button>
                                    <button type="submit" class="btn btn-success float-right  ">Save</button>
                                </div>
                            </div>





                    </div>
            </form>





        <div class="card shadow mb-4 mt-5" style="border-radius: 0">
            <div class="card-header py-0 bg-gradient-primary text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">MANAGE ADMINS</h6>


            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Role</th>
                            <th>photo</th>
                            <th>Edit</th>
                            <th>Suspend</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alfred</td>
                            <td>alfredkakuli@gmail.com</td>
                            <td>+791 5200000</td>
                            <td>HR ADMIN</td>
                            <td>photo</td>
                            <td><a href=""><button class="btn  btn-info"><i class="fa fa-edit"></i></button></a></td>
                            <td><a href=""><button class="btn  btn-warning"><i class="fa fa-clock"></i></button></a></td>
                            <td><a href=""><button class="btn  btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>



        </div>

        <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection