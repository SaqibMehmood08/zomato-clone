<div class="container-fluid p-0 text-light ">
    <header class="text-center">
        <nav class="navbar navbar-expand-md  ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false" aria-label="Toggle Navigation ">
                <span class="navbar-toggler-icon " id="navIcon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuItems">

                    <li class="nav-item getApp">
                        <a href="#" class="navbar-brand icon " ><i class="fa-solid fa-mobile-screen"></i>Get the App</a>

                     </li>


                <div class="collapse navbar-collapse links" id="menuItems">
                    <ul class="navbar-nav">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Investor Relations</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo e($user->name ?? 'Not LOGIN'); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal"  >Sign up</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
  <section >
    <h1 class="logo">Zomato  </h1>

   </section>
           <section >
            <p class="loc">Discover the best food & drinks in <?php echo e($user->location ?? 'n/a'); ?></p>

            </section>

   <section>




   <div class="inputContainer ">
    <a href="https://www.google.com/maps/d/u/0/viewer?ie=UTF8&t=h&oe=UTF8&msa=0&mid=10UWiXaI2-LObzSQz5qglq_Znnao&ll=30.59207549014591%2C69.3480716&z=5"><i class="fa-solid fa-location-dot  icon " ></i></a>


        <input  class="Field " list="location" name="browser" id="browser">
 <datalist id="location">
  <option value="Amritsar">
  <option value="Lahore">
  <option value="Karachi">
  <option value="Multan">
  <option value="Pishawar">
</datalist>
<i class="fa-solid fa-magnifying-glass  icon searches   "><a href=""></a></i>
<input  class="field2" list="location" name="browser" id="browser" placeholder="Search for resturant,cuisine or a dish">
 <datalist id="location">
  <option value="Amritsar">
  <option value="Lahore">
  <option value="Karachi">
  <option value="Multan">
  <option value="Pishawar">
</datalist>

    </div>
    </section>

 </header>
</div>


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Zomato</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            <h1>Login</h1>
        <?php echo $__env->make('Login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Zomato</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h1>SignUp</h1>
        <?php echo $__env->make('registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer mx-auto">


        </div>
      </div>
    </div>

  </div>


</div>


<?php /**PATH C:\xampp\htdocs\zomato\resources\views/Navbar.blade.php ENDPATH**/ ?>