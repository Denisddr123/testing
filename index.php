<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>image</title>
</head>
<body>
<img src="image.php">
<div class="count">0</div>
<script type="text/javascript">
    var incr, number = localStorage.getItem('incr'),
        count = document.querySelector('.count');
    incr = ++number;
    count.innerHTML = incr;
    localStorage.setItem('incr', incr);
</script>
</body>
</html>