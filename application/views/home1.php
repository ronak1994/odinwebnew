<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
  rel="stylesheet">

<style>
 
  .maintext h1,
  .maintext .h1 {
    font-family: "Figtree", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-size: 152px;
    text-align: center;

    margin: 10px;
    width: 100%;
  }


  .maintext {
    top: 35%;
    left: 28%;
    transform: translate(-22%, -30%);
    position: absolute;
  }

  /* Set up basic styling for the container and h1 elements */
  /* Set up basic styling for the container and images */
  .roted {
    position: relative;
    width: 100%;
    height: 230px;
    /* Adjust this to fit the size of your images */
    overflow: hidden;
    text-align: center;
  }

  .roted .h1 {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* Center the image */
    opacity: 0;
    /* Initially hide all images */
    animation: rotateImages 20s infinite;
    /* Total duration for all rotations */
  }

  .roted .h1:nth-child(1) {
    animation-delay: 0s;
  }

  .roted .h1:nth-child(2) {
    animation-delay: 5s;
  }

  .roted .h1:nth-child(3) {
    animation-delay: 10s;
  }

  .roted .h1:nth-child(4) {
    animation-delay: 15s;
  }

  /* Animation definition */
  @keyframes rotateImages {

    0%,
    20% {
      opacity: 1;
      /* Show the image */
    }

    25%,
    100% {
      opacity: 0;
      /* Hide the image */
    }
  }

  @media (max-width:1640px) {
    .maintext {
    top:50%;
    left: 42%;
    transform: translate(-42%, -50%);
    position: absolute;
  }
    .maintext h1,
    .maintext .h1 {

      font-size: 100px;
      text-align: center;

      margin: 10px;
      width: 100%;
    }

    .roted {
      position: relative;
      width: 100%;
      height: 180px;
      /* Adjust this to fit the size of your images */
      overflow: hidden;
      text-align: center;
    }
  }
  @media (max-width:740px) {
    .maintext {
    top: 35%;
    left: 28%;
    transform: translate(-22%, -30%);
    position: absolute;
  }
    .maintext h1,
    .maintext .h1 {

      font-size: 42px;
      text-align: center;

      margin: 10px;
      width: 100%;
    }

    .roted {
      position: relative;
      width: 100%;
      height: 130px;
      /* Adjust this to fit the size of your images */
      overflow: hidden;
      text-align: center;
    }
  }
</style>


<!-- PAGE MAIN -->
<div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
  <main class="page-wrapper__content">
    <!-- section MASTHEAD -->
    <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
    <!-- - section MASTHEAD -->
    <!-- section PROJECTS SLIDER FULLSCREEN -->
    <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow"
      data-arts-theme-text="light" data-arts-os-animation>
      <div class="section-fullheight__inner section-fullheight__inner_mobile" style="position: relative;">
        <video class="desk" id="videoId" muted="" autoplay="" loop="" preload="auto" width="100%" height="100%">
          <source src="<?php echo base_url(); ?>/img/main3.mp4" type="video/mp4">
        </video>
        <video class="mob" id="videoId" muted="" autoplay="" loop="" preload="auto" width="100%" height="100%">
          <source src="<?php echo base_url(); ?>/img/mob.mp4" type="video/mp4">
        </video>
        <div class="content maintext desk">
          <h1>Welcome to the</h1>
          <h1>next generation of</h1>
          <div class="sll">
            <div class="roted">
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/1.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/2.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/3.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/4.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="content maintext mob">
          <h1>Welcome to</h1>
          <h1>the next </h1>
          <h1>generation of</h1>
          <div class="sll">
            <div class="roted">
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/1.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/2.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/3.png" alt=""></div>
              <div class=" h1"><img src="<?php echo base_url(); ?>/img/4.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- - section PROJECTS SLIDER FULLSCREEN -->
  </main>
  <!-- PAGE FOOTER -->
  <!-- - PAGE FOOTER -->
</div>
<!-- - PAGE MAIN -->
</div>
<canvas id="js-webgl"></canvas>
<!-- PhotoSwipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
  <!-- background -->
  <div class="pswp__bg"></div>
  <!-- - background -->
  <!-- slider wrapper -->
  <div class="pswp__scroll-wrap">
    <!-- slides holder (don't modify)-->
    <div class="pswp__container">
      <div class="pswp__item">
        <div class="pswp__img pswp__img--placeholder"></div>
      </div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <!-- - slides holder (don't modify)-->
    <!-- UI -->
    <div class="pswp__ui pswp__ui--hidden">
      <!-- top bar -->
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor"
          data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic"
          data-arts-cursor-hide-native="true"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor"
          data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic"
          data-arts-cursor-hide-native="true"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- - top bar -->
      <!-- left arrow -->
      <div class="pswp__button pswp__button--arrow--left">
        <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true"
          data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
          <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
          </svg>
          <div class="arrow__pointer arrow-left__pointer"></div>
          <div class="arrow__triangle"></div>
        </div>
      </div>
      <!-- - left arrow -->
      <!-- right arrow -->
      <div class="pswp__button pswp__button--arrow--right">
        <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true"
          data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
          <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
          </svg>
          <div class="arrow__pointer arrow-right__pointer"></div>
          <div class="arrow__triangle"></div>
        </div>
      </div>
      <!-- - right arrow -->
      <!-- slide caption holder (don't modify) -->
      <div class="pswp__caption">
        <div class="pswp__caption__center text-center"></div>
      </div>
      <!-- - slide caption holder (don't modify) -->
    </div>
    <!-- - UI -->
  </div>
  <!-- slider wrapper -->
</div>
<!-- - PhotoSwipe -->
<!-- List Hover Shaders -->



<script id="list-hover-vs" type="x-shader/x-vertex">
  uniform vec2 uOffset;
      
      varying vec2 vUv;
      
      vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
        float M_PI = 3.1415926535897932384626433832795;
        position.x = position.x + (sin(uv.y * M_PI) * offset.x);
        position.y = position.y + (sin(uv.x * M_PI) * offset.y);
        return position;
      }
      
      void main() {
        vUv =  uv + (uOffset * 2.);
        vec3 newPosition = position;
        newPosition = deformationCurve(position,uv,uOffset);
        gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
      }
    </script>
<script id="list-hover-fs" type="x-shader/x-fragment">
  uniform sampler2D uTexture;
      uniform float uAlpha;
      uniform float uScale;
      
      varying vec2 vUv;
      
      vec2 scaleUV(vec2 uv,float scale) {
        float center = 0.5;
        return ((uv - center) * scale) + center;
      }
      
      void main() {
        vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
        gl_FragColor = vec4(color,uAlpha);
      }
      
    </script>
<!-- - List Hover Shaders -->
<!-- Slider Textures Shaders -->
<script id="slider-textures-vs" type="x-shader/x-vertex">
  varying vec2 vUv;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
    </script>
<script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
  varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
        vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
    </script>
<script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
  varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
        vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
      
    </script>

<!-- - Slider Textures Shaders -->
<!-- VENDOR SCRIPTS -->
<script src="<?php echo base_url() . 'js/vendor.js'  ?>"></script>
<!-- - VENDOR SCRIPTS -->
<!-- COMPONENTS -->
<script src="<?php echo base_url() . 'js/components.js'  ?>"></script>
<!-- - COMPONENTS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwR_TrF6h7-pMxkKv_q2t8BXX3w6QuFOc" async></script>
</body>

</html>