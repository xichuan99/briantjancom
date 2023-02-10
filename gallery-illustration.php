<html>
    <head>
        <title>Welcome to my gallery</title>
        <link rel="icon" type="image/x-icon" href="assets/briantjan-ico.ico">
        <link rel="stylesheet" href="style.css">
        <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-extras@5.0.0/dist/aframe-extras.min.js"></script>
        <script src="https://unpkg.com/aframe-physics-system@3.3.0/dist/aframe-physics-system.min.js"></script>
        <script src="https://unpkg.com/aframe-animation-component@5.1.2/dist/aframe-animation-component.min.js"></script>
        <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
        <script src="https://unpkg.com/aframe-gif-shader@0.2.0/dist/aframe-gif-shader.js"></script>
        <script src="minecraft/aframe-multisrc-component/dist/0.3/aframe-multisrc-component.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <a-scene renderer="gammaOutput: true" alpha="true">
            <div class="frame-top-left" style="background-image: url('assets/frame 3D_left.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="frame-btm-left" style="background-image: url('assets/frame 3D_left_bawah.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="frame-top-right" style="background-image: url('assets/frame 3D_right.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="ctrl-mouse" style="background-image: url('assets/how to2.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="ctrl-key" style="background-image: url('assets/how to1.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="map-illustration" style="background-image: url('assets/map-illustration.png'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="kuli">
                <div class="kuli-img" style="background-image: url('assets/kuli.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="kuli-txt">Btw, this Gallery
                    is created by ME :)</div>
            </div>

            <!--loading-->
            <div id="loading" class="loading-main-cont">
                <div class="loading-ovl"></div>
                <div class="loading-cont">
                    <div class="loading-animation" style="background-image: url('assets/loading.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="loading-txt">Tunggu sebentar, galeri sedang disiapkan</div>
                </div>
            </div>

            <!--back button-->
            <div class="back-cont">
                <div class="back-btn" style="background-image: url('assets/back.svg'); background-size: cover; background-repeat: no-repeat;"
                onclick="location.href='lobby.php'"></div>
                <div class="back-txt">Back</div>
            </div>

            <div class="back-cont-mobile">
                <div class="back-btn" style="background-image: url('assets/back.svg'); background-size: cover; background-repeat: no-repeat;"
                onclick="location.href='lobby.php'"></div>
                <div class="back-txt">Back</div>
            </div>

            <!--camera-->
            <a-entity camera position="0 1 0" rotation="0 0 0" look-controls wasd-controls>
                <a-cursor fuse="true" fuseTimeout="500" ></a-cursor>
            </a-entity>

            <!--sky-->
            <a-sky color="#000000"></a-sky>
            <!--illustration room-->
            <a-entity gltf-model="urlhttps://drive.google.com/file/d/1UHIB2hnFw8OEvCjdcGBEEALhYNy5v23i/view?usp=share_link)"
                    position="0 -0.2 0"
                    scale="1 1 1"
                    shadow="receive: true"
                    static-body>
            </a-entity>
            <!--floor-->
            <a-plane width="150"
                    height="100" 
                    position="0 -0.2 0" 
                    rotation="-90 0 0s" 
                    color="#FFFFFF" 
                    shadow="receive: true; cast: true" 
                    static-body>
            </a-plane>
            <!--light general-->
            <a-entity light="type: ambient; intensity: 0.7;"></a-entity>
            <!--Illustration room: light-->
            <a-entity light="type: point; 
                intensity: 0.2; 
                distance: 250; 
                castShadow: true; 
                shadowBias: -0.001; 
                shadowMapHeight:1080; 
                shadowMapWidth:1080;
                shadowCameraLeft: -50; 
                shadowCameraRight: 50;
                shadowCameraBottom: -50; 
                shadowCameraTop: 50;" 
                position="-12 7 0">
            </a-entity>
            <!--Illustration room (back): light-->
            <a-entity light="type: point; 
                intensity: 0.2; 
                distance: 250; 
                castShadow: true; 
                shadowBias: -0.001; 
                shadowMapHeight:1080; 
                shadowMapWidth:1080;
                shadowCameraLeft: -50; 
                shadowCameraRight: 50;
                shadowCameraBottom: -50; 
                shadowCameraTop: 50;" 
                position="15 7 0">
            </a-entity>

            <!--instruction: gate-game-->
            <a-entity gltf-model="url(assets/instruction_glb.glb)"
                    position="-18 0.8 -0.2"
                    scale="1 1 1"
                    shadow="receive: true"
                    animation="property: position; to: -18 1.2 -0.2; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--instruction: gate-branding-->
            <a-entity gltf-model="url(https://drive.google.com/file/d/17D6AKjUGcAw0mOhC_ot_wKr6aTDW5pfK/view?usp=share_link)"
                    position="12.5 0.8 10.7"
                    rotation="0 60 0"
                    scale="1 1 1"
                    shadow="receive: true"
                    animation="property: position; to: 12.5 1.2 10.7; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--instruction: gate-imagecomp-->
            <a-entity gltf-model="url(https://drive.google.com/file/d/17D6AKjUGcAw0mOhC_ot_wKr6aTDW5pfK/view?usp=share_link)"
                    position="12.5 0.8 -10.7"
                    rotation="0 -60 0"
                    scale="1 1 1"
                    shadow="receive: true"
                    animation="property: position; to: 12.5 1.2 -10.7; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--instruction: podium-->
            <a-entity gltf-model="url(assets/instruction_glb.glb)"
                    position="3.5 1.5 -7.5"
                    rotation="0 90 0"
                    scale="1 1 1"
                    shadow="receive: true"
                    animation="property: position; to: 3.5 1.9 -7.5; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--fuse A-->
            <a-box id="f-i-A" position="15 0.8 0" opacity="0" height="0.5" color="#FFC200"></a-box>
            <!--ovl A-->
            <div class="pop-illustration" id="pop-i-A">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d18_UI.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-A').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d18_UI-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-A').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse B-->
            <a-box id="f-i-B" position="5.5 0.8 -5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl B-->
            <div class="pop-illustration" id="pop-i-B">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d3_kerangka.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-B').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d3_kerangka-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-B').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse C-->
            <a-box id="f-i-C" position="5.5 0.8 4.6" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl C-->
            <div class="pop-illustration" id="pop-i-C">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d2_KV di kota.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-C').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d2_KV di kota-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-C').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse D-->
            <a-box id="f-i-D" position="3.5 0.8 -7" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl D-->
            <div class="pop-illustration" id="pop-i-D">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d4_borovick.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-D').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d4_borovick-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-D').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse E-->
            <a-box id="f-i-E" position="3.5 0.8 6.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl E-->
            <div class="pop-illustration" id="pop-i-E">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d5_noira lari.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-E').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d5_noira lari-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-E').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse F-->
            <a-box id="f-i-F" position="-1.5 0.8 -6.8" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl F-->
            <div class="pop-illustration" id="pop-i-F">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d7_helmet.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-F').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d7_helmet-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-F').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse G-->
            <a-box id="f-i-G" position="-1.5 0.8 6.3" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl G-->
            <div class="pop-illustration" id="pop-i-G">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d6_flying bike.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-G').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d6_flying bike-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-G').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse H-->
            <a-box id="f-i-H" position="-7.5 0.8 -6.6" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl H-->
            <div class="pop-illustration" id="pop-i-H">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d10_nasa.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-H').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d10_nasa-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-H').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse I-->
            <a-box id="f-i-I" position="-7.5 0.8 6.1" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl I-->
            <div class="pop-illustration" id="pop-i-I">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d8_nightlife.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-I').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d8_nightlife-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-I').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse J-->
            <a-box id="f-i-J" position="-11.5 0.8 -6.2" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl J-->
            <div class="pop-illustration" id="pop-i-J">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d11_museum.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-J').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d11_museum-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-J').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse K-->
            <a-box id="f-i-K" position="-11.5 0.8 5.7" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl K-->
            <div class="pop-illustration" id="pop-i-K">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d9_wristband.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-K').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d9_wristband-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-K').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse L-->
            <a-box id="f-i-L" position="-16.5 0.8 -5.6" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl L-->
            <div class="pop-illustration" id="pop-i-L">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d12_experiment panels.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-L').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d12_experiment panels-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-L').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse M-->
            <a-box id="f-i-M" position="-20 0.8 5.3" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl M-->
            <div class="pop-illustration" id="pop-i-M">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d40_storyboard.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-M').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d40_storyboard-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-M').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse N-->
            <a-box id="f-i-N" position="-19 0.8 -5.6" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl N-->
            <div class="pop-illustration" id="pop-i-N">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d13_duotone.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-N').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d13_duotone-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-N').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse O-->
            <a-box id="f-i-O" position="-23 0.8 -5.4" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl O-->
            <div class="pop-illustration" id="pop-i-O">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d14_epic shot borovick.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-O').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d14_epic shot borovick-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-O').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse P-->
            <a-box id="f-i-P" position="-24.5 0.8 -3.8" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl P-->
            <div class="pop-illustration" id="pop-i-P">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d17_star wars.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-P').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d17_star wars-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-P').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse Q-->
            <a-box id="f-i-Q" position="-24.5 0.8 3.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl Q-->
            <div class="pop-illustration" id="pop-i-Q">
                    <div class="ovl"></div>
                    <div class="image" style="background-image: url('assets/assets 3D/d16_nightlife dari atas.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-Q').style.display= 'none'"></div>
                    </div>
                    <div class="image-mobile" style="background-image: url('assets/assets 3D/d16_nightlife dari atas-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-i-Q').style.display= 'none'"></div>
                    </div>
            </div>
            <!--fuse gate: game-->
            <a-box id="f-i-gate-game" position="-18 0.8 -0.2" opacity="0" height="2" color="#ffc200"></a-box>
            <!--ovl gate: game-->
            <div class="pop-illustration" id="pop-i-gate-game">
                    <div class="ovl"></div>
                    <div id="box-game" class="box">
                        <div class="img" style="background-image: url('assets/yes no 4.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="txt">You’re about to jump to Game Room
                        Do you want to continue?</div>
                        <div class="no-btn" onclick="document.getElementById('pop-i-gate-game').style.display= 'none'">
                            <p class="no-txt">No</p>
                        </div>
                        <div class="yes-btn" onclick="parent.open('https://gyudon64.github.io/Finedraft/mars-m3-lobby.html')">
                            <p class="yes-txt">Yes</p>
                        </div>
                        <div class="yes-btn-mobile" onclick="document.getElementById('restrict-pop').style.display= 'block'; document.getElementById('box-game').style.display= 'none';">
                            <p class="yes-txt">Yes</p>
                        </div>
                    </div>
                    <div id="restrict-pop" class="mobile-restrict">
                        <div class="mobile-restrict-txt">Hai, untuk pengalaman lebih baik,
                            bermainlah menggunakan PC :)
                        </div>
                        <div class="mobile-restrict-btn" onclick="document.getElementById('restrict-pop').style.display= 'none';document.getElementById('pop-i-gate-game').style.display= 'none'; document.getElementById('box-game').style.display= 'block';">
                            <p class="yes-txt">Ok then</p>
                        </div>
                    </div>
            </div>
            <!--fuse gate: image-compt-->
            <a-box id="f-i-gate-image-compt" position="12.5 0.8 -11" opacity="0" height="4" color="#ffc200"></a-box>
            <!--ovl gate: image-compt-->
            <div class="pop-illustration" id="pop-i-gate-image-compt">
                    <div class="ovl"></div>
                    <div class="box">
                        <div class="img" style="background-image: url('assets/yes no 3.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="txt" style="width: calc(100% - 40px); left: 20px; font-size: 14px;">You’re about to jump to image Composite Room
                        Do you want to continue?</div>
                        <div class="no-btn" onclick="document.getElementById('pop-i-gate-image-compt').style.display= 'none'">
                            <p class="no-txt">No</p>
                        </div>
                        <div class="yes-btn" onclick="location.href='gallery-image-compt.php'">
                            <p class="yes-txt">Yes</p>
                        </div>
                    </div>
            </div>
            <!--fuse gate: branding-->
            <a-box id="f-i-gate-branding" position="12.5 0.8 11" opacity="0" height="4" color="#ffc200"></a-box>
            <!--ovl gate: branding-->
            <div class="pop-illustration" id="pop-i-gate-branding">
                    <div class="ovl"></div>
                    <div class="box">
                        <div class="img" style="background-image: url('assets/yes no 2.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="txt">You’re about to jump to Branding Room
                        Do you want to continue?</div>
                        <div class="no-btn" onclick="document.getElementById('pop-i-gate-branding').style.display= 'none'">
                            <p class="no-txt">No</p>
                        </div>
                        <div class="yes-btn" onclick="location.href='gallery-branding.php'">
                            <p class="yes-txt">Yes</p>
                        </div>
                    </div>
            </div>
        </a-scene>

        <!--Illustration room-->
        <!-- <script>
            var ctrl = document.querySelector('#v-control');

            ctrl.addEventListener('click', function(evt) { 
              document.getElementById('video').play();
            });
        </script> -->
        <!-- <script>
            function startPlaying(event) {
              document.getElementById('video').play();
            }
        </script> -->
        <!-- <script>
            AFRAME.registerComponent('play-pause', {
                init: function () {
                    var myVideo = document.querySelector('#video');
                    var videoControls = document.querySelector('#v-control');
                    this.el.addEventListener('click', function () {
                        if (myVideo.paused) {
                            myVideo.play();
                        } else {
                            myVideo.pause();
                        }
                    })
                }
            })
        </script> -->
        <script>
            var popup = document.querySelector('#f-i-A');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-A').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-B');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-B').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-C');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-C').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-D');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-D').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-E');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-E').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-F');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-F').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-G');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-G').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-H');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-H').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-I');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-I').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-J');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-J').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-K');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-K').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-L');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-L').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-M');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-M').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-N');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-N').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-O');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-O').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-P');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-P').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-Q');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-Q').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-gate-game');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-gate-game').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-gate-image-compt');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-gate-image-compt').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-i-gate-branding');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-i-gate-branding').style.display = "block";
            });
        </script>

        <!--set timeout-->
        <script>
            setTimeout(() => {
              const load = document.getElementById('loading');
              load.style.display = 'none';
            }, 120);
        </script>
    </body>
</html>
