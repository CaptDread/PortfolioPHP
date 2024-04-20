<?php 

$projName = "Name2";
$projTag = "Tag2";
$projDesc = "Desc2";
$projImg = "Img2";
$projLink = "link2.php";
$projType = "website2"
?>



            <section class="project_card-container project_dd">
                <article class="project_card tarot_dd">
                    <div class="card_front">
                        <figure>
                            <img src="<?php echo $projImg;?>" alt="Picture of <?php echo $projName;?>">
                        </figure>
                        <h3 class="project_card-header"><?php echo $projName;?></h3>
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