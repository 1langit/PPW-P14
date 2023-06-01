<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ocean One</title>
</head>
<body>
    <!-- Navigaton -->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark">
        <div class="container px-3">
            <img src="img/logo.png">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-label="Expand Navigation">
                <div class="navbar-toggler-icon"></div>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Actions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Resource</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Explore</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cover -->
    <div class="banner-img w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="frst">Save the Ocean</h1>
            <br>
            <p class="frst">
                Plastic waste can have a devastating impact on wildlife. Reducing plastic waste is<br>important for protecting the environment, wildlife, and human health.
            </p>
            <br><br>
            <button type="button" class="btn btn-primary frst">TAKE ACTION</button>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="container p-2 my-5 py-5 d-flex flex-column justify-content-center">
        <div class="row-12 p-5">
            <h2>OFFSET YOUR<br>PLASTIC FOOTPRINT</h2>
            <div class="my-3"></div>
        </div>
        <div class="row justify-content-around align-items-stretch flex-wrap">
            <div class="col-md-3 gy-5">
                <h3 class="scnd">ALIGN</h5>
                <div class="my-4"></div>
                <p class="scnd">
                    66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.
                </p>
                <div class="my-4"></div>
                <button type="button" class="btn btn-primary scnd">LEARN MORE</button>
            </div>
            <div class="col-md-3 gy-5">
                <h3 class="scnd">KICKSTART</h5>
                <div class="my-4"></div>
                <p class="scnd">
                    Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.
                </p>
                <div class="my-5"></div>
                <button type="button" class="btn btn-primary scnd" style="float: inline-end;">LEARN MORE</button>
            </div>
            <div class="col-md-3 gy-5">
                <h3 class="scnd">AMPLIFY</h5>
                <div class="my-4"></div>
                <p class="scnd">
                    Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT
                </p>
                <div class="my-5"></div>
                <button type="button" class="btn btn-primary scnd">LEARN MORE</button>
            </div>
            <div class="my-4"></div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="bg-img pb-5">
        <div class="container p-2 my-5 py-5 d-flex flex-column justify-content-center align-items-center text-center text-white">
            <div class="row-12 p-5">
                <h2>MAKE YOUR IMPACT</h2>
                <div class="my-5"></div>
            </div>
            <div class="row justify-content-around align-items-stretch flex-wrap gy-5">
                <?php
                    include 'database/connection.php';
                    $data = mysqli_query($conn, "SELECT * FROM section3");
                    foreach($data as $row) {
                        echo '
                        <div class="col-md-3">
                            <img src="data:image/png;base64,'.base64_encode($row['image']).'" class="rounded-circle thrd">
                            <div class="my-4"></div>
                            <h4>'.$row["text"].'</h4>
                        </div>
                        ';
                    }
                ?>
                <!-- <div class="col-md-3">
                    <img src="img/icon1.png" class="rounded-circle thrd">
                    <div class="my-4"></div>
                    <h4>COMMIT TO REMOVING A SPECIFIC AMOUNT</h4>
                </div>
                <div class="col-md-3">
                    <img src="img/icon2.png" class="rounded-circle thrd">
                    <div class="my-4"></div>
                    <h4>TIE REMOVAL TO PRODUCT SALES</h4>
                </div>
                <div class="col-md-3">
                    <img src="img/icon3.png" class="rounded-circle thrd">
                    <div class="my-4"></div>
                    <h4>INCENTIVIZE COMMUNITY ACTION</h4>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="container-fluid my-5 py-5 ">
        <!-- 4a -->
        <div class="row py-5">
            <div class="col-md-1 col-sm-auto"></div>
            <div class="col">
                <h5>PROJECT 1:</h5>
                <h2>OCEANBOUND CLEANUP</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 img-a"></div>
            <div class="col-lg-6 text-p-frth bg-color1 text-white">
                <h4>PROBLEMS</h4>
                <p class="frth">
                    Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.
                </p>
            </div>
        </div>
        <div class="row text-end">
            <div class="col-lg-6 text-p-frth text-end bg-color2 text-white">
                <h4>SOLUTION</h4>
                <p class="frth">
                    Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.
                </p>
            </div>
            <div class="col-lg-6 img-b"></div>
        </div>

        <!-- 4b -->
        <div class="row py-5 mt-5">
            <div class="col-md-1 col-sm-auto"></div>
            <div class="col">
                <h5>PROJECT 2:</h5>
                <h2>FISHING NET RECOVERY</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 img-c"></div>
            <div class="col-lg-6 text-p-frth bg-color3 text-white">
                <h4>PROBLEMS</h4>
                <p class="frth">
                    Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.
                </p>
            </div>
        </div>
        <div class="row text-end ">
            <div class="col-lg-6 text-p-frth text-end bg-color1 text-white">
                <h4>SOLUTION</h4>
                <p class="frth">
                    We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.
                </p>
            </div>
            <div class="col-lg-6 img-d"></div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="container-fluid mt-5">
        <div class="row-12 p-5 text-center">
            <h2>GET IN TOUCH</h2>
            <div class="my-5"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1738239980377!2d110.3774998!3d-7.7713847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1683390076835!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 px-5">
                <form>
                    <br>
                    <input type="text" class="form-control-lg form-ffth" placeholder="Name"><br><br>
                    <input type="email" class="form-control-lg form-ffth" placeholder="Email"><br><br>
                    <textarea class="form-control-lg form-ffth" rows="4" placeholder="Write your message here..."></textarea><br><br>
                    <button type="submit" class="btn btn-primary mb-3 ffth">SEND</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="navbar nav-bg">
        <div class="container px-3">
            <img src="img/logo.png">
            <h5 class="text-white m-0 ms-4">OCEAN ONE</h5>
            <div class="mx-auto"></div>
            <ul class="foot">
                <li><a href="#" class="text-white foot">Newsletter</a></li>
                <li><a href="#" class="text-white foot">Privacy policy</a></li>
                <li><a href="#" class="text-white foot">FAQs</a></li>
            </ul>
        </div>
    </footer>



    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 700) {
                nav.classList.add('nav-bg', 'shadow');
            }
            else {
                nav.classList.remove('nav-bg', 'shadow');
            }
        });
    </script>
</body>
</html>