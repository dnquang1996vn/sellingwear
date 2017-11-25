$(document).on('ready', function() {
    $("#add-category-btn").click(function() {
        console.log('osd');
        $("#updateModal").modal("show");
        $("#save_update").click(function() {
            var updateData = {
                name: $('#category_name').val(),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
               type:'POST',
               url:'/create_category',
               data:updateData,
               success:function(data){
                  alert(data);
               }
            });
        });
    });
});