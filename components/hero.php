<?php 

$title = "Ain't no heros on the high seas!";


$textArr = ["This is a test to see if the imported Chat feature is working.", "This is a test to see how well this text bubble holds text.", "This is a test to see if the text is popping up randomly."];

// $min = 0;
$max = count($textArr) - 1;
// $disText = $textArr[rand($max)];


?>

        <setion class="hero_container">
            <div class="text_bubble">
                <div class="hero_head-corner">
    
                </div>
                <div class="hero_head">
                    <article class="hero_head-article">
                        <p><?php echo $textArr[rand(0, $max)]; ?></p>
                        <button class="cta_btn">Savy?</button>
                        <!-- <h1 class="hero_head-header">domingo dunlap</h1>
                        <h2 class="hero_head-title">creative technologist</h2>
                        <p class="hero_head-tags">front <span class="tagline">|</span> back <span class="tagline">|</span> games <span class="tagline">|</span> apps | &#38; more</p>
                        <a href="contact.php">Savy?</a> -->
                    </article>
                </div>
            </div>
        </setion>