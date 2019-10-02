<!DOCTYPE html>
<html lang="en">
<head>
    <!--- CODED BY moonmatt --->
    <!--- PROJECT ON GITHUB --->
    <!--- https://github.com/moonmatt/browserdefaultpage --->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Browser Default Page - moonmatt</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="background"></div>
    <div class="filter" onclick="redirect()"></div>
    <div id="date"></div>
    <a href="https://github.com/moonmatt/browserdefaultpage"><div class="links">project on <i class="fab fa-github"></i></div></a>
</body>
<script>
function redirect() {
    window.location.href = "https://google.com";
}




setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    var currentTimeString = currentHours + ":" + currentMinutes;
    document.getElementById("date").innerHTML = currentTimeString;
}, 1000);

</script>
</html>