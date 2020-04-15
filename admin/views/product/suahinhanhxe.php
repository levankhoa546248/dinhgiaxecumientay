<div class="form-group">
    <div class="file-loading">
        <input id="file-5" class="file" type="file" multiple data-preview-file-type="any"
               data-theme="fas">
    </div>
</div>
<script type="text/javascript">
    $("#file-5").fileinput({
        uploadUrl: "admin.php?controller=product&action=themhinhanhxe&idxe=" + <?php echo $idxe; ?>,
        deleteUrl: "admin.php?controller=product&action=xoahinhanhxe&idxe=" + <?php echo $idxe; ?>,
        theme: 'fas',
        showUpload: true,
        showCaption: true,
        browseClass: "btn btn-primary",
        fileType: "any",
        // previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: true,
        initialPreviewAsData: true,
        initialPreview: [<?php echo $resulthax;?>],
        initialPreviewConfig:
            <?php echo $iprvConf_json; ?>
    });
</script>
