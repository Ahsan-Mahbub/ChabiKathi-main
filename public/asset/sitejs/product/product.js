function getSubCategory(){
    let id = $("#category_id").val();
    // alert(id);
    let url = '/kathi/cbmin/product/subcategory/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            console.log(response)
            html+=`<option value="">`+'Select Sub Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.sub_category_name+'</option>'
            });
            $("#subcategory_id").html(html);
        }
    });
}
function getSubSubCategory(){
    let id = $("#subcategory_id").val();
    // alert(id);
    let url = '/kathi/cbmin/product/subsubcategory/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            console.log(response)
            html+=`<option value="">`+'Select Sub Sub Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.sub_sub_category_name+'</option>'
            });
            $("#subsubcategory_id").html(html);
        }
    });
}
function getChildCategory(){
    let id = $("#subsubcategory_id").val();
    // alert(id);
    let url = '/kathi/cbmin/product/child-category/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            console.log(response)
            html+=`<option value="">`+'Select Child Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.child_category_name+'</option>'
            });
            $("#child_category_id").html(html);
        }
    });
}
function getGrandChildCategory(){
    let id = $("#child_category_id").val();
    // alert(id);
    let url = '/kathi/cbmin/product/grand-child-category/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            console.log(response)
            html+=`<option value="">`+'Select Grand Child Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.grand_child_category_name+'</option>'
            });
            $("#grand_child_category_id").html(html);
        }
    });
}





function getBrand(){
    let id = $("#shop_id").val();
    // alert(id);
    let url = '/kathi/cbmin/product/brand/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            console.log(response)
            html+=`<option value="">`+'Select Brand'+`</option>`
            html+=`<option value="0">`+'No Band'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.brand_name+'</option>'
            });
            $("#brand_id").html(html);
        }
    });
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah3')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#product_name").keyup(function(){
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
    $("#product_slug").val(Text);        
});