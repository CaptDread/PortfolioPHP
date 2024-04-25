<?php 

$projName = "Build Blog";
$projTag = "Build Cool Shit";
$projDesc = "This is an example of my wordpress experience, while also being a showcase of my artificed builds! Stuff like Face Tracking Cameras, Automated Nerf Guns, LED Fixtures, and more!";
$projImg = "../../dist/img/buildBlog.png";
$projLink = "link3.php";
$projType = "website"
?>



            <section class="project_card-container project_zz">
                <article class="project_card tarot_zz">
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