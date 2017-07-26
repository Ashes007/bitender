  $(document).ready(function(){

    $('#country_id').change(function(){
    var country_id = $(this).val();
      $.ajax({
        type: 'POST',
        data: {_token:csrf_token, country_id:country_id},
        url: base_url+'city/getstate',
        success: function(msg){
            $('#state_id').html(msg);            
        }

      });
    });

    $('#category_id').change(function(){
    var ths = $(this);
    var category_id = ths.val();

      $.ajax({
        type: 'POST',
        data: {_token:csrf_token, category_id:category_id},
        url: base_url+'product/getsubcategory',
        success: function(msg){
            $('#subcat_id').html(msg); 
            $('#subcat_section').show();           
        }

      });
    });

    $('#subcat_id').on('change',function(){
      var ths = $(this);
      var category_id = ths.val();
        $.ajax({
          type: 'POST',
          data: {_token:csrf_token, category_id:category_id},
          url: base_url+'product/getsubcategory',
          success: function(msg){
              $('#childcat_id').html(msg); 
              $('#childcat_section').show();           
          }

        });
    });

    $('.prod-options label'). click(function(){
    
        var x = $(this).find('input[type="checkbox"]');
        var label = $(this).find("span").text();
        var srcClass = $(this).attr("class");
        var id = x.attr("data-id")
        
        if(x.prop("checked") == true){
          var attrval = getAttributeValue(id,srcClass);
          $(".product-attr-value").append('<div class="filter-prod-item '+srcClass+'"><h4>'+label+'</h4><select class="form-control" id="selectval-'+srcClass+'" name="attribute['+id+']">'+attrval+'</select></div>');
          
        }
        else if(x.prop("checked") == false){
            $(".product-attr-value").find("."+srcClass).remove();
        }
    });

  });


$(document).on("click",".attribute_edit",function(){
    //alert($(this).attr("data-pid")+"  "+$(this).attr("data-id"));

    var product_id    = $(this).attr("data-pid");
    var detail_id     = $(this).attr("data-id");
    $("#detail_id").val(detail_id);
    $('#frm_productattr').attr('action', base_url+"product/editattribute/"+detail_id);
    $.ajax({
      type:"POST",
      dataType:"json",
      url : base_url+"product/getattrdetails/",
      data:{_token:csrf_token,product_id:product_id,detail_id:detail_id},
      success: function (data)
      {
        //console.log(data.product_details);
        //console.log(data.product_details[0]['sku']);
        
        /*************** PRODUCT DETAIL SECTION *******************/
        $("#sku").val(data.product_details.sku);
        $("#price").val(data.product_details.price);
        $("#sale_price").val(data.product_details.sale_price);
        var img_path = base_url+'../uploads/product_attribute/thumbnails/'+data.product_details.image_name;
        $('#attr_img').attr('src',img_path);
        
        /*************** IMAGE SECTION *******************/
        //for(var i=0; i<data.attribute_images.length; i++)
        //{
          //console.log(data.attribute_images[i]['product_image']);
          //$("#fieldID"+(i+1)).val(data.attribute_images[i]['product_image']);
          //$(".attribute-image").append('<input type="hidden" name="attribute_image_id[]" value="'+data.attribute_images[i]['id']+'" />')
        //}
        
        /*************** ATTRIBUTE SECTION *******************/
        if(data.attribute_details.length > 0)
        {
          
          $(".attributes_check").prop("checked", false);
          $(".product-attr-value").find(".filter-prod-item").remove();
          for(var j=0; j<data.attribute_details.length; j++)
          {
            $("#"+data.attribute_details[j].attribute_value).prop("checked", true);
            var d_id      = data.attribute_details[j].attribute_id;
            var label     = data.attribute_details[j].attribute_value;
            var value_id  = data.attribute_details[j].attribute_value_id;
            
            var attrval = getAttributeValuePair(d_id,d_id,value_id);
            $(".product-attr-value").append('<div class="filter-prod-item '+d_id+'"><h4>'+label+'</h4><select class="form-control" id="selectval-'+d_id+'" name="attribute['+d_id+']">'+attrval+'</select></div>');
           
          }
        }
      }
    });
    
  })
  
  function getAttributeValue(id,classv)
  {

    var returnstr=''; 
    $.ajax({
       type:"POST",
       url: base_url+"product/getattrvalue",
       data: {_token:csrf_token, id:id},
       cache: false,
       success:function(res)
       {
         var result = JSON.parse(res);       
         for(var i = 0; i< result.length; i++)
         {
           returnstr += "<option value='"+result[i].id+"'>"+result[i].attribute_value+"</option>\n";
         }
    
        $("#selectval-"+classv).html(returnstr);
       }
       
    });
  }

  function getAttributeValuePair(id,classv,value)
  {
      //var returnstr = "<option> ----------- Select Value ----------- </option>";
    var returnstr=''; 
    //returnstr ="<select class='form-control'>\n<option> ----------- Select Value ----------- </option>\n";
    //alert("ID : "+id);
    $.ajax({
       type:"POST",
       url: base_url+"product/getattrvalue",
       data: {_token:csrf_token, id:id},
       cache: false,
       success:function(res)
       {
         var result = JSON.parse(res);
         for(var i = 0; i< result.length; i++)
         {
           var selected = '';
           if(result[i].id == value){
             selected = "selected";
           }
           returnstr += "<option value='"+result[i].id+"' "+selected+">"+result[i].attribute_value+"</option>\n";
         }
        $("#selectval-"+classv).html(returnstr);
       }
    });
  }


  