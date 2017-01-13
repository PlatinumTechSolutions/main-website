
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

<div id="contact">
    <div class="page-header">
        <h2>Contact me <small>it's good to talk</small></h2>
    </div>

<?php if ($emailSent === true): ?>

    <div class="thank-you bg-success text-success">
        <h3>Thank you for your message, we will be in contact with you shortly.</h3>
    </div>

<?php else: ?>
    <?php if (count($errors) > 0): ?>

    <div class="form-errors bg-danger text-danger">
        <h3>It looks like you missed something</h3>
        <p>Please make sure you enter a name and email address so that I can contact you.</p>
    </div>

    <?php endif; ?>

    <form class="contact-form form-horizontal" action="/index.php#contact" method="post">
        <h3>About You</h3>

        <label for="contact-name">Name<span class="required text-danger">*</label>
        <input class="form-control" id="contact-name" type="text" name="name" value="" />

        <label for="contact-email">Email address<span class="required text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-addon" id="contact-email-addon">@</span>
            <input class="form-control" id="contact-email" type="email" name="email" value="" aria-describedby="contact-email-addon" />
        </div>

        <label for="contact-number">Telephone number or Skype username</label>
        <input class="form-control" id="contact-number" type="text" name="phone" value="" />

        <label for="contact-website">Website</label>
        <div class="input-group">
            <span class="input-group-addon" id="contact-website-addon">http://</span>
            <input class="form-control" id="contact-website" type="text" name="website" value="" aria-describedby="contact-website-addon" />
        </div>

        <h3>Content</h3>
        <label for="contact-message">Message<span class="required text-danger">*</span></label>
        <textarea class="form-control" id="contact-message" name="message" rows="10"></textarea>

        <div class="submit pull-right">
            <input class="btn btn-submit btn-primary" type="submit" value="Send Message" />
        </div>

        <div class="clearfix"></div>
    </form>
<?php endif; ?>

</div>
