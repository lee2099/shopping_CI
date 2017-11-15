<?php
      defined('BASEPATH') OR exit('NO direct script accessed');
?>
<!DOCTYPT html>
<html>
<head>
    <meta charset="UTF-8">
    <title>hello ci </title>
</head>
<body>
<h3 onclick="trunto()">测试</h3>
<script>
    function trunto()
    {
        var url=  "<?php echo site_url('page2')?>";
        window.location.href=url;
    }
</script>
</body>
</html>
