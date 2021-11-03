@extends('layouts.app')
@section('title') Main Dashbaord @stop
@section('content')

        <div class="right_col" role="main">
          <div class="col-md-12 ">
                        <div class="x_panel">
                           <div class="x_title">
                              <ul class="nav navbar-right panel_toolbox">
                                 <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" href="#">Settings 1</a>
                                       <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                 </li>
                                 <li><a class="close-link"><i class="fa fa-close"></i></a>
                                 </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left" action="{{ route('teachers.store') }}" method="POST" method="POST">
                                @csrf 

                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Name</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 " >Email</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="Email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 " >Phone_no</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="number" class="form-control" placeholder="phone_no" name="phone_no">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Password</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Password" name="password">
                                    </div>
                                 </div>
                                 <div class="form-group row"> 
                                    <label class="control-label col-md-3 col-sm-3 " name="Classes">Classes</label>
                                    <div class="col-md-9 col-sm-9">
                                       <select class="form-control" name="class_id">
                                          <option value="1">class one</option>
                                          <option value="2">class two</option>
                                          <option value="33">class three</option>
                                          <option value="4">class four</option>
                                          <option value="5">class five</option>
                                          <option value="6">class six</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="ln_solid"></div>
                                 <div class="form-group">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                       <button type="button" class="btn btn-primary">Cancel</button>
                                       <button type="reset" class="btn btn-primary">Reset</button>
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     </div>
@stop