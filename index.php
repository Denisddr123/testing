<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>image</title>
</head>
<body>
<div align="center">
    <img src="image.php" style="padding-top: 100px;">
    <div class="count" style="padding-top: 20px">0</div>
</div>

<script type="text/javascript">
    var incr, number = localStorage.getItem('incr'),
        count = document.querySelector('.count');
    incr = ++number;
    count.innerHTML = incr;
    localStorage.setItem('incr', incr);
</script>
</body>
</html>