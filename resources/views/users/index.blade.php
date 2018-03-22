@extends('layouts.master')
@section('content')
<div class="box">
            <div class="box-header">
              <h2>Users</h2>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
              add new 
            </button>
            </div>  

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New User</h4>
                  </div>
                  <form action="{{route('users.store')}}" method="post">
                  {{csrf_field()}}
                  <div class="modal-body">
                      @include('users.insert')
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                  </div>
                  <form action="{{route('users.update','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('patch')}}
                  <div class="modal-body">
                      <input type="hidden" name="user_id" id="id">
                      @include('users.insert')
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal modal-danger fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete User</h4>
                  </div>
                  <form action="{{route('users.destroy','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('delete')}}
                  <div class="modal-body">
                      <input type="hidden" name="user_id" id="id">
                      <p class="text-center">Are You Sure You Want To Delete This Record </p>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Yes Delete</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>  
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><i class="icon_profile"></i> User Name</th>
                  <th><i class="icon_calendar"></i> Date</th>
                  <th><i class="icon_mail_alt"></i> Email</th>
                  <th><i class="icon_pin_alt"></i> City</th>
                  <th><i class="icon_mobile"></i> Mobile</th>
                  <th><i class="action__mobile"></i> role</th>
                  <th><i class="action__mobile"></i> Action</th>
                </tr>
                @foreach($users as $user)          
                <tr>          
                  <td>{{$user->name}}</td>
                  <td>{{$user->created_at}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->user_city}}</td>
                  <td>{{$user->user_phone}}</td>
                  <td>{{$user->role}}</td>
                  <td>                
                <div class="btn-group">
                  <a class="btn btn-danger" data-toggle="modal" data-target="#delete" data-id="{{$user->id}}">Delete<i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-success" data-toggle="modal" data-id="{{$user->id}}" data-name="{{$user->name}}" data-date="{{$user->created_at}}" data-email="{{$user->email}}" data-city="{{$user->user_city}}" data-phone="{{$user->user_phone}}" data-role="{{$user->role}}" data-target="#edit">Edit<i class="icon_check_alt2"></i></a>
                  <a class="btn btn-success" href="/users/{{$user->id}}">view<i class="icon_close_alt2"></i></a>                  
                </div>
              </td> 
                </tr>
        @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection