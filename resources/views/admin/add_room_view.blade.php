<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            
        }

        .text-red-500 { color: #f56565; }
        .text-sm {
            font-size: 0.875rem;

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
            <div class="container align: center" style="padding-top: 0px;">


                <div class="page-section">
                    <div class="container">
                        <h1 class="text-center wow fadeInUp">Add New Room</h1>

                        @if(session()->has('message'))

                        <div class="alert alert-success alert-dismissible fade show">
                            <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                                <span aria-hidden="true">&times;</span>
                            </span>
                            {{session()->get('message')}}
                        </div>

                        @endif

                        <form action="{{url('add_room')}}" method="post" class="main-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5 ">
                                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                    <label>Room No</label>
                                    <input type="number" name="no" style="color: white;" class="form-control @error('no') border-red-500 @enderror" value="{{ old('no') }}" placeholder="Room Number">

                                    @error('no')
                                    <div class="text-red-500  text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <label>No of Beds</label>
                                    <input type="number" name="no_beds" style="color: white; width: 200px;" class="form-control @error('no_beds') border-red-500 @enderror" value="{{ old('no_beds') }}" placeholder="Number of beds">
                                    @error('no_beds')
                                    <div class="text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <label>Availability</label>
                                    <div style="margin-left: 20px;">
                                        <div>
                                            <input class="form-check-input" name="availability" value="available" type="radio">
                                            <label class="form-check-label" for="av">Available</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" name="availability" value="occupied" type="radio">
                                            <label class="form-check-label" for="occup">Occupied</label>
                                        </div>
                                        @error('availability')
                                    <div class="text-red-500  text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 " style="width:20%; margin-left:20px;">Submit</button>
                                <a href="{{url('rooms_list_view')}}" class="btn btn-success" style="width:30%; margin-left:300px;  background-color: #00d9a5;">Return back</a>
                            </div>
                        </form>
                        <div>

                        </div>
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