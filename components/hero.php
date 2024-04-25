<?php 

$title = "Ain't no heros on the high seas!";


$textArr = ["I hear The Captain is skilled at knife and axe throwing, a friend of mine has even taken lessons from him.", "They say Dread has a black belt in two different martial arts, and has even won trophies and metals!", "I've seen that there Dread fellow toss a pizza dough behind his back and down his shoulders, quite a feat if you ask me.", "Captain's not here, its hard to keep up with him with his 6 years of parkour experience.", "Cap told me that he has played 6 different characters in D&D, half of them artificers.", "Before Dread was a Captain he spent time converting vans; Solar Panels, projectors,  mini bar... the works."];

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
                        <!-- <button class="cta_btn">Savy?</button> -->
                        <!-- <h1 class="hero_head-header">domingo dunlap</h1>
                        <h2 class="hero_head-title">creative technologist</h2>
                        <p class="hero_head-tags">front <span class="tagline">|</span> back <span class="tagline">|</span> games <span class="tagline">|</span> apps | &#38; more</p>
                        <a href="contact.php">Savy?</a> -->
                    </article>
                </div>
            </div>
        </setion>