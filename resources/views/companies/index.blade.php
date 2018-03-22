@extends('layouts.master')
@section('content')
<div class="box">
            <div class="box-header">
              <h2>Companies</h2>

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
                    <h4 class="modal-title" id="myModalLabel">New Company</h4>
                  </div>
                  <form action="{{route('companies.store')}}" method="post">
                  {{csrf_field()}}
                  <div class="modal-body">
                      @include('companies.form')
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
                    <h4 class="modal-title" id="myModalLabel">Edit Company</h4>
                  </div>
                  <form action="{{route('companies.update','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('patch')}}
                  <div class="modal-body">
                      <input type="hidden" name="company_id" id="id">
                      @include('companies.form')
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
                    <h4 class="modal-title" id="myModalLabel">Delete Company</h4>
                  </div>
                  <form action="{{route('companies.destroy','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('delete')}}
                  <div class="modal-body">
                      <input type="hidden" name="company_id" id="id">
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
          <th><i class="icon_profile"></i> Name</th>
          <th><i class="icon_calendar"></i> Date</th>
          <th><i class="icon_mail_alt"></i> Email</th>
          <th><i class="icon_pin_alt"></i> Subject</th>
          <th><i class="icon_mobile"></i> Type</th>
          <th><i class="action__mobile"></i> Logo</th>
          <th><i class="action__mobile"></i> Action</th>
                </tr>
                </thead>
                <tbody>
        @foreach( $companies as $company )
                <tr>
          <td>{{$company->company_name}}</td>
          <td>{{$company->created_at}}</td>
          <td>{{$company->company_email}}</td>
          <td>{{$company->subject}}</td>
          <td>{{$company->company_type}}</td>
          <td>{{$company->company_logo}}</td>
          <td>
                <div class="btn-group">
                  <a class="btn btn-danger" data-toggle="modal" data-target="#delete" data-id="{{$company->id}}">Delete<i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-success" data-toggle="modal" data-id="{{$company->id}}" data-name="{{$company->company_name}}" data-date="{{$company->created_at}}" data-email="{{$company->company_email}}" data-subject="{{$company->subject}}" data-type="{{$company->company_type}}" data-logo="{{$company->company_logo}}" data-target="#edit">Edit<i class="icon_check_alt2"></i></a>
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