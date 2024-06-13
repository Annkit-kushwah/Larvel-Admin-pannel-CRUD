@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                @include('message')
              <h3>User List</h3>
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">

                <div class="x_content">

                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Mobile.No</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $k=>$user)

                        <tr>
                            <th scope="row">{{$k+1}}</th>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->mo_no}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{route('user.delete', $user->id)}}"><i class="fa fa-trash"></i></a>
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
      <!-- /page content -->
@endsection
