@extends('layouts.master')
@section('content')
<section id="main-content">
<div class="box-body">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-table"></i> Invoices</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a></li>
        <li><i class="fa fa-th-list"></i>Invoices</li>
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
                    <h4 class="modal-title" id="myModalLabel">New Invoices</h4>
                  </div>
                  <form action="{{route('invoices.store')}}" method="post">
                  {{csrf_field()}}
                  <div class="modal-body">
                      @include('invoices.form')
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
                  <form action="{{route('invoices.update','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('patch')}}
                  <div class="modal-body">
                      <input type="hidden" name="invoice_id" id="id">
                      @include('invoices.form')
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
                  <form action="{{route('invoices.destroy','test')}}" method="post">
                  {{csrf_field()}}
                  {{method_field('delete')}}
                  <div class="modal-body">
                      <input type="hidden" name="invoice_id" id="id">
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
  </div>
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          invoices Table
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> User Name</th>
              <th><i class="icon_calendar"></i> File Id</th>
              <th><i class="icon_mail_alt"></i> Company Name</th>
              <th><i class="icon_pin_alt"></i> Sum</th>
              <th><i class="icon_mobile"></i> Currency</th>
              <th><i class="icon_mobile"></i> Payed</th>
              <th><i class="action__mobile"></i> Date Recive</th>
              <th><i class="action__mobile"></i> Date Start</th>
              <th><i class="action__mobile"></i> Pay Due Date</th>
              <th><i class="action__mobile"></i> Date End</th>
              <th><i class="action__mobile"></i> Action</th>
            </tr>
            @foreach($invoices as $invoice)   
            <tr>          
              <td>{{$invoice->user_id}}</td>
              <td>{{$invoice->file_id}}</td>
              <td>{{$invoice->company}}</td>
              <td>{{$invoice->sum}}</td>
              <td>{{$invoice->currency}}</td>
              <td>{{$invoice->payed}}</td>
              <td>{{$invoice->date}}</td>
              <td>{{$invoice->date_start}}</td>
              <td>{{$invoice->due_date}}</td>
              <td>{{$invoice->date_end}}</td>

              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" data-toggle="modal" data-target="#delete" data-id="{{$invoice->id}}">Delete<i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-success" data-toggle="modal" data-id="{{$invoice->id}}" data-user_id="{{$invoice->user_id}}" data-file_id="{{$invoice->file_id}}" data-company="{{$invoice->company}}" data-sum="{{$invoice->sum}}" data-currency="{{$invoice->currency}}" data-payed="{{$invoice->payed}}" data-start="{{$invoice->date_start}}" data-due="{{$invoice->due_date}}" data-end="{{$invoice->start_end}}" data-date="{{$invoice->date}}" data-target="#edit">Edit<i class="icon_check_alt2"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>
  </div>
  <!-- page end-->
</div>
</section>
@endsection