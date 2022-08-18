<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 --><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script> 


<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('.alert').alert()
    })

    deleteAppoint = (id) => {
        fetch('/delete_appoint/' + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

            })


            .then(response => {
                // Delete row from display
                // And show success message (toast)

            })
    }
    /* 
        .catch(error => {
            // Show failure message
        })
    }*/
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script>
   /*  import Swal from 'sweetalert2';

    function deleteConfirm(id) {
        Swal.fire({
            icon: 'warning',
            text: 'Do you want to delete this?',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            confirmButtonColor: '#e3342f',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
            }
        });
    } */
</script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<script>
    var goFS = document.getElementById('goFS');
    goFS.addEventListener(
        'click',
        function() {
            document.body.requestFullscreen();
        },
        false,
    );
</script>

<!-- <script src='fullcalendar-scheduler/main.js'></script>
 --><script>
    /* document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'resourceTimelineWeek'
        });
        calendar.render();
    }); */
</script>

<script type="text/javascript">
/*     $('.livesearch').select2({
        placeholder: 'Search ',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    }); */
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 
<script>

    $('.availability-status').on('change', function() {
        
        var roomAvailabilityData = {
            'roomId' : $(this).data('room-id'),
            'newStatus' : $(this).is(":checked") ? "available" : "occupied"
        }
        updateRoomAvailability(roomAvailabilityData)
    })


    function updateRoomAvailability(roomAvailabilityData)
    {

        $.ajax({
            type: "POST",
            url: '/update_room',
            data: {roomId: roomAvailabilityData.roomId, newStatus: roomAvailabilityData.newStatus},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if(data.data.availability) {
                   // toastr.success('The Room availability status has been updated')
                }
                else {
                   // toastr.error('The Room availability status cannot be updated')
                }
            },
            error: function() {
               // toastr.error('The Room availability status cannot be updated')
            }
        })
    }
</script>
