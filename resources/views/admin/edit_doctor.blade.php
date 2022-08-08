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
    <base href="/public">
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
                        <h1 class="text-center wow fadeInUp">Edit Doctor</h1>

                        @if(session()->has('message'))

                        <div class="alert alert-success alert-dismissible fade show">
                            <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                                <span aria-hidden="true">&times;</span>
                            </span>
                            {{session()->get('message')}}
                        </div>

                        @endif

                        <form action="{{url('update_doctor', ['id' => $doctor->id])}}" method="post" enctype="multipart/form-data">

                            <div style="padding: 15px;">
                                <label>Doctor Name</label>
                                <input type="text" style="color: white;" name="name" placeholder="Write the name" class="form-control" value="{{ $doctor->name }}">
                            </div>

                            <div style="padding: 15px;" class="col-12 py-2 wow fadeInUp">
                                <label>Phone</label>
                                <input type="phone" style="color: white;" name="phone" placeholder="Write the phone number" class="form-control" value="{{$doctor->phone}}">
                            </div>

                            <div style="padding: 15px;" class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <label>Speciality</label>
                                <select name="speciality" id="speciality" style="color: white; width: 200px;" class="custom-select form-control">
                                    <option>{{$doctor->speciality}}</option>
                                    <option value="diagnostic radiology">Diagnostic radiology</option>
                                    <option value="physical medicine and rehabilitation">Physical medicine and rehabilitation</option>
                                    <option value="sports medicine">Sports medicine</option>
                                    <option value="neuromuscular medicine">Neuromuscular medicine</option>
                                    <option value="pediatric rehabilitation medicine">Pediatric rehabilitation medicine</option>
                                    <option value="spinal cord injury medicine">Spinal cord injury medicine</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div style="padding: 15px;" class="col-12 ">
                                <label>Doctor Image</label>
                                <img height="130" width="130" class="rounded" src="doctorimage/{{$doctor->image}}">
                                <label>Change Image</label>
                                <input type="file" name="file" class="form-control" value="{{$doctor->file}}">
                            </div>
                            <div style="padding: 15px;">
                                <input type="submit" class="btn btn-success" value="Update">
                                @method('put')
                                @csrf
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