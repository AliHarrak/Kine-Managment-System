<nav class="sidebar sidebar-offcanvas " id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="admin/assets/images/logoKine.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/assets/images/logoKine-mini.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/docc.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Sarah Smith</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{url('profile_view')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-account text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">View profile</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Main</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-calendar"></i>
              </span>
              <span class="menu-title">Appointments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('add_appoint_view')}}">New Appointment</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Check Appointment</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('appoint_list')}}">Appointments Calendar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#docs" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-doctor"></i>
              </span>
              <span class="menu-title">Doctors</span>
              <i class="menu-arrow"></i>
            </a>
              <div class="collapse" id="docs">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('add_doctor_view')}}">Add Doctor</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Search for a doctor</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('doctors_list_view')}}">Doctors List</a></li>
              </ul>
            </div>           
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-account-group"></i>
              </span>
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('add_assistant_view')}}">Add Assistant</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Search for a member</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('assistants_list_view')}}">Staff List</a></li>
              </ul>
            </div>        
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#patient" aria-expanded="false" aria-controls="ui-basic" >
              <span class="menu-icon">
                <i class="mdi mdi-account-group-outline"></i>
              </span>
              <span class="menu-title">Patients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="patient">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('add_patient_view')}}">Add Patient</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Search for a patient</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('patients_list_view')}}">Patient List</a></li>
              </ul>
            </div>        
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('rooms_list_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-bed-empty"></i>
              </span>
              <span class="menu-title">Room Allotement</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#treatement">
              <span class="menu-icon">
                <i class="mdi mdi-medical-bag"></i>
              </span>
              <span class="menu-title">Treatements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-cash-register"></i>
              </span>
              <span class="menu-title">Payements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Balance </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Withdraw </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Pending </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">APPS</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('calendar')}}">
              <span class="menu-icon">
                <i class="mdi mdi-calendar"></i>
              </span>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-check"></i>
              </span>
              <span class="menu-title">Task</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Contacts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-email"></i>
              </span>
              <span class="menu-title">Email</span>
            </a>
          </li>
        </ul>
      </nav>