<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
background-color: #f4f4f4;
margin: 0;
padding: 0;
">
    <div style="
    padding: .75rem;
    width: 90%;
    max-width: 600px;
    margin: 0 auto;">
        <img src="https://www.windowsupportfund.uk/assets/img/logo-2.svg" alt="" width="180px" style="max-width: 100%;">
    </div>
    <div style="
    background-color: #fff;
    padding: .75rem;
    width: 90%;
    max-width: 600px;
    margin: 1rem auto;
    border-radius: 5px;
    border: 1px solid #cee0f3;
    ">
    <h1>Welcome to the Window Support Fund</h1>
    <p>Dear {{first_name}},</p>
    <p>We have got your application to help you with your windows and doors.</p>
    <h2>Confirmation of your details</h2>
    <p>First Name: {{first_name}}</p>
    <p>Last Name: {{surname}}</p>
    <p>Email: {{email}}</p>
    <p>Phone: {{phone}}</p>
    <p>Postcode: {{post-code}}</p>
    <p>Number of windows: {{windows_num}}</p>
    <p>Number of doors: {{doors_num}}</p>
    <p>Any other information: {{other_info}}</p>
    <h2>What happens next?</h2>
    <p>A member of our funding team will be in touch with you very soon to discuss your application and to see how we can help you.</p>
    <p>In the meantime, here is a brief summary of how The Window Support Fund Works:</p>
    <ul>
        <li>We provide assistance to homeowners in need of help with replacing windows and doors, this can sometimes be costly. Our support is prioritised for those most in need.</li>
        <li>The support we offer depends on the homeowners circumstances. This could be a fully installation. However, if you are not eligible for this we can still provide help by offering a large discount</li>
        <li>In this event, one of our trusted partners will continue with your application.</li>
    </ul>
    </div>
    <div style="
    background-color: #d9e7f2;
    padding: 1rem;
    width: 90%;
    max-width: 600px;
    margin: 1rem auto;
    font-size: small;
    ">
        <p>You have been sent this email as an auto reply message, originating from the form you filled out.</p>
        <p>If you have any questions or concerns, please do not hesitate to contact us at <a href="mailto:info@windowsupportfund.uk">info@windowsupportfund.uk</a></p>
        <h3>Want to opt out of your application?</h3>
        <p><a href="<?=$_SERVER['REQUEST_SCHEME'];?>://<?=$_SERVER['SERVER_NAME'];?>/opt-out?email={{email}}">Click here to opt out</a></p>

    </div>
</body>

</html>