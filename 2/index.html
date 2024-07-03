<!DOCTYPE html>
<html>
<head>
<title>Gsap Example 2</title>


<style>
  :root { font-size: 16px }
@media (max-width: 500px) { :root { font-size: 14px } }

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

::selection {
  background: #87cd33;
  color: white;
}

body {
  overflow: hidden;
  font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji;
}

h1 { font-size: 5rem }
h2 { font-size: 2rem }

img {
  width: 100%;
 height: 100%;
  background: #f0f0f0;
}

ul {
  padding-left: 1rem;
  list-style: none;
}

li {
  flex-shrink: 0;
  width: clamp(500px, 60vw, 800px);
  padding-right: 1rem;
}

header {height: 100vh}
footer {height: 50vh}

:any-link { color: #4e9815; }

.df {display: flex}
.aic {align-items: center}
.jcc {justify-content: center}

.loader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: black;
  color: white;
}

.demo-wrapper {
  overflow: hidden;
}

.wrapper {
  display: flex;
}

.demo-gallery:not(.last) {
  padding-bottom: 1rem;
}

.demo-text .text {
  font-size: clamp(8rem, 15vw, 16rem);
  line-height: 1;
  font-weight: 900;
}
</style>

</head>

<body>


<div class='loader df aic jcc'>
  <div>
    <h1>Loading</h1>
    <h2 class='loader--text'>0%</h2>
  </div>
</div>
<div class='demo-wrapper'>
  <header class='df aic jcc'>
    <div>
        <h2>YOUR OWN</h2>
      <h1>INSPIRING GSAP LIBRARY</h1>
      
    </div>
  </header>
  <section class='demo-text'>
    <div class='wrapper text'>
      ABCDEFGHIJKLMNOPQRSTUVWXYZ
    </div>
  </section>
  <section class='demo-gallery'>
    <ul class='wrapper'>
      <li>
        <img height='' src='images/1.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/2.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/3.jpg' width='1240'>
      </li>
    </ul>
  </section>
  <section class='demo-gallery'>
    <ul class='wrapper'>
      <li>
        <img height='' src='images/4.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/5.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/6.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/7.jpg' width='1240'>
      </li>
    </ul>
  </section>
  <section class='demo-gallery'>
    <ul class='wrapper'>
      <li>
        <img height='' src='images/8.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/9.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/10.jpg' width='1240'>
      </li>
    </ul>
  </section>
  <section class='demo-gallery'>
    <ul class='wrapper'>
      <li>
        <img height='' src='images/11.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/12.jpg' width='1240'>
      </li>
      <li>
        <img height='' src='images/13.jpg' width='1240'>
      </li>
    </ul>
  </section>
  <section class='demo-text'>
    <div class='wrapper text'>
      ABCDEFGHIJKLMNOPQRSTUVWXYZ
    </div>
  </section>
  <!--<footer class='df aic jcc'>-->
  <!--  <p>Images from <a href="https://unsplash.com/">Unsplash</a></p>-->
  <!--</footer>-->
</div>





<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

<script>
   gsap.registerPlugin(ScrollTrigger);

const images = gsap.utils.toArray('img');
const loader = document.querySelector('.loader--text');
const updateProgress = (instance) => 
  loader.textContent = `${Math.round(instance.progressedCount * 100 / images.length)}%`;

const showDemo = () => {
  document.body.style.overflow = 'auto';
  document.scrollingElement.scrollTo(0, 0);
  gsap.to(document.querySelector('.loader'), { autoAlpha: 0 });
  
  gsap.utils.toArray('section').forEach((section, index) => {
    const w = section.querySelector('.wrapper');
    const [x, xEnd] = (index % 2) ? ['100%', (w.scrollWidth - section.offsetWidth) * -1] : [w.scrollWidth * -1, 0];
    gsap.fromTo(w, {  x  }, {
      x: xEnd,
      scrollTrigger: { 
        trigger: section, 
        scrub: 0.5 
      }
    });
  });
}

imagesLoaded(images).on('progress', updateProgress).on('always', showDemo);

</script>
</body>
</html>