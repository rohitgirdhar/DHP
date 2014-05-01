<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="jsoneditor/jsoneditor-min.css">
    <script type="text/javascript" src="jsoneditor/jsoneditor-min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    <div id="jsoneditor" style="width: 800px; height: 800px;"></div>

    <script type="text/javascript" >
        // create the editor
        var container = document.getElementById("jsoneditor");
        var editor = new jsoneditor.JSONEditor(container);

        // set json
        var json = 
<?php
    $fname = 'timelines-data/' . $_GET['id'] . '.json';
    if (file_exists($fname)) {
        echo file_get_contents($fname);
    } else {
        echo file_get_contents('min.json');
    }
?>
        ;
        editor.set(json);

        // get json
        var json = editor.get();
    </script>
</body>
</html>
