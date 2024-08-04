<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Boond NGO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="frontend/logo/favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('frontend/css/theme-default.css')}}" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('frontend/css/notification.css')}}" />
    <!-- EOF CSS INCLUDE -->
</head>


<body>

<style>
    [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}
[type="file"] + label {
  background: #006633;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
	font-family: 'Rubik', sans-serif;
	font-size: inherit;
  font-weight: 500;
  margin-bottom: 1rem;
  outline: none;
  padding: 1rem 50px;
  position: relative;
  transition: all 0.3s;
  vertical-align: middle;
  &:hover {
    background-color: darken(#F15D22, 10%);
  }
  &.btn-1 {
    background-color: #F79159;
    box-shadow: 0 6px darken(#F79159, 10%);
    transition: none;
    &:hover {
      box-shadow: 0 4px darken(#F79159, 10%);
      top: 2px;
    }
  }
}
</style>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal">
                <li class="xn-logo" style="margin-right:30px;">
                    <a> <img src="{{asset('frontend/logo/logo.png')}}" alt="" style="margin-top: -10px;"/></a>
                    <a href="#" class="x-navigation-control"></a>
                </li>

                <li class="xn-openable">
                    <a href="{{route('user.home')}}" title="Admin Dashboard"><span class="fa fa-home"></span>Home</a>
                </li>
                <li class="xn-openable">
                    <a href="{{route('user.member_registration')}}" title="Member Registration"><span class="fa fa-users"></span>Member Registration</a>
                    <!-- <ul>
                        <li><a href="area_master.html"><span class="fa fa-plus"></span>Area Master</a></li>
                        <li><a href="role_master.html"><span class="fa fa-plus"></span>Role</a></li>

                    </ul> -->
                </li>

                <li class="xn-openable">
                    <a href="{{route('user.donation')}}" title="Donation"><span class="fa fa-money"></span>Donation</a>
                </li>

                <li class="xn-openable">
                    <a href="{{route('user.gallery')}}" title="Gallery"><span class="fa fa-image"></span>Gallery</a>
                </li>

                <li class="xn-openable">
                    <a href="{{route('user.Announcement')}}" title="Announcement"><span class="fa fa-bell"></span>Announcement</a>
                </li>

                <li class="xn-openable">
                    <a href="{{route('user.contactUs')}}" title="Contact Us"><span class="fa fa-phone"></span>Contact Us</a>
                </li>



                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right" style="margin-right:25px; min-width:100px; color:#FFFFFF; padding-top:20px;">
                    Welcome, Admin
                </li>

            </ul>

            @yield('main-container')




        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{{route('user.log')}}" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <!-- <audio id="audio-alert" src="{{asset('audio/alert.mp3')}}" preload="auto"></audio>
        <audio id="audio-fail" src="{{asset('audio/fail.mp3')}}" preload="auto"></audio>
        END PRELOADS -->

        <!-- START SCRIPTS -->
        <script type="text/javascript" src="{{asset('frontend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('frontend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>



        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>


        <script type="text/javascript" src="{{asset('frontend/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>


        <script type="text/javascript" src="{{asset('frontend/js/plugins/dropzone/dropzone.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/fileinput/fileinput.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/plugins/filetree/jqueryFileTree.js')}}"></script>
        <!-- END PAGE PLUGINS -->




        <!-- START TEMPLATE -->


        <script type="text/javascript" src="{{asset('frontend/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->


        {{-- <script>
            $(function() {
                $("#file-simple").fileinput({
                    showUpload: false,
                    showCaption: false,
                    browseClass: "btn btn-danger",
                    fileType: "any"
                });
                $("#filetree").fileTree({
                    root: '/',

                    expandSpeed: 100,
                    collapseSpeed: 100,
                    multiFolder: false
                }, function(file) {
                    alert(file);
                }, function(dir) {
                    setTimeout(function() {
                        page_content_onresize();
                    }, 200);
                });
            });
        </script> --}}





        <script>
            function displayFileName() {
                const fileInput = document.getElementById("file");
                const fileLabel = document.getElementById("file-label");

                if (fileInput.files.length > 0) {
                    fileLabel.innerText = fileInput.files[0].name;
                } else {
                    fileLabel.innerText = "File name goes inside";
                }
            }
        </script>
         </div>
        </div>


</body>

</html>
