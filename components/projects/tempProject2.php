<?php 

$projName = "Name2";
$projTag = "Tag2";
$projDesc = "Desc2";
$projImg = "Img2";
$projLink = "link2.php";
$projType = "website2"
?>



            <section class="project_card-container">
                <article class="project_card">
                    <figure>
                        <img src="<?php echo $projImg;?>" alt="Picture of <?php echo $projName;?>">
                    </figure>
                    <div class="project_card-descContainer">
                        <h3 class="project_card-header"><?php echo $projName;?></h3>
                        <p class="project_card-desc"><?php echo $projDesc;?></p>
                        <a href="<?php echo $projLink;?>" target="_blank" rel="noopener noreferrer">View <?php echo $projType;?></a>
                    </div>
                </article>
            </section>