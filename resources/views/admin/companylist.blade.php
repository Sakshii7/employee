<style type="text/css">
    .title {
        "
        padding-top: 25px;
        font-size: 25px;
        "
    }
    
    label {
        display: inline-block;
        width: 400px;
        height: 50;
    }
    
</style>

@extends('layout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div style="background-color: black;" class="">
                    <!-- partial:partials/_navbar.html -->
                    <nav class="navbar p-0 fixed-top d-flex flex-row">
                        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                                    alt="logo" /></a>
                        </div>
                        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                            <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                                data-toggle="minimize">
                                <span class="mdi mdi-menu"></span>
                            </button>
                            <ul class="navbar-nav w-100">
                                <li class="nav-item w-100">
                                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                        <input type="text" class="form-control" placeholder="Search products">
                                    </form>
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item dropdown d-none d-lg-block">
                                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                        aria-labelledby="createbuttonDropdown">
                                        <h6 class="p-3 mb-0">Projects</h6>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-file-outline text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">Software Development</p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-web text-info"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">UI Development</p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-layers text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <p class="p-3 mb-0 text-center">See all projects</p>
                                    </div>
                                </li>
                                <li class="nav-item nav-settings d-none d-lg-block">
                                    <a class="nav-link" href="#">
                                        <i class="mdi mdi-view-grid"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown border-left">
                                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-email"></i>
                                        <span class="count bg-success"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                        aria-labelledby="messageDropdown">
                                        <h6 class="p-3 mb-0">Messages</h6>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="assets/images/faces/face4.jpg" alt="image"
                                                    class="rounded-circle profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                                <p class="text-muted mb-0"> 1 Minutes ago </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="assets/images/faces/face2.jpg" alt="image"
                                                    class="rounded-circle profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                                <p class="text-muted mb-0"> 15 Minutes ago </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="assets/images/faces/face3.jpg" alt="image"
                                                    class="rounded-circle profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                                <p class="text-muted mb-0"> 18 Minutes ago </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <p class="p-3 mb-0 text-center">4 new messages</p>
                                    </div>
                                </li>
                                <li class="nav-item dropdown border-left">
                                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                        data-bs-toggle="dropdown">
                                        <i class="mdi mdi-bell"></i>
                                        <span class="count bg-danger"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                        aria-labelledby="notificationDropdown">
                                        <h6 class="p-3 mb-0">Notifications</h6>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-calendar text-success"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1">Event today</p>
                                                <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event
                                                    today </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-settings text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1">Settings</p>
                                                <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-link-variant text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1">Launch Admin</p>
                                                <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <p class="p-3 mb-0 text-center">See all notifications</p>
                                    </div>
                                </li>
                                <li class="nav-item dropdown border-left">
                                    <a href="{{ url('logout', []) }}"
                                        class="fw600 p12 animated animated-short fadeInDown">
                                        <span class="fa fa-power-off pr5"></span> Logout </a>
                                </li>
                            </ul>
                            
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                                data-toggle="offcanvas">
                                <span class="mdi mdi-format-line-spacing"></span>
                            </button>
                        </div>
                    </nav>
                    {{-- <!-- partial -->
                     <div  align="right">
                               
                                <a class=" btn btn-success " 
                                     href="{{url('company')}}">Add Company</a>
                        </div> --}}

                    <div style="background-color:black;" >

                        <div class="container" align="center">
                           
                            <table>
                                <tr style="background-color:grey;">

                                    <td style="padding: 20px;"> Name </td>
                                    <td style="padding: 20px;"> Email </td>
                                    
                                    <td style="padding: 20px;"> Website </td>
                                    <td style="padding: 20px; width:20px; height:50px"> Logo </td>
                                    <td style="padding: 20px;"> Update </td>
                                    <td style="padding: 20px;"> Delete </td>
                                    <td ><a class=" btn btn-success " style="padding: 20px;"
                                    href="{{url('company')}}">Add Company</a>
                                 </td>

                                </tr>
                                @foreach ($data as $company)
                                    <tr align="center" style="background-color:black; align-items:center;">

                                        <td style="padding: 20px;"> {{ $company->name }} </td>
                                        <td style="padding: 20px;"> {{ $company->email }} </td>
                                        <td style="padding: 20px;"> {{ $company->website }} </td>
                        
                                        <td><img height="100px" width="150px" src="/storage/{{ $company->logo }} ">
                                        </td>
                                        <td> <a class="btn btn-primary" href="{{ url('updateview', $company->id) }}"> Update
                                            </a>
                                        </td>
                                        <td> <a class="btn btn-danger" href="{{ url('deletecompany', $company->id) }}">
                                                Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                               


                            </table>
                            <br>
                            <div class="d-flex justify-content-center d-sm-flex">

                                {!! $data->links()!!}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
