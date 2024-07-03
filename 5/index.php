<!DOCTYPE html>
<html>
<head>
<title>Gsap Example 5</title>


<style>
:root {
    --dark: #242423;
}

html {
	box-sizing: border-box;
    // scroll-behavior: smooth;
    // scroll-snap-type: y mandatory;
}

*, *:before, *:after {
	box-sizing: inherit;
}

html, body {
	min-height: 100vh;
}

body {
    background-color: white;
    font-family: 'Noto Sans', sans-serif;
    font-size: 14px;
    color: var(--dark);
    line-height: 1.3;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    // overflow: hidden;
}

.logo,
h1,
h2 {
    margin: 0;
    line-height: 1;
    font-family: 'Cinzel', serif;
    font-weight: 400;
}

p {
    margin: 0;
}

.stage {
	position: relative;
    background: white;
	visibility: hidden;
}

/*  ========================================================================== 
    Nav Header
    ========================================================================== */

.header {
    position: fixed;
    left: 40px;
    top: 24px;
    z-index: 100;
    display: flex;
    
    @media all and (max-width: 768px) {
        display: block;
        left: 24px;
    }
}

.logo {
    font-size: 27px;
    letter-spacing: -1px;
}

.nav-btn,
.nav-btn__svg {
    width: 56px;
    height: 30px;
}

.nav-btn {
    display: block;
    margin: -2px 0 0 56px;
    
    @media all and (max-width: 768px) {
        margin: 18px 0 0 -6px;
    }
}

.nav-btn__svg {
    pointer-events: none;
}

/*  ========================================================================== 
    Intro
    ========================================================================== */

.intro,
.footer {
    height: 100vh;
}

.intro {
    position: relative;
    padding: 5vw;
    background: #C0D7D8;
    overflow: hidden;
}

.intro__content {
    position: absolute;
    right: 8%;
    bottom: 15%;
    z-index: 3;
    
    @media all and (max-width: 768px) {
        right: auto;
    }
}

.intro__title {
    font-size: 25vw;
    overflow: hidden;
    letter-spacing: -2.3vw;
    padding-right: 2.3vw;

    @media all and (max-width: 768px) {
        margin-bottom: 5vh;
    }
}

.intro__img {
    position: absolute;
    width: 35%;
    max-width: 390px;
    height: auto;
    
    @media all and (max-width: 768px) {
        width: 75vw;
    }
}

.intro__img--1 {
    z-index: 2;
    left: 10%;
    bottom: 35%;
    
    @media all and (max-width: 768px) {
        // top: 15vh;
        left: 50%;
        bottom: 50vh;
    }
}

.intro__img--2 {
    z-index: 1;
    left: 25%;
    bottom: 40%;
    
    @media all and (max-width: 768px) {
        // top: 2vh;
        left: 70%;
        bottom: 60vh;
    }
}

.intro__txt {
    max-width: 35vw;
    margin-left: 25vw;
    
    @media all and (max-width: 768px) {
        max-width: 80vw;
        margin-left: 5vw;
    }
}

/*  ========================================================================== 
    Slides
    ========================================================================== */

.slide {
    display: flex;
    align-items: stretch;
    height: 100vh;
    overflow: hidden;
    
    &:nth-of-type(even) {
        background: #C4CDC4;
    }
    
    @media all and (max-width: 768px) {
        display: block;
        position: relative;
    }
}

/*  Columns
    ========================================================================== */

.col {
    flex-basis: 50%;
    
    @media all and (max-width: 768px) {
        display: block;
        width: 100%;
        height: 100vh;
    }
}

.col--1 {
    position: relative;
    z-index: 1;
    
     @media all and (max-width: 768px) {
        position: relative;
        z-index: 1;
    }
}

.col--2 {
    position: relative;
    overflow: hidden;
    
    @media all and (max-width: 768px) {
        position: absolute;
        z-index: 0;
        left: 0;
        top: 0;
    }
}

/*  ========================================================================== 
    Column Content
    ========================================================================== */

.col__content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
    height: 100%;
    padding: 6vw 6vw 10vw;
    
    @media all and (max-width: 768px) {
        width: 80%;
    }
}

