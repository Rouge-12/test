$(document).ready( function() {
    
    $('#pic-upload').change( function() {
        this.form.submit();
    }); // конец change
        
    $('#inp-file').change( function(){
        $('#lab').text('Загружено!');
    }); // конец change
    
    $('#blur').click(function() {
        if($('#login').css('display') === 'block') {
            $('#login').hide();
        } else {
            $('#registration').hide();
        }
        $('#blur').hide();
    }); // конец click
    
    $('#log').click(function() {
        console.log('login click event');
        $('#blur').show();
        $('#login').show();
    }); // конец click
    
    $('#reg').click(function() {
        $('#blur').show();
        $('#registration').show();
    }); // конец click
}); // конец ready
