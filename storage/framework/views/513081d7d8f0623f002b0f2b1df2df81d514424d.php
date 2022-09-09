<form action="add" method="Post">
    <?php echo csrf_field(); ?>
          <input type="text" name="name"  placeholder="Username" />
          <input type="text" name="email" placeholder="E-mail" />
          <input type="password" name="password" placeholder="Password" />
          <input type="password" name="confirmPassword" placeholder="Retype password" />

          <input type="submit"  name="submit">
        </form>
<?php /**PATH C:\xampp\htdocs\zomato\resources\views/add.blade.php ENDPATH**/ ?>