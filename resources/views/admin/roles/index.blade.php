@extends("admin.layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{config('app.name')}}/ADMINS</h1>




        <!-- Add Employee Form -->

        <div class="card shadow mb-4 mt-5">

            <div class="card-header bg-gradient-primary text-center text-white">ADD ADMIN ROLES</div>
            <div class="card-block">
                <div class="container-fluid">
                <form class="form-horizontal user" method="POST" action="">
                    {{csrf_field()}}
                    <div class="form-group col-md-4 {{ $errors->has('rolename') ? ' has-error' : '' }}">
                        <label for="role" class="text-center">ROLE NAME</label>
                        <input class="form-control form-control-user" name="rolename" id="rolename" placeholder="Please Provide Role name" >
                        @if ($errors->has('rolename'))
                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('rolename') }}</strong>
                                                <style>
                                                    #role{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                        @endif

                    </div>

                    <div class="text-center mt-3 mb-3 p-2">
                        <button type="reset" class="btn btn-info float-left mb-3 mt-1 p-1">CANCEL</button>
                        <button type="submit" class="btn btn-success float-right mb-3 mt-1 p-1">SAVE ROLE</button>
                    </div>

                </form>
            </div>
            </div>

        </div>




        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 bg-gradient-primary text-center">
                <h6 class="m-0  text-white">MANAGE ADMINS ROLES</h6>


            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Head HR</td>
                            <td><a href=""><button class="btn  btn-info"><i class="fa fa-edit"></i></button></a></td>
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