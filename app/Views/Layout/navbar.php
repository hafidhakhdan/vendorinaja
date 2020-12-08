 <!-- NAVBAR FUNCTION -->
 <nav class="d-flex">
   <div class="logo">
     <h1>Vendorinaja</h1>
   </div>
   <ul>
     <?php if (session()->logged_in == true) : ?>
       <li><a href="/Home">Home</a></li>
       <li><a href="#">Product</a></li>
       <li><a href="/Home/help">Support</a></li>
       <li><a href="/Home/transaksi">Transaction</a></li>
       <li><a href="/Home/pricing">Pricing</a></li>
   </ul>
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <img src="/assets/img/img_avatar.png" alt="avatar" class="avatar">
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
     <a class="dropdown-item" href="#">Hi, User!</a>
     <a class="dropdown-item" href="/Auth/logout">Logout</a>
   </div>
 <?php else : ?>
   <!-- <li><a href="/Home/index">Home</a></li> -->
   <li><a href="">Why Vendorinaja?</a></li>
   <li><a href="">Features</a></li>
   <li><a href="/Publik/pricing">Pricing</a></li>
   </ul>
   <button class="getstarted" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Get Started</button>
 <?php endif ?>

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