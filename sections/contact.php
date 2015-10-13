
<?php

function getFormData($key_name)
{
    if (array_key_exists($key_name, $_POST) === true) {
        return $_POST[$key_name];
    }
    return null;
}

$errors = [];
$emailSent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = getFormData('name');
    $email   = getFormData('email');
    $phone   = getFormData('phone');
    $website = getFormData('website');
    $message = getFormData('message');

    if (empty($name) === true) {
        $errors['name'] = true;
    }
    if (empty($email) === true) {
        $errors['email'] = true;
    }

    if (count($errors) === 0) {
        $to      = 'hello@platinumtechsolutions.co.uk';
        $subject = 'Website Contact Form';
        $headers = 'From: no-reply@platinumtechsolutions.co.uk' . "\n" .
            'Reply-To: no-reply@platinumtechsolutions.co.uk' . "\n" .
            'X-Mailer: PHP/' . phpversion();

        $message = 'Message from Website:' . "\n\n" .
            'Name: '    . $name    . "\n" .
            'Email: '   . $email   . "\n" .
            'Phone: '   . $phone   . "\n" .
            'Website: ' . $website . "\n" .
            'Message:' . "\n" . $message;

        mail($to, $subject, $message, $headers);

        $emailSent = true;
    }
}

?>

<div class="container">
    <div class="page-header">
        <h2>Contact me <small>it's good to talk</small></h2>
    </div>

<?php if ($emailSent === true): ?>

    <div class="form row-fluid">
        <div class="span1"></div>
        <div class="span10 thank-you">
            <h3>Thank you for your message, we will be in contact with you shortly.</h3>
        </div>
        <div class="span1"></div>
    </div>

<?php else: ?>
    <?php if (count($errors) > 0): ?>

    <div class="form row-fluid">
        <div class="span1"></div>
        <div class="span10 form-errors">
            <h3>It looks like you missed something</h3>
            <p>Please make sure you enter a name and email address so that I can contact you.</p>
        </div>
        <div class="span1"></div>
    </div>

    <?php endif; ?>

    <form class="contact-form" action="/index.php#contact" method="post">
        <div class="form row-fluid">
            <div class="span6">
                <h3>About You</h3>
                <p>
                    Your name<span class="required">*</span><br />
                    <input type="text" name="name" value="" class="" placeholder="eg. Carl Casbolt" />
                </p>

                <p>
                    Email address<span class="required">*</span><br />
                    <input type="email" name="email" value="" placeholder="eg. hello@platinumtechsolutions.co.uk">
                </p>

                <p>
                    Telephone number or Skype username<br/>
                    <input type="text" name="phone" value="" placeholder="eg. +44 (0)1234 5678900">
                </p>

                <p>
                    Your website<br/>
                    <input type="text" name="website" value="" placeholder="eg. platinumtechsolutions.co.uk">
                </p>
            </div>
            <div class="span6">
                <h3>Content</h3>
                <p>
                    Message<span class="required">*</span><br />
                    <textarea name="message" cols="120" rows="10"></textarea>
                </p>
            </div>
        </div>

        <div class="form row-fluid">
            <div class="span9"></div>
            <div class="span3 submit">
                <input class="btn btn-submit" type="submit" value="Send Message" />
            </div>
        </div>
    </form>
<?php endif; ?>

</div>
