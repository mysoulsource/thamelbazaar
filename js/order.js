//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/

$('.btn-number').click(function(e){
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $(this).parent().parent().find(".input-number");
    var currentVal = parseFloat(input.val());
    var rate =parseFloat($(this).parent().parent().parent().parent().parent().find('.rate h3 span').html());
    var price = $(this).parent().parent().parent().parent().parent().find('.price h3 span');
     var sub = parseFloat($("#subtotal span").html());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
                price.html(rate * (currentVal - 1));
                 $("#subtotal span").html(sub - rate);
                
            } 
            if(parseFloat(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
                price.html(rate * (currentVal + 1));
                $("#subtotal span").html(sub + rate);	
            }
            if(parseFloat(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }

	
     $(this).parent().parent().find(".input-number").focusin(function(){
   		 $(this).data('oldValue', $(this).val());
			});



		$(this).parent().parent().find(".input-number").change(function() {
			console.log($(this).html());
			    
			    minValue =  parseInt($(this).attr('min'));
			    maxValue =  parseInt($(this).attr('max'));
			    valueCurrent = parseInt($(this).val());
			    
			    name = $(this).attr('name');
			    if(valueCurrent >= minValue) {
			        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
			    } else {
			        alert('Sorry, the minimum value was reached');
			        $(this).val($(this).data('oldValue'));
			    }
			    if(valueCurrent <= maxValue) {
			        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
			    } else {
			        alert('Sorry, the maximum value was reached');
			        $(this).val($(this).data('oldValue'));
			    }
			    
			    
			});

		$(this).parent().parent().find(".input-number").keydown(function (e) {
			        // Allow: backspace, delete, tab, escape, enter and .
			        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
			             // Allow: Ctrl+A
			            (e.keyCode == 65 && e.ctrlKey === true) || 
			             // Allow: home, end, left, right
			            (e.keyCode >= 35 && e.keyCode <= 39)) {
			                 // let it happen, don't do anything
			                 return;
			        }
			        // Ensure that it is a number and stop the keypress
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			            e.preventDefault();
			        }
			    });

});
