<?php 
if (isset($data['noindex']) && $data['noindex']) {
    echo '<meta name="robots" content="noindex">';
}

require_once (TEMPLATE.'common/header.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> 
<div class="container-fluid full-width">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6 left-column order-3 order-md-1">
            <div class="leftinnercontent">
                <!-- Billing Details -->
                <div class="billing-details card">
                    <div class="card-body">
                       <h4>Contact information</h4> 
                        <div class="tab-content" id="billingTypeTabsContent">
                            <div class="tab-pane fade show active" id="private" role="tabpanel" aria-labelledby="private-tab">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <h5>Personal details</h5>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First Name" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control country-select" id="country" name="country" required>
                                            <option value="" disabled selected>Country</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Town / City" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode / Zip" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                    </div>
                                    <h5>Company details</h5>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company name" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="companyreg" name="companyreg" placeholder="Company Reg. NR / VAT NR" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="companyfulladdress" name="companyfulladdress" placeholder="Company full address" required>
                                    </div>
                                    <h5>Payment options</h5>
                                    <div class="form-group payment_options">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_option" id="payment_card" value="card" required>
                                            <label class="form-check-label" for="payment_card">
                                                Payment with Card
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_option" id="payment_invoice" value="invoice" required>
                                            <label class="form-check-label" for="payment_invoice">
                                                Payment with Invoice
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-check" style="text-align: left;">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                            <label class="form-check-label" for="defaultCheck1">
                                I Agree with Privacy Policy and Terms and Conditions
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">Go to payment</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6 right-column order-1 order-md-2">
            <div class="rightinnercontent">
                <div class="card servicesummary order-1 order-md-3">
                    <h5>Service Summary</h5> 
                    <div class="card-body">
                        <p><strong>Pick-up Location:</strong> <?php echo htmlspecialchars($_GET['pickup_location'] ?? ''); ?></p>
                        <p><strong>Passengers Count:</strong> <?php echo htmlspecialchars($_GET['passengers_count'] ?? ''); ?></p>
                        <p><strong>Start Date:</strong> <?php echo htmlspecialchars($_GET['start_date'] ?? ''); ?></p>
                        <p><strong>Start Time:</strong> <?php echo htmlspecialchars($_GET['start_time'] ?? ''); ?></p>
                        <p><strong>Destination:</strong> <?php echo htmlspecialchars($_GET['destination'] ?? ''); ?></p>
                        <p><strong>End Date:</strong> <?php echo htmlspecialchars($_GET['end_date'] ?? ''); ?></p>
                        <p><strong>End Time:</strong> <?php echo htmlspecialchars($_GET['end_time'] ?? ''); ?></p>
                    </div>
                    <div class="journeymap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.5626935811306!2d11.576311877239293!3d48.13795617124356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e758ba1b3b803%3A0x9c63954fb57c0d8d!2sPlatzl%20Hotel!5e0!3m2!1sen!2slv!4v1718837416744!5m2!1sen!2slv" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="checkout-details card passengerdetails order-2 order-md-2">
                    <h5 style="margin: 17px 21px 0;">Passenger Details</h5>
                    <div class="card-body">
                        <form id="checkout-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="meeting-sign-text" placeholder="Meeting Sign Text" name="meeting_sign_text" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="passenger-mobile" placeholder="Passenger Mobile" name="passenger_mobile" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="flight-nr" placeholder="Flight NR" name="flight_nr" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.payment_options {
    background: #d6d6d6;
    padding: 20px 20px 1px;
    border-radius: 5px;
}
.form-check {
    text-align: left;
}
.journeymap {
    padding: 20px;
}
.btn-primary.btn-block {
    background: #b6ad9b;
    border: 0;
}
.full-width {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    margin-right: calc(-50vw + 50%);
    margin-top: 70px;
}
.left-column {
    background-color: #f8f9fa;
    padding: 40px 20px 20px;
    display: flex;
    justify-content: flex-end;
}
.left-column .leftinnercontent {
    max-width: 560px;
    display: block;
    width: 100%;
}
.passengerdetails {
    border: 0;
    background: #d6d6d6;
}
.servicesummary {
    border: 0;
    background: #282828;
    color: white;
    max-height: 410px;
    height: 100%;
}
.servicesummary h5 {
    margin: 17px 21px 0;
}
.right-column {
    background-color: #e9ecef;
    padding: 40px 20px 20px;
    display: flex;
    justify-content: flex-start;
}
.right-column .rightinnercontent {
    max-width: 560px;
    display: block;
    width: 100%;
}
.card {
    margin-bottom: 20px;
}
.billing-details.card {
    background-color: transparent;
    border: 0;
}
.checkout-details {
    margin-top: 30px;
}
.billing-details {
    margin-top: 0px;
}
.nav-tabs .nav-link.active {
    background-color: #007bff;
    color: #fff;
}
.nav-tabs .nav-link {
    border: 1px solid #dee2e6;
}
.form-group label {
    font-weight: bold;
}
.form-control {
    margin-bottom: 12px;
    border: 1px solid rgb(189 189 189 / 20%);
}
.form-group {
    margin-bottom: 12px;
}
@media (max-width: 768px) {
    .form-row > .col-md-6 {
        margin-bottom: 15px;
    }
    .left-column {
        order: 3;
    }
    .servicesummary {
        order: 1;
    }
    .passengerdetails {
        order: 2;
    }
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize Select2 on the country dropdowns
    $('.country-select').select2({
        placeholder: 'Select a country',
        allowClear: true
    });

    // Load countries from the JSON file and populate the dropdown
    $.getJSON('common/countries.json', function(data) {
        var countryOptions = '<option value="" disabled selected>Country</option>';
        $.each(data, function(key, entry) {
            countryOptions += '<option value="' + entry.code + '">' + entry.name + '</option>';
        });
        $('.country-select').html(countryOptions);
    });

    // Use IPInfo to get the user's country and set it in the dropdown
    $.get('https://ipinfo.io', function(response) {
        var userCountry = response.country;
        $('.country-select').val(userCountry).trigger('change');
    }, 'jsonp');
});
</script>

<?php require_once (TEMPLATE.'common/footer_black.php') ?>
