<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, in
    itial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<input type="search" id="addressinput" placeholder="Where are we going?" />
<input type='text' id='field_2' placeholder="Barangay">

<script type="text/javascript" src="js/plugins/places.js@1.15.5.js"></script>
<script>
  var placesAutocomplete = places({
    appId: 'plMTZXKJ5812',
    apiKey: '12639cd1848fa6c7c228acd9d8c938a1',
    container: document.querySelector('#addressinput')
  });
</script>

<body>

</body>

</html>