@extends('admin.layouts.app')
@section('title','Product Attributes')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Attributes
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product Attributes List</li>
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
          <div class="box-header"><h4>Choose below attributes</h4></div>
          <div class="box-body">

          <form action="" method="post" enctype="multipart/form-data" id="frm_productattr">
          {{ csrf_field() }}
          <input type="hidden" name="product_id" value="{{ $product_id }}" />
          <input type="hidden" name="detail_id" id="detail_id" value="" />
              <div class="box-body">
             
                  <div class="prod-options col-sm-9">
                    @foreach($attributelists as $attributes)
                    <p><label class="{{ $attributes->attribute_name }}"><input type="checkbox" id="{{ $attributes->attribute_name }}" data-id="{{ $attributes->id }}" class="attributes_check" >&nbsp; <span>{{ $attributes->attribute_name }}</span></label></p>
                    @endforeach
                  </div>

                  <div class="col-sm-3"><img src="" id="attr_img"></div>

                <div class="clearfix"></div>
              </div> 

              <div class="box-body">
                  <div class="product-attr-value">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label> SKU </label>
                          <input class="form-control" type="text" name="sku" id="sku" value="" required />
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label> Price </label>
                          <input class="form-control" type="text" name="price" id="price" value="" required/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label> Sale Price </label>
                          <input class="form-control" type="text" name="sale_price" id="sale_price" value="" required/>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label> Product Image </label>
                          <input type="file" name="image_name">
                          
                        </div>
                      </div>

                    </div>
                  </div>              
            </div>

            <div class="box-header">
              <div class="row">
                
                 <div class="col-lg-12 col-sm-12 col-xs-12">
                   <input type="submit" value="Submit" class="btn btn-info pull-right"> 
                 
                 <div class="clearfix"></div>
              </div>              
            </div>

           </form>
           </div>
           </div>

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
                  <th>SKU</th>
                  <th>Price</th>
                  <th>Sale Price</th>
                  <th>Attributes</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($record_list->count()>0)
                @foreach($record_list as $k=>$list)
                <tr>
                  <td>{{ ++$k }}</td>
                  <td>{{ $list->sku }}</td>
                  <td>{{ $list->price }}</td>
                  <td>{{ $list->sale_price }}</td>

                  <td>
                    @foreach($list->attributevalues as $attrvalue)
                      <strong>{{ $attrvalue->attributesname->attribute_name }}</strong> : {{ $attrvalue->attributevalue->attribute_value }} <br>
                    @endforeach
                  </td>
                  <td><image src="{{ URL::to('/uploads/product_attribute/thumbnails/')."/".$list->image }}"></td>
                  <td>
                  <a href="javascript:void(0);" id="attribute_edit" data-pid="{{ $product_id }}" data-id="{{ $list->id }}"  class="btn btn-info attribute_edit"><i class="fa fa-edit"></i></a>
                  <a onclick="return confirm('Delete! Are you sure')" href="{{ URL::Route('deleteattribute',$list->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
                <tr>
                <td colspan="4"></td>
                </tr>
                @else
                <tr>
                  <td colspan="4">No Record Found</td>
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