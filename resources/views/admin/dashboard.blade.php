<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .card.corona-gradient-card2 {
            background-image: linear-gradient(to left, #0f8569, #00d9a5);
            border-radius: 6px;
        }

        .icon.icon-box-success2 {
            width: 40px;
            height: 37px;
            background-color: #aff0e3;
            border-radius: 7px;
            color: #aff0e3;
        }

        .text-muted2 {

            --bs-text-opacity: 1;
            color: #3b4543 !important;
        }
    </style>
    <!-- Required meta tags -->
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

        <div class="content-wrapper">
            <div class="container-fluid page-body-wrapper" id="form_container">
                <div class="container align: center" style="padding-top: 0px;">

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card corona-gradient-card2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h4 class="mb-0">Today's Appointments</h4>

                                                <a href="" data-toggle="modal" data-target="#addAppointPopup" type="button" class="mdi mdi-plus-circle" style="color:#aff0e3; flex: 0 0 auto; width: 66.66667%;margin-left:90px;font-size: 2rem; ;"></a>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success2 ">
                                                <p class="text-success ms-2 mb-0 font-weight-medium" style=" text-align: center;">23</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card corona-gradient-card2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h4 class="mb-0">New patients</h4>
                                                <a href="" data-toggle="modal" data-target="#addPatientPopup" type="button" class="mdi mdi-plus-circle" style="color:#aff0e3; flex: 0 0 auto; width: 66.66667%;margin-left:140px;font-size: 2rem; ;"></a>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success2">
                                                <p class="text-success ms-2 mb-0 font-weight-medium" style=" text-align: center;">6</p>
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Upcoming Appointments</h3>
                                    <a href="{{url('appoint_list')}}" class="btn btn-primary fadeInRight align-center" style="width:10%; justify-content:center; margin-left:1000px;">see all</a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Patient Name </th>
                                                    <th> Email </th>
                                                    <th> Phone</th>
                                                    <th> Date </th>
                                                    <th> Therapy Type </th>
                                                    <th> Description</th>
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                <tr>
                                                    @foreach($appoint as $appointements)
                                                    <td>
                                                        <span class="ps-2">{{$appointements->name}}</span>
                                                    </td>
                                                    <td> {{$appointements->email}} </td>
                                                    <td> {{$appointements->phone}} </td>
                                                    <td> {{$appointements->Date}} </td>
                                                    <td> {{$appointements->therapy}} </td>
                                                    <td class="badge badge-outline" style="color: grey;"> {{$appointements->description}} </td>
                                                    <td>
                                                        <div>
                                                            <form action="{{ url('/delete_appoint', ['id' => $appointements->id]) }}" method="post" onclick="return confirm('Are you sure you want to cancel this appointement ?')">
                                                                <input class="btn btn-primary btn-danger" type="submit" value="Cancel" />
                                                                <input type="hidden" name="_method" value="delete" />
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="addAppointPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color:white ;">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold" style="color: black;">Add new appointment</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white ;border-color:red ; background-color: red;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('upload_appoint')}}" method="post" class="main-form" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body mx-3">
                                <div class="row mt-5 ">
                                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                        <label style="color: black;">Patient name</label>
                                        <input type="text" name="name" style="color: white;" class="form-control" placeholder="Full name">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                        <label style="color: black;">Patient email</label>
                                        <input type="text" name="email" style="color: white; width: 200px;" class="form-control" placeholder="Email address..">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                        <input type="date" name="Date" style="color: white;" class="form-control">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                        <select name="therapy" id="therapy" class="custom-select form-control" style="color: white; width: 200px;">
                                            <option value="">--Type of Therapy--</option>
                                            <option value="Injury">Injury</option>
                                            <option value="Fracture">Fracture</option>
                                            <option value="Pain">Pain</option>
                                            <option value="Massage">Massage</option>
                                            <option value="Cupping">Cupping</option>
                                            <option value="Chiropratic">Chiropratic</option>
                                        </select>
                                    </div>
                                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                        <label style="color: black;">Patient phone number</label>
                                        <input type="text" name="phone" style="color: white; width: 200px;" class="form-control" placeholder="Phone number..">
                                    </div>
                                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                        <textarea name="description" id="description" class="form-control" style="color: white; width: 200px;" rows="6" placeholder="Case description.."></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button><i class="fas fa-paper-plane-o ml-1"></i>
                            </div>
                        </form>

                    </div>
                </div>
            </div>




            <div class="modal fade" id="addPatientPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color:white ;">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold" style="color: black;">Add new Patient</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white ;border-color:red ; background-color: red;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('add_patient')}}" method="post" class="main-form" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body mx-3">
                                <div class="row mt-5 ">
                                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                        <label style="color: black;">Patient name</label>
                                        <input type="text" name="name" style="color: white;" class="form-control" placeholder="Full name">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                        <label style="color: black;">Patient email</label>
                                        <input type="text" name="email" style="color: white; width: 200px;" class="form-control" placeholder="Email address..">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                        <label style="color: black;">Birth Date</label>
                                        <input type="date" name="birthDate" style="color: white;" class="form-control">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                        <label style="color: black;">Patient phone number</label>
                                        <input type="text" name="phone" style="color: white; width: 200px;" class="form-control" placeholder="Phone number..">
                                    </div>
                                    <div class="form-check">
                                        <label style="color: black;">Gender</label>
                                        <div style="margin-left: 20px;">
                                            <div>
                                                <input class="form-check-input" name="gender" value="male" type="radio">
                                                <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" name="gender" value="female" type="radio">
                                                <label class="form-check-label" for="flexRadioDefault1">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button><i class="fas fa-paper-plane-o ml-1"></i>
                            </div>
                        </form>

                    </div>
                </div>
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