@extends('admin.layouts.app')
@section('title','Cms')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cms
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cms List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->
          @if (session('message'))
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
              </div>
          @endif
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6"><h3 class="box-title">Listing</h3></div>
                 
                 <div class="clearfix"></div>
              </div>              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl. No.</th>
                  <th>Page Name</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($record_list->count()>0)
                @foreach($record_list as $record)
                <tr>
                  <td>{{ ++$sl_no }}</td>
                  <td>{{ $record->page_name }}</td>
                  <td>
                  {{ $record->title }}
                  </td>                  
                  <td>
                  <a href="{!! URL::route('cms_edit',$record->id) !!}"  class="btn btn-info"><i class="fa fa-edit"></i></a>
                  
                  </td>
                </tr>
                @endforeach
                <tr>
                <td colspan="5">{{ $record_list->links() }}</td>
                </tr>
                @else
                <tr>
                  <td colspan="5">No Record Found</td>
                </tr>
                @endif
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection