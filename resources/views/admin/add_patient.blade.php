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


        <div class="container-fluid page-body-wrapper" id="form_container">
        <div class="container align: center" style="padding-top: 10px;">




            <div class="page-section">
                <div class="container">
                    <h1 class="text-center wow fadeInUp">Add New Patient</h1>

                    @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show">
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </span>
                        {{session()->get('message')}}
                    </div>

                    @endif

                    <form action="{{url('add_patient')}}" method="post" class="main-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5 ">
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <label>Patient name</label>
                                <input type="text" name="name" style="color: white;" class="form-control" placeholder="Full name">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                <label>Patient email</label>
                                <input type="text" name="email" style="color: white; width: 200px;" class="form-control" placeholder="Email address..">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft"  data-wow-delay="300ms">
                            <label>Birth Date</label>
                                <input type="date" name="birthDate" style="color: white;" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                <label>Patient phone number</label>
                                <input type="text" name="phone" style="color: white; width: 200px;" class="form-control" placeholder="Phone number..">
                            </div>
                            <div class="form-check">
                                <label>Gender</label>
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

                        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
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