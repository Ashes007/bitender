@extends('admin.layouts.app')
@section('title','Contact Us')
@section('content') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reply Contact Us 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Contact Us</li>
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
              @if (session('message'))
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
              </div>
              @endif

              @if (count($errors) > 0)
                 <div class = "alert alert-danger">
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
                  <label for="inputEmail3" class="col-sm-2 control-label">To</label>

                  <div class="col-sm-10">
                   {{ $info->name." (".$info->email.")" }}
                    <input name="sendto" type="hidden" value="{{ $info->email }}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Message</label>

                  <div class="col-sm-10">
                    <textarea class="tinymce" id="message" name="message">{{ old('message') }}</textarea>
                    
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="form-group">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-info">Send</button>
                <a href="{{ URL::route('contactus') }}" class="btn btn-default">Cancel</a>
                
              </div>

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