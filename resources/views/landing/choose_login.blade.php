@extends('landing.landing')
@section('content')
    <div id="home-overlay"></div>
    <section class="training_areas">
        <div class="container-fluid">
            <!--title-->
            <!--end title-->
            <div class="row text-center mx-auto">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">
                    <div class="container-fluid animated fadeInLeft">
                        <!-- Add Employee Form -->
                        <form class="" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="card bg-transparent border-0 mb-2 mt-2" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form__group  mt-3">
                                        <input type="radio" class="form-control form__radio-input shadow-none"  name="account" id="admin_login">
                                        <label for="admin_login" class="radio-label form__radio-babel radio-inline mt-3" style="font-size: 1.4rem;color: white" >
                                        <span class="form__radio-button"></span>
                                        Admin
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group  form__group mt-3">
                                        <input type="radio" class="form-control form__radio-input shadow-none"  name="account" id="employee_login">
                                        <label for="employee_login" class="radio-label form__radio-babel radio-inline mt-3" style="font-size: 1.4rem;color: white" >
                                        <span class=" form__radio-button"></span>
                                        Employee
                                        </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--End of training areas section-->
@endsection
