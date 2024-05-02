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
    <nav class="nav container">
            <a href="index.php" class="nav__logo">
                Brittania Estates <i class="bx bxs-home-alt-2"></i>
            </a>
    
            <div class="nav__list">
                <ul>
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
            <a href="#" class="nav__link">
                <i class='bx bx-moon change-theme' id="themeButton"></i>
            </a>
    
            <!-- Hamburger menu -->
            <a href="javascript:void(0);" class="hamburger" id="hamburgerIcon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
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

                        <div class="home__img">
                            <img src="assets/img/home.png" alt="">
                        </div>
                    </div>
                </div>
                
            </section>

            
            <!-- Properties-->
            <!-- RESPONSIVE GRID-->
            <div class="grid__container">

            <?php

                require 'db_connection.php';

                // Pagination
                $limit = 24; // Number of records to display per page
                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                $start = ($page - 1) * $limit; // Calculate the starting index for the records

                // Fetch records with pagination
                $sql = "SELECT * FROM property WHERE b_r_c = 'Rent' AND available = 'A' LIMIT $start, $limit";
                $result = $conn->query($sql);

                 // Display data
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<article class='popular__card swiper-slide'>";
                        echo "<img src='" . $row["image"] . "' alt='' class='popular__img'>";
                        echo "<div class='popular__data'>";
                        echo "<h2 class='popular__price'>";
                        echo "<span>RF </span>" . $row["price"] . "<span> PCM</span>";
                        echo "<a href='property_details.php?id=" . $row["id"] . "' class='view_button'>View</a>";
                        echo "</h2>";
                        echo "<h3 class='popular__title'>" . $row["title"] . "</h3>";
                        echo "<div class='popular__container2'>";
                        echo "<div class='popular__description'>";
                        echo "ADDRESS LINE 1 <BR>";
                        echo "ADDRESS LINE 2 <BR>";
                        echo "CITY <BR>";
                        echo "TOWN <BR>";
                        echo "POSTCODE <BR>";
                        echo "</div>";
                        echo "<div class='popular__description2'>";
                        echo $row["bedroom"] . "..<i class='fa fa-bed' aria-hidden='true'></i><br>";
                        echo $row["bathroom"] . "....<i class='fa-solid fa-toilet'></i><br>";

                        
                        
                        // Display icons based on keywords
                        $keywords = explode(',', $row['keywords']);
                        foreach ($keywords as $keyword) {
                            $keyword = trim($keyword);
                            if ($keyword == 'garden') {
                                echo "<i class='fa-solid fa-tree'></i><br>";
                            } elseif ($keyword == 'Pool') {
                                echo "<i class='fa-solid fa-person-swimming'></i><br>";
                            } elseif ($keyword == 'garage') {
                                echo "<i class='bx bxs-car-garage'></i><br>";
                            }
                        }
                        
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</article>";
                    }
                    // Pagination links
                    $total_records = $result->num_rows;
                    $total_pages = ceil($total_records / $limit);
    
                    if ($total_pages > 1) {
                        echo "<div class='pagination'>";
                        for ($i = 1; $i <= $total_pages; $i++) {
                            $active_class = ($i == $page) ? 'active' : '';
                            echo "<a href='rent.php?page=$i' class='pagination__link $active_class'>$i</a>";
                        }
                        echo "</div>";
                    }
                } else {
                    echo "0 results";
                }
    
                // Close connection
                $conn->close();

            ?></div> 
            <!-- RESPOSNIVE GRID END-->
            <!-- Properties-->
            

            
            <button id="view-more-button">View More</button>

            

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var page = <?php echo isset($_GET['page']) ? $_GET['page'] : 1; ?>; // Initial page number from URL parameter
                var limit = 24; // Number of records to show per page
                var records = document.querySelectorAll('.popular__card');

                // Function to display records for the current page
                function showRecordsForPage() {
                    var startIndex = (page - 1) * limit;
                    var endIndex = startIndex + limit;

                    // Display records for the current page
                    for (var i = 0; i < records.length; i++) {
                        if (i >= startIndex && i < endIndex) {
                            records[i].style.display = 'block';
                        } else {
                            records[i].style.display = 'none';
                        }
                    }

                    // Toggle visibility of "View More" button based on remaining records
                    var hasMoreRecords = endIndex < records.length;
                    document.getElementById('view-more-button').style.display = hasMoreRecords ? 'block' : 'none';
                }

                // Event listener for "View More" button click
                document.getElementById('view-more-button').addEventListener('click', function() {
                    page++; // Increment page number
                    showRecordsForPage(); // Display records for the updated page
                });

                // Initially display records for the first page
                showRecordsForPage();
            });
        </script>


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