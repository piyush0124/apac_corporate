<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Leading digital media organization in India APAC News Network</title>
    <meta name="description" content="Explore APAC News Network, India's fastest-growing B2B media organisation...">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
    <!-- Ensure jQuery is loaded before Owl Carousel -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
</head>

<body>

<?php
$api_url = 'https://apacnewsnetwork.com/wp-json/mycustom/v1/videos/?category=apac-dialogue-industry';
$response = file_get_contents($api_url);
$videos = json_decode($response, true);

if (!empty($videos)) {
    echo "<div class='carousel-wrap'>";
    echo "<div class='owl-carousel'>";
    foreach ($videos as $video) {
        echo "<div class='item'>";
        echo "<a href='" . htmlspecialchars($video['post_link']) . "'>";
        echo "<img src='" . htmlspecialchars($video['video_image']) . "' alt='" . htmlspecialchars($video['title']) . "'>";
        echo "</a>";
        echo "<h2>" . htmlspecialchars($video['title']) . "</h2>";
        echo "</div>"; // Close item div
    }
    echo "</div>"; // Close owl-carousel div
    echo "</div>"; // Close carousel-wrap div
} else {
    echo "<p>No videos found.</p>";
}
?>

<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // Set the time each slide is shown (5000ms = 5s)
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });
});
</script>


</body>
</html>
