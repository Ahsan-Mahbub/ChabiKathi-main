	$('.stock_product').click(function(){
		let product_info = $(this).data('id');
		console.log(product_info);
		let product_names = product_info.product_name;
		let slug = product_info.slug;
		let product_desc = product_info.product_desc;
		let totalprice = product_info.price;
		let percentage = product_info.percentage;
		let discount = product_info.discount;
		let category_id = product_info.category_id;
		let subcategory_id = product_info.subcategory_id;
		let subsubcategory_id = product_info.subsubcategory_id;
		let product_img = product_info.product_img;
		let product_img_2 = product_info.product_img_2;
		let product_img_3 = product_info.product_img_3;
		let afterdis = product_info.discounted_price;
		let afterdishidden = product_info.discounted_price;
		
		document.getElementById('product_name').value = product_names;
		document.getElementById('product_slug').value = slug;
		document.getElementById('product_desc').value = product_desc;
		document.getElementById('totalprice').value = totalprice;
		document.getElementById('percentage').value = percentage;
		document.getElementById('discount').value = discount;
		document.getElementById('category_id').value = category_id;
		document.getElementById('subcategory_id').value = subcategory_id;
		document.getElementById('subsubcategory_id').value = subsubcategory_id;
		document.getElementById('product_img').value = product_img;
		document.getElementById('product_img_2').value = product_img_2;
		document.getElementById('product_img_3').value = product_img_3;
		document.getElementById('afterdis').value = afterdis;
		document.getElementById('afterdishidden').value = afterdishidden;
	})

	function getBrand(){
        let id = $("#shop_id").val();
        // alert(id);
        let url = '/admin/product/brand/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(element => {
                    html+='<option value='+element.id+'>'+element.brand_name+'</option>'
                });
                $("#brand_id").html(html);
            }
        });
    }

    $(function(){
        $('#totalprice').on('keyup', function() {
            var totalPrice = parseInt($('#totalprice').val());
            var v = $(this).val();
            if(v.length > 0){
                document.getElementById("discount").disabled = false;
                document.getElementById("percentage").disabled = false;  
            }else{
                document.getElementById("discount").disabled = true;
                document.getElementById("percentage").disabled = true;  
                $('#percentage').val(''); 
            }
          calculate();
        });
        $('#percentage').on('keyup', function() {
            var totalPrice = parseInt($('#totalprice').val()); 
            var v = $(this).val();
            if(v.length == 0 && v == '') {
                $('#discount').val('');
                $('#afterdis, #afterdishidden').val(totalPrice);
            } 
         calculate();
        });
        $('#discount').on('keyup', function() {
         calculate();
    });
    
    function calculate(){
        var totalPrice = parseInt($('#totalprice').val()); 
        var percentagePrice = parseInt($('#percentage').val());
        var disEarned = parseInt($('#discount').val());
        var perc="";
        if(isNaN(totalPrice)){
            $('#afterdis').val('');
            $('#afterdishidden').val('');
        }if(isNaN(disEarned)){
            $('#afterdis').val(totalPrice);
            $('#afterdishidden').val(totalPrice);
        }if(disEarned){
            var disPrice = (totalPrice - disEarned)
            console.log(disPrice)
            $('#afterdis').val(disPrice);
            $('#afterdishidden').val(disPrice);
        }if(percentagePrice){
            if(percentagePrice>0){
                perc = ((percentagePrice/100) * totalPrice).toFixed('');
                var disPrice = (totalPrice-perc);
                $('#discount').val(perc);
                $('#afterdis').val(disPrice);
                $('#afterdishidden').val(disPrice);
            }if(percentagePrice==0 || isNaN(percentagePrice)){
                var emptyPrice = $('#discount').val('');
                console.log(emptyPrice)
            }
            
        }
    }

});