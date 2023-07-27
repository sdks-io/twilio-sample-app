<?php 
require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Twilio SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="loader" style="display:none;"></div>
    <div class="container py-3" id="main">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="./index.php" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                        <!-- <img src="./assets/images/logo.png" width="100" height="35" class="me-2" viewBox="0 0 118 94" alt=""> -->
                        <title>Twilio SMS</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Twilio SMS</span>
                </a>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Twilio SMS API</h1>
                <p class="fs-5 text-body-secondary">Choose one of the options to proceed.</p>
            </div>
        </header>
        <main>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
            <div class="alert alert-success alert-dismissible" id="success-msg" role="alert" style="display:none !important;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    Message Sent Succcessfully!
                </div>
            </div>
            <div class="alert alert-danger alert-dismissible" id="fail-msg" role="alert" style="display:none !important;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Something went wrong!
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Send SMS</h5>
                            <p class="card-text">Send SMS from your twilio phone number.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendSmsModal">Send SMS</button>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">View Sent Items</h5>
                            <p class="card-text">View previously sent sms from your twilio phone number.</p>
                            <a href="./sentItems.php" class="btn btn-primary">View Sent SMS</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<!-- Modal -->
<div class="modal fade" id="sendSmsModal" tabindex="-1" aria-labelledby="sendSmsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sendSmsModalLabel">Send SMS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="sendSmsForm" method="post">
        <div class="modal-body">
            <div class="mb-3">
                <label for="to" class="form-label">To</label>
                <input type="text" name="to" class="form-control" id="to" placeholder="{{MY_PHONE_NUMBER}}">
            </div>
            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" name="from" class="form-control" id="from" placeholder="{{Twilio_PHONE_NUMBER}}" value="<?= $_ENV['TWILIO_PHONE_NUMBER'] ?>">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">SMS Body</label>
                <input type="text" name="body" class="form-control" id="body" placeholder="Hello!">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" id="submitBtn" data-bs-dismiss="modal" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
    $("#submitBtn").click(function () {
        // event.preventDefault();
        var formData = {
            to: $("#to").val(),
            from: $("#from").val(),
            body: $("#body").val(),
        };
        $('#loader').show();
        $('#main').hide();
        $.ajax({
            type: "POST",
            url: "./sendsms.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            $('#loader').hide();
            $('#main').show();
            $('#success-msg').show();
            setTimeout(() => {
                $('#success-msg').hide();
            }, 5000);
            console.log(data);
        }).fail(function (error) {
            $('#loader').hide();
            $('#main').show();
            $('#fail-msg').show();
            setTimeout(() => {
                $('#fail-msg').hide();
            }, 5000);
            console.error();
        });
    });
    $(document).ready(function(){
        $("#fail-msg").css("display", "none");
        $('#success-msg').hide();
    });
</script>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col mb-0 text-muted">This app uses api's provided by <a href="https://twilio.com/">twilio.com</a>. The makers of this app have no association with <a href="https://twilio.com/">twilio.com</a>.</p>
</footer>
</html>