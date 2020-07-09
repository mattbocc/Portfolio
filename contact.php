<?php include('contact_back_end.php');?>

<link rel="stylesheet" href="css/contact.css">
<title>Contact</title>

<header>
    <nav>
        <ul class="contact-nav">
            <li class="prev"><span></span></li>
        </ul>
    </nav>
</header> <br><br>
<!--$_SERVER['PHP_SELF']; or the below (test both)-->
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" value="<?=$fname?>" placeholder="Enter your first name">
        <span class="error"><?= $fname_error ?></span>
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" value="<?=$lname?>"placeholder="Enter your last name">
        <span class="error"><?= $lname_error ?></span>
        <label for="company">Company:</label>
        <input type="text" id="company" name="company" value="<?=$company?>" placeholder="Enter the company you're representing">
        <span class="error"><?= $company_error ?></span>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?=$email?>" placeholder="Enter a valid email">
        <span class="error"><?= $email_error?></span>
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" placeholder="Enter a message for Matthew to see!">
        <input type="submit" value="submit" id="submit" name="submit">
        <span class="success"><?= $success ?></span>
    </fieldset>
</form>