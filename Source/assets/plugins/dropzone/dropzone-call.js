 Dropzone.autoDiscover = false;

 $(document).ready(function() {
     $("#id_dropzone").dropzone({
         maxFiles: 1,
         url: "/ajax_file_upload_handler/",
         success: function(file, response) {
             console.log(response);
         }
     });
 })
 $(document).ready(function() {
     $("#id_dropzone2").dropzone({
         maxFiles: 1,
         url: "/ajax_file_upload_handler/",
         success: function(file, response) {
             console.log(response);
         }
     });
 })