@extends('layouts.app')
@section('title') Main Dashbaord @endsection
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Teachers View </h3>
              </div>
              <div class="title_right float-right">
                <a class="btn btn-success" href="{{ route('teachers.create') }}">Create New Teacher</a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone_no</th>
                            <th>Class_id</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->phone_no }}</td>
                            <td>{{ $teacher->class_id }}</td>
                            <td>
                                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                   
                                    <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
                    
                                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
  
                     {!! $teachers->links() !!}

                                  </div>
                                </div>
                              </div>
              </div>
          </div>
        </div>
        <!-- /page content -->
@stop