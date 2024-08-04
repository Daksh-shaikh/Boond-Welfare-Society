@extends('frontend.layouts.header')

@section('main-container')
<!-- PAGE CONTENT WRAPPER -->


<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">


                        <form action="{{route('reg.edit', [$regedit->id])}}" method="post">
                            @csrf


                        </form>


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


                    <div class="col-md-2"></div>

                    <h5 class="panel-title"
                        style="margin-bottom: -5px; color:#FFFFFF; background-color:#006699; width:100%; font-size:14px;"
                        align="center"><i class="fa fa-money">
                        </i> &nbsp;Edit Member Registration</h5>
                </div>


                {{-- <form action="" method="post">
                    @csrf --}}


                    <div class="row">
                        <div class="col-md-12" >

                            <div class="panel panel-default">

                                <div class="col-md-2"></div>

                                <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                                    <div class="form-group">
                                        <form action="{{route('reg.update', [$regedit->id])}}" method="post">
                                            @csrf


                                            <input type="hidden" name="id" value="{{$regedit->id}}">


                                            <div class="col-md-12">
                                                <div class="form-group" >
                                                    <!-- <div class="col-md-3"></div> -->
                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Full Name<font color="#FF0000">*</font></label>
                                                        <input type="text" name="name" placeholder="ceqocu@mailinator.com" class="form-control" value="{{ old('name', $regedit->name) }}" required/>

                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Gender<font color="#FF0000" >*</font></label>
                                                        <select name="gender" class="form-control" value="{{$regedit->gender}}">
                                                            {{-- <Option value>Select</Option>
                                                            <Option value="Female">Female</Option>
                                                            <Option value="Male">Male</Option> --}}
                                                            <option value="Select" {{ $regedit->gender === 'Select' ? 'selected' : '' }}>Select</option>
                                                            <option value="Female" {{ $regedit->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                                            <option value="Male" {{ $regedit->gender === 'Male' ? 'selected' : '' }}>Male</option>

                                                        </select>
                                                    </div>


                                                    <div class="col-md-6" style="margin-top:15px; ">
                                                        <label style="font-weight: bold;">Age<font color="#FF0000">*</font></label>
                                                        <input type="number" name="age" placeholder="50" class="form-control" value="{{$regedit->age}}" required />
                                                        @if ($errors->has('age'))
                                                        <span class="text-danger">{{ $errors->first('age') }}</span>
                                                    @endif
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Email<font color="#FF0000">*</font></label>
                                                        <input type="email" name="email" placeholder="kahufa@mailinator.com" class="form-control" value="{{$regedit->email}}" required/>
                                                        @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                    </div>

                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Mobile No<font color="#FF0000">*</font></label>
                                                        <input type="number" name="mobilenumber" placeholder="1234567890" class="form-control" value="{{$regedit->mobilenumber}}" required/>
                                                        @if ($errors->has('mobilenumber'))
                                                        <span class="text-danger">{{ $errors->first('mobilenumber') }}</span>
                                                    @endif
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">City<font color="#FF0000">*</font></label>
                                                        <input type="text" name="city" placeholder="widabunic@mailinator.com" class="form-control" value="{{$regedit->city}}" required/>
                                                        @if ($errors->has('city'))
                                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                                    @endif
                                                    </div>


                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Address<font color="#FF0000">*</font></label>
                                                        <input type="text" name="address" placeholder="bucilezume@mailinator.com" class="form-control" value="{{$regedit->address}}" required/>
                                                        @if ($errors->has('address'))
                                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                                    @endif
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:15px;">
                                                        <label style="font-weight: bold;">Pincode<font color="#FF0000">*</font></label>
                                                        <input type="number" name="pincode" placeholder="869" class="form-control" value="{{$regedit->pincode}}" required/>
                                                        @if ($errors->has('pincode'))
                                                        <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                                    @endif
                                                    </div>
                                                    {{-- @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


                                                    <div class="col-md-2" style="margin-top:2vh;">

                                                        <div class="input-group" style=" margin-bottom:15px;">

                                                            <button style="background-color:#00cc00; border:none; max-height:35px; "  type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="" title=""><i class="fa fa-plus" style="margin-left:5px;"></i>Update</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-md-2"></div>






            </div>



            <!-- END DEFAULT DATATABLE -->


            <div class="row">


            </div>
            <!-- PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->


        <script>
            function previewImage(imageUrl) {
                // Open a new window or modal to display the image
                window.open(imageUrl, 'Image Preview', 'width=800, height=600');
                // Alternatively, you can use a modal library like Bootstrap modal
                // to display the image within the current page.
            }
        </script>


        @endsection
