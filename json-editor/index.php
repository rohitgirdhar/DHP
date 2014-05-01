<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="jsoneditor/jsoneditor-min.css">
    <script type="text/javascript" src="jsoneditor/jsoneditor-min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    <div id="jsoneditor" style="width: 800px; height: 500px;"></div>
    <a href="" id="save" onclick="saveFunc();">Save</a>

    <script type="text/javascript" >
        // create the editor
        var container = document.getElementById("jsoneditor");
        var editor = new jsoneditor.JSONEditor(container);

        // set json
        var json = 
<?php
    $fname = '../../timelines-data/' . $_GET['id'] . '.json';
    if (file_exists($fname)) {
        echo file_get_contents($fname);
    } else {
        echo file_get_contents('min.json');
    }
?>
        ;
        editor.set(json);


		function saveFunc() {
			var json_data = editor.get();
			var json_data = JSON.stringify(json_data);
			$.post(
				"jsonSaver.php?id=<?php echo $_GET['id'] ?>",
				{data : json_data}
			);
		}
		</script>
</body>
</html>
