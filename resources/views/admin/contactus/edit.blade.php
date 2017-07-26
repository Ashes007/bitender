@extends('admin.layouts.app')
@section('title','Email Template')
@section('content') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cms Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cms Edit</li>
      </ol>
    </section>

      
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Horizontal Form</h3> -->

              @if (count($errors) > 0)
                 <div class = "alert alert-danger">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                 </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Template Name</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="template_name" name="template_name" value="{{ $record->template_name }}" placeholder="Template Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ $record->subject }}" placeholder="Subject">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">From Name</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="from_address" name="from_address" value="{{ $record->from_address }}" placeholder="From Name">
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Message</label>

                  <div class="col-sm-10">
                    <textarea class="tinymce" id="message" name="message">{{ $record->message }}</textarea>
                    
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ URL::route('emailtemplate') }}" class="btn btn-default">Cancel</a>
                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   @endsection