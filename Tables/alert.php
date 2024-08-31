<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oh Snap! Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-between" role="alert">
    <strong style="font-size: 1.4em;">Error! <span style="font-size: 1.15em;" class="fw-lighter">Please Fill out all the fields.</span></strong>
    <strong id="myTimer" style="font-size: 1.4em;">3</strong>
    </div>
    <h3 id="myHead" class="text-success ms-3">Back within few seconds 3</h3>
</body>
<script>
    const myTimer = document.getElementById('myTimer');
    const myHead = document.getElementById('myHead')
    let count =3;
    // myTimer.innerText = `${count}`;

    setInterval(function(){
        count--;
        myTimer.innerText = `${count}`;
        myHead.innerText = `Back within few seconds ${count}`;

    }, 1000)

    setTimeout(function() {
        window.location.href = 'index.php'; // automatically open index.php after 3sec:
    }, 3000);

</script>
</html>