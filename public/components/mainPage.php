<style>
    .mainPage {
        position: absolute;
        top: 110px;
        left: 0;
        height: 100vh;
        box-sizing: border-box;
        padding: 0 15%;
        padding-top: 100px;
        color: rgb(255, 255, 255);
    }
    .decorationImg {
        position: absolute;
        right: -10px;
        top: -100px;
        animation: decorationImg 1.5s infinite;
    }
    .strong {
        position: relative;
        left: -20px;
        font-size: 5em;
        color: rgb(243, 78, 58);
        text-transform: uppercase;
        letter-spacing: 40px;
        animation: show 1s linear 0.3s;
    }
    .forStrong {
        position: relative;
        top: -40px;
        display: block;
        font-size: 1.2em;
        text-transform: uppercase;
        width: 30%;
        word-wrap: break-word;
        line-height: 2em;
        animation: show 1s linear 0.6s;
    }
    .verticalText {
        display: inline-block;
        transform: rotate(90deg);
        position: absolute;
        top: 20%;
        right: 10%;
        width: 350px;
        text-transform: uppercase;
        font-size: 2.5em;
    }
    .mainImg {
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        height: 100vh;
        width: 100vw;
        animation: showFromBottom 0.5s linear 0.3s;
    }
    .decorText {
        position: absolute;
        bottom: -10px;
        left: 0px;
        font-size: 28em;
        color: rgb(17, 17, 17);
        animation: showFromLeft 0.3s linear 0.3s;
    }
    .plus {
        position: relative;
        display: block;
        color: rgb(243, 78, 58);
        font-size: 2em;
        z-index: 99;
    }
    .onePlus {
        animation: showOnePlus 0.7s linear 0.5;
    }
    .twoPlus {
        animation: showTwoPlus 0.7s linear 0.4;
    }
    @keyframes showOnePlus {
        0% {
            bottom: -50vh;
        }
        50% {
            bottom: -10vh;
        }
        70% {
            bottom: -3vh;
        }
        90% {
            bottom: -1vh;
        }
        100% {
            top: 0;
        }
    }
    @keyframes showTwoPlus {
        0% {
            right: -190vh;
        }
        50% {
            right: -50vh;
        }
        70% {
            right: -3vh;
        }
        90% {
            right: -1vh;
        }
        100% {
            right: 0;
        }
    }
</style>
<section class="mainPage">
    <img src="public/img/lines.png" alt="lines" class="decorationImg">
    <span class="strong">strong</span>
    <span class="forStrong">beat the routine train at the beat the routine train at the beat the routine train at the</span>
    <span class="verticalText">what we have to offer</span>
    <span class="onePlus plus">+</span>
    <span class="twoPlus plus">+</span>
    <img src="public/img/photo/home.jpg" alt="photo" class="mainImg">
    <p class="decorText">20K8</p>
</section>
<script>
    window.addEventListener('scroll', function() {
        console.log(pageYOffset);
        document.querySelector('.decorText').style.bottom = (-pageYOffset * 0.3) + 'px';
        document.querySelector('.mainImg').style.top = (-pageYOffset * 0.3) + 'px';
        document.querySelector('.twoPlus').style.bottom = (-pageYOffset * 0.8) + 'px';
        document.querySelector('.onePlus').style.bottom = (-pageYOffset * 0.5) + 'px';
        document.querySelector('.verticalText').style.top = ((200 + pageYOffset) * 0.8) + 'px';
    });
</script>