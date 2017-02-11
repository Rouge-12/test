
$(document).ready( function() {
    
    $('#log').click( function() {
        $('.login').toggle();
        if($('.registration').css('display') === 'block') {
            $('.registration').hide();
        }
    });//конец click
    
    $('#reg').click( function() {
        $('.registration').toggle();
        if($('.login').css('display') === 'block') {
            $('.login').hide();
        }
    });//конец click
}); // конец ready
