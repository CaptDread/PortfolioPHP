<?php 

$projName = "Moving Mando";
$projTag = "Tag";
$projDesc = "Animated Posters are a favorite of mine. Here I used, photoshop, as well as various other web animating methods to animate a Mandalorian Poster.";
$projImg = "../../dist/img/movingMando.png";
$projLink = "link.php";
$projType = "web Animation"
?>



            <section class="project_card-container project_mm">
                <article class="project_card tarot_mm">
                    <div class="card_front">
                        <div class="card_front-bkgd"></div>
                        <div class="card_front-img"></div>
                    </div>
                    <div class="card_back">
                        <div class="project_card-descContainer">
                            <p class="project_card-desc"><?php echo $projDesc;?></p>
                            <a href="<?php echo $projLink;?>" target="_blank" rel="noopener noreferrer">View <?php echo $projType;?></a>
                        </div>
                        <h3 class="project_card-header"><?php echo $projName;?></h3>
                    </div>
                </article>
            </section>