@extends('frontend.layouts.header')

@section('main-container')
            <!-- END X-NAVIGATION -->
            <!-- PAGE CONTENT WRAPPER -->


            @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12" align="center" style="margin-top:-12px;">
                                        <!-- <h5 style="color:#000; background-color:#FFCC00; width:15%; min-height:25px; padding-top:5px;" align="center"><span class="fa fa-user"></span> <strong>Master Dashboard</strong></h5> -->
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


                            <div class="col-md-2"></div>

                            <h5 class="panel-title" style="color:#FFFFFF; background-color:#3399ff; width:100%; font-size:14px;" align="center"><i class="fa fa-phone">
                            </i> &nbsp;Contact Us</h5>
                        </div>


                        <div class="col-md-2"></div>
                        <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                            <div class="form-group">
                                <form role="form" method="post" action="{{route('store.contactUs')}}">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="col-md-3"></div>
                                            <div class="col-md-2" >
                                                <label style="font-weight:bold">Add City<font color="#FF0000">*</font></label>
                                                <input type="text" name="city" placeholder=" " class="form-control" required/>

                                                @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif

                                            </div>
                                            <div class="col-md-2" >
                                                <label style="font-weight:bold">Contact No<font color="#FF0000">*</font></label>
                                                <input type="number" name="contactNo" placeholder=" " class="form-control" required/>

                                                @if ($errors->has('contactNo'))
                                                <span class="text-danger">{{ $errors->first('contactNo') }}</span>
                                            @endif


                                            {{-- @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                                            </div>

                                            <div class="col-md-2" >
                                                <label style="font-weight:bold">Contact Person Name<font color="#FF0000">*</font></label>
                                                <input type="text" name="contactPerson" placeholder=" " class="form-control" required/>

                                                @if ($errors->has('contactPerson'))
                                                <span class="text-danger">{{ $errors->first('contactPerson') }}</span>
                                            @endif

                                            </div>




                                            <div class="col-md-2" style="margin-top:5vh;">

                                                <div class="input-group" style=" margin-bottom:0px; margin-top: -22px;">
                                                <button style="background-color:#00cc00; border:none; max-height:35px; margin-top: 5px; "  type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="" title=""><i class="fa fa-plus" style="margin-left:5px;"></i>Add</button>
                                                    <!-- <button type="submit" class="btn btn-primary" style="margin-top: 5px;"><span class="fa fa-plus"></span> Add </button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-2"></div> -->
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

                                        <div class="panel-body" style="margin-top:-10px; margin-bottom:-15px;">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.no.</th>
                                                        <th>City</th>
                                                        <th>Contact No.</th>

                                                        <th>Name of Contact Person</th>
                                                        <!-- <th>Description</th>
                                                        <th>Assign Role</th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($contact as $contact)
                                                    <tr>
                                                    <td>{{$loop->index+1}}</td>
                                                    <td>{{$contact->city}}</td>
                                                    <td>{{$contact->contactNo}}</td>
                                                    <td>{{$contact->contactPerson}}</td>


                                                        <td>
                                                            <a href="{{route('contact.edit',$contact->id)}}">
                                                                <button  style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button></a>

                                                        <a href="{{route('contact.destroy', $contact->id)}}">
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



@endsection
