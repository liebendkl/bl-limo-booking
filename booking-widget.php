<div class="form-cst form-cstnew container mt-5 booking-form">
<h4 style="margin: -6px 0 20px;">Book a ride in just 5 min</h4>
    <ul class="nav nav-tabs" id="bookingTabs" role="tablist" style="margin: 1px -20px 25px;">
        <li class="nav-item">
            <a class="nav-link active" id="transfers-tab" data-toggle="tab" href="#transfers" role="tab" aria-controls="transfers" aria-selected="true">Transfers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="time-rentals-tab" data-toggle="tab" href="#time-rentals" role="tab" aria-controls="time-rentals" aria-selected="false">Time Rentals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Form</a>
        </li>
    </ul>
    <div class="tab-content" id="bookingTabsContent">
        <div class="tab-pane fade show active" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
        <form id="transfers-form" action="/booking-step-2" method="POST">
                <div class="form-group">
                    <label for="pickup-location">Pick-up location</label>
                    <input type="text" class="form-control" id="pickup-location" name="pickup_location" placeholder="Address, Hotel or Airport" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="start-date">Start date</label>
                        <input type="date" class="form-control" id="start-date" name="start_date" placeholder="Start date" required>
                    </div> 
                    <div class="form-group col-6"> 
                        <label for="start-time">Start time</label>
                        <input type="time" class="form-control" id="start-time" name="start_time" placeholder="" required>
                    </div>
                </div>
                <div class="form-group formgreyblock">
                    <label for="passengers_count">Passengers count</label>
                    <input type="number" class="form-control" id="passengers-count" name="passengers_count" placeholder="type number of Passengers" required>
                </div>
                <div class="form-group">
                    <label for="destination">Destination | Drop-of location</label>
                    <input type="text" class="form-control" id="destination" name="destination" placeholder="Address, Hotel or Airport" required>
                </div>
                <button type="submit" class="btn cta-primary w-100">Check available cars</button>
            </form>
            <!-- <div>1 2 3</div> -->
        </div>
        <div class="tab-pane fade" id="time-rentals" role="tabpanel" aria-labelledby="time-rentals-tab">
            <form id="time-rentals-form">
                <div class="form-group">
                    <label for="pickup-location-rental">Pick-up location</label>
                    <input type="text" class="form-control" id="pickup-location-rental" name="pickup_location_rental" placeholder="Address, Hotel or Airport" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="start-date-rental">Start date</label>
                        <input type="date" class="form-control" id="start-date-rental" name="start_date_rental" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="start-time-rental">Start time</label>
                        <input type="time" class="form-control" id="start-time-rental" name="start_time_rental" required>
                    </div>
                </div>
                <div class="form-group formgreyblock">
                    <label for="passengers-count-rental">Passengers count</label>
                    <input type="number" class="form-control" id="passengers-count-rental" name="passengers_count_rental" placeholder="type number of Passengers" required>
                </div>
                <div class="form-group">
                    <label for="destination-rental">Destination</label>
                    <input type="text" class="form-control" id="destination-rental" name="destination_rental" placeholder="Address, Hotel or Airport" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="end-date-rental">End date</label>
                        <input type="date" class="form-control" id="end-date-rental" name="end_date_rental" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="end-time-rental">End time</label>
                        <input type="time" class="form-control" id="end-time-rental" name="end_time_rental" required>
                    </div>
                </div>
                <button type="submit" class="btn cta-primary w-100">Check available cars</button>
            </form>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <p>Leave a request and our specialist will contact you and confirm your reservation</p>
                    <?php require (TEMPLATE.'common/topformfull.php')?>
        </div>
    </div>
</div>

<style>
.booking-form {
    background: white;
}
.nav-link {
    padding: .5rem .8rem;
}
.booking-form ul.nav {
    justify-content: center;
}
.booking-form label {
    margin-bottom: 1px;
    text-align: left;
    width: 100%;
    font-size: 14px;
}
.request-main.newstylebl2 .form-cst {
    padding: 28px 20px;
}
.booking-form .form-group {
    margin-bottom: 15px;
}
.booking-form .formgreyblock {
    background: #e9e9e9;
    padding: 10px 19px 16px; 
    margin: 0 -20px 17px;
}
</style>

<script>
    $(document).ready(function() {
        $('#transfers-form, #time-rentals-form, #contact-form').on('submit', function(event) {
            event.preventDefault();
            alert('Form submitted!');
        });
    });
</script>