<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Sariputta PDF Creator</title>
</head>
<style>
    #cke_editor1 {
        height: 100%;
        width: 100%;
    }
</style>
<a href="<?= base_url() ?>" class="btn-lg btn-danger">Sariputta Home</a>

<body>
    <div class="container">
        <!-- <a href="<?= base_url() ?>" class="btn-lg btn-danger">Home</a> -->

        <textarea name="editor1" id="editor1" rows="10" cols="80">
            Start making pdf from here
    </textarea>
    </div>
</body>
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1', {
        on: {
            instanceReady: function(evt) {
                var editor = evt.editor;
                editor.resize('100%', '580px');
            }
        }
    });
</script>

</html>