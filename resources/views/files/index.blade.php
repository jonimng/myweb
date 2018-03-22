@extends('layouts.master')
@section('content')
<section id="main-content">
<div class="box-body">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-table"></i> Files</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a  href="{{ url('/admin') }}">Home</a></li>
        <li><i class="fa fa-th-list"></i>files</li>
      </ol>
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
                    <h4 class="modal-title" id="myModalLabel">New File</h4>
                  </div>
                  <form action="{{route('files.store')}}" method="post">
                  {{csrf_field()}}
                  <div class="modal-body">
                      @include('files.form')
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
                    <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                  </div>
                  <form action="{{route('files.update','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('patch')}}
                  <div class="modal-body">
                      <input type="hidden" name="file_id" id="id">
                      @include('files.form')
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
                    <h4 class="modal-title" id="myModalLabel">Delete File</h4>
                  </div>
                  <form action="{{route('files.destroy','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('delete')}}
                  <div class="modal-body">
                      <input type="hidden" name="file_id" id="id">
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

  </div>
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          files Table
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> User Id</th>
              <th><i class="icon_calendar"></i> Original Name</th>
              <th><i class="icon_mail_alt"></i> Company Name</th>
              <th><i class="icon_pin_alt"></i> Size</th>
              <th><i class="icon_mobile"></i> Processed</th>
              <th><i class="icon_mobile"></i> Deleted</th>
              <th><i class="action__mobile"></i> Date</th>
              <th><i class="action__mobile"></i> Action</th>
            </tr>
            @foreach($files as $file)   
            <tr>          
              <td>{{$file->user_id}}</td>
              <td>{{$file->original_name}}</td>
              <td>{{$file->company_name}}</td>
              <td>{{$file->size}}</td>
              <td>{{$file->processed}}</td>
              <td>{{$file->deleted}}</td>
              <td>{{$file->created_at}}</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" data-toggle="modal" data-target="#delete" data-id="{{$file->id}}">Delete<i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-success" data-toggle="modal" data-id="{{$file->id}}" data-name="{{$file->user_id}}" data-role="{{$file->company_name}}" data-email="{{$file->size}}" data-city="{{$file->processed}}" data-phone="{{$file->deleted}}" data-date="{{$file->created_at}}" data-target="#edit">Edit<i class="icon_check_alt2"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>
  </div>
  </div >
  <!-- page end-->
</section>
@endsection