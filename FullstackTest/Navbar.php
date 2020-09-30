<?php
$url=$_SERVER['REQUEST_URI'];
$pages=array(
'Index.php'=>'<svg width="1em" height="1em" viewBox="0 0 16 16" class="icon bottom" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>',
'Mpaf.php'=>'MPAF',
'Venous.php'=>'VENOUS',
'Acs.php'=>'ACS',
'Kivamoxoban.php'=>'KIVAMOXOBAN STUDIES',
'Background.php'=>'BACKGROUND INFORMATION',
);
$active='class="nav-item active"'
?>
<header>
    <div class="row nav_row">
        <div class="col-auto">
            
            <img class="logo_left" src="pictures/portal.png" alt="logo">
        </div>
        <div class="col-auto ml-auto">
            <div class="row">
                <nav>
                    <div class="col-auto">
                        <ul class="nav__links upper">
                            <li class="english">
                                <a>
                                    <form action="/action_page.php" method="POST">
                                        <select id="language" name="language">
                                            <option value="english">English</option>
                                            <option value="hungarian">Hungarian</option>
                                        </select>
                                    </form>
                                </a>
                            </li>
                            <li>
                                <a href="">Contact</a>
                            </li>
                            <li>
                                <a href="">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <ul class="nav__links">
                            <li>
                                <a href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="icon lower" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                </svg>My Collection</a>
                            </li>
                            <li>
                                <a href="backend/logout.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="icon lower" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-auto logo">
            <img class="logo_right" src="pictures/logo.png" alt="logo">
        </div>
    </div>
    <div class="row nav_row bottom">
        <div class="col-auto bottom">
            <ul class="nav__links bar">
                <?php
                foreach ($pages as $key => $value) {
                $active='';
                if (strpos($url, $key)) {
                $active='class="active"';
                }
                echo '<li>
                    <a '.$active.' href="'.$key.'">'.$value.'</a>
                </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</header>