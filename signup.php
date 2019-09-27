<?php 

include "./config/connect.php";



$attributes = ['name'=>'','email'=>'','password'=>''];
$errors = ['name'=>'','email'=>'','password'=>''];


if(isset($_POST['action'])){
    if(empty($_POST['password'])){
        $errors['password'] = "Please enter your password";
    } else {
        $password = $_POST['password'];
        $re = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
        if(preg_match($re, $password)){
            $attributes['password'] = $password;
        }else{
            $errors['password'] = 'Your password should be a minimum of 8 characters with at least 1 uppercase letter, 1 lowercase letter, and 1 number with no spaces.';
        }
    }
    if(empty($_POST['email'])){
        $errors['email'] = "Please enter your email";
    } else {
        $email = htmlspecialchars($_POST['email']);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $attributes['email'] = $email;
        } else{
            $errors['email'] = 'Please enter a valid email';
        }
    }
    if(empty($_POST['name'])){
        $errors['name'] = 'Please enter your name';
    } else {
            $name = htmlspecialchars($_POST['name']);
            $name = trim($name);
            $re = '/^[a-z A-Z]{3,}$/';
            if(preg_match($re, $name)){
                $attributes['name'] = $name;
            } else {
                $errors['name'] = 'Your name can only contain alphabets and space(s) and must be at least 3 characters long';
            }
    }
    if(!array_filter($errors)){
        //create update query
        $encryptedpw = password_hash($attributes['password'], PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO `customers` (`id`, `name`, `email`, `password`, `joined`) VALUES (NULL, {$attributes["name"]} , {$attributes["email"]}, $encryptedpw, current_timestamp());";
        //send insert query to db
        if(mysqli_query($conn, $insert_query)){
            echo "updated successfully";
        } else {
            echo "error". mysqli_error($conn);
        }
        header('Location: about.php');
    }
} 
?>

<?php include "./templates/header.php" ?>
<title>Sign Up Now!</title>
<link rel="stylesheet" href="./assets/stylesheets/common.css">
<link rel="stylesheet" href="./assets/stylesheets/form.css">
</head>
<body>

<?php include "./templates/nav.php"?>
<div class="container d-flex justify-content-center">
    <div class="card shadow p-3 mb-5 bg-white rounded">
    <form action="signup.php" method="post" class="p-5">
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?? "";?>">
        <?php if(!empty($errors['name'])){ ?>
            <small class="form-text text-danger">
                <?php echo $errors['name']; ?>
            </small>
        <?php } ?>
        </div>

        <div class="form-group">
            <label for="mail">Email</label>
        <input type="text" name="email" id="mail" class="form-control" value="<?php echo $email ?? "" ;?>">
        <?php if(empty($errors['email'])){ ?>
            <small class="form-text text-muted">
                We will not share your email with anyone
            </small>
        <?php } else { ?>
            <small class="form-text text-danger">
                <?php echo $errors['email']; ?>
            </small>
        <?php } ?>

        
        </div>

        <div class="form-group">
            <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <?php if(empty($errors['password'])){ ?>
            <small class="form-text text-muted">
            Your password should be a minimum of 6 characters with at least 1 uppercase letter, 1 lowercase letter, and 1 number with no spaces.
            </small>
        <?php } else { ?>
            <small class="form-text text-danger">
                <?php echo $errors['password']; ?>
            </small>
        <?php } ?>
        </div>

        <div class="form-group">
        <input type="submit" name="action" value="Submit" class="btn btn-primary btn-lg float-right">
        </div>

    </form>
    </div>
</div>



</body>
</html>