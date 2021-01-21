
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jehazak | Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/demo/img/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/dist/css/adminx.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/dist/css/image.css')}}" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="{{url('/dashboard')}}">
          <img src="{{asset('backend/demo/img/favicon.png')}}" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          Jehazak Dashboard
        </a>

        <!--<form class="form-inline form-quicksearch d-none d-md-block mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-icon">
                <i data-feather="search"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Type to search...">
          </div>
        </form>-->

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          <!--
          <li class="nav-item dropdown d-flex align-items-center mr-2">
            <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
              <i class="oi oi-bell display-inline-block align-middle"></i>
              <span class="nav-link-notification-number">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
              <div class="notifications-header d-flex justify-content-between align-items-center">
                <span class="notifications-header-title">
                  Notifications
                </span>
                <a href="#" class="d-flex"><small>Mark all as read</small></a>
              </div>

              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action unread">
                  <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                  <div class="mb-1">
                    <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                  </div>

                  <small>1 hour ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                  <small>4 days ago</small>
                </a>
              </div>

              <div class="notifications-footer text-center">
                <a href="#"><small>View all notifications</small></a>
              </div>
            </div>
          </li>
        -->
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="{{URL::to('/')}}/storage/{{auth()->user()->avatar}}" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <!--<a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="{{url('/logout')}}">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">

        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="{{url('/dashboard')}}" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

           <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#members" aria-expanded="false" aria-controls="members">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Members
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="members">

              <li class="sidebar-nav-item">
                <a href="{{url('/all-admin')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All admin
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{url('/all-vendor')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All vendor
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{url('/all-user')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All user
                  </span>
                </a>
              </li>

              
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Category
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="category">
              <li class="sidebar-nav-item">
                <a href="{{url('/category')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All Category
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-category')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Category
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="brand">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
              Brand
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="brand">
              <li class="sidebar-nav-item">
                <a href="{{url('/brand')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All Brand
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-brand')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Brand
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#subcategory" aria-expanded="false" aria-controls="subcategory">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               SubCategory
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="subcategory">
              <li class="sidebar-nav-item">
                <a href="{{url('/subcategory')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All SubCategory
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-subcategory')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add SubCategory
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#manufacture" aria-expanded="false" aria-controls="manufacture">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Manufacture
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="manufacture">
              <li class="sidebar-nav-item">
                <a href="{{url('/manufacture')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All Manufacture
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-manufacture')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Manufacture
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
                <a href="{{url('/add-product')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Product
                  </span>
                </a>
              </li>




           <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Slider
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="slider">
              <li class="sidebar-nav-item">
                <a href="{{url('/slider')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All Slider
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-slider')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Slider
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
              <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#contact-us" aria-expanded="false" aria-controls="contact-us">
                <span class="sidebar-nav-icon">
                  <i data-feather="align-justify"></i>
                </span>
                <span class="sidebar-nav-name">
                 Contact-Us
                </span>
                <span class="sidebar-nav-end">
                  <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
              </a>
  
              <ul class="sidebar-sub-nav collapse" id="contact-us">
                <li class="sidebar-nav-item">
                  <a href="{{url('/all-message')}}" class="sidebar-nav-link">
                    <span class="sidebar-nav-abbr">
                      <i class="fas fa-table"></i>
                    </span>
                    <span class="sidebar-nav-name">
                      All Message
                    </span>
                  </a>
                </li>

              </ul>
            </li>
  
          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Blog
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="blog">
              <li class="sidebar-nav-item">
                <a href="{{url('/blog')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i class="fas fa-table"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    All Blog
                  </span>
                </a>
              </li>

               <li class="sidebar-nav-item">
                <a href="{{url('/add-blog')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                   <i class="fas fa-plus"></i> 
                  </span>
                  <span class="sidebar-nav-name">
                    Add Blog
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>

      </div><!-- Sidebar End -->



    @yield('admin_content')

    </div>


     <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="{{asset('backend/dist/js/vendor.js')}}"></script>
    <script src="{{asset('backend/dist/js/adminx.js')}}"></script>
    <script src="{{asset('backend/dist/js/image.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          var form = document.getElementById('needs-validation');
          if(form !== null) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          }
        }, false);
      })();
    </script>
    <script type="text/javascript">
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                // other options
              });
    </script>
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
{{-- <script type="text/javascript">
        $('#fk_category_id').change(function () {
        var fk_category_id = $(this).val();
        if (fk_category_id) {
        $.ajax({
        type: "GET",
        url: "{{url('subcategory/getsubcategory')}}"+"/"+fk_category_id,
        success: function (res) {
            
            $("#fk_category_id2").empty();
            $("#fk_category_id2").append('<option></option>');
            
            /// loop javascript 
              
            $.each(res , function (key, value) {
                console.log(value);
                $("#fk_category_id2").append('<option value="' + value.pk_id + '">' + value.name + '</option>');
            });
        }
            });
            } else {
            $("#fk_category_id2").empty();

            }
          });
 </script> --}}

  </body>
</html>