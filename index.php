<?php

$title = "Argh Portfolio off the port bow!";

?>


<?php require('components/header.php'); ?>
		<section class="home_hero">
            <?php require("components/hero.php"); ?>
		</section>
		<main class="home_main">
            <div class="border_container">
                <div class="main_border">
                    <div class="branch1">
                        <?php require('components/assets/leaf.php'); ?>
                        <div class="branch11">
                            <?php require('components/assets/leaf.php'); ?>
                        </div>
                    </div>
                    <div class="branch2">
                        <?php require('components/assets/leaf.php'); ?>
                        <div class="branch21">
                            <?php require('components/assets/leaf.php'); ?>
                        </div>
                    </div>
                    <div class="branch3">
                        <?php require('components/assets/leaf.php'); ?>
                    </div>
                    <div class="branch4">
                        <?php require('components/assets/leaf.php'); ?>
                        <div class="branch41">
                            <?php require('components/assets/leaf.php'); ?>
                        </div>
                    </div>
                    <div class="branch5">
                        <?php require('components/assets/leaf.php'); ?>
                        <div class="branch51">
                            <?php require('components/assets/leaf.php'); ?>
                        </div>
                    </div>
                    <div class="branch6">
                        <?php require('components/assets/leaf.php'); ?>
                        <div class="branch61">
                            <?php require('components/assets/leaf.php'); ?>
                            <div class="branch611">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <section class="main_projects">
                    <div class="main_bkgd">
                        <div class="main_bkgd-blur"></div>
                    </div>
                    <div class="project_sign-container">
                        <?php require("components/assets/driftwood.php"); ?>
                            <article>
                                <p>projects</p>
                            </article>
                        </div>
                    </div>
                    <?php require('components/projects.php'); ?>
                </section>
                <section class="main_pros">
                    <div class="main_bkgd1">
                        <div class="main_bkgd-blur"></div>
                    </div>
                    <ul class="seabed">
                        <?php require("components/pros/methutil.php"); ?>
                        <?php require("components/pros/frameworks.php"); ?>
                        <?php require("components/pros/languages.php"); ?>
                        <?php require("components/pros/databases.php"); ?>
                        <?php require("components/pros/gameEngines.php"); ?>
                    </ul>
                </section>
                <section class="main_about">
                    <!-- <h3>about me</h3> -->
                </section>
            </div>
		</main>
<?php require('components/footer.php'); ?>
		
