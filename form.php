<?php
$isValid = false;
$errors = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);

    //do some validations
    $name = $_POST['name'];
    $email = $_POST['email'];
    if (preg_match("/.+@\w+\.\w+/", $email)) {
        $isValid = true;
    } else{
        $isValid = false;
        $errors['email'] = "Invalid email format";
    }
    

    //if all is well, save to the DB or CRM
    if($isValid){
        $name = '';
        $email = '';
        $success = "Form submitted successfully";
    }
}

print_r($_GET);
print_r($_REQUEST);
// print_r($_ENV);
// print_r($_SERVER);

?>

<?php include('header.php'); ?>

<h1>Contact Us</h1>

<form method="POST">
    <?php
        if(!$isValid) {
            ?>
                <p class="error-message">Invalid data provided!</p>
            <?php
        } else if ($success){
            ?>
                 <p class="success-message"><?php echo $success ?></p>
        
            <?php
        }
    ?>
    <p class="form-field">
        <label for="name">Name</label>
        <input id="name" name="name" value="<?php echo $name; ?>"/>
    </p>
    <p class="form-field <?php $errors['email'] ? 'error' : ''; ?>">
        <label for="email">Email</label>
        <input id="email" name="email" value="<?php echo $email; ?>"/>
        <span class="error-message"><?php echo $errors['email']; ?></span>
    </p>

    <button type="submit">Submit</button>
</form>

<?php include('footer.php'); ?>