<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-5 mb-3 text-success text-center">Table</h1>
    <div
        class="container table-responsive">
        <table
            class="table table-bordered" style="border: 1px solid #8582824f;">
            <thead>
                <tr class="text-white" style="background-color: #423d3d;">
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #e1dfdf54;">
                    <td scope="row"><?=
                                    isset($_POST['Name']) ? $_POST['Name']  : ""; ?></td>
                    <td scope="row"><?=
                                    isset($_POST['Username']) ? $_POST['Username']  : ""; ?></td>
                    <td scope="row"><?=
                                    isset($_POST['Address']) ? $_POST['Address']  : ""; ?></td>
                    <td scope="row"><?=
                                    isset($_POST['Email']) ? $_POST['Email']  : ""; ?></td>
                    <td scope="row"><?=
                                    isset($_POST['Password']) ? $_POST['Password']  : ""; ?></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-success mt-2" id="homeButton">Back to home-page</button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    const homeButton = document.getElementById('homeButton').addEventListener('click',()=>{
        window.location.href = "index.php"; // open index.php when clicked
    })
</script>
</html>