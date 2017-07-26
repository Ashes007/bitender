@extends('admin.layouts.app')
@section('title','Banner')
@section('content') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Banner Edit</li>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Banner Name</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}" placeholder="Banner Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Banner Text</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="banner_text" name="banner_text" value="{{ $record->banner_text }}" placeholder="Banner Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  
                  <div class="col-sm-4">
                    <input type="file" name="image" id="image">
                  </div>

                  <div class="col-sm-6">
                    <img src="{{ asset('uploads/banner/thumbnails').'/'.$record->image }}">
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="status" required>
                    <option value="">Select</option>
                    <option value="Active"  {{ ($record->status == 'Active')?'selected':'' }}>Active</option>
                    <option value="Inactive" {{ ($record->status == 'Inactive')?'selected':'' }}>Inactive</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ URL::route('banner') }}" class="btn btn-default">Cancel</a>
                
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