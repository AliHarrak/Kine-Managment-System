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


        <div class="container-fluid page-body-wrapper" id="form_container">
        <div class="container align: center" style="padding-top: 10px;">




            <div class="page-section">
                <div class="container">
                    <h1 class="text-center wow fadeInUp">Edit Appointment</h1>

                    @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show">
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </span>
                        {{session()->get('message')}}
                    </div>
                    
                    @endif

                    <form action="{{url('update_appoint', $appoint->id)}}" method="post" class="main-form" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                       
                        <div class="row mt-5 ">
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <label>Patient name</label>
                                <input type="text" name="name" style="color: white;" class="form-control" value="{{$appoint->name}}">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                <label>Patient email</label>
                                <input type="text" name="email" style="color: white; width: 200px;" class="form-control" value="{{$appoint->email}}">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft"  data-wow-delay="300ms">
                                <label>Date</label>
                                <input type="date" name="Date" style="color: white;" class="form-control" value="{{$appoint->Date}}">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                <label>Therapy type</label>
                                <select name="therapy" id="therapy" class="custom-select form-control" style="color: white; width: 200px;">
                                    <option value="{{$appoint->therapy}}">{{$appoint->therapy}}</option>
                                    <option value="Injury">Injury</option>
                                    <option value="Fracture">Fracture</option>
                                    <option value="Pain">Pain</option>
                                    <option value="Massage">Massage</option>
                                    <option value="Cupping">Cupping</option>
                                    <option value="Chiropratic">Chiropratic</option>
                                </select>
                            </div>
                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <label>Patient phone number</label>
                                <input type="text" name="phone" style="color: white; width: 200px;" class="form-control" value="{{$appoint->phone}}">
                            </div>
                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <textarea name="description" id="description" class="form-control" style="color: white; width: 200px;" rows="6">{{$appoint->description}}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Update</button>
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