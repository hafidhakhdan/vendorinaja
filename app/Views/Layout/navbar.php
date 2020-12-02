 <!-- NAVBAR FUNCTION -->
 <nav class="d-flex">
   <div class="logo">
     <h1>Vendorinaja</h1>
   </div>
   <ul>
     <li><a href="home/home">Home</a></li>
     <li><a href="">Why Vendorinaja?</a></li>
     <li><a href="">Features</a></li>
     <li><a href="">Pricing</a></li>
   </ul>
   <button class="getstarted" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Get Started</button>
    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="/assets/img/img_avatar.png" alt="avatar" class="avatar">
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div> -->
   <div class="menu-toggle">
     <input type="checkbox" />
     <span></span>
     <span></span>
     <span></span>
   </div>
 </nav>

 <!-- Login -->
 <?= $this->include('Layout/LoginRegister/login'); ?>
 <!-- Register -->
 <?= $this->include('Layout/LoginRegister/register'); ?>