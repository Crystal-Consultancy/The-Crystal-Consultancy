<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="index.php" class="logo" style="margin-top: 1rem;"><img src="images/logo (1).png" width="160px" height="70px"></a>

         <ul>
            <li><a href="listings.php">View Property <i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <!-- <li><a href="#">my listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">dashboard</a></li>
                     <li><a href="post_property.php">post property</a></li>
                     <li><a href="my_listings.php">my listings</a></li>
                  </ul>
               </li> -->
               <!-- <li><a href="#">options<i class="fas fa-angle-down"></i></a> -->
                  <!-- <ul> -->
                  <li><a href="index.php">Home</a></li>
                     <li><a href="search.php">Filter Search</a></li>
                     <li><a href="listings.php">All Listings</a></li>
                  <!-- </ul> -->
               <!-- </li> -->
               <!-- <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul> -->
                     <li><a href="about.php">About Us</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                     <li><a href="contact.php#faq">FAQ</a></li>
                  <!-- </ul>
               </li> -->
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">Login Now</a></li>
                  <li><a href="register.php">Register New</a></li>
                  <?php if($user_id != ''){ ?>
                  <!-- <li><a href="update.php">update profile</a></li> -->
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->