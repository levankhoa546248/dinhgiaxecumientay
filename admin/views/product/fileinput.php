<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Krajee JQuery Plugins - &copy; Kartik</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          crossorigin="anonymous"/>
    <link href="themes/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="themes/fileinput/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="themes/fileinput/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/locales/fr.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/locales/es.js" type="text/javascript"></script>
    <script src="themes/fileinput/themes/fas/theme.js" type="text/javascript"></script>
    <script src="themes/fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
</head>
<body>
<div class="container my-4">
    <form enctype="multipart/form-data">
        <div class="form-group">
            <div class="file-loading">
                <input id="file-5" class="file" type="file" multiple data-preview-file-type="any"
                       data-upload-url="admin.php?controller=product&action=themhinhanhxe_test&idxe=<?php echo $_GET["idxe"]; ?>"
                       data-delete-url="admin.php?controller=product&action=themhinhanhxe_test&idxe=<?php echo $_GET["idxe"]; ?>"
                       data-theme="fas">
            </div>
        </div>
    </form>
</div>
</body>
<script>
    // $('#file-fr').fileinput({
    //     theme: 'fas',
    //     language: 'fr',
    //     uploadUrl: '#',
    //     allowedFileExtensions: ['jpg', 'png', 'gif']
    // });
    // $('#file-es').fileinput({
    //     theme: 'fas',
    //     language: 'es',
    //     uploadUrl: '#',
    //     allowedFileExtensions: ['jpg', 'png', 'gif']
    // });
    // $("#file-0").fileinput({
    //     theme: 'fas',
    //     uploadUrl: '#'
    // }).on('filepreupload', function (event, data, previewId, index) {
    //     alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    // });
    //$("#file-5").fileinput({
    //    theme: 'fas',
    //    uploadUrl: "admin.php?controller=product&action=themhinhanhxe_test&idxe=" + <?php //echo $idxe; ?>//,
    //    allowedFileExtensions: ['jpg', 'png', 'gif'],
    //    overwriteInitial: false,
    //    maxFileSize: 1000,
    //    maxFilesNum: 10,
    //    //allowedFileTypes: ['image', 'video', 'flash'],
    //    slugCallback: function (filename) {
    //        return filename.replace('(', '_').replace(']', '_');
    //    }
    //});
    // /*
    //  $(".file").on('fileselect', function(event, n, l) {
    //  alert('File Selected. Name: ' + l + ', Num: ' + n);
    //  });
    //  */
    $("#file-5").fileinput({
        uploadUrl: "admin.php?controller=product&action=themhinhanhxe_test&idxe=" + <?php echo $idxe; ?>,
        theme: 'fas',
        showUpload: true,
        showCaption: true,
        browseClass: "btn btn-primary",
        fileType: "any",
        // previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: false,
        initialPreview: [
            "http://lorempixel.com/1920/1080/transport/1",
            "http://lorempixel.com/1920/1080/transport/2",
            "http://lorempixel.com/1920/1080/transport/3"
        ],
        initialPreviewConfig: [
            {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
            {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
            {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
        ]
    });
    //$("#file-5").fileinput({
    //    uploadUrl: "admin.php?controller=product&action=themhinhanhxe_test&idxe=" + <?php //echo $idxe; ?>
    //});
    // $("#file-4").fileinput({
    //     theme: 'fas',
    //     uploadExtraData: {kvId: '10'}
    // });
    // $(".btn-warning").on('click', function () {
    //     var $el = $("#file-4");
    //     if ($el.attr('disabled')) {
    //         $el.fileinput('enable');
    //     } else {
    //         $el.fileinput('disable');
    //     }
    // });
    // $(".btn-info").on('click', function () {
    //     $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    // });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'theme': 'fas',
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
        $("#kv-explorer").fileinput({
            'theme': 'explorer-fas',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                // "http://lorempixel.com/1920/1080/nature/1",
                // "http://lorempixel.com/1920/1080/nature/2",
                // "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ]
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
</script>
</html>