<?php 

$projName = "captain's port";
$projTag = "Portfolio";
$projDesc = "Custom made and designed by yours truly. Built to showcase some of my favorite parts of web development, while staying true to who I am. Built with PHP, Javascript, SCSS, and gsap.";
$projImg = "../../dist/img/captainsPort.png";
$projLink = "captdread.com";
$projType = "my portfolio"
?>



            <section class="project_card-container project_dd">
                <article class="project_card tarot_dd">
                    <div class="card_front">
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