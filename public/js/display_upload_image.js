$(document).on('ready', function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#feature-image-display').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#feature_image_input").change(function(){
        readURL(this);
    });

    $('.summernote').summernote({
           height: 300,
    });
});