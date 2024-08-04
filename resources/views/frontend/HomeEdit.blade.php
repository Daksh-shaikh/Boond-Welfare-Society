@extends('frontend.layouts.header')

@section('main-container')



            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">


                <div class="row">
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="panel panel-default">

                            <h5 class="panel-title" style="color:#FFFFFF; background-color:#cc0033; width:100%; font-size:14px;" align="center"><i class="fa fa-home">
                            </i> &nbsp;Edit Home</h5>

                        <p style="margin-top:4%; font-weight: bold; text-align: center;  align-items: center;color: red;">NOTE: Image size should be 1MB. (Size:1920*1080)</p>



                        <div class="panel-body" style="margin-top:10px; margin-bottom:-5px;">
                            <div class="form-group">

                                <div class="col-md-4"></div>

                                <form action="{{ route('home.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$Homeedit->id}}">
                                <div class="col-md-3" >
                                    <label style="font-weight: bold; ">Upload Image</label>
                                    <input type="file" name="image" id="file" value="{{$Homeedit->image}}" onchange="showImagePreview()"/>
                                    <label for="file">File name goes inside</label>

                                {{-- </div>

                                <div class="col-md-1"> --}}
                                    <img id="imagePreview" src="{{asset('frontend/img/image.png')}}" alt="" style="height: 40px; width:40px; margin-bottom:10px; margin-left:10px">
                                </div>



                               <div class="col-md-1">

                                <button style=" padding: 11px; font-size: 12px; margin-top: 20px; background-color: #00cc00; border: #00cc00; border-radius: 3px; color:white"><span class="fa fa-edit" style="margin-right: 5px;"></span>Update</button>
                                </div>
                            </form>

                            </div>
                        </div>





                    </div>



                    <div>
                        <!-- END DEFAULT DATATABLE -->


                        <div class="row">
                            <div class="panel panel-default">


                                <div class="col-md-3"></div>
                                    <div class="col-md-6" >


                                        <div class="panel-body" >
                                            <table class="table datatable" >
                                                <thead>
                                                    <tr>
                                                        <th>Sr.no.</th>
                                                        <th>Image</th>
                                                        <!-- <th>Contact No.</th>

                                                        <th>Name of Contact Person</th> -->
                                                        <!-- <th>Description</th>
                                                        <th>Assign Role</th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($Home as $Home)
                                                    <tr>
                                                    <td>{{$loop->index+1}}</td>

                                                    <td><a href="{{ asset('images/' . $Home->image)}}">
                                                                <img height="50px" width="50px" src="{{ asset('images/' . $Home->image)}}" alt="" />
                                                            </a>
                                                            </td>

                                                        <td>
                                                        <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button> -->
                                                        {{-- <a href="{{route('home.update', ['homeStore' =>$Home])}}">
                                                            <button  style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button></a> --}}


                                                        <a href="{{route('store.destroyHome', $Home->id)}}">
                                                           <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                        </a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>





                    </div>
                </div>
                <!-- PAGE CONTENT WRAPPER -->
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

{{-- This script plus above img tag with image preview created image preview
    just before the submit button  --}}

        <script>
            function showImagePreview() {
                var input = document.getElementById('file');
                var imagePreview = document.getElementById('imagePreview');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    imagePreview.src = ''; // Clear the image source if no file is selected.
                }
            }
            </script>

@endsection
