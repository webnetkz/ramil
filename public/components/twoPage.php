<style>
    .twoPage {
        position: absolute;
        top: 100vh;
        background: rgb(17, 17, 17);
        height: 70vh;
        width: 100vw;
        z-index: 2;
        padding: 15vh 15vw;
        box-sizing: border-box;
    }
    .twoPage h1 {
        color: rgb(255, 255, 255);
        font-size: 2.4em;
        text-align: center;
        text-transform: uppercase;
        font-weight: 400;
    }
    .twoPage p {
        color: rgb(105, 105, 105);
        text-align: center;
        font-family: sans-serif;
        padding: 3% 20%;
    }
</style>
<section class="twoPage">
    <h1>Начни побеждать себя уже сегодня!</h1>
    <p>Workout начинается с выбора направления: для начинающих подходят силовые тренировки. Они достаточно простые и при этом формируют рельеф, развивают мышцы и выносливость. Идеальный вариант для повседневного спорта.</p>
</section>
<script>
    window.addEventListener('scroll', function() {
        document.querySelector('.twoPage').style.boxShadow = '0 0 '+(pageYOffset / 5)+'px rgb(243, 78, 58)';
    });
</script>