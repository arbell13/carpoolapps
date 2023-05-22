


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpooling</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        /* Remove Arrows on Number Textfield */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        body{
            background-color: pink;
        }
        .container{
            background-color: lightgray;
            border: solid;
        padding: 16px;
        border-radius: 20px;
        }
        h1{
            text-align: center;
        }
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}   
    </style>
</head>

<body>
<img src="carpool.png" class="center">
<h1 class="mb-3"> Transactions of Payment </h1>
    <div class="container my-3 col-lg-5">

        <form action="config/register.php" method="post">


            <hr>

            <div class="row">
                <h3> Personal Details </h3>
                    <label for="fname" class="form-label">Payment Type: <span class="text-danger">*</span></label>
                    <input type="text" name="fname" id="fname" class="form-control" required>

                    <label for="mname" class="form-label">Ticket Amount</label>
                    <input type="text" name="mname" id="mname" class="form-control">

                    <label for="lname" class="form-label">Status:<span class="text-danger">*</span></label>
                    <input type="text" name="lname" id="lname" class="form-control" required>

                    <label for="contact_no" class="form-label">Reference Number(Transaction no.)</label>
                    <input type="number" name="contact_no" id="contact_no" class="form-control">

                    <label for="barangay" class="form-label">Pro Fee <span class="text-danger">*</span></label>
                    <input type="text" name="barangay" id="barangay" class="form-control" required>

                    <label for="city" class="form-label">Con Fee <span class="text-danger">*</span></label>
                    <input type="text" name="city" id="city" class="form-control" required>

                    <label for="province" class="form-label">Balance <span class="text-danger">*</span></label>
                    <input type="text" name="province" id="province" class="form-control" required>
            </div> <br>
                <div class="col">
                    <a href="profile.php" value="Payment" class="btn btn-primary">Payment</a> 
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">


    </script>

    <script>
        $('select').on('change', function () {
            if (this.value != '') {
                $("#id_number").prop('disabled', false);
                $("#id_number").prop('required', true);
            } else {
                $("#id_number").prop('disabled', true);
                $("#id_number").prop('required', false);
                $("#id_number").val('');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>