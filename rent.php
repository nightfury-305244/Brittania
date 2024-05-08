<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <!-- BOXICONS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/0fa496f194.js" crossorigin="anonymous"></script>
        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Brittania Estates</title>
    </head>
    <body>
    <header class="header" id="header">
        <nav class="nav">
            <a href="index.php" class="nav__logo">
                Brittania Estates <i class="bx bxs-home-alt-2"></i>
            </a>
    
            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">
                            <i class='bx bx-home-alt-2'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="rent.php" class="nav__link active">
                            <i class='bx bx-building-house'></i>
                            <span>Rent</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="buy.php" class="nav__link">
                            <i class='bx bxs-bank'></i>
                            <span>Buy</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="commercial.php" class="nav__link">
                            <i class='bx bxs-briefcase'></i>
                            <span>Commercial</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="management.php" class="nav__link">
                            <i class='bx bx-sitemap'></i>
                            <span>Management</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">
                            <i class='bx bx-phone'></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Theme change button -->
            <div class="hamburger-menu" id='hamburger-menu'>
                <i class='bx bx-moon change-theme' id="theme-button"></i>
                <a href="javascript:void(0);" class="hamburger" id="hamburgerIcon">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            Discover Your<br> Next Home
                        </h1>
                        <p class="home__description">
                            Find a home that matches your needs.
                        </p>
                        
                    </div>

                    <div class="home__images">
                        <div class="home__orbe"></div>

                        <div class="home__img ">
                            <img src="assets/img/home.png" alt="">
                        </div>
                    </div>
                </div>
                
            </section>

            
            <!-- Properties-->
            <!-- RESPONSIVE GRID-->
            <div class="card_view__container">

            <?php

                require 'db_connection.php';

                // Pagination
                $results_per_page = 20; // Number of records to display per page
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                $start = ($page - 1) * $results_per_page; // Calculate the starting index for the records

                // Get the total number of column
                $sql_count = "SELECT COUNT(*) as count FROM property WHERE b_r_c = 'Rent' AND available = 'A'";
                $total_records = $conn->query($sql_count)->fetch_row()[0];
                $total_pages = ceil($total_records / $results_per_page);

                // Fetch records with pagination
                $sql = "SELECT * FROM property WHERE b_r_c = 'Rent' AND available = 'A' LIMIT $start, $results_per_page";
                $result = $conn->query($sql);


                 // Display data
                if ($result->num_rows > 0) {
                    // Output data of each row
                        echo "<div class='grid__container'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<article class='nft'>";
                        echo "<div class='popular__card  swiper-slide'>";
                        echo "<div class='card-hover__content'>";
                        echo "<h3 class='card-hover__title'>";
                        echo "<span>" . $row["title"] . "</span>";
                        echo "</h3>";
                        echo "<div class='popular__data'>";
                        echo "<div class='popular__container2'>";
                        echo "<div class='popular__description'>";
                        echo "ADDRESS LINE 1 <BR>";
                        echo "ADDRESS LINE 2 <BR>";
                        echo "CITY <BR>";
                        echo "TOWN <BR>";
                        echo "POSTCODE <BR>";
                        echo "</div>";
                        echo "<div class='popular__description2'>";
                        echo "<div class='popular__description2_item'><span>". $row["bedroom"] . "</span><i class='fa fa-bed' aria-hidden='true'></i></div>";
                        echo "<div class='popular__description2_item'><span>". $row["bathroom"] . "</span><i class='fa-solid fa-toilet'></i></div>";

                        
                        
                        // Display icons based on keywords
                        $keywords = explode(',', $row['keywords']);
                        foreach ($keywords as $keyword) {
                            $keyword = trim($keyword);
                            if ($keyword == 'garden') {
                                echo "<div class='popular__description2_item'><span></span><i class='fa-solid fa-tree'></i></div>";
                            } elseif ($keyword == 'Pool') {
                                echo "<div class='popular__description2_item'><span></span><i class='fa-solid fa-person-swimming'></i></div>";
                            } elseif ($keyword == 'garage') {
                                echo "<div class='popular__description2_item'><span></span><i class='bx bxs-car-garage'></i></div>";
                            }
                        }

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<a href='property_details.php?id=" . $row["id"] . "' class='view_button'>View</a>";
                        echo "</div>";
                        echo "<div class='card-price'><span>RF </span>" . $row["price"] . "<span> PCM</span></div>";
                        echo "<img src='"  . $row["image"] .  "' alt='' />";
                        echo "</div>";
                        echo "</article>";
                    }
                    echo "</div>";
                    

                    echo "<div class='pagination'>";
                    if ($page > 1)
                        echo "<a href='rent.php?page=". $page-1 ."'>&laquo;</a>";
                    else 
                        echo "<a class='disable' href='rent.php?page=". $page-1 ."'>&laquo;</a>";

                    if ($page > 3){
                        echo "<a href='rent.php?page=1'>1</a>";
                        echo "<a>...</a>";
                    }

                    if ($page-1 > 0) {echo "<a href='rent.php?page=". $page-1 ."'>". $page-1 ."</a>";}

                    echo "<a class='active' href='rent.php?page=". $page ."'>". $page ."</a>";

                    if ($page+1 < $total_pages+1) {echo "<a href='rent.php?page=". $page+1 ."'>". $page+1 ."</a>";}

                    if ($page < $total_pages-2) {
                        echo "<a>...</a>";
                        echo "<a href='rent.php?page=". $total_pages ."'>". $total_pages ."</a>";
                    }

                    if ($page < $total_pages)
                        echo "<a href='rent.php?page=". $page+1 ."'>&raquo;</a>";
                    else
                        echo "<a class='disable' href='rent.php?page=". $page+1 ."'>&raquo;</a>";

                    echo "</ul>";
                } else {
                    echo "0 results";
                }
    
                // Close connection
                $conn->close();

            ?></div> 
            <!-- RESPOSNIVE GRID END-->
            <!-- Properties-->            


