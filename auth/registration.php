<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--Bootystrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tel input JS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


</head>

<body class="bg-custom overflow-auto">
    <main>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="p-1 w-md-50 h-100 d-flex justify-content-center">
                <div class="card p-2 p-md-5 m-md-5 shadow w-sm-50 ">
                    <h1 class="card-title text-center text-custom-red">E-commerce Website</h1>
                    <h4 class="card-title text-center">Create New Account</h4>
                    <form action="process-registration.php" method="POST">
                        <div class="form-group py-2">
                            <label for="InputName">Full Name</label>
                            <input type="name" name="name" class="form-control" id="InputEmail" placeholder="Enter name"
                                required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPhone">Phone No.</label>
                            <input type="tel" name="phone" class="form-control" id="InputPhone"
                                placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputEmail">Email address</label>
                            <input type="email" name="email" class="form-control" id="InputEmail"
                                placeholder="Enter email" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPassword1">Create Password</label>
                            <input type="password" name="password1" class="form-control" id="InputPassword1"
                                placeholder="Create Password" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPassword2">Retype Password</label>
                            <input type="password" name="password2" class="form-control" id="InputPassword2"
                                placeholder="Retype Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="Submit">Submit</button>
                        </div>

                    </form>

                    <div class="mt-2" id="message">
                        <h3 class="fs-6">Password must contain the following:</h3>
                        <ul class="list-group">
                            <li id="letter" class="list-group-item fs-6 invalid">A <b>lowercase</b> letter</li>
                            <li id="capital" class="list-group-item fs-6 invalid">A <b>capital (uppercase)</b> letter
                            </li>
                            <li id="number" class="list-group-item fs-6 invalid">A <b>number</b></li>
                            <li id="length" class="list-group-item fs-6 invalid">Minimum <b>8 characters</b></li>
                        </ul>
                    </div>
                </div>
            </div>
    </main>




    <!-- <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>