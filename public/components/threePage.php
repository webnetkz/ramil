<style>
    .threePage {
        position: absolute;
        top: 170vh;
        background: rgb(0, 0, 0);
        height: 100vh;
        width: 100vw;
        z-index: 2;
    }
    .firstHalf {
        background-color: rgb(27, 27, 27);
        padding: 15% 15%;
        box-sizing: border-box;
    }
    .firstHalf > span {
        font-size: 8em;
        color: rgb(63, 62, 66);
        font-weight: 100;
        position: relative;
        top: 10vh;
        left: -2vw;
        z-index: 0;
    }
    .firstHalf > h2 {
        color: rgb(255, 255, 255);
        font-weight: 100;
        font-size: 3em;
        width: 130%;
        position: relative;
        z-index: 2;
    }
    .firstHalf > p {
        color: rgb(105, 105, 105);
        font-family: sans-serif;
    }
    .imgForBg {
        background-image: url('public/img/bgHalf.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .firstHalf > button {
        display: block;
        margin-top: 50px;
        padding: 15px;
        font-size: 1.4em;
        background-color: rgb(243, 78, 58);
        color: rgb(255, 255, 255);
        border: none;
    }
    .firstHalf > button:hover {
        cursor: pointer;
        text-shadow: 0 0 10px rgb(255, 255, 255);
        box-shadow: 0 0 10px rgb(243, 78, 58), 0 0 40px rgb(243, 78, 58), 0 0 80px rgb(243, 78, 58);
        transition-delay: 0.3s;
    }
</style>
<section class="threePage">
    <div class="flex">
        <div class="half firstHalf">
            <span class="decorNumber">01</span>
            <h2>BUILT TO BRING BEST RESULTS</h2>
            <p>Tune up your shoulders, legs and lower back. Choose a workout that can improve your balance, strength and overall condition. Our team of experts will follow you through the whole workout process. Your body will thank you.</p>
            <button>read more</button>
        </div>
        <div class="half imgForBg"></div>
    </div>
</section>