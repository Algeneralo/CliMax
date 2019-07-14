<script>
    var textArea = document.getElementById('text_area');
    CKEDITOR.replace(textArea, {
        language: 'en',
        filebrowserImageUploadUrl: '{{url('/admin/imgUpload')}}' + "?_token={{csrf_token()}}",
        filebrowserUploadMethod: "form",
        removeDialogTabs: 'image:advanced;image:Link',
    });
    CKEDITOR.on('dialogDefinition', function (e) {
        if (e.data.name == 'image') {
            var dialog = e.data.definition;
            oldOnShow = dialog.onShow;
            dialog.onShow = function () {
                oldOnShow.apply(this, arguments);
                this.selectPage('Upload');
            };
        }
    });
</script>