$(document).ready(function(){
$('input[type="radio"]').mousedown(function() { 
    // if it was checked before
    if(this.checked) {
        // bind event to reset state after click is completed
        $(this).mouseup(function() {  
            // bind param, because "this" will point somewhere else in setTimeout
            var radio = this;
            // apparently if you do it immediatelly, it will be overriden, hence wait a tiny bit
            setTimeout(function() { 
                radio.checked = false; 
            }, 5); 
            // don't handle mouseup anymore unless bound again
            $(this).unbind('mouseup');
        });
    }
});
});