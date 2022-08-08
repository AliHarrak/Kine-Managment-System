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
                                        <img src="admin\assets\images\faces\docc.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;" href=>
                                        <h5 class="my-3">{{$user->name}}</h5>
                                        <p class="text-muted mb-1">ID {{$user->id}} </p>
                                        <p class="text-muted mb-4">{{$user->address}}</p>
                                    </div>
                                </div>
                                <div class="card mb-4 mb-lg-0">
                                    <div class="card-body p-0 ">
                                        <ul class="list-group list-group-flush rounded-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="mdi mdi-calendar"></i>
                                                <p type="button" class="mb-0" href="#">Upcoming appointments</p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="mdi mdi-calendar" style="color: #333333;"></i>
                                                <p type="button" class="mb-0" href="#">Post-appointments</p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="mdi mdi-calendar" style="color: #55acee;"></i>
                                                <p type="button" class="mb-0" href="#">Calendar</p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="mdi mdi-email" style="color: #ac2bac;"></i>
                                                <p type="button" class="mb-0" href="#">Emails</p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                <p type="button" class="mb-0" href="#">My files</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                
                                <!-- <input type="hidden" name="_method" value="put" />  -->

                                <div class="card mb-4">
                                    <div class="card-body">
                                    <form action="{{url('update_user')}}" method="post"  enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$user->name}}" type="text" style="color: white;" name="name" placeholder="Write the name" class="form-control"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$user->email}}" type="text" style="color: white;" name="email" placeholder="Write the email" class="form-control"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$user->phone}}" type="phone" style="color: white;" name="phone" placeholder="Write the phone number" class="form-control"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Address</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input value="{{$user->address}}" type="text" style="color: white;" name="address" placeholder="Write the address" class="form-control"></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-center ">
                                            <input type="submit" value="Save" class="btn btn-primary"></input>
                                            @method('put')
                                             @csrf
                                        </div>
                                    </form>
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
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Emails</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Files</p>
                                                <div class="progress rounded mb-2" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4 mb-md-0">
                                            <div class="card-body">
                                               



                                            </div>
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