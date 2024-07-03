<!DOCTYPE html>
<html>
<head>
<title>Gsap Example 1</title>
</head>

<style>
body {background-color: black;}
canvas {filter: contrast(1.05);}
.brick-wrap {height: 100vh;aspect-ratio: 16/10;margin-left: auto;margin-right: auto;}

.track {height: 500vh;margin-bottom: 200vh;}

</style>
<body>


<div class="track">
  <div class="brick-wrap">
    <canvas style="display:absolute; inset:0; width: auto; height: 100%" id="brick"></canvas>
  </div>
</div>


<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

const canvas = document.querySelector("canvas");
console.clear();
if (canvas) {
  let URL = `https://moonbase.nyc3.cdn.digitaloceanspaces.com/lvdv-brick-dev/webp/frame_`;

  canvas.width = 1920;
  canvas.height = 1200;

  const context = canvas.getContext("2d");

  const frameCount = 599;
  const scrollableFrames = 200;
  const images = [];
  const position = {
    frame: 0,
    mergingFrame: 0
  };
  let isLooping;
  const positionTo = gsap.quickTo(position, "mergingFrame", {
    onUpdate: () => {
      position.frame = Math.round(position.mergingFrame);
      render();
    },
    duration: 0.5,
    onComplete: () => isLooping = false
  });
  const currentFrame = (index) =>
    URL + (index + 1).toString().padStart(3, "0") + ".webp";

  for (let i = 0; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img);
  }

  let scrollAnimation = gsap.to(position, {
    frame: scrollableFrames - 1,
    snap: "frame",
    ease: "circ.inOut",
    onUpdate: () => {
      if (isLooping) {
        loop.paused() && positionTo(position.frame);
      } else {
        render();
      }
    },
    scrollTrigger: {
      scrub: 0.5,
      trigger: ".track",
      start: "top",
      pin: ".brick-wrap",
      markers: false,
      onLeave: function () {
        isLooping = true;
        positionTo.tween.pause();
        loop.play(0);
      },
      onEnterBack: function () {
        loop.pause();
        positionTo(position.frame);
      }
    }
  });

  images[0].onload = render;

  function render() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.drawImage(images[position.frame], 0, 0);
  }

  let loop = gsap.fromTo(position, {
      frame: 200
    }, {
      frame: 598,
      duration: 13,
      repeat: -1,
      snap: "frame",
      ease: "none",
      onUpdate: () => {
        position.mergingFrame = position.frame;
        positionTo.tween.invalidate();
        render();
      },
      paused: true
    }
  );
}

</script>
</body>
</html>