.col__content--1 {
    background: #D8C0C0;
    
    @media all and (max-width: 768px) {
        background: rgba(#D8C0C0, 0.9);
    }
}

.col__content--2 {
    background: #CDD5E0;
    
    @media all and (max-width: 768px) {
        background: rgba(#CDD5E0, 0.9);
    }
}

.col__content--3 {
    background: #F3D3B0;
    
    @media all and (max-width: 768px) {
        background: rgba(#F3D3B0, 0.9);
    }
}

.col__content--4 {
    background: #F8E9E6;
    
    @media all and (max-width: 768px) {
        background: rgba(#F8E9E6, 0.9);
    }
}

.col__content--5 {
    background: #D1E2EC;
    
    @media all and (max-width: 768px) {
        background: rgba(#D1E2EC, 0.9);
    }
}

.col__content--6 {
    background: #D7CEC5;
    
    @media all and (max-width: 768px) {
        background: rgba(#D7CEC5, 0.9);
    }
}

/*  Column Content
    ========================================================================== */

.col__content-title {
    margin: 0 0 2vw;
    font-size: 11vw;
    letter-spacing: -0.8vw;
    
    @media all and (max-width: 768px) {
        margin: 0 0 6vw;
        font-size: 18vw;
    }
}

.col__content-wrap {
    display: flex;
    justify-content: flex-end;
    
    @media all and (max-width: 768px) {
        flex-direction: column;
    }
}

.col__content-txt {
    max-width: 22vw;
    order: 2;
    margin-left: 32px;
    
    @media all and (max-width: 768px) {
        order: 1;
        max-width: 40vw;
        margin: 0 0 10vw 10vw;
    }
}

.slide-link {
    position: relative;
    order: 1;
    display: flex;
    justify-content: flex-end;
    width: 75px;
    height: 53px;
    
    > * {
        pointer-events: none;
    }
    
    @media all and (max-width: 768px) {
        order: 2;
        align-self: flex-end;
    }
}

.slide-link__circ {
    width: 53px;
    height: 53px;
    border-radius: 50%;
    border: 1px solid var(--dark);
}

.slide-link__line {
    position: absolute;
    top: 25px;
    left: 0;
    width: 64px;
    height: 3px;
    background: var(--dark);
}

.line {
    overflow: hidden;
    
    &:nth-of-type(even) {
        margin-top: -1vw;
    }
}

.line__inner {
    display: block;
}

.slide__scroll-link {
    position: absolute;
    right: -113px;
    bottom: 3.5vw;
    display: block;
    width: 140px;
    height: 140px;
    background: var(--dark);
    overflow: hidden;
    
    @media all and (max-width: 768px) {
        display: none;
    }
}

.slide__scroll-line {
    position: absolute;
    left: 26px;
    bottom: 0;
    width: 1px;
    height: 100%;
}

.slide--0 {
    .slide__scroll-line {
        background: #C0D7D8;
    }
}

.slide--1 {
    .slide__scroll-line {
        background: #D8C0C0;
    }
}

.slide--2 {
    .slide__scroll-line {
        background: #CDD5E0;
    }
}

.slide--3 {
    .slide__scroll-line {
        background: #F3D3B0;
    }
}

.slide--4 {
    .slide__scroll-line {
        background: #F8E9E6;
    }
}

.slide--5 {
    .slide__scroll-line {
        background: #D1E2EC;
    }
}

.slide--6 {
    .slide__scroll-line {
        background: #D7CEC5;
    }
}

/*  ========================================================================== 
    Column Image
    ========================================================================== */

.col__image-wrap {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    height: 160vh;
}

.img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

/*  ========================================================================== 
    Footer
    ========================================================================== */

.footer {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: #cecece;
}

.footer__link {
    font-size: 5vw;
    color: var(--dark);
    text-decoration: none;
    font-family: 'Cinzel', serif;
}

.footer__link-top {
    position: absolute;
    left: 50%;
    bottom: 100px;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    background: var(--dark);
    font-size: 18px;
    color: white;
    text-decoration: none;
    font-family: 'Cinzel', serif;
}

.footer__link-top-line {
    position: absolute;
    top: -50px;
    left: 50%;
    width: 1px;
    height: 50px;
    background: var(--dark);
}

.footer__copyright {
    position: absolute;
    left: 50%;
    bottom: 24px;
    transform: translateX(-50%);
}

</style>

</head>

<body>

<div id="smooth-wrapper">
    <div class="stage" id="smooth-content">
        <header class="header">
            <div class="logo">Duda</div>
            <a href="#" class="nav-btn">
                <svg class="nav-btn__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 30">
                    <rect class="nav-rect" width="40" height="2" x="8" y="8" fill="#242423" />
                    <rect class="nav-rect" width="40" height="2" x="8" y="14" fill="#242423" />
                    <rect width="40" height="2" x="8" y="20" fill="#242423" />
                </svg>
            </a>
        </header>

        <section class="intro slide--0" id="slide-0">
            <div class="intro__content">
                <h1 class="intro__title">Duda</h1>
                <p class="intro__txt">Duda is going from strength to strength. Whether it’s in the prestigious gallery in the new World Trade Centre in New York or at an international art fair in Chicago or Hong Kong, people recognize the original response to life in Duda’s work, and go away feeling animated and energized by his vibrant creations.</p>
            </div>
            <img class="intro__img intro__img--1" src="https://assets.codepen.io/61488/duda-intro-1.jpg" />
            <img class="intro__img intro__img--2" src="https://assets.codepen.io/61488/duda-intro-2.jpg" />
        </section>

        <section class="slide slide--1" id="slide-1">
            <div class="col col--1">
                <div class="col__content col__content--1">
                    <h2 class="col__content-title"><span class="line__inner">Mono</span><br /><span class="line__inner">No. 1</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-2" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-1.jpg" />
                </div>
            </div>
        </section>

        <section class="slide slide--2" id="slide-2">
            <div class="col col--1">
                <div class="col__content col__content--2">
                    <h2 class="col__content-title"><span class="line__inner">Look</span><br /><span class="line__inner">No. 2</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-3" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-2.jpg" />
                </div>
            </div>
        </section>

        <section class="slide slide--3" id="slide-3">
            <div class="col col--1">
                <div class="col__content col__content--3">
                    <h2 class="col__content-title"><span class="line__inner">Zombie</span><br /><span class="line__inner">No. 3</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-4" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-3.jpg" />
                </div>
            </div>
        </section>

        <section class="slide slide--4" id="slide-4">
            <div class="col col--1">
                <div class="col__content col__content--4">
                    <h2 class="col__content-title"><span class="line__inner">Jimi</span><br /><span class="line__inner">No. 4</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-5" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-4.jpg" />
                </div>
            </div>
        </section>

        <section class="slide slide--5" id="slide-5">
            <div class="col col--1">
                <div class="col__content col__content--5">
                    <h2 class="col__content-title"><span class="line__inner">Exit</span><br /><span class="line__inner">No. 5</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-6" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-5.jpg" />
                </div>
            </div>
        </section>

        <section class="slide slide--6" id="slide-6">
            <div class="col col--1">
                <div class="col__content col__content--6">
                    <h2 class="col__content-title"><span class="line__inner">Smart</span><br /><span class="line__inner">No. 6</span></h2>
                    <div class="col__content-wrap">
                        <p class="col__content-txt">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                        <a href="#" class="slide-link">
                            <div class="slide-link__circ"></div>
                            <div class="slide-link__line"></div>
                        </a>
                    </div>
                </div>
                <a href="#slide-7" class="slide__scroll-link">
                    <div class="slide__scroll-line"></div>
                </a>
            </div>
            <div class="col col--2">
                <div class="col__image-wrap">
                    <img class="img img--1" src="https://assets.codepen.io/61488/duda-6.jpg" />
                </div>
            </div>
        </section>

        <footer class="footer" id="slide-7">
            <a class="footer__link" href="http://www.duda.ie/" target="_blank">duda.ie</a>
            <a class="footer__link-top" href="#slide-0">Top<span class="footer__link-top-line"></span></a>
            <p class="footer__copyright">All images © 2020 Dave Uda</p>
        </footer>
    </div>
</div>


<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollToPlugin3.min.js"></script>
<script src="SplitText3.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
<script src="ScrollSmoother.min.js"></script>

<script>
gsap.config({trialWarn: false});
   gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(SplitText);
gsap.registerPlugin(ScrollSmoother);

console.clear();

select = e => document.querySelector(e);
selectAll = e => document.querySelectorAll(e);

const stage = select('.stage');
const slides = selectAll(".slide");
const links = selectAll(".slide__scroll-link");
const titles = selectAll('.col__content-title');
const introTitle = new SplitText('.intro__title', {type: "lines", linesClass: "intro-line"});
const splitTitles = new SplitText(titles, {type: "lines, chars", linesClass: "line", charsClass: "char", position: "relative" });
let slideID = 0;

const smoother = ScrollSmoother.create({
    smooth: 2,
    effects: true,
    // normalizeScroll: true,
    smoothTouch: 0.1,
});

function initHeader() {
    
    // animate the logo and fake burger button into place
    
    let tl = gsap.timeline({delay: 0.5});
    
    tl.from('.logo', {
        y: -40,
        opacity: 0,
        duration: 2,
        ease: 'power4'
    })
    .from('.nav-btn__svg rect', {
        scale: 0,
        transformOrigin: "center right",
        duration: 0.6,
        ease: 'power4',
        stagger: 0.1
    }, 0.6)
    .to('.nav-rect', {
        scale: 0.8,
        transformOrigin: "center left",
        duration: 0.4,
        ease: 'power2',
        stagger: 0.1
    }, "-=0.6")
    
    // create mouse animations for the faux burger button
    
    let navBtn = select('.nav-btn');
    
    navBtn.addEventListener("mouseover", (e) => {
        gsap.to('.nav-rect', {
            scaleX: 1,
            transformOrigin: "top left",
            duration: 0.4, 
            ease: "power4"
        });
    });
    
    navBtn.addEventListener("mouseout", (e) => {
        gsap.to('.nav-rect', {
            scaleX: 0.8,
            transformOrigin: "top left",
            duration: 0.6, 
            ease: "power4"
        });
    });
}

function initIntro() {
    
    // animate the intro elements into place
    
    let tl = gsap.timeline({delay: 1.2});
    
    tl.from('.intro-line', {
        // x: 100,
        y: 400,
        ease: 'power4',
        duration: 3
    })
    .from('.intro__txt', {
        x: -100,
        opacity: 0,
        ease: 'power4',
        duration: 3
    }, 0.7)
    .from('.intro__img--1', {
        // x: -50,
        y: 50,
        opacity: 0,
        ease: 'power2',
        duration: 10
    }, 1)
    .from('.intro__img--2', {
        // x: 50,
        y: -50,
        opacity: 0,
        ease: 'power2',
        duration: 10
    }, 1);
    
    // set up scrollTrigger animation for the when the intro scrolls out
    
    let stl = gsap.timeline({
        scrollTrigger: {
            trigger: '.intro',
            scrub: 1,
            start: "top bottom", // position of trigger meets the scroller position
            end: "bottom top"
        }
    });
    
    stl.to('.intro__title', {
        x: 400,
        ease: 'power4.in',
        duration: 3,
        
    })
    .to('.intro__txt', {
        y: 100,
        ease: 'power4.in',
        duration: 3,
    }, 0);
}

function initLinks() {
    
    // ScrollToPlugin links
    
    links.forEach((link, index, e) => {     
        
        let linkST = link.querySelector('.slide__scroll-line');
        
        link.addEventListener("click", (e) => {
            e.preventDefault();
            gsap.to(window, {
                duration: 2, 
                scrollTo:{
                    y: "#slide-" + (index + 2)
                },
                ease: "power2.inOut"
            });
            slideID++;
        });
        
        link.addEventListener("mouseover", (e) => {
            gsap.to(linkST, {
                y:40,
                transformOrigin: "bottom center",
                duration: 0.6, 
                ease: "power4"
            });
        });
        
        link.addEventListener("mouseout", (e) => {
            gsap.to(linkST, {
                y: 0,
                transformOrigin: "bottom center",
                duration: 0.6, 
                ease: "power4"
            });
        });
        
    });
    
    // ScrollToPlugin link back to the top
    
    let top = select('.footer__link-top');
    
    top.addEventListener("click", (e) => {
        e.preventDefault();
        scrollTop();
    });
    
    top.addEventListener("mouseover", (e) => {
        gsap.to('.footer__link-top-line', {
            scaleY: 3,
            transformOrigin: "bottom center",
            duration: 0.6, 
            ease: "power4"
        });
    });
    
    top.addEventListener("mouseout", (e) => {
        gsap.to('.footer__link-top-line', {
            scaleY: 1,
            transformOrigin: "bottom center",
            duration: 0.6, 
            ease: "power4"
        });
    });
    
    // Dummy slide links
    
    let slideLinks = selectAll('.slide-link');
    
    slideLinks.forEach((slideLink, index, e) => {
        
        let slideL = slideLink.querySelector('.slide-link__line');
        
        slideLink.addEventListener("mouseover", (e) => {
            gsap.to(slideL, {
                x: 20,
                scaleX: 0.3,
                transformOrigin: "right center",
                duration: 0.8, 
                ease: "power4"
            });
        });
        slideLink.addEventListener("mouseout", (e) => {
            gsap.to(slideL, {
                x: 0,
                scaleX: 1,
                transformOrigin: "right center",
                duration: 0.8, 
                ease: "power4"
            });
        });
    })
}

function initSlides() {
    
    // Animation of each slide scrolling into view
    
    slides.forEach((slide, i) => {   
        
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: slide,
                start: "40% 50%", // position of trigger meets the scroller position
            }
        });
 
        tl.from(slide.querySelectorAll('.col__content-title'), {
            ease: "power4",
            y: "+=5vh",
            duration: 2.5,
        })
        .from(slide.querySelectorAll('.line__inner'), {
            y: 200,
            duration: 2,
            ease: "power4",
            stagger: 0.1
        }, 0)
        .from(slide.querySelectorAll('.col__content-txt'), {
            x: 100,
            y: 50,
            opacity: 0,
            duration: 2,
            ease: "power4"
        }, 0.4)
        .from(slide.querySelectorAll('.slide-link'), {
            x: -100,
            y: 100,
            opacity: 0,
            duration: 2,
            ease: "power4"
        }, 0.3)
        .from(slide.querySelectorAll('.slide__scroll-link'), {
            y: 200,
            duration: 3,
            ease: "power4"
        }, 0.4)
        .to(slide.querySelectorAll('.slide__scroll-line'), {
            scaleY: 0.6,
            transformOrigin: "bottom left",
            duration: 2.5, 
            ease: "elastic(1,0.5)"
        }, 1.4)
	});
    
    // External footer link scroll animation
    
    gsap.from('.footer__link', {
        scrollTrigger: {
            trigger: '.footer',
            scrub: 2,
            start: "50% 100%", // position of trigger meets the scroller position
            end: "0% 0%",
        },
        y: "20vh",
        ease: 'sine'
    })
}

function initParallax() {
    
    slides.forEach((slide, i) => {
        let imageWrappers = slide.querySelectorAll('.col__image-wrap');
        
        gsap.fromTo(imageWrappers, {
            y: "-30vh"
        },{
            y: "30vh",
            scrollTrigger: {
                trigger: slide,
                scrub: true,
                start: "top bottom", // position of trigger meets the scroller position
                snap: {
                    snapTo: 0.5, // 0.5 'cause the scroll animation range is 200vh for parallax effect
                    duration: 1,
                    ease: 'power4.inOut'
                }
            },
            ease: 'none'
        })
    });
}

function scrollTop() {
    gsap.to(window, {
        duration: 2, 
        scrollTo: {
            y: "#slide-0"
        },
        ease: "power2.inOut"
    });
    gsap.to('.footer__link-top-line', {
        scaleY: 1,
        transformOrigin: "bottom center",
        duration: 0.6, 
        ease: "power4"
    });
}

function initKeys() {
    document.addEventListener('keydown', (e) => {
        e.preventDefault();
        if(event.keyCode == 40) { //down arrow to next slide
            if(slideID <= slides.length) {
                slideID++;
                gsap.to(window, {
                    duration: 2, 
                    scrollTo:{
                        y: "#slide-" + slideID 
                    },
                    ease: "power2.inOut"
                });
            }
        }
        else if(event.keyCode == 38) { // up arrow to top
            slideID = 0;
            scrollTop();
        }
    });
}

function init() {
    gsap.set(stage, { autoAlpha: 1 });
    initHeader();
    initIntro();
	initLinks();
	initSlides();
	initParallax();
    initKeys();
}

window.onload = () => {
	init();
};

</script>
</body>
</html>