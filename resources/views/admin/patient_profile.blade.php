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
    @include ('admin.css')
</head>
<base href="/public">
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
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <h3 style="margin-left: 20px;">{{$patient->name}}</h3>
                                        <p class="text-muted mb-1">Patient ID: {{$patient->id}}</p>
                                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="{{url('edit_patient', $patient->id)}}" type="button" class="btn btn-primary">Edit infos</a>
                                            <button type="button" class="btn btn-outline-primary ms-1">Settings</button>
                                        </div>
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
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{$patient->name}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{$patient->email}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{$patient->phone}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Birth Date</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{$patient->birthDate}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Gender</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{$patient->gender}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4 mb-md-0">
                                            <div class="card-body">
                                                <p class="mb-4"><span class="text-primary font-italic me-1">assignment</span> Project Status
                                                </p>
                                                <p class="mb-1" style="font-size: .77rem;">Tasks</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Appointments done</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Calendar</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Files</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fixed">
                                        <div class="card mb-md-0">
                                            <div class="card-body">
                                                <div>
                                                    <label class="menu-title">Notes</label>
                                                    <textarea class="rounded-3" name="notes" id="notes" cols="40" rows="8" placeholder="Add some note.."></textarea>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                               



                                            </div>
                                        </div>
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