@extends('layouts.app')
@section('title') Main Dashbaord @endsection
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View All </h3>
              </div>
              <div class="title_right float-right">
                <a class="btn btn-success" href="/classes/create">Create New Teacher</a>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12  ">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="x_content">
                                      @if ($message = Session::get('success'))
                                          <div class="alert alert-success">
                                              <p>{{ $message }}</p>
                                          </div>
                                      @endif
                   
                    <table class="table table-bordered table-hover table-strippes">
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th>status</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($classes as $class)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $class->title }}</td>
                            <td>{{ $class->status }}</td>
                            <td>
                               {{--  <form action="{{ route('classes.destroy',$classes->id) }}" method="POST">
                   
                                    <a class="btn btn-info" href="{{ route('classes.show',$class->id) }}">Show</a>
                    
                                    <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
  
                     {!! $classes->links() !!}

                                  </div>
                                </div>
                              </div>
              </div>
          </div>
        </div>
        <!-- /page content -->
@stop