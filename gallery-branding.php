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
            <div class="map-branding" style="background-image: url('assets/map-branding.png'); background-size: cover; background-repeat: no-repeat;"></div>
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
            <a-entity camera position="0 1 16" rotation="0 0 0" look-controls wasd-controls>
                <a-cursor fuse="true" fuseTimeout="500" ></a-cursor>
            </a-entity>

            <!--sky-->
            <a-sky color="#000000"></a-sky>
            <!--room-->
            <a-entity gltf-model="url(assets/branding_glb.glb)"
                    position="0 -0.2 0"
                    scale="1 1 1"
                    rotation="0 180 0"
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
            <a-entity light="type: ambient; intensity: 1;"></a-entity>
            <!--room: light-->
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
                position="0 7 0">
            </a-entity>

            <!--instruction: gate-illustration-->
            <a-entity gltf-model="url(assets/instruction_glb.glb)"
                    position="-1.7 0.8 26"
                    scale="1 1 1"
                    rotation="0 90 0"
                    shadow="receive: true"
                    animation="property: position; to: -1.7 1.2 26; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--instruction: gate-illustration-->
            <a-entity gltf-model="url(assets/instruction_glb.glb)"
                    position="-2 1.5 7"
                    scale="1 1 1"
                    rotation="0 90 0"
                    shadow="receive: true"
                    animation="property: position; to: -2 1.9 7; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--fuse A-->
            <a-box id="f-b-A" position="3.5 0.8 -19" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl A-->
            <div class="pop-illustration" id="pop-b-A">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d25_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-A').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d25_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-A').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse B-->
            <a-box id="f-b-B" position="-6.5 0.8 -19" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl B-->
            <div class="pop-illustration" id="pop-b-B">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d26_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-B').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d26_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-B').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse C-->
            <a-box id="f-b-C" position="8.5 0.8 -15" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl C-->
            <div class="pop-illustration" id="pop-b-C">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d24_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-C').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d24_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-C').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse D-->
            <a-box id="f-b-D" position="-12.5 0.8 -15" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl D-->
            <div class="pop-illustration" id="pop-b-D">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d23_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-D').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d23_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-D').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse E-->
            <a-box id="f-b-E" position="8.5 0.8 -5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl E-->
            <div class="pop-illustration" id="pop-b-E">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d22_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-E').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d22_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-E').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse F-->
            <a-box id="f-b-F" position="-12 0.8 -5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl F-->
            <div class="pop-illustration" id="pop-b-F">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d20_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-F').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d20_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-F').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse G-->
            <a-box id="f-b-G" position="8.5 0.8 4.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl G-->
            <div class="pop-illustration" id="pop-b-G">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d21_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-G').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d21_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-G').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse H-->
            <a-box id="f-b-H" position="-12 0.8 4.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl H-->
            <div class="pop-illustration" id="pop-b-H">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d19_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-H').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d19_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-H').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse I-->
            <a-box id="f-b-I" position="8.5 0.8 13.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl I-->
            <div class="pop-illustration" id="pop-b-I">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d27_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-I').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d27_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-I').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse J-->
            <a-box id="f-b-J" position="-12 0.8 13.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl J-->
            <div class="pop-illustration" id="pop-b-J">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d28_milkiwaymockup.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-J').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d28_milkiwaymockup-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-J').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse K-->
            <a-box id="f-b-K" position="-2 0.8 7" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl K-->
            <div class="pop-illustration" id="pop-b-K">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d39_brand guides.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-b-K').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d39_brand guides-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-b-K').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse gate: illustration-->
            <a-box id="f-b-gate-illustration" position="-1.7 0.8 26" opacity="0" height="3" color="#ffc200"></a-box>
            <!--ovl gate: illustration-->
            <div class="pop-illustration" id="pop-b-gate-illustration">
                <div class="ovl"></div>
                <div class="box">
                    <div class="img" style="background-image: url('assets/yes no 1.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="txt" style="width: calc(100% - 40px); left: 20px; font-size: 14px;">You’re about to jump to Illustration Room
                    Do you want to continue?</div>
                    <div class="no-btn" onclick="document.getElementById('pop-b-gate-illustration').style.display= 'none'">
                        <p class="no-txt">No</p>
                    </div>
                    <div class="yes-btn" onclick="location.href='gallery-illustration.php'">
                        <p class="yes-txt">Yes</p>
                    </div>
                </div>
            </div>
        </a-scene>

        <!--Illustration room-->
        <script>
            var popup = document.querySelector('#f-b-A');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-A').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-B');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-B').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-C');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-C').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-D');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-D').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-E');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-E').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-F');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-F').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-G');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-G').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-H');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-H').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-I');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-I').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-J');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-J').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-K');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-K').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-b-gate-illustration');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-b-gate-illustration').style.display = "block";
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