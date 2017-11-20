 Dropzone.autoDiscover = false;
    dropzoneOptions = {
        url: '/create_product/upload_image',
        dictDefaultMessage: 'Drop photos ordddddddddddd click here to upload',
        maxFilesize : 4,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,  
        parallelUploads: 5,
        maxFiles: 5,
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }

    };
    var uploader = document.querySelector('#file-upload');
    var newDropzone = new Dropzone(uploader, dropzoneOptions);
    $("#dZUpload").dropzone({
        url: "/create_product/upload_image",
        dictDefaultMessage: 'Drop photos ordddddddddddd click here to upload',
        maxFilesize : 4,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,  
        autoProcessQueue: false,
        parallelUploads: 5,
        maxFiles: 5,
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });