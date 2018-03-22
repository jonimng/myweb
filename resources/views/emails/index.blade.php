@extends('layouts.master')
@section('content')
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Table</li>
        <li><i class="fa fa-th-list"></i>Basic Table</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          emails Table
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> User Name</th>
              <th><i class="icon_calendar"></i> Email Sender</th>
              <th><i class="icon_mail_alt"></i> Subject</th>
              <th><i class="icon_pin_alt"></i> Pdf Attachments</th>
              <th><i class="icon_mobile"></i> Saved Files</th>
              <th><i class="action__mobile"></i> Date</th>
              <th><i class="action__mobile"></i> Action</th>
            </tr>
            @foreach($emails as $email)          
            <tr>          
              <td>{{$email->email_receiver}}</td>
              <td>{{$email->email_sender}}</td>
              <td>{{$email->subject}}</td>
              <td>{{$email->pdf_attachments}}</td>
              <td>{{$email->saved_files}}</td>
              <td>{{$email->timestamp}}</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" href="#">Delte<i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-success" href="#">Edit<i class="icon_check_alt2"></i></a>
                  <a class="btn btn-danger" href="#">view<i class="icon_close_alt2"></i></a>
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
</section>
</section>
@endsection