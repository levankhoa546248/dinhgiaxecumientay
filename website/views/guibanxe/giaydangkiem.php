<?php require('website/views/shared/header.php'); ?>
    <div class="container-top" style="margin-top: 50px">
        <div class="panel panel-default">
            <div class="block-title text-center"><h5 class="block-title-name">ĐỊNH GIÁ XE</h5>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group" hidden>
                            <label for="name" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <input name="idguiban" type="text" class="form-control text-capitalize" id="idguiban"
                                value="<?php echo $idguiban ?>"/>
                                <input name="done" type="text" class="form-control text-capitalize" id="done"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giaydangkiem" class="col-sm-3 control-label">Giấy đăng kiểm (hình ảnh)</label>
                            <div class="col-sm-9">
                                <div class="file-loading">
                                    <input id="input-21" type="file" accept="image/*" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-success" id="tieptheo"><i
                                            class="glyphicon glyphicon-arrow-right"></i> Tiếp theo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#input-21").fileinput({
                uploadUrl: "website.php?controller=guibanxe&action=ha_giaydangkiem&idguiban=1",
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Browse",
                browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                removeClass: "btn btn-danger",
                removeLabel: "Delete",
                removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                uploadClass: "btn btn-info",
                uploadLabel: "Upload",
                uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
                uploadExtraData: function(previewId, index) {
                    return {key: index};
                }
            }).on('filesorted', function(e, params) {
                console.log('file sorted', e, params);
            }).on('fileuploaded', function(e, params) {
                $("#done").val(params.filescount);
            });
        });
    </script>
    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
        wish to resize images before upload. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"
            type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
        This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js"
            type="text/javascript"></script>
    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
        HTML files. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/purify.min.js"
            type="text/javascript"></script>
    <!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js
       3.3.x versions without popper.min.js. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
        dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-image-upload/1.2.0/jQuery-image-upload.js"
            integrity="sha512-Km8iFrCs4rxJ/rO+YqAo/Hz+0lVs8qydavMtQg3/nzK4G70LPuGSyoIYOgpbOZLlFdmNpkxDQLMzaMeMhViFrQ=="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#tieptheo').click(function (e) {
                location.href = "website.php?controller=guibanxe&action=hinhanhxe&idguiban=" + $("#idguiban").val();
            });
        });
    </script>
<?php require('website/views/shared/footer.php'); ?>