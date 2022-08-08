<!DOCTYPE html>
<html lang="en">
  <head>
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
<div class="container-fluid page-body-wrapper">
        @include ('admin.body')       
        <!--#######################################   BODY   #####################################################-->

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © pixper.net 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> from <a href="https://www.pixper.net" target="_blank"> Pixel Perfect </a></span>
            </div>
          </footer>
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