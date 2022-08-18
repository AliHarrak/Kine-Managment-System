<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css"> 

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
                                <h4 class="card-title">Patients List</h4>

                                @if(session()->has('message'))

                                <div class="alert alert-success alert-dismissible fade show">
                                    <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                                        <span aria-hidden="true">&times;</span>
                                    </span>
                                    {{session()->get('message')}}
                                </div>

                                @endif

                                
                                <!-- <div class="row">
                                    <div class="input-group rounded" style="width: 30%;">
                                        <input class="livesearch form-control p-3" style="color: grey" name="livesearch" placeholder="Search"></input>
                                            <span class="input-group-text border-0"  id="search-addon">
                                            <a class="mdi mdi-magnify" type="button" style="font-size: large;" href=""></a>
                                            </span>
                                    </div> -->
                                    
                                <a href="{{url('add_patient_view')}}" class="btn btn-primary fadeInRight align-center" 
                                 style="width:15%; justify-content:center; margin-left:950px; margin-bottom: 20px;">+ Add new patient</a>
                                </div>
                                 
                               
                                <div class="table-responsive">
                                    <table class="table table-hover" id="patients" >
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> Patient Name </th>
                                                <th> Email </th>
                                                <th> Phone</th>
                                                <th> Birth Date </th>
                                                <th> Gender </th>
                                                <th></th>
                                                <th> Actions </th>                                               
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                @foreach($patient as $patients)
                                                <td> {{$patients->id}} </td>
                                                <td>
                                                    <span class="ps-2">{{$patients->name}}</span>
                                                </td>
                                                
                                                <td> {{$patients->email}} </td>
                                                <td> {{$patients->phone}} </td>
                                                <td> {{$patients->birthDate}} </td>
                                                <td> {{$patients->gender}} </td>
                                                <td>
                                                    <div>
                                                        <a href="{{url('patient_profile_view', $patients->id)}}" class="btn btn-primary">Details</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{url('edit_patient', $patients->id)}}" class="btn btn-primary btn-warning">Edit</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <form action="{{ url('/delete_patient', ['id' => $patients->id]) }}" method="post"onclick="deleteConfirm({{$patients->id}})">
                                                            <input class="btn btn-primary btn-danger" type="submit" value="Delete" />
                                                            <input type="hidden" name="_method" value="delete" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </form>
                                                    </div>
                                                </td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th> Patient Name </th>
                                                <th> Email </th>
                                                <th> Phone</th>
                                                <th> Birth Date </th>
                                                <th> Gender </th>
                                                <th></th>
                                                <th> Actions </th>
                                            </tr>
                                        </tfoot>
                                        
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

<script>
    $(document).ready(function () {
        var table = $('#patients').DataTable( {
        lengthChange: false,
        buttons: {
            dom: {
        button: {
            className: 'btn btn-light btn-sm btn-rounded'
                }
    
        },
        buttons: [
            {
                extend: 'excel',
                split: [ 'pdf', 'csv'],
                text: '<i class="mdi mdi-file-excel"></i> xlsx',
            },
            'colvis'
        ],
    },
        language: {
        
        searchPlaceholder: "Search...",
        search: '<i class="mdi mdi-magnify" aria-hidden="true"></i>'
    }
    } );
 
    table.buttons().container()
        .appendTo( '#patients_wrapper .col-md-6:eq(0)' );
});
</script>
   
    <!--################################   SCRIPTS   ##################################-->
    <!-- End custom js for this page -->
</body>

</html>