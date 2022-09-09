<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="stylesheet" href="<?php echo e(url('asset/css/regiesterCss.css')); ?>">
    <title>Registration</title>
</head>
<body>
    <div class="container">
         <div id="login-box">
            <div class="left">
              <h1 ></h1>
                    <form action="Login" method="POST">
                        <?php echo csrf_field(); ?>
                        <div  >

                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li  style="color: red">*<?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <input type="text" name="email" placeholder="E-mail" />
                     <input type="password" name="password" placeholder="Password" />

                     <input type="submit" name="submit">
                    </form>


            </div>

            <div class="right">
              <span class="loginwith">Sign in with<br />social network</span>

              <button class="social-signin facebook">Log in with facebook</button>
              <button class="social-signin twitter">Log in with Twitter</button>
              <button class="social-signin google">Log in with Google</button>
            </div>

          </div>


    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\zomato\resources\views/Login.blade.php ENDPATH**/ ?>