document.getElementById("disval").disabled = true;
    document.getElementById("percentage-box").disabled = true;

    $('#percentage_price').hide();
    $('#percentage-box').click(function() {
        $('#percentage_price')[this.checked ? "show" : "hide"]();

    });

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
                document.getElementById("percentage-box").disabled = false;  
            }else{
               document.getElementById("disval").disabled = true;
                document.getElementById("percentage-box").disabled = true;   
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
            $('#afterdis').val(0);
            $('#afterdisval').val(0);
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
                perc = ((percentagePrice/100) * totalPrice).toFixed(0);
                var disPrice = (totalPrice-perc);
                $('#disval').val(perc);
                $('#afterdis').val(disPrice);
                $('#afterdisval').val(disPrice);
            }if(percentagePrice==0 || isNaN(percentagePrice)){
                alert('hi');
                var emptyPrice = $('#disval').val('');
                console.log(emptyPrice)
                // return false;
            }
            
        }
    }

});