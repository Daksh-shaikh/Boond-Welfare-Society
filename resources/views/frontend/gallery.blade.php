@extends('frontend.layouts.header')

@section('main-container')

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

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12" align="center" style="margin-top:-12px;">
                                       </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12" style="margin-top:-17px;">
                        <div class="panel panel-default">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">


                            <div class="col-md-2" ></div>

                            <h5 class="panel-title" style="color:#FFFFFF; background-color:#cc0033; width:100%; font-size:14px;" align="center"><i class="fa fa-image">
                            </i> &nbsp;Gallery</h5>
                        </div>

                        <p style="font-weight: bold; text-align: center;  align-items: center;color: red;">NOTE: Image size should be 1MB. (Size:1920*1080)</p>



                        <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                            <div class="form-group">

                                <div class="col-md-4"></div>
                                <form action="{{ route('user.postsubmit_gallery') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                <div class="col-md-3" >
                                    <label style="font-weight: bold;">Upload Image</label>
                                    <input type="file" name="image" id="file" onchange="showImagePreview()"/>
                                    <label for="file">File name goes inside</label>
                                    <img id="imagePreview" src="{{asset('frontend/img/image.png')}}" alt="" style="height: 40px; width:40px; margin-bottom:10px; margin-left:10px">
                                {{-- </div> --}}
                                </div>

                               <div class="col-md-1">

                                <button style=" padding: 11px; font-size: 12px; margin-top: 20px; background-color: #00cc00; border: #00cc00; border-radius: 3px; color:white"><span class="fa fa-floppy-o" style="margin-right: 5px;"></span> Submit</button>
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
                                                        <th>Name</th>
                                                        <th>Image</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($Gallery as $Gallery)
                                                    <tr>
                                                    <td>{{$loop->index+1}}</td>

                                                    <td><a href="{{ asset('images/' . $Gallery->image)}}">
                                                                <img height="50px" width="50px" src="{{ asset('images/' . $Gallery->image)}}" alt="" />
                                                            </a>
                                                            </td>

                                                        <td>
                                                        <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button> -->

                                                        <a href="{{route('gallery.edit',$Gallery->id)}}">
                                                            <button  style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button></a>

                                                        <a href="{{route('store.destroyGallery', $Gallery->id)}}">
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
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

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
