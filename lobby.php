<html>
    <?php
    if (isset($_GET['page'])) {
	    $page = $_GET['page'];
    } else {
	    $page = 'home';
    }
    ?>

    <style>
        <?php
	    if ($page == 'abilities') {
	    	echo 'section#abilities {
	    		display: block;
	    	}';
	    	$menu_status = 'abilities';
	    } else if ($page == 'portfolio') {
	    	echo 'section#portfolio {
	    		display: block;
	    	}';
	    	$menu_status = 'portfolio';
        } else {
	    	echo 'section#home {
	    		display: block;
	    	}';
	    	$menu_status = 'home';
	    }
        ?>
    </style>

    <head>
        <title>Xichuan</title>
        <link rel="icon" type="image/x-icon" href="assets/briantjan-ico.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style-lobby.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="nav" style="background-image: url('assets/nav_edited.png'); background-size: cover; background-repeat: no-repeat;"></div>
        <div class="nav-mobile" style="background-image: url('assets/nav_2.png'); background-size: cover; background-repeat: no-repeat;"></div>
        <div class="nav-logo" style="background-image: url('assets/logo brian.png'); background-size: cover; background-repeat: no-repeat;"></div>
        <div class="nav-menu-cont">
            <div class="nav-menu-btn <?php if ($menu_status == 'home') { echo 'active'; } ?>" onclick="location.href='?page=home'">
                <div class="nav-menu-txt">Home</div>
            </div>
            <div class="nav-menu-btn <?php if ($menu_status == 'abilities') { echo 'active'; } ?>" onclick="location.href='?page=abilities'">
                <div class="nav-menu-txt">Abilities</div>
            </div>
            <div class="nav-menu-btn <?php if ($menu_status == 'portfolio') { echo 'active'; } ?>" onclick="location.href='?page=portfolio'">
                <div class="nav-menu-txt">Portfolio</div>
            </div>
        </div>
        <div class="nav-menu-cont-mobile">
            <div class="nav-menu-btn <?php if ($menu_status == 'home') { echo 'active'; } ?>" onclick="location.href='?page=home'">
                <div class="nav-menu-txt">Home</div>
            </div>
            <div class="nav-menu-btn <?php if ($menu_status == 'abilities') { echo 'active'; } ?>" onclick="location.href='?page=abilities'">
                <div class="nav-menu-txt">Abilities</div>
            </div>
            <div class="nav-menu-btn <?php if ($menu_status == 'portfolio') { echo 'active'; } ?>" onclick="location.href='?page=portfolio'">
                <div class="nav-menu-txt">Portfolio</div>
            </div>
        </div>

        <section id="home">
            <div class="my-image" style="background-image: url('assets/foto me.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="my-image-mobile" style="background-image: url('assets/foto me.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="home-bg">
                <div class="bg-image" style="background-image: url('assets/bg 1_transparan.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="ttl">Selamat datang di kepala gue...</div>
                <div class="txt">pusat identitas gue ya disini...
                hey, gue pengen kenalan jadinya gue kasih tur singkat ke pikiran gue yang ini.
                sorry bagian otak lain gak bisa diakses ya, ada rahasia-rahasia yang cuma gue yang tahu.

                Anyway, nama gue Brian Christiansen, tapi seringnya dipanggil Brian Tjan sama orang terdekat.
                gue sekarang lagi kuliah di Raffles Design Institue Jakarta major Digital Media Design.
                Impian gue adalah meninggalkan legacy untuk Indonesia, apapun itu... a bit cliche, yes, but I'm serious.
                Gue memang suka gambar dari kecil, dan semakin kesini meruncing ke konseptor, yap... gue suka ngonsep.</div>
                <div class="detail-ttl">Check beberapa detail disini</div>
                <div class="detail-cont">
                    <div class="detail-btn">
                        <div class="detail-btn-txt">Abilities</div>
                    </div>
                    <div class="detail-btn">
                        <div class="detail-btn-txt">Portfolio</div>
                    </div>
                </div>
                <div class="edu-ttl">This is my dojo...</div>
                <div class="edu-cont">
                    <div class="edu-dtl-cont">
                        <div class="edu-name">SD Kristen Kalam Kudus Solo</div>
                        <div class="edu-empty-bar"></div>
                        <div class="edu-block-bar">
                            <div class="edu-stat">Completed</div>
                        </div>
                    </div>
                    <div class="edu-dtl-cont">
                        <div class="edu-name">SMA Widya Wacana Solo</div>
                            <div class="edu-empty-bar"></div>
                            <div class="edu-block-bar">
                                <div class="edu-stat">Completed</div>
                            </div>
                        </div>
                    <div class="edu-dtl-cont">
                        <div class="edu-name">SMP PL Bintang Laut Solo</div>
                            <div class="edu-empty-bar"></div>
                            <div class="edu-block-bar">
                                <div class="edu-stat">Completed</div>
                            </div>
                        </div>
                    <div class="edu-dtl-cont">
                        <div class="edu-name">Raffles Design Institute Jakarta</div>
                            <div class="edu-empty-bar"></div>
                            <div class="edu-block-bar" style="width: 45%; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                <div class="edu-stat">Ongoing...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-txt">Tambahan kecil, gue dulu ketua OSIS di SMA, pernah ikut olimpiade Fisika, dan ikut DBL (tapi gak menang dan cuma subtitute aja). Terutama di SD dan SMP gue ga banyak bersinar. Tapi setelah ditolak SBMPTN 2 kali, gue berubah...</div>
                <div class="exp-ttl">My war experience...</div>
                <div class="exp-cont">
                    <div class="exp-item1-sq">
                        <div class="exp-item-txt">1 month</div>
                    </div>
                    <div class="exp-item2-sq">
                        <div class="exp-item-txt">3 years</div>
                    </div>
                    <div class="exp-txt1">Admin Printing Shop (2019)</div>
                    <div class="exp-img" style="background-image: url('assets/logo sekolahdesain png.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="exp-txt2">(2021 - now)</div>
                </div>
            </div>
        </section>

        <section id="abilities">
            <div class="my-image" style="background-image: url('assets/foto me.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="my-image-mobile" style="background-image: url('assets/foto me.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="abs-bg">
                <div class="bg-image" style="background-image: url('assets/bg 1_transparan.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="ttl">Abilities</div>
                <div class="subttl">Ini beberapa skill yang gue bisa, ada yang sama gak?</div>
                <div class="skill-ttl">Soft skills</div>
                <div class="skill-cont">
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar" style="width: 80%; border-top-right-radius: 0px; border-bottom-right-radius: 0px;"></div>
                        <div class="skill-txt">Branding and Logo design</div>
                    </div>
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar" style="width: 75%; border-top-right-radius: 0px; border-bottom-right-radius: 0px;"></div>
                        <div class="skill-txt">Illustration</div>
                    </div>
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar" style="width: 75%; border-top-right-radius: 0px; border-bottom-right-radius: 0px;"></div>
                        <div class="skill-txt">UI Design</div>
                    </div>
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar" style="width: 60%; border-top-right-radius: 0px; border-bottom-right-radius: 0px;"></div>
                        <div class="skill-txt">Virtual World building</div>
                    </div>
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar"></div>
                        <div class="skill-txt">Concepting</div>
                    </div>
                    <div class="skill-empty-bar">
                        <div class="skill-block-bar"></div>
                        <div class="skill-txt">Presenting and Public Speaking</div>
                    </div>
                </div>
                <div class="tools-ttl">Tools skills</div>
                <div class="tools-cont">
                    <div class="tools-img" style="background-image: url('assets/cdr logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/ai logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/figma logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/blender logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/painttool logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/html logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/css logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/php logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="tools-img" style="background-image: url('assets/js logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="portfolio-bg" onclick="location.replace('gallery-illustration.php')">
                <div class="door-img" style="background-image: url('assets/pintu.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="question">Masuk ke Gallery, klik tombol ini</div>
                <div class="q-btn-yes">
                    <div class="yes-txt">Yes</div>
                </div>
            </div>
        </section>
    </body>
</html>