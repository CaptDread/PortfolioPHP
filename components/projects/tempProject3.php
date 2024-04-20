<?php 

$projName = "Name3";
$projTag = "Tag3";
$projDesc = "Desc3";
$projImg = "Img3";
$projLink = "link3.php";
$projType = "website3"
?>



            <section class="project_card-container project_zz">
                <article class="project_card tarot_zz">
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