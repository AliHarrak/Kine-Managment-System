<html>

<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Live search</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>


</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="text-muted">Advanced Search</div>

                <div class="row">
                    <div class="panel panel-default">
                        <div class="col-md-5">
                            <div class="panel-heading">
                                <select class="form-control" id="select-column">
                                    <option value="0">ID</option>
                                    <option selected value="1">Name</option>
                                    <option value="2">Gender</option>
                                    <option value="3">Birth Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-7">
                                <input class="form-controller" id="search-by-column" style="color: grey" name="search" type="text" placeholder="Search"></input>
                            </div>

                        </div>
                    </div>


                    <table class="table table-bordered table-hover" id="patients">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
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

                            </tr>
                            @endforeach
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            function searchByColumn(table) {
                var defaultSearch = 1
                $(document).on('change', '#select-column', function() {
                    defaultSearch = this.value;
                });
                $(document).on('change', '#search-by-column', function() {
                    table.search('').columns().search('').draw();
                    table.column(defaultSearch).search(this.value).draw();
                });

            }
            var table = $('#patients').DataTable();
            searchByColumn(table);
        });
    </script>
</body>

</html>