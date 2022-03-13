<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/colors.css">
  <link rel="stylesheet" href="css/plugins/emoticons.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/line_breaker.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/char_counter.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="css/editorlogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
</head>

<body>
  <div id="editor">
    <div id='edit' style="margin-top: 90px;">
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js"></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/save.min.js"></script>

  <?php
  $str = ''; // variable to store the options
  $tech = array("Cripto", "Software", "Hardware");
  $str = '<option value="' . $tech[0] . '" />' . '<option value="' . $tech[1] . '" />' . '<option value="' . $tech[2] . '" />';
  ?>


  <form action="app/controllers/controllerForm.php?action=save" method="POST">
    <div class="form-group">
      <label>Titulo*:</label>
      <input required pattern="[A-Za-z[^0-9]*{0,50}" class="col-sm-6" type="text" name="titulo"><br><br>
      <label>Categoria*:</label>
      <input class="col-sm-6 custom-select custom-select-sm" type="text" id="t1" name="str" list="l1" required pattern="Cripto|Software|Hardware">
      <datalist id="l1">
        <option>Cripto</option>
        <option>Software</option>
        <option>Hardware</option>
      </datalist>
    </div>
    <div class="myEditor">
      <br>
      <textarea name="editor_content" id="myEditor"></textarea>
    </div>
    <button class="button-40" role="button">Enviar</button>
  </form>

  <script>
    new FroalaEditor('#myEditor', {
      // Set the image upload URL.
      imageUploadParam: 'image_param',
      imageUploadMethod: 'POST',
      hight: 200,
      imageUploadURL: 'upload_image.php',
      imageAllowedTypes: ['jpeg', 'jpg', 'png'],
      imageUploadParams: {
        Froala: true
      },
    })
  </script>

</body>

</html>