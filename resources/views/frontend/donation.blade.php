@extends('frontend.layouts.header')

@section('main-container')
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12" align="center" style="margin-top:-12px;">
                                        <!-- <h5 style="color:#000; background-color:#FFCC00; width:15%; min-height:25px; padding-top:5px;" align="center"><span class="fa fa-user"></span> <strong>Master Dashboard</strong></h5> -->
                                        <button data-toggle="modal" data-target="#popup3" style="margin-right: 10px; background-color: #006699; border: #006699; color: white; padding: 8px; margin-top: 10px; border-radius: 5px; font-size: 13px;">
                                            <span class="fa fa-plus"></span>  Add Donation Amount</button>
                                        <button data-toggle="modal" data-target="#popup4" style=" background-color: #006699; border: #006699; color: white; padding: 8px; margin-top: 10px; border-radius: 5px; font-size: 13px;">
                                            <span class="fa fa-plus"></span> Add Cause</button>

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

                            <h5 class="panel-title" style="margin-bottom: -5px; color:#FFFFFF; background-color:#2dc34c; width:100%; font-size:14px;" align="center"><i class="fa fa-money">
                            </i> &nbsp;Donation</h5>
                        </div>



                        <div class="col-md-2"></div>

                        </div>





                    </div>




                        <!-- END DEFAULT DATATABLE -->


                        <div class="row">


                                <div class="panel panel-default">


                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" >


                                        <div class="panel-body" >
                                            <table class="table datatable"  >
                                                <thead >
                                                    <tr >
                                                        <th>Sr.no.</th>
                                                        <th>Full Name</th>
                                                        <th>Mobile No.</th>

                                                        <th>Amount</th>
                                                        <th>Date of Payment</th>
                                                        <th>Payment Id</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>14</td>
                                                        <td>0000-00-00</td>
                                                        <td></td>
                                                        <td>
                                                            <!-- <button style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit Shop"><i class="fa fa-edit" style="margin-left:5px;"></i></button> -->
                                                            <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2.</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>1</td>
                                                        <td>0000-00-00</td>
                                                        <td></td>
                                                        <td>
                                                            <!-- <button style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit Shop"><i class="fa fa-edit" style="margin-left:5px;"></i></button> -->
                                                            <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3.</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>11</td>
                                                        <td>0000-00-00</td>
                                                        <td></td>
                                                        <td>
                                                            <!-- <button style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit Shop"><i class="fa fa-edit" style="margin-left:5px;"></i></button> -->
                                                            <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                        </td>
                                                    </tr>





                                                </tbody>
                                            </table>
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
<!---modal1 start--->
<div class="modal" id="popup3" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="cls2" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="H5">Add Donation Amount</h4>
            </div>

            <div class="modal-body" style="margin-bottom: 70px;" >
                <div class="col-md-3"></div>
                <!-- <div class="col-md-5" style="margin-top: 15px; padding-left: 5px; padding-right: 5px;"> -->
                <!-- <div>
                </div> -->

                <form action="{{route('store.donation')}}" method="post">
                @csrf



                <div class="col-md-4" style="margin-top:15px;">
                        <label style="font-weight: bold; font-size: 12px;">Add Amount<font color="#FF0000">*</font></label>
                        <input type="number" name="add_amount" class="form-control">
                    </div>

                <!-- </div> -->

                <div class="col-md-1" style="margin-top:5vh;" align="right">
                    <button style="background-color:#00cc00; border:none; max-height:35px; margin-left: 6px;"  type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="" title=""><i class="fa fa-plus" style="margin-left:5px;"></i>Add </button>
              </div>

              @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
</form>


            </div>

            <div>
                <!-- END DEFAULT DATATABLE -->


                <div class="row">
                    <div class="panel panel-default">


                        <!-- <div class="col-md-3"></div> -->
                            <div class="col-md-12" >


                                <div class="panel-body" >
                                    <table class="table datatable" >
                                        <thead>
                                            <tr>
                                                <th>Sr.no.</th>
                                                <th>Amount</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($amount as $amounts)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$amounts->add_amount}}</td>

                                                <td>


                                                <a href="{{route('store.destroyAmount', $amounts->id)}}">
                                                    <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button></a>


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






            <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
            </div>
        </div>
    </div>
</div>
<!--modal1 end-->




<!---modal2 start--->
<div class="modal" id="popup4" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="cls2" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="H5">Add Causes</h4>
            </div>
            <div class="modal-body" style="margin-bottom: 70px;">
                <div class="col-md-3"></div>


                <form action="{{route('save.donation')}}" method="post">
                @csrf

                <div class="col-md-4" style="margin-top:15px;">
                        <label style="font-weight: bold; font-size: 12px;">Add Cause<font color="#FF0000">*</font></label>
                        <input type="text" name="add_cause" class="form-control">
                    </div>
                <!-- </div> -->

                <div class="col-md-1" style="margin-top:5vh;" align="right">
                    <button style="background-color:#00cc00; border:none; max-height:35px; margin-left: 6px;" name="submit" type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="" title=""><i class="fa fa-plus" style="margin-left:5px;"></i>Add </button>
              </div>
</form>

            </div>

            <div>
                <!-- END DEFAULT DATATABLE -->


                <div class="row">
                    <div class="panel panel-default">


                        <!-- <div class="col-md-3"></div> -->
                            <div class="col-md-12" >


                                <div class="panel-body" >
                                    <table class="table datatable" >
                                        <thead>
                                            <tr>
                                                <th>Sr.no.</th>
                                                <th>Cause</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cause as $cause)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$cause->add_cause}}</td>

                                                <td>


                                                <a href="{{route('save.destroySave', $cause->id)}}">
                                                <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                </a>


                                                </td>
                                            </tr>
                                            @endforeach



                                            <!-- <tr>
                                                <td>1.</td>
                                                <td>abc</td>

                                                <td>
                                                    <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                </td>
                                            </tr> -->

                                            <!-- <tr>
                                                <td>2.</td>
                                                <td>sdfd</td>

                                                <td>
                                                         <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                </td>
                                            </tr> -->
<!--
                                            <tr>
                                                <td>3.</td>
                                                <td>demo</td>

                                                <td>
                                                        <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button>
                                                </td>
                                            </tr> -->



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>






            <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
            </div>
        </div>
    </div>
</div>
<!--modal2 end-->


@endsection
