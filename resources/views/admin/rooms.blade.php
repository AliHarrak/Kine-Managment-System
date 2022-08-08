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
            <div class="container align: center" style="padding-top: 0px;">

            <h3>Rooms List</h3>
                                <a href="{{url('add_room_view')}}" class="btn btn-primary fadeInRight align-center" 
                                 style="width:15%; justify-content:center; margin-left:880px;">+ Add new room</a>
                
                <div class="table-responsive">
                 <table class="table">
                 <thead>
                                            <tr>
                                                <th> #Room No </th>
                                                <th> No of Beds </th>
                                                <th> Availability</th>
                                                <th> Actions </th>
                                            </tr>
                 </thead>
                 <tbody>
                                            <tr>
                                            <tr>
                                            @foreach($rooms as $room)
                                                <td>
                                                    <span class="ps-2">{{$room->no}}</span>
                                                </td>
                                                <td> {{$room->no_beds}} </td>
                                                <td> <div class="badge <?=$room->cssClass()?>">{{$room->availability}} </div></td>
                                                <td>
                                                    <div>
                                                        <form action="{{ url('/delete_room', ['id' => $room->id]) }}" method="post" onclick="return confirm('Are you sure you want to delete this ?')">
                                                            <input class="btn btn-primary btn-danger" type="submit" value="Delete" />
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