
<nav class="main-nav">
    <a href="index.php" class="logo">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../../assets/images/logoo.png" alt="">
    </a>

    <div class="search-input">
        <form id="search" action="#">
            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
            <i class="fa fa-search"></i>
        </form>
    </div>
    <ul class="nav">
        <li><a href="../../../pages/home/index.php">Home</a></li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="#">Télécharger</a></li>
        <li><a href="../../../pages/home/profile/profile.php">
                <?php

                echo " " . $row['lastname'] . "";
                ?>
                <img src="../../../../assets/images/profile-header.jpg" alt="">
            </a></li>
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
 
</nav>