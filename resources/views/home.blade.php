<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Hashroot :: Enquiry</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<!-- Custom Css -->
<link  rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/color_skins.css')}}">
</head>
<body class="theme-orange">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">        
        <div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
        <p>Please wait...</p>
        <div class="m-t-30"><img src="{{asset('images/logo.svg')}}" width="48" height="48" alt="admin"></div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div><!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="material-icons">search</i> </div>
    <input type="text" placeholder="Explore Nexa...">
    <div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('home')}}">Hashroot-Enquiry</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
       </ul>
        <ul class="nav navbar-nav navbar-right"> 
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li><a href="javascript:void(0);">
                                <h4> Footer display issue <small>72%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Make new buttons <small>56%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Create new dashboard <small>68%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Solve transition issue <small>77%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>87%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                </ul>
            </li>
            
            <li><form action="{{ route('logout') }}" method="post">
@csrf.
<button type="submit"><i class="zmdi zmdi-power"></i></button>
</form></li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="{{asset('images/xs/avatar1.jpg')}}" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Admin User</div>
            <div class="email">admin@yopmail.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('home')}}" class=""><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active in active slideRight" id="skins">
                <div class="slim_scroll">
                <h6>Flat Color</h6>
                <ul class="choose-skin">                   
                    <li data-theme="purple"><div class="purple"></div><span>Purple</span></li>
                    <li data-theme="blue"><div class="blue"></div><span>Blue</span></li>
                    <li data-theme="cyan"><div class="cyan"></div><span>Cyan</span></li>
                </ul>                    
                <h6>Multi Color</h6>
                <ul class="choose-skin">                        
                    <li data-theme="black"><div class="black"></div><span>Black</span></li>
                    <li data-theme="deep-purple"><div class="deep-purple"></div><span>Deep Purple</span></li>
                    <li data-theme="red"><div class="red"></div><span>Red</span></li>                        
                </ul>                    
                <h6>Gradient Color</h6>
                <ul class="choose-skin">                    
                    <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                    <li data-theme="orange" class="active"><div class="orange"></div><span>Orange</span></li>
                    <li data-theme="blush"><div class="blush"></div><span>Blush</span></li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Employee List </h2>
                        <ul class="header-dropdown">
                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal" onclick="resetfn()">Add Employee</button>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Talent ID</th>
                                    <th>Skillset</th>
                                    <th>Experience</th>
                                    <th>Turnaround time</th>
                                    <th>Availability</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Talent ID</th>
                                    <th>Skillset</th>
                                    <th>Experience</th>
                                    <th>Turnaround time</th>
                                    <th>Availability</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->employee_id}}</td>
                                    <td>{{$employee->skill_set}}</td>
                                    <td>{{$employee->experience}}</td>
                                    <td>{{$employee->turnaround_time}}</td>
                                    <td>{{$employee->availability}}</td>
                                    <td>{{$employee->rate}}</td>
                                    <td><button type="button" class="btn btn-raised btn-primary waves-effect" onclick="editfn({{$employee->id}})">Edit</button>
                                    <form method="POST" action="{{ route('employee.destroy', $employee->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form id="employee_add" method="POST" action="{{route('employee.store')}}">
                    @csrf
                    <input type="hidden" name="userid" id="userid" value="">
                            <div class="form-group">
                            <label class="form-label">Employee Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Employee name" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Employee email">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Employee phone">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Talent ID</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="talentid" id="talentid" placeholder="Enter Talent Id" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Skill Set</label>
                                <div class="form-line">
                                    <textarea name="skillset" id="skillset" cols="30" rows="5" class="form-control no-resize" required placeholder="php,jquery,symfony"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Experience</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter employee experience in years" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Turnaround Time</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="time" id="time" placeholder="Enter Turnaround time" required>
                               </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Availability</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="availability" id="availability" placeholder="Enter availability" required>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Rate</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter employee rate" required>
                               </div>
                            </div>
                        </div>
            <div class="modal-footer">
                <button class="btn btn-link waves-effect" type="submit" id="submitbtn">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js --> 
<script src="{{asset('bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script src="{{asset('bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    function editfn(id) {
        console.log("hi");
        $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var url = "{{ route('employee.edit', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function(res) {
            console.log(res);
            $('#largeModal').modal('show');
            $('#name').val(res.name);
            $('#email').val(res.email);
            $('#phone').val(res.phone);
            $('#skillset').val(res.skill_set);
            $('#experience').val(res.experience);
            $('#time').val(res.turnaround_time);
            $('#availability').val(res.availability);
            $('#rate').val(res.rate);
            $('#talentid').val(res.employee_id);
            $('#userid').val(id);
            let updateurl = "{{ route('employee.update', ':id') }}";
            updateurl = updateurl.replace(':id', id);
            //$("#employee_add").attr("method", "patch");
            //$('#employee_add').attr('action', updateurl);
        }
      });
    }
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
      function resetfn() {
        $('#employee_add').trigger("reset");
        $('#userid').val('');
      }
</script>
</body>
</html>