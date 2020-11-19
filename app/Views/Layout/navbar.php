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