<script>
 const hamburger = document.querySelector('.hamburger');
const navList = document.querySelector('.nav__list');

hamburger.addEventListener('click', () => {
    navList.classList.toggle('show');
});
</script>

        <!-- <script>
            function toggleNav() {
            var navLinks = document.getElementById("navLinks");
            if (navLinks.style.display === "block") {
                navLinks.style.display = "none";
            } else {
                navLinks.style.display = "block";
            }
        }
            </script> -->
        </main>


        <!-- Footer -->
		<footer id="footer" class="footer section"></footer>
		<!-- Footer Script-->
		<script>
			fetch('footer.html')
				.then(response => response.text())
				.then(html => {
					document.getElementById('footer').innerHTML = html;
				});
		</script>
		<!-- Footer -->

        <!-- Nav Menu Start -->
        <div class="chakra-modal__content-container" id="hamContent">
            <div
                role="dialog"
                id="hamMenu"
                tabindex="-1"
                aria-modal="true"
                class="chakra-modal__content"
                aria-describedby="chakra-modal--body-:r5:"
            >
                <button
                type="button"
                aria-label="Close"
                class="chakra-modal__close-btn"
                id="hamClose"
                >
                    <svg
                        viewBox="0 0 24 24"
                        focusable="false"
                        class="chakra-icon css-onkibi"
                        aria-hidden="true"
                    >
                        <path
                        fill="currentColor"
                        d="M.439,21.44a1.5,1.5,0,0,0,2.122,2.121L11.823,14.3a.25.25,0,0,1,.354,0l9.262,9.263a1.5,1.5,0,1,0,2.122-2.121L14.3,12.177a.25.25,0,0,1,0-.354l9.263-9.262A1.5,1.5,0,0,0,21.439.44L12.177,9.7a.25.25,0,0,1-.354,0L2.561.44A1.5,1.5,0,0,0,.439,2.561L9.7,11.823a.25.25,0,0,1,0,.354Z"
                        ></path>
                    </svg>
                </button>
                <div class="chakra-modal__body" id="chakra-modal--body-:r5:">
                    <div class="css-wkpw2c">
                        <div class="css-1gj4t3y">
                            <a href="index.php" class="nav__logo">
                                Brittania Estates <i class="bx bxs-home-alt-2"></i>
                            </a>
                        </div>
                        <div class="css-1f2qzn3">
                                <a
                                    class="BurgerMenu_BurgerMenu"
                                    href="index.php"
                                    >Home</a
                                >
                                <a
                                    class="BurgerMenu_BurgerMenu BurgerMenu_Selected"
                                    href="rent.php"
                                    >Rent</a
                                >
                                <a
                                    target="_blank"
                                    href="buy.php"
                                    rel="noopener noreferrer"
                                    class="BurgerMenu_BurgerMenu"
                                    >Buy</a
                                >
                                <a
                                    class="BurgerMenu_BurgerMenu"
                                    href="commercial.php"
                                    >Commercial</a
                                >
                                <a
                                    class="BurgerMenu_BurgerMenu"
                                    href="management.php"
                                    >Management</a
                                >
                                <a
                                    class="BurgerMenu_BurgerMenu"
                                    href="contact.php"
                                    >Contact</a
                                >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Menu End -->
       


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bxs-chevrons-up'></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper('.swiper-image-container', {
                slidesPerView: 1, // Number of slides per view
                spaceBetween: 10, // Space between each slide (adjust as needed)
                loop: true, // Enable loop mode
                pagination: {
                    el: '.swiper-pagination', // Add pagination
                    clickable: true, // Allow pagination bullets to be clickable
                },
                navigation: {
                    nextEl: '.swiper-button-next', // Add navigation button for next slide
                    prevEl: '.swiper-button-prev', // Add navigation button for previous slide
                },
            });
        </script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>


        <!-- Hamburger Menu JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Select the hamburger icon and menu container
                const hamburger = document.querySelector('.hamburger');
                const hamMenu = document.querySelector('.ham__menu');

                // Toggle menu visibility when hamburger icon is clicked
                hamburger.addEventListener('click', function() {
                    hamMenu.classList.toggle('open');
                });
            });
        </script>
    </body>
</html>