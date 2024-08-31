<?php
require_once '../Tables/Datahandler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-3 text-success">Registration</h1>
        <form action="Datahandler.php" method="post" class="bg-light rounded-3 p-5 text-capitalize">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="Username" class="form-control" id="username" aria-describedby="username">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="Address" class="form-control" id="address" aria-describedby="address"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
            </div>
            <button
                type="submit"
                name="On_submit"
                class="btn btn-success"
                id="submitButton">
                Submit
            </button>

            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- script used to check if value == null then disabled the submit button: -->
<!-- <script>
    const submitButton = document.getElementById('submitButton');
    const fields = [
        document.getElementById('name'),
        document.getElementById('username'),
        document.getElementById('address'),
        document.getElementById('exampleInputEmail1'),
        document.getElementById('exampleInputPassword1')
    ];

    function validateForm() {
        let allFilled = true;
        for(let i=0; i<fields.length; i++){
            if (fields[i].value.length === 0) {
                allFilled = false;
            }
        };
        if (allFilled) {
            submitButton.removeAttribute("disabled");
        } else {
            submitButton.setAttribute("disabled", true);
        }
    }

    for(let i=0; i<fields.length; i++){
        fields[i].addEventListener('input', validateForm);
    }

    validateForm();
</script> -->

</html>