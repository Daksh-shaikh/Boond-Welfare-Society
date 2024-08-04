@extends('frontend.layouts.header')

@section('main-container')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">


                        <form action="{{route('member.amount')}}" method="post">
                            @csrf
                            <div class="col-md-2">
                                <input type="number" placeholder="Enter Amount" class="form-control" name="amount"
                                    value="{{ old('amount',session('createdAmount')) }}">
                                @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <button
                                style="margin-left: 30px; background-color: #00cc00; border: #00cc00; color: white; padding: 8px; margin-top: 0px; border-radius: 5px; font-size: 13px;">
                                Update Membership Amount</button>

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
                        </i> &nbsp;Member Registration</h5>
                </div>



                <div class="col-md-2"></div>






            </div>



            <!-- END DEFAULT DATATABLE -->


            <div class="row">


<form action="/memberRegistrationDeleteMultiple" method="POST">
    @csrf
                <div class="panel panel-default">

                    {{-- <a href="{{ route('store.destroyMemberRegistration', $memberRegistration->id) }}"> --}}
                    <button class="btn btn-danger" style="margin-left: 25px; margin-top: 15px;" type="submit" name="delete_multiple">
                        <i class="fa fa-trash-o"></i>Delete Multiple
                    </button>
                    {{-- </a> --}}


                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>Sr.no.</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>

                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($MemberRegistration)>0)
                                @foreach($MemberRegistration as $memberRegistration)
                                <tr>
                                    <!-- <td><input type="checkbox" name="ids[]" value="3"></td> -->
                                    <div style="display:flex;">
                                        <td>
                                            <input type="checkbox" name="ids[{{$memberRegistration->id}}]" value="{{ $memberRegistration->id }}">
                                            &nbsp; {{$loop->index+1}}
                                           </td>
                                    </div>
                                    <td>{{$memberRegistration->name}}</td>
                                    <td>{{$memberRegistration->gender}}</td>
                                    <td>{{$memberRegistration->age}}</td>
                                    <td>{{$memberRegistration->email}}</td>
                                    <td>{{$memberRegistration->mobilenumber}}</td>
                                    <td>{{$memberRegistration->city}}</td>
                                    <td>{{$memberRegistration->address}}</td>
                                    <td>{{$memberRegistration->pincode}}</td>
                                    <td>{{$memberRegistration->amount}}</td>
                                    <td>{{$memberRegistration->payment_status}}</td>
                                    <td>

                                        <a href="#" onclick="previewImage('{{ asset('products/' . $memberRegistration->image) }}')">PREVIEW</a>
                                    </td>

                                    <!-- JavaScript function for previewing the image -->




                                    <td>
                                        <div style="display:flex;">
                                              <a href="{{route('reg.edit',$memberRegistration->id)}}">
                                                    <button  style="background-color:#0066cc; border:none; max-height:25px; margin-right:3px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button></a>


                                                 <a href="{{ route('store.destroyMemberRegistration', $memberRegistration->id) }}">
                                                    <button style="background-color:#ff0000; border:none; max-height:25px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash-o" style="margin-left:5px;"></i>
                                                    </button>
                                                </a>


                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="3">User Not Found</td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>




                </div>
</form>






            </div>
            <!-- PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
{{--
    <!---modal start--->
    <div class=" modal" id="popup4" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="cls2" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="H5">Edit Member Details</h4>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <!-- <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h5 class="panel-title" style="color:#FFFFFF; background-color:#0f903f; width:100%; font-size:14px;" align="center"><i class="fa fa-edit"></i> &nbsp;Area Master </h5>
                        </div> -->
                            <div class="col-md-2"></div>

                            <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                                <div class="form-group">
                                    <form role="form">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <div class="col-md-3"></div> -->
                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Full
                                                        Name<font color="#FF0000">
                                                            *
                                                        </font></label>
                                                    <input type="text" placeholder="ceqocu@mailinator.com"
                                                        class="form-control" required />
                                                </div>
                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Gender
                                                        <font color="#FF0000">
                                                            *
                                                        </font>
                                                    </label>
                                                    <select name="gender" class="form-control">
                                                        <Option value>Select
                                                        </Option>
                                                        <Option value="Female">
                                                            Female</Option>
                                                        <Option value="Male">
                                                            Male</Option>
                                                    </select>
                                                    <!-- <input type="text" placeholder=" " class="form-control" required/> -->
                                                </div>


                                                <div class="col-md-6" style="margin-top:15px; ">
                                                    <label style="font-weight: bold;">Age
                                                        <font color="#FF0000">
                                                            *</font>
                                                    </label>
                                                    <input type="number" placeholder="50" class="form-control"
                                                        required />
                                                </div>
                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Email
                                                        <font color="#FF0000">
                                                            *
                                                        </font>
                                                    </label>
                                                    <input type="text" placeholder="kahufa@mailinator.com"
                                                        class="form-control" required />
                                                </div>

                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Mobile
                                                        No<font color="#FF0000">
                                                            *
                                                        </font></label>
                                                    <input type="text" placeholder="1234567890" class="form-control"
                                                        required />
                                                </div>
                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">City
                                                        <font color="#FF0000">
                                                            *</font>
                                                    </label>
                                                    <input type="text" placeholder="widabunic@mailinator.com"
                                                        class="form-control" required />
                                                </div>


                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Address
                                                        <font color="#FF0000">
                                                            *
                                                        </font>
                                                    </label>
                                                    <input type="text" placeholder="bucilezume@mailinator.com"
                                                        class="form-control" required />
                                                </div>
                                                <div class="col-md-6" style="margin-top:15px;">
                                                    <label style="font-weight: bold;">Pincode
                                                        <font color="#FF0000">
                                                            *
                                                        </font>
                                                    </label>
                                                    <input type="text" placeholder="869" class="form-control"
                                                        required />
                                                </div>

                                                <!-- <div class="col-md-2" style="margin-top:15px;">
                                                <label>State<font color="#FF0000">*</font></label>
                                                <input type="text" placeholder=" " class="form-control" required/>
                                            </div> -->




                                                <div class="col-md-2" style="margin-top:2vh;">

                                                    <div class="input-group" style=" margin-bottom:15px;">

                                                        <button type="button" class="btn btn-primary"
                                                            style="background-color: #006633; border: #006633;"><span
                                                                class="fa fa-edit"></span>
                                                            Update </button>
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






                    <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                    </div>
                </div>
            </div>
        </div>
        <!--modal end--> --}}

        <script>
            function previewImage(imageUrl) {
                // Open a new window or modal to display the image
                window.open(imageUrl, 'Image Preview', 'width=800, height=600');
                // Alternatively, you can use a modal library like Bootstrap modal
                // to display the image within the current page.
            }
        </script>


        @endsection
