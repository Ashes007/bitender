<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Library\Slug;
use App\Product;
use App\Category;
use App\Attribute;
use App\AttributeValue;
use App\ProductAttribute;
use App\ProductAttributeValue;
use Image;
use File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	$qry = Product::query();

        $qry->whereHas('Category',function($q) use ($request){
            if($request->category_id != ''){
               $q->where('id',$request->category_id); 
            }
            
        });

        $qry->where('product_name','like','%'.$request->product.'%');

        $data['record_list'] = $qry->paginate($perpage);

        $data['category_list'] = Category::where('status','=','Active')->where('parent_id','=',NULL)->get();
    	return view('admin.product.list',$data);
    }

    public function add()
    {
    	$data['category_list'] = Category::where('status','=','Active')->where('parent_id','=',NULL)->get();
    	return view('admin.product.add',$data);
    }

    public function store(Request $request)
    {
    	$product    = new Product;
        $slug       = new Slug;

        $imagename = '';
        if (Input::hasFile('image')){
        	$image = $request->file('image');
            $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/product');
            $thumbPath = public_path('uploads/product/thumbnails');

            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath.'/'.$imagename);       

            $image->move($destinationPath, $imagename);
        }

    	$product->category_id 	= $request->category_id;
    	$product->subcat_id 	= $request->subcat_id;
    	$product->childcat_id 	= $request->childcat_id;
    	$product->product_name 	= $request->product_name;
        $product->slug          = $slug->createSlug($request->product_name,'Product');
    	$product->short_desc 	= $request->short_desc;
    	$product->description 	= $request->description;
    	$product->price 		= $request->price;
    	$product->sale_price 	= $request->sale_price;
        $product->is_feature    = $request->is_feature;
        $product->is_special    = $request->is_special;
        $product->is_hot        = $request->is_hot;
    	$product->status 		= $request->status;
    	$product->image 		= $imagename;

    	$product->save();

        return redirect()->route('product');

    }

    public function edit($id)
    {
        $data['record'] = Product::find($id);
        $data['category_list']  = Category::where('status','=','Active')->where('parent_id','=',NULL)->get();
        $data['subcat_list']    = Category::where('status','=','Active')->where('parent_id','=',$data['record']->category_id)->get();
        $data['childcat_list']  = Category::where('status','=','Active')->where('parent_id','=',$data['record']->subcat_id)->get();
        return view('admin.product.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $product    = Product::find($id);
        $slug       = new Slug;

        $imagename = $product->image;
        if (Input::hasFile('image')){
            $image = $request->file('image');
            $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/product');
            $thumbPath = public_path('uploads/product/thumbnails');

            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath.'/'.$imagename);       

            $image->move($destinationPath, $imagename);
        }

        $product->category_id   = $request->category_id;
        $product->subcat_id     = $request->subcat_id;
        $product->childcat_id   = $request->childcat_id;
        $product->product_name  = $request->product_name;
        $product->slug          = $slug->createSlug($request->product_name,'Product', $id);
        $product->short_desc    = $request->short_desc;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $product->sale_price    = $request->sale_price;
        $product->is_feature    = $request->is_feature;
        $product->is_special    = $request->is_special;
        $product->is_hot        = $request->is_hot;
        $product->status        = $request->status;
        $product->image         = $imagename;

        $product->save();

        return redirect()->route('product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        
        $file1 = 'uploads/product/'.$product->image;
        $file2 = 'uploads/product/thumbnails/'.$product->image;
        File::delete($file1, $file2);
        $product->delete();
        return redirect('admin/product')->with('message','Record Deleted Successfully');
    }

    public function getsubcategory(Request $request)
    {
        $category_id = $request->category_id;
        $category_list = Category::where('status','Active')
                    ->where('parent_id',$category_id)
                    ->get();
        $select = '<option value="">Select</option>';
        if($category_list->count()>0)
        {
            foreach ($category_list as $key => $category) {
                $select .= '<option value="'.$category->id.'">'.$category->name.'</option>';
            }
        }

        echo $select;
    }

    public function attributes($product_id)
    {
        $data['attributelists'] = Attribute::all();
        $data['product_id']     = $product_id;
        $data['record_list']    = ProductAttribute::where('product_id',$product_id)->get();
       
        return view('admin.product.attributes',$data);
    }

    public function getAttributeValues(Request $request)
    {
        $id = $request->id;
        $attr = AttributeValue::where('attribute_id',$id)->get();
        echo $attr;

    }

    public function get_attribute_details(Request $request)
    {
        $product_id = $request->product_id;
        $detail_id  = $request->detail_id;
        $attr       = ProductAttribute::where('id',$detail_id)->first();
        $details    = ProductAttributeValue::where('product_attribute_id',$detail_id)->get();
        
        
        $data['product_details']['sku']             = $attr->sku;
        $data['product_details']['price']           = $attr->price;
        $data['product_details']['sale_price']      = $attr->sale_price;
        $data['product_details']['image_name']      = $attr->image;

        //$data['product_details'] = json_decode($attr);
        if($details->count()>0)
        {
            foreach ($details as $key => $value) {
                  $data['attribute_details'][$key]['attribute_id']          = $value->attribute_id;
                  $data['attribute_details'][$key]['attribute_value_id']    = $value->attribute_value_id;
                  $data['attribute_details'][$key]['attribute_value']       = $value->attributesname->attribute_name;                  
               }   
        }
        //$data['attribute_details']  = json_decode($details);
        //$data['attribute_images']   = $attribute_images;
        
        echo json_encode($data);

    }



    public function storeAttributeValues(Request $request,$product_id)
    {
        $productattribute = new ProductAttribute;
        

        $sku        = $request->sku;
        $price      = $request->price;
        $sale_price = $request->sale_price; 

        $attribute = $request->attribute;

        $imagename = '';
        if (Input::hasFile('image_name')){
            $image = $request->file('image_name');
            $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/product_attribute');
            $thumbPath = public_path('uploads/product_attribute/thumbnails');

            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath.'/'.$imagename);       

            $image->move($destinationPath, $imagename);
        }


        
        $productattribute->product_id   = $product_id;
        $productattribute->sku          = $sku;
        $productattribute->price        = $price;
        $productattribute->sale_price   = $sale_price;
        $productattribute->image        = $imagename;
        $productattribute->save();

        if(count($attribute)>0)
        {
            foreach ($attribute as $key => $value) {
                $productattrvalue = new ProductAttributeValue;
                $productattrvalue->product_attribute_id = $productattribute->id;
                $productattrvalue->attribute_id         = $key;
                $productattrvalue->attribute_value_id   = $value;
                $productattrvalue->save();

            }
            
        }

        return redirect()->route('product_attributes',$product_id); 
    }

    public function updateAttributeValues(Request $request,$id)
    {
        $productattribute = ProductAttribute::find($id);
        

        $sku        = $request->sku;
        $price      = $request->price;
        $sale_price = $request->sale_price; 
        $attribute  = $request->attribute;

        if (Input::hasFile('image_name')){
            $image = $request->file('image_name');
            $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/product_attribute');
            $thumbPath = public_path('uploads/product_attribute/thumbnails');

            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath.'/'.$imagename);       

            $image->move($destinationPath, $imagename);
            $productattribute->image        = $imagename;

            $file1 = 'uploads/product_attribute/'.$productattribute->image;
            $file2 = 'uploads/product/product_attribute/'.$productattribute->image;
            File::delete($file1, $file2);
        }


        $productattribute->sku          = $sku;
        $productattribute->price        = $price;
        $productattribute->sale_price   = $sale_price;
        
        $productattribute->save();

        ProductAttributeValue::where('product_attribute_id',$id)->delete();
        if(count($attribute)>0)
        {
            foreach ($attribute as $key => $value) {
                $productattrvalue = new ProductAttributeValue;
                $productattrvalue->product_attribute_id = $id;
                $productattrvalue->attribute_id         = $key;
                $productattrvalue->attribute_value_id   = $value;
                $productattrvalue->save();

            }
            
        }

        return redirect()->route('product_attributes',$productattribute->product_id); 
    }

    public function deleteattribute($id)
    {
        $productattribute = ProductAttribute::find($id);
        $file1 = 'uploads/product_attribute/'.$productattribute->image;
        $file2 = 'uploads/product/product_attribute/'.$productattribute->image;
        File::delete($file1, $file2);
        $productattribute->delete();
        ProductAttributeValue::where('product_attribute_id',$id)->delete();

        return redirect()->route('product_attributes',$productattribute->product_id);
    }

}
