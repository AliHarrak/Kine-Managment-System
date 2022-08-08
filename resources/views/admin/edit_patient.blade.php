<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
    <base href="/public">
    @include ('admin.css')

</head>


<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include ('admin.sidebar')
        <!--#######################################   SIDEBAR   #####################################################-->
        <!-- partial -->


        <!-- partial:partials/_navbar.html -->
        @include ('admin.navbar')
        <!--#######################################   NAVBAR   #####################################################-->
        <!-- partial -->



        <section style="width: 100%; position: absolute;margin-left:20px;">
            <div class="container py-0">
                <div class="container align: center" style="padding-top: 0px;">

                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">User</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        @if(session()->has('message'))

                        <div class="alert alert-success alert-dismissible fade show">
                            <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                                <span aria-hidden="true">&times;</span>
                            </span>
                            {{session()->get('message')}}
                        </div>

                        @endif


                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h3 style="margin-left: 20px;">{{$patient->name}}</h3>
                                    <p class="text-muted mb-1">Patient ID: {{$patient->id}}</p>
                                    <p class="text-muted mb-4">{{$patient->phone}}</p>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body" style="width:70%; margin-left: 100px;">
                                    <ul class="list-group list-group-flush rounded-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-calendar"></i>
                                            <p type="button" class="mb-0" href="#">Upcoming appointments</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-calendar-check" style="color: #333333;"></i>
                                            <p type="button" class="mb-0" href="#">Post-appointments</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-medical-bag"></i>
                                            <p type="button" class="mb-0" href="#">Treatments</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-file-account" style="color: #55acee;"></i>
                                            <p type="button" class="mb-0" href="#">Medical records</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-note-text" style="color: #ac2bac;"></i>
                                            <p type="button" class="mb-0" href="#">Notes</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="mdi mdi-note-multiple" style="color: #3b5998;"></i>
                                            <p type="button" class="mb-0" href="#">Files/Documents</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
        
                                <div class="card ">
                                    <div class="card-body">
                                    <form action="{{url('update_patient', $patient->id)}}" method="post" class="main-form" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$patient->name}}" class="form-control  mb-0" name="name"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$patient->email}}" class="form-control mb-0" name="email"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$patient->phone}}" class="form-control mb-0" name="phone"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Birth Date</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="date" value="{{$patient->birthDate}}" class="form-control mb-0" name="birthDate"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Gender</p>
                                            </div>
                                            <div class="form-check">
                                
                                <div style="margin-left: 20px;">
                            <div>
                                <input type="radio" class="form-check-input" name="gender" value="male" {{$patient->gender == 'male' ? 'checked' : ''}} >
                                <label class="form-check-label" for="flexRadioDefault1">Male</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="gender" value="female" {{$patient->gender == 'female' ? 'checked' : ''}} >
                                <label class="form-check-label" for="flexRadioDefault1">Female</label>
                            </div>
                        </div>
                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center ">
                                    <input type="submit" value="Save" class="btn btn-primary"></input>
                                    @method('put')
                                    @csrf
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


        </section>
    </div>
    </div>


    <!--#######################################   BODY   #####################################################-->

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!--#######################################   FOOTER   #####################################################-->

    <!-- partial -->

    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include ('admin.script')

    <!--################################   SCRIPTS   ##################################-->
    <!-- End custom js for this page -->
</body>

</html>