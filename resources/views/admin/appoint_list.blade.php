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
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Appointments Calendar</h4>

                                @if(session()->has('message'))

                                <div class="alert alert-success alert-dismissible fade show">
                                    <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                                        <span aria-hidden="true">&times;</span>
                                    </span>
                                    {{session()->get('message')}}
                                </div>

                                @endif

                                <a href="{{url('add_appoint_view')}}" class="btn btn-primary fadeInRight align-center" 
                                 style="width:18%; justify-content:center; margin-left:900px;">+ Add new appointment</a>

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
                                                        <a href="{{url('edit_appoint', $appointements->id)}}" class="btn btn-primary btn-warning">Change</a>
                                                        <!-- <a href="javascript:;" onclick="deleteAppoint('{{$appointements->id}}')" class="btn btn-primary btn-danger">Cancel</a> -->
                                                    </div>
                                                </td>
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