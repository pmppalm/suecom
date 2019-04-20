<form class="row login_form" action="registration.php" method="post" id="contactForm" novalidate="novalidate">
    <div class="col-md-12 form-group">
        <input type="text" class="form-control" id="firstname" name="firstName" placeholder="First name">
    </div>
    <div class="col-md-12 form-group">
        <input type="text" class="form-control" id="lastname" name="lastName" placeholder="Last name">
    </div>
    <div class="col-md-12 form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
    </div>
    <div class="col-md-12 form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="col-md-12 form-group">
        <div class="creat_account">
            <input type="checkbox" id="f-option2" name="selector">
            <label for="f-option2 " style="color:grey">I want to receive exclusive offers from
                BIB.</label>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <button type="submit" value="Register" class="main_btn" name="register">Register</button>
    </div>
</form>

<form id="contactForm" action="index.php" method="post" novalidate="novalidate">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *"
                    required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *"
                    required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input class="form-control" id="phone" name="tel" type="tel" placeholder="Your Phone *"
                    required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" id="message" name="message" placeholder="Your Message *"
                    required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button type="submit" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                value="sendMessage" name="sendMessage">Send
                Message</button>
        </div>
    </div>
</form>