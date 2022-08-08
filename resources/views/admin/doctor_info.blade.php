<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        @font-face {
            font-family: 'maicons';
            src: url('C:\wamp64\www\KineMS\public\assets\fonts\maicons.eot?c9nlkl');
            src: url('C:\wamp64\www\KineMS\public\assets\fonts\maicons.eot?c9nlkl#iefix') format('embedded-opentype'),
                url('C:\wamp64\www\KineMS\public\assets\fonts\maicons.ttf?c9nlkl') format('truetype'),
                url('C:\wamp64\www\KineMS\public\assets\fonts\maicons.woff?c9nlkl') format('woff'),
                url('C:\wamp64\www\KineMS\public\assets\fonts\maicons.svg?c9nlkl#maicons') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: block;
        }

        body {
            padding: 40px;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: gray;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        #doctorSlideshow .owl-nav1 {
            margin-top: 24px;
        }

        .owl-nav1 {
            display: block;
            margin: 15px auto;
            text-align: center;
        }

        .owl-carousel1 .owl-nav1 button.owl-next1,
        .owl-carousel1 .owl-nav1 button.owl-prev1 {
            display: inline-block;
            padding: 6px 0 !important;
            background-color: #00D9A5;
            color: #fff;
        }

        .owl-carousel1 .owl-nav1 button.owl-next1 {
            padding-right: 14px !important;
            padding-left: 7px !important;
            border-radius: 0 40px 40px 0;
        }

        .owl-carousel1 .owl-nav1 button.owl-prev1 {
            padding-right: 7px !important;
            padding-left: 14px !important;
            border-radius: 40px 0 0 40px;
        }

        .card-doctor1 {
            display: block;
            margin: 15px auto;
            width: 100%;
            max-width: 240px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(154, 159, 151, 0.2);
            overflow: hidden;
        }

        .card-doctor1 .text-xl {
            font-weight: 500;
        }

        .card-doctor1 .header1 {
            position: relative;
            width: 100%;
            height: 260px;
            overflow: hidden;
        }

        a {
            color: #07be94;
            text-decoration: none;
            background-color: transparent;
        }

        .card-doctor1 .header1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(52, 53, 49, 0.36);
            opacity: 0;
            transition: opacity .2s linear;
        }

        .card-doctor1:hover .header1::before {
            opacity: 1;
        }

        .card-doctor1 .header1 .meta1 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            visibility: hidden;
            opacity: 0;
            transition: all .2s ease;
        }

        .card-doctor1:hover .header1 .meta1 {
            bottom: 15px;
            visibility: visible;
            opacity: 1;
        }

        .card-doctor1 .header1 .meta1 a {
            display: inline-block;
            margin: 3px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            text-align: center;
            background-color: #fff;
            color: #6E807A;
            box-shadow: 0 4px 8px rgba(154, 159, 151, 0.6);
            transition: all .2s ease;
        }

        .card-doctor1 .header1 .meta1 a:hover {
            text-decoration: none;
            background-color: #6E807A;
            color: #fff;
        }

        .card-doctor1 .header1 img {
            width: 100%;
        }

        .card-doctor1 .body1 {
            padding: 15px 20px;
        }

        .blog-item1 {
            position: relative;
            display: flex;
            flex-direction: row;
            padding-bottom: 12px;
            margin-bottom: 20px;
            border-bottom: 1px solid #E8EEE4;
        }

        .blog-item1 .post-thumb1 {
            flex-shrink: 0;
            position: relative;
            display: inline-block;
            margin-right: 15px;
            width: 100px;
            height: 80px;
            background-color: #A1AAA7;
            overflow: hidden;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .blog-item1 .post-thumb1 img {
            width: auto;
            height: 100%;
        }

        .blog-item1 .post-title1 a {
            color: #6D7170;
            transition: all .2s ease;
        }

        .blog-item1 .post-title1 a:hover {
            color: #07be94;
            text-decoration: none;
        }

        .blog-item1 .meta1 a {
            margin-right: 6px;
            font-size: 12px;
            color: #6E807A;
        }

        .blog-item1 .meta1 a:hover {
            text-decoration: none;
        }

        .mai-call:before {
            content: "\e96a";
        }

        .mai-logo-whatsapp:before {
            content: "\ec5a";
        }
        
    </style>



    @include ('admin.css')
</head>

<body>
    <div class="container-scroller">

        @include ('admin.sidebar')
        <!--#######################################   SIDEBAR   #####################################################-->



        @include ('admin.navbar')
        <!--#######################################   NAVBAR   #####################################################-->
        <div class="container-fluid page-body-wrapper" id="form_container">


            <div class="page-section">
                
                <div class="container">
                <a href="{{url('add_doctor_view')}}" class="btn btn-primary fadeInRight align-center" 
                                 style="width:15%; justify-content:center; margin-left:950px;">+ Add new doctor</a>

                    <h1 class="text-center mb-5 wow fadeInUp"> Doctors List</h1>
                    @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show">
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </span>
                        {{session()->get('message')}}
                    </div>

                    @endif

                    
                    <div class="owl-carousel1 wow fadeInUP" id="doctorSlideshow">


                        @foreach($doctor as $doctors)
                        <div class="item">
                            <div class="card-doctor1" >
                                <div class="header1">
                                    <img width="300 px" src="doctorimage/{{$doctors->image}}" alt="" >
                                </div>
                                <div class="row justify-content-center" style="align-items:center ;">
                                    <div style="align-items:center;padding-left:55px;" class=" col-5">
                        
                                        <a href="{{url('edit_doctor', $doctors->id)}}" class="btn btn-primary btn-warning" style="padding-right:20px; margin-left:10px;">Edit</a>
                                    </div>
                                    <div class=" col-md-7 ">
                                        <form action="{{ url('/delete_doctor', ['id' => $doctors->id]) }}" method="post" onclick="return confirm('Are you sure you want to delete this doctor from the list ?')">
                                            <input class="btn btn-primary btn-danger" style="margin-right:100px;" type="submit" value="Delete" />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </div>
                                </div>

                                <div class="body1">
                                <a href="{{url('doctor_profile_view', $doctors->id)}}" type="button" class="mdi mdi-account" style="padding-right:10px;"></a>
                                    <p class="text-xl mb-0" style="color: black;"> {{$doctors->name}}</p>
                                    <span class="text-sm" style="color: grey;"> {{$doctors->speciality}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!--#######################################    BODY    #####################################################-->



        <!--#######################################   FOOTER   #####################################################-->

    </div>


    @include ('admin.script')
    <!--#######################################   SCRIPTS   ####################################################-->


</body>


</html>