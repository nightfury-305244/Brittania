<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- FontAwesome-->
    <script src="https://kit.fontawesome.com/0fa496f194.js" crossorigin="anonymous"></script>
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/stylesUC.css">
    <link rel="stylesheet" href="../assets/css/prodstlyes.css">

    <title>Brittania Estates</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
            <nav class="nav">
                <a href="index.php" class="nav__logo">
                    Brittania Estates <i class="bx bxs-home-alt-2"></i>
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">
                                <i class='bx bx-home-alt-2' ></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="rent.php" class="nav__link">
                                <i class='bx bx-building-house' ></i>
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
                                <i class='bx bx-phone' ></i>
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

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        require 'db_connection.php';


        // Get property ID from URL
        if (isset($_GET['id'])) {
            $property_id = $_GET['id'];

            // Fetch record with specified ID
            $sql = "SELECT * FROM property WHERE id = $property_id";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

            // Fetch images associated with the property
            $sql_images = "SELECT image_url FROM property_images WHERE property_id = $property_id";
            $result_images = $conn->query($sql_images);

            // Check if there are images
            if ($result_images && $result_images->num_rows > 0) {
                // Initialize an empty array to store images
                $images = array();
                
                // Fetch images and store them in the array
                while ($row_image = $result_images->fetch_assoc()) {
                    $images[] = $row_image;
                }
            }
            ?>

                <!-- Property details section -->
                <section class="property-details section" id="property-details">
                    <!-- Property details content -->
                    <div class="container">
                        <div class="img-card">
                            <!-- Large Image -->
                            <img src="<?php echo $row['image']; ?>" alt="Featured Image" id="featured-image">
                           <!-- Small image container -->
                        <div class="small-Card">
                            <section class="product-container">
                                <div class="small-Card-container">
                                <!-- Small images -->
                                <?php if (!empty($images)): ?>
                                    <?php foreach ($images as $image): ?>
                                        <img src="<?php echo $image['image_url']; ?>" alt="" class="small-Img">
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </div>
                            </section>
                        </div>

                        <!-- Product info -->
                        <div class="product-info">
                            <h3><?php echo $row['title']; ?></h3>
                            <h5>Price: RF <?php echo $row['price']; ?></h5>
                            <p><?php echo $row['description']; ?></p>

                            <div>
                                <br>
                                <p>Ammenities</p>
                                <!-- Add your notes here if available -->

                                <!-- Property amenities -->
                                <hr>
                                <?php if (isset($row['property_type'])): ?>
                                <div class="prod_ammen">
                                    <p>Property Type</p>
                                    <p><?php echo $row['property_type']; ?></p>
                                </div>
                                <hr>
                                <?php endif; ?>
                                <div class="prod_ammen">
                                    <p>Bedrooms</p>
                                    <p><?php echo $row['bedroom']; ?></p>
                                </div>
                                <hr>
                                <div class="prod_ammen">
                                    <p>Bathrooms</p>
                                    <p><?php echo $row['bathroom']; ?></p>
                                </div>

                                    <!-- Fetching and displaying keywords -->
                                <?php
                                $sql_keywords = "SELECT keywords FROM property WHERE id = $property_id AND (FIND_IN_SET('pool', keywords) OR FIND_IN_SET('garden', keywords) OR FIND_IN_SET('garage', keywords) OR FIND_IN_SET('parking', keywords) OR FIND_IN_SET('balcony', keywords))";

                                $result_keywords = $conn->query($sql_keywords);

                                if ($result_keywords && $result_keywords->num_rows > 0) {
                                    while ($row_keyword = $result_keywords->fetch_assoc()) {
                                        $keywords = explode(',', $row_keyword['keywords']);
                                        foreach ($keywords as $keyword) {
                                            ?>
                                            <hr>
                                            <div class="prod_ammen">
                                                <p><?php echo trim($keyword); ?></p>
                                                <!-- You can add more information related to the keyword here if needed -->
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                                <!-- End of keyword display -->
                                <hr>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
            } else {
                echo "Property not found";
            }
            // Close result set
            $result->free();
        } else {
            echo "Property ID not provided";
        }

        // Close connection
        $conn->close();
        ?>
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
                                    class="BurgerMenu_BurgerMenu"
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
    <script src="../assets/js/scrollreveal.min.js"></script>
    <!--=============== SWIPER JS ===============-->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/details.js"></script>
</body>
</html>
