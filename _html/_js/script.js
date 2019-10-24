$(document).ready(function(){
    var submitIcon = $('.searchbox-icon');
    var inputBox = $('.searchbox-input');
    var searchBox = $('.searchbox');
    var isOpen = false;
    submitIcon.click(function(){
        if(isOpen == false){
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
        } else {
            searchBox.removeClass('searchbox-open');
            inputBox.focusout();
            isOpen = false;
        }
    });  
     submitIcon.mouseup(function(){
            return false;
        });
    searchBox.mouseup(function(){
            return false;
        });
    $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
  });
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }





    $(document).ready(function() {
	
        $("#telefone").mask("(99) 9999-9999",{completed:function(){
            var fone = $(this).val().replace(/[^0-9]/, "");
        }
            
    });
        
        
            $("#celular").mask("(99) 99999-9999",{completed:function(){
            var fone = $(this).val().replace(/[^0-9]/, "");
            }
            
    });
        
                $("#rg").mask("99.999.999-9",{completed:function(){
        var rg = $(this).val().replace(/[^0-9]/, "");
            }
            
    });
    
        $('.datatime').mask('00/00/0000', {reverse: true});
    
        $('.valor').mask('000.000.000.000.000,00', {reverse: true});
    
        $('.dinheiro').mask('#.##0,00', {reverse: true});
    
        
    });