<?php

echo '
<!DOCTYPE HTML>
<html>
<head>
<script src="http://www.webglearth.com/api.js"></script> 
<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- BEGIN TimelineJS -->
<script type="text/javascript" src="timeline/build/js/storyjs-embed.js"></script>
<script>
$(document).ready(function() {
    createStoryJS({
        type:       \'timeline\',
        width:      \'700\',
        height:     \'600\',
        source:     \'../timelines-data/' . $_GET['id'] . '.json\',
        embed_id:   \'my-timeline\',
        debug:      true
    });
});
</script>
<!-- END TimelineJS -->



</head>
<body>
    <table>
        <tr>
            <td>
                <div id="my-timeline"></div>
            </td>
            <td>
                <div id="earth_div" style="width:300px;height:600px;border:1px solid gray; padding:2px;"></div> 
            </td>
        </tr>
    </table>
</body>
</html>
'
?>
