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

                            <h5 class="panel-title" style="color:#FFFFFF; background-color:#006699; width:100%; font-size:14px;" align="center"><i class="fa fa-image">
                            </i> &nbsp;Announcement</h5>
                        </div>



                        <div class="col-md-2"></div>
                        <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                            <div class="form-group" style="margin-top: -20px;">



                                    <form action="{{route('store.announcement')}}" method="post">
                                        @csrf

                                        <div class="col-md-12">
                                            <div class="form-group" style="margin-top:-10px;">


                                                <div class="col-md-3" style="margin-top:15px;"></div>

                                                <div class="col-md-2" style="margin-top:15px;">
                                                    <label style="font-weight: bold; font-size: 12px;">Add title of Notice<font color="#FF0000">*</font></label>
                                                    <input type="text" name="notice" class="form-control">
                                                </div>

                                               <div class="col-md-2" style="margin-top:15px;">
                                                    <label style="font-weight: bold; font-size: 12px;">Add Details<font color="#FF0000">*</font></label>
                                                  <textarea class="form-control" name="details" type="text" rows="2" cols="30"></textarea>
                                                </div>

                                              	 <div class="col-md-1" style="margin-top:5vh;" align="right">
                                                	  <button style="background-color:#00cc00; border:none; max-height:35px; "  type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="" title=""><i class="fa fa-plus" style="margin-left:5px;"></i>Add Notice</button>
                                                </div>

                                            </div>

                                        </div>
                                   </form>
                                    <!-- </div> -->




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
                                            <table class="table datatable" >
                                                <thead>
                                                    <tr>
                                                        <th>Sr.No.</th>
                                                        <th>Title</th>
                                                        <th>Details</th>


                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($noticed as $announcement)
                                                    <tr>
                                                    <td>{{$loop->index+1}}</td>
                                                    <td>{{$announcement->notice}}</td>
                                                    <td>{{$announcement->details}}</td>


                                                        <td>
                                                        <a href="{{route('announcement.edit',$announcement->id)}}">
                                                        <button  style="background-color:#0066cc; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit "><i class="fa fa-edit" style="margin-left:5px;"></i></button></a>

                                                        <a href="{{route('store.destroy', $announcement->id)}}">
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






@stop
