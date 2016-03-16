<section class="popular-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="content-title">Popular Destination</h3>
            </div>
        </div>
        <div class="row picture_result">
            <?php

            foreach ($hotels as $hotel)            {
                echo '
                                <div class="png col-md-3 col-sm-6">
                                <a href="Home/detail/"'.$hotel->id.' target="_blank">
                                <img src="'. $hotel->imageurl.'">
                                </a>
                                <p class="country">'. $hotel->hotelname.'</p>
                                <p class="city">'. $hotel->description.'</p>
                                </div>
                                ';
            }

            ?>
        </div>
    </div>