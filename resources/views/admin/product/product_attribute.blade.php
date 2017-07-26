<?php
$segments = $this->uri->total_segments();
$lang_code = get_current_language(); // Helper "current_language_helper.php"
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"><?= $page_title."<br />"//.$page;?></h1>
			</div>
		<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="col-md-12 breadcrumb_area1">
			<div class="col-md-10">
			<ol class = "breadcrumb">
			<li><a href = "<?= base_url('admin/dashboard');?>"><i class="fa fa-home"></i></a></li>
			<li><a href = "<?= base_url('admin/products');?>">Products</a></li>
			<li class = "active"><?= $page_title;?></li>
			</ol>
			</div>
			<?php 
			if(end($this->uri->segments) != "add")
			{
			?>
			<!--<div class="col-md-2 txt_right"> <a href="<?= base_url('admin/products') ?>/add"><button type="button" class="btn btn-success">ADD NEW</button></a></div>-->
			<?php
			}
			?>
		</div>
		
		<?php
		if(!empty($error) && $error == "error")
		{
		?>
		<div class="col-md-12 alert alert-danger"><?= $this->session->flashdata('update_message');?></div>
		<?php
		}
		else if(!empty($error) && $error == "success")
		{
		?>
		<div class="col-md-12 alert alert-success"><?= $this->session->flashdata('update_message');?></div>
		<?php
		}
		else if($this->session->flashdata('update_message'))
		{
		?>
		<div class="col-md-12 alert alert-success"><?= $this->session->flashdata('update_message');?></div>
		<?php
		}
		?>
		<div class="row">
		<form action="" method="post">
         	<input type="hidden" name="product_id" value="<?= end($this->uri->segments);?>" />
         	<input type="hidden" name="detail_id" id="detail_id" value="" />
          	<div class="row">
			  <div class="col-md-6">
			  	<div class="form-group"> 
			  		<!--<div style="margin-bottom: 10px;"><strong>Choose below attributes</strong></div> -->
					<div class="filter-product-left">
					<?php
						if(!empty($submitdata))
						{
							//echo "<pre>"; print_r($submitdata); echo "</pre>";
						}
					?>
						
						<div class="filter-product-right-inner">
							<div class="sidebar-heading">
								Choose below attributes
							</div>
							<div class="prod-options col-sm-6">
								<?php
								foreach($attributelist as $attributelists)
								{
								?>
								<p><label class="<?= $attributelists->attribute_id;?>"><input type="checkbox" id="<?= $attributelists->attribute_name;?>" data-id="<?= $attributelists->attribute_id;?>">&nbsp; <span><?= $attributelists->attribute_name;?></span></label></p>
								<?php
								}
								?>
							</div>
						</div>
					</div>
			  	</div>
			  </div>
			</div>
			<hr />
			<div class="filter-product-left-inner">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label> SKU </label>
						<input class="form-control" type="text" name="sku" id="sku" value="" />
					</div>
				</div>
			   <div class="col-md-4">
					<div class="form-group">
						<label> Price </label>
						<input class="form-control" type="text" name="price" id="price" value="" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label> Sale Price </label>
						<input class="form-control" type="text" name="sale_price" id="sale_price" value="" />
					</div>
				</div>
			</div>
			<div class="row attribute-image">
				<h4>Product Images</h4>
				<div class="col-md-6 add-image">
					<div class="input-group image-preview" style="margin-bottom: 5px;">
						<input type="text" class="form-control image-preview-filename" value="" name="product_image[]" id="fieldID1" readonly placeholder="Product Image" />
						<span class="input-group-btn">
						<div class="btn btn-default image-preview-input pro-img" data-toggle="modal" href="javascript:void(0);" data-target="#file-manager1"> <span class="fa fa-folder-open"></span> <span class="image-preview-input-title">Image</span>
						</div>
						</span>
					</div>
				</div>
				<!--<div class="col-md-3 add-image">
					<div class="input-group image-preview" style="margin-bottom: 5px;">
						<input type="text" class="form-control image-preview-filename" value="" name="product_image[]" id="fieldID2" readonly placeholder="Product Image" />
						<span class="input-group-btn">
						<div class="btn btn-default image-preview-input pro-img" data-toggle="modal" href="javascript:void(0);" data-target="#file-manager1"> <span class="fa fa-folder-open"></span> <span class="image-preview-input-title">Image</span>
						</div>
						</span>
					</div>
				</div>

				<div class="col-md-3 add-image">
					<div class="input-group image-preview" style="margin-bottom: 5px;">
						<input type="text" class="form-control image-preview-filename" value="" name="product_image[]" id="fieldID3" readonly placeholder="Product Image" />
						<span class="input-group-btn">
						<div class="btn btn-default image-preview-input pro-img" data-toggle="modal" href="javascript:void(0);" data-target="#file-manager1"> <span class="fa fa-folder-open"></span> <span class="image-preview-input-title">Image</span>
						</div>
						</span>
					</div>
				</div>
				<div class="col-md-3 add-image">
					<div class="input-group image-preview" style="margin-bottom: 5px;">
						<input type="text" class="form-control image-preview-filename" value="" name="product_image[]" id="fieldID4" readonly placeholder="Product Image" />
						<span class="input-group-btn">
						<div class="btn btn-default image-preview-input pro-img" data-toggle="modal" href="javascript:void(0);" data-target="#file-manager1"> <span class="fa fa-folder-open"></span> <span class="image-preview-input-title">Image</span>
						</div>
						</span>
					</div>
				</div>-->
			</div>
			</div>
			<hr />
			<div class="col-md-12 text-right mar_b_3">
              <input type="submit" name="submit" value="SUBMIT" id="add_attribute" class="btn btn-primary" />
            </div>
			<!--<input type="button" class="btn btn-primary" id="add_attribute" value="Add">-->
		</form>
		</div>
		
		<hr />
        <?php
		//echo "<pre>"; print_r($details);echo "</pre>";
		?>
		<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                    	<div class="panel-heading"> Product Details </div>
                    	<!-- /.panel-heading -->
                    	<div class="panel-body">
                    		<div class="dataTable_wrapper"><!--dataTables_wrapper-->
                    			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                        <th>Sl No.</th>
                                        <th>SKU</th>
                                        <th>PRICE</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                    				<tbody>
                                    <?php
										$i = 0;
									foreach($details as $key=>$a_details)
									{
										$i++;
									?>
									  <tr>
                                      	<td><?= $i;?></td>
                                        <td><?= $a_details['sku']?></td>
                                        <td><?= $a_details['price']?></td>
                                        <td class="text-center"><div class="btn-group">
                                          <button class="btn btn-default btn-icon dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right" style="padding:0">
                                              <li><a class="edit" id="attribute_edit" data-pid="<?= $a_details['product_id'];?>" data-id="<?=$a_details['id'];?>" href="javascript:void(0);"><i class="fa fa-pencil"></i>Edit</a></li>
                                              <li><a onClick="javascript: return confirm('Please confirm deletion');" class="delete" href="<?= base_url('admin/products') ?>/delete/detail_del/<?= $a_details['product_id'];?>/<?= $a_details['id'];?>" ><i class="fa fa-trash"></i>Remove</a></li>
                                            </ul>
                                          </div></td>
                                      </tr>
									<?php
                                    }
									?>
                                    </tbody>
                    			</table>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
		
		
		
	</div>
</div>