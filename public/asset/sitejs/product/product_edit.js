$('#percentage-box').click(function() {
    $('#disval, #afterdis, #afterdisval').val('');
    document.getElementById("percentage_price").checked = false;
    var nullPrice = $('#percentage').val('');
});

$(function(){
    $('#totalprice').on('keyup', function() {
        var totalPrice = parseInt($('#totalprice').val());
        var v = $(this).val();
        if(v.length > 0){
            document.getElementById("disval").disabled = false;
            document.getElementById("percentage").disabled = false;  
        }else{
            document.getElementById("disval").disabled = true;
            document.getElementById("percentage").disabled = true;  
            $('#percentage').val(''); 
        }
      calculate();
    });
    $('#percentage').on('keyup', function() {
        var totalPrice = parseInt($('#totalprice').val()); 
        var v = $(this).val();
        if(v.length == 0 && v == '') {
            $('#disval').val('');
            $('#afterdis, #afterdisval').val(totalPrice);
        } 
     calculate();
    });
    $('#disval').on('keyup', function() {
     calculate();
    });

    function calculate(){
        var totalPrice = parseInt($('#totalprice').val()); 
        var percentagePrice = parseInt($('#percentage').val());
        var disEarned = parseInt($('#disval').val());
        var perc="";
        if(isNaN(totalPrice)){
            $('#afterdis').val('');
            $('#afterdisval').val('');
        }if(isNaN(disEarned)){
            $('#afterdis').val(totalPrice);
            $('#afterdisval').val(totalPrice);
        }if(disEarned){
            var disPrice = (totalPrice - disEarned)
            console.log(disPrice)
            $('#afterdis').val(disPrice);
            $('#afterdisval').val(disPrice);
        }if(percentagePrice){
            if(percentagePrice>0){
                perc = ((percentagePrice/100) * totalPrice).toFixed('');
                var disPrice = (totalPrice-perc);
                $('#disval').val(perc);
                $('#afterdis').val(disPrice);
                $('#afterdisval').val(disPrice);
            }if(percentagePrice==0 || isNaN(percentagePrice)){
                var emptyPrice = $('#disval').val('');
                console.log(emptyPrice)
            }
            
        }
    }

});
$(document).ready(function () {
    function getSubCategory(){
    let id = $("#category_id").val();
    let url = '/kathi/cbmin/product/subcategory/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
           let html = $();
           html+=`<option value="">`+'Select Sub Category'+`</option>`
            $.each(response, function (i, item) {
                html = html.add("<option value=" + item.id +" >" + item.sub_category_name + "</option>")
            });
            $("#subcategory_id").html(html);
        }
    });
}
getSubCategory();
});

function getSubCategory(){
    let id = $("#category_id").val();
    let url = '/kathi/cbmin/product/subcategory/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            html+=`<option value="">`+'Select Sub Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.sub_category_name+'</option>'
            });
            $("#subcategory_id").html(html);
        }
    });
}
$(document).ready(function () {
    function getSubSubCategory(){
        var id = $('#subcategory_id :selected').val();
        let url = '/kathi/cbmin/product/subsubcategory/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                // console.log(response)
                let html = $();
                html+=`<option value="">`+'Select Sub Sub Category'+`</option>`
                $.each(response, function (i, item) {
                    html = html.add("<option value=" + item.id +" >" + item.sub_sub_category_name + "</option>")
                });
                $("#subsubcategory_id").html(html);
            }
        });
    }
getSubSubCategory();
});
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
            html+=`<option value="">`+'Select Sub Sub Category'+`</option>`
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.sub_sub_category_name+'</option>'
            });
            $("#subsubcategory_id").html(html);
        }
    });
}
$(document).ready(function () {
    function getChildCategory(){
        var id = $('#subsubcategory_id :selected').val();
        console.log(id)
        let url = '/kathi/cbmin/product/child-category/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                // console.log(response)
                let html = $();
                html+=`<option value="">`+'Select Child Category'+`</option>`
                $.each(response, function (i, item) {
                    console.log(item)
                    html = html.add("<option value=" + item.id +" >" + item.child_category_name + "</option>")
                });
                $("#child_category_id").html(html);
            }
        });
    }
getChildCategory();
});
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
    let url = '/admin/product/brand/'+id;
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            let html = '';
            response.forEach(element => {
                html+='<option value='+element.id+'>'+element.brand_name+'</option>'
            });
            $("#brand_id").html(html);
        }
    });
}

$(document).ready(function () {
    function getBrand(){
        let id = $("#shop_id").val();
        let url = '/admin/product/brand/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
               let html = $();
                $.each(response, function (i, item) {
                    html = html.add("<option value=" + item.id +" >" + item.brand_name + "</option>")
                });
                $("#brand_id").html(html);
            }
        });
    }
getBrand();
});

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