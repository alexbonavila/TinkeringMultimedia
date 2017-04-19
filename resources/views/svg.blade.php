<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.3/css/bootstrap-slider.css" />

</head>
<body>
<h1>SVG</h1>


<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="50" data-slider-max="60" data-slider-step="1" data-slider-value="14"/>

<svg width="300" height="300">
    <circle id="circle" cx="70" cy="70" r="50" stroke="green" stroke-width="4" fill="yellow" />
</svg>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.3/bootstrap-slider.js"></script>

<script>


    // Without JQuery
var slider = new Slider('#ex1', {
	formatter: function(value) {
        document.getElementById('circle').setAttribute('r', value );
	}
});
</script>

</body>
</html>