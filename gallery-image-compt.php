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
            <div class="map-imagecomp" style="background-image: url('assets/map-imagecomp.png'); background-size: cover; background-repeat: no-repeat;"></div>
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
            <a-entity camera position="0 1 0" look-controls wasd-controls>
                <a-cursor fuse="true" fuseTimeout="500" ></a-cursor>
            </a-entity>

            <!--sky-->
            <a-sky color="#000000"></a-sky>
            <!--room-->
            <a-entity gltf-model="url(https://drive.google.com/file/d/1sEHh_Kahly5t6KR3v5nnR1wae4dv0UN_/view?usp=share_link)"
                    position="-5 -0.2 -12"
                    scale="1 1 1"
                    shadow="receive: true"
                    static-body>
            </a-entity>
            <!--floor-->
            <a-plane width="150"
                    height="200" 
                    position="0 -0.2 0" 
                    rotation="-90 0 0s" 
                    color="#FFFFFF" 
                    shadow="receive: true; cast: true" 
                    static-body>
            </a-plane> 
            <!--light general-->
            <a-entity light="type: ambient; intensity: 0.8;"></a-entity>
            <!--room: light-->
            <a-box position="5 7 10" color="#000000"></a-box>
            <a-entity light="type: point; 
                intensity: 0.6; 
                distance: 250; 
                castShadow: true; 
                shadowBias: -0.001; 
                shadowMapHeight:1080; 
                shadowMapWidth:1080;
                shadowCameraLeft: -50; 
                shadowCameraRight: 50;
                shadowCameraBottom: -50; 
                shadowCameraTop: 50;" 
                position="5 7 0">
            </a-entity>
            <a-entity light="type: point; 
                intensity: 0.6; 
                distance: 250; 
                castShadow: true; 
                shadowBias: -0.001; 
                shadowMapHeight:1080; 
                shadowMapWidth:1080;
                shadowCameraLeft: -50; 
                shadowCameraRight: 50;
                shadowCameraBottom: -50; 
                shadowCameraTop: 50;" 
                position="5 7 10">
            </a-entity>

            <!--instruction: gate-illustration-->
            <a-entity gltf-model="url(https://drive.google.com/file/d/17D6AKjUGcAw0mOhC_ot_wKr6aTDW5pfK/view?usp=share_link)"
                    position="0.5 0.8 8"
                    scale="1 1 1"
                    rotation="0 90 0"
                    shadow="receive: true"
                    animation="property: position; to: 0.5 1.2 8; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--instruction: podium-->
            <a-entity gltf-model="url(https://drive.google.com/file/d/17D6AKjUGcAw0mOhC_ot_wKr6aTDW5pfK/view?usp=share_link)"
                    position="-4 1.5 -9.5"
                    scale="1 1 1"
                    rotation="0 0 0"
                    shadow="receive: true"
                    animation="property: position; to: -4 1.9 -9.5; dur: 2000; easing: linear; loop: true; dir: alternate;"
                    static-body>
            </a-entity>

            <!--fuse A-->
            <a-box id="f-im-A" position="-4 0.8 -9.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl A-->
            <div class="pop-illustration" id="pop-im-A">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d31_ads concept.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-A').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d31_ads concept-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-A').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse B-->
            <a-box id="f-im-B" position="5 0.8 -9.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl B-->
            <div class="pop-illustration" id="pop-im-B">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d29_ads concept.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-B').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d29_ads concept-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-B').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse C-->
            <a-box id="f-im-C" position="-4 0.8 -21.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl C-->
            <div class="pop-illustration" id="pop-im-C">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d28_ads concept.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-C').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d28_ads concept-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-C').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse D-->
            <a-box id="f-im-D" position="5 0.8 -21.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl D-->
            <div class="pop-illustration" id="pop-im-D">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d27_wolf.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-D').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d27_wolf-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-D').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse E-->
            <a-box id="f-im-E" position="-4 0.8 -32.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl E-->
            <div class="pop-illustration" id="pop-im-E">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d32_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-E').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d32_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-E').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse F-->
            <a-box id="f-im-F" position="5 0.8 -32.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl F-->
            <div class="pop-illustration" id="pop-im-F">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d30_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-F').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d30_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-F').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse G-->
            <a-box id="f-im-G" position="-4 0.8 -45" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl G-->
            <div class="pop-illustration" id="pop-im-G">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d34_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-G').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d34_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-G').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse H-->
            <a-box id="f-im-H" position="5 0.8 -45" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl H-->
            <div class="pop-illustration" id="pop-im-H">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d33_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-H').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d33_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-H').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse I-->
            <a-box id="f-im-I" position="-4 0.8 -57.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl I-->
            <div class="pop-illustration" id="pop-im-I">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d36_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-I').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d36_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-I').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse J-->
            <a-box id="f-im-J" position="5 0.8 -57.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl J-->
            <div class="pop-illustration" id="pop-im-J">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d35_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-J').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d35_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-J').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse K-->
            <a-box id="f-im-K" position="-4 0.8 -70.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl K-->
            <div class="pop-illustration" id="pop-im-K">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d38_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-K').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d38_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-K').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse L-->
            <a-box id="f-im-L" position="5 0.8 -70.5" opacity="0" height="0.5" color="#ffc200"></a-box>
            <!--ovl L-->
            <div class="pop-illustration" id="pop-im-L">
                <div class="ovl"></div>
                <div class="image" style="background-image: url('assets/assets 3D/d37_perspective.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="close-btn" onclick="document.getElementById('pop-im-L').style.display= 'none'"></div>
                </div>
                <div class="image-mobile" style="background-image: url('assets/assets 3D/d37_perspective-m.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div class="close-btn" onclick="document.getElementById('pop-im-L').style.display= 'none'"></div>
                </div>
            </div>

            <!--fuse gate: illustration-->
            <a-box id="f-im-gate-illustration" position="0.5 0.8 8" opacity="0" height="3" color="#ffc200"></a-box>
            <!--ovl gate: illustration-->
            <div class="pop-illustration" id="pop-im-gate-illustration">
                <div class="ovl"></div>
                <div class="box">
                    <div class="img" style="background-image: url('assets/yes no 1.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="txt" style="width: calc(100% - 40px); left: 20px; font-size: 14px;">You’re about to jump to Illustration room
                    Do you want to continue?</div>
                    <div class="no-btn" onclick="document.getElementById('pop-im-gate-illustration').style.display= 'none'">
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
            var popup = document.querySelector('#f-im-A');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-A').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-B');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-B').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-C');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-C').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-D');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-D').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-E');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-E').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-F');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-F').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-G');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-G').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-H');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-H').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-I');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-I').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-J');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-J').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-K');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-K').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-L');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-L').style.display = "block";
            });
        </script>
        <script>
            var popup = document.querySelector('#f-im-gate-illustration');

            popup.addEventListener('click', function(evt) { 
              //evt.target.setAttribute('color', 'purple');
              document.getElementById('pop-im-gate-illustration').style.display = "block";
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
