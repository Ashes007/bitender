@extends('admin.layouts.app')
@section('title','Product')
@section('content') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Product Edit</li>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $record->product_name }}" placeholder="Product Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Category</label>

                  <div class="col-sm-10">
                    <select name="category_id" id="category_id" class="form-control">
                      <option value="">Select</option>
                      @foreach($category_list as $cat)
                          <option value="{{ $cat->id }}" {{ ($record->category_id == $cat->id)?'selected':'' }}>{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group" id="subcat_section" style="display:{{ ($subcat_list->count()>0)? 'block': 'none' }};">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sub Category</label>

                  <div class="col-sm-10">
                    <select name="subcat_id" id="subcat_id" class="form-control">
                      <option value="">Select</option>
                      @foreach($subcat_list as $cat)
                          <option value="{{ $cat->id }}" {{ ($record->subcat_id == $cat->id)?'selected':'' }}>{{$cat->name}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>
                <div class="form-group" id="childcat_section" style="display:{{ ($childcat_list->count()>0)? 'block': 'none' }};;">
                  <label for="inputPassword3" class="col-sm-2 control-label">Child Category</label>

                  <div class="col-sm-10">
                    <select name="childcat_id" id="childcat_id" class="form-control">
                      <option value="">Select</option>
                      @foreach($childcat_list as $cat)
                          <option value="{{ $cat->id }}" {{ ($record->childcat_id == $cat->id)?'selected':'' }}>{{$cat->name}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price" value="{{ $record->price }}" placeholder="Product Price" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sale Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{ $record->sale_price }}" placeholder="Product Sale Price" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="status" required>
                      <option value="">Select</option>
                      <option value="Active"  {{ ( $record->status == 'Active')?'selected':'' }}>Active</option>
                      <option value="Inactive" {{ ( $record->status == 'Inactive')?'selected':'' }}>Inactive</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Is Featured</label>

                  <div class="col-sm-10">
                    <input type="radio" name="is_feature" id="is_feature1" value="Yes" {{ ( $record->is_feature == 'Yes')?'checked':'' }}>Yes
                    <input type="radio" name="is_feature" id="is_feature2" value="No" {{ ( $record->is_feature == 'No')?'checked':'' }}>No
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Is Special</label>

                  <div class="col-sm-10">
                    <input type="radio" name="is_special" id="is_special1" value="Yes" {{ ( $record->is_special == 'Yes')?'checked':'' }}>Yes
                    <input type="radio" name="is_special" id="is_special2" value="No" {{ ( $record->is_special == 'No')?'checked':'' }}>No
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Is Hot</label>

                  <div class="col-sm-10">
                    <input type="radio" name="is_hot" id="is_hot1" value="Yes" {{ ( $record->is_hot == 'Yes')?'checked':'' }}>Yes
                    <input type="radio" name="is_hot" id="is_hot2" value="No" {{ ( $record->is_hot == 'No')?'checked':'' }}>No
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>

                  <div class="col-sm-4">
                    <input type="file" name="image">
                  </div>
                  <div class="col-sm-6">
                    <img src="{{ asset('uploads/product/thumbnails').'/'.$record->image }}">
                  </div>
                </div>

                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>

                  <div class="col-sm-10">
                    <textarea name="short_desc" id="short_desc" class="tinymce">{{ $record->short_desc }}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea name="description" id="description"  class="tinymce">{{ $record->description }}</textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ URL::route('product') }}" class="btn btn-default">Cancel</a>
                
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