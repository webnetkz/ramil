<style>
    header {
        position: absolute;
        box-sizing: border-box;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 0 15%;
        z-index: 99;
    }
    .logo {
        height: 1.2em;
        margin-right: 25%;
        cursor: pointer;
    }
    menu {
        display: flex;
    }
    .menuItem {
        color: rgb(255, 255, 255);
        padding: 10px 30px;
        text-transform: uppercase;
        text-decoration: none;
        border-bottom: 2px solid rgb(0, 0, 0);
    }
    .menuItem:hover {
        border-bottom: 2px solid rgb(243, 78, 58);
        color: rgb(243, 78, 58);
        cursor: pointer;
    }
    .activeItem {
        color: rgb(243, 78, 58);
    }
    .traning {
        position: relative;
        display: inline-block;
        background: rgb(243, 78, 58);
        border-radius: 100px;
        color: rgb(255, 255, 255);
        padding: 5px 30px;
        text-transform: uppercase;
        height: 1.5em;
        text-decoration: none;
    }
    .traning:hover {
        cursor: pointer;
        text-shadow: 0 0 10px rgb(255, 255, 255);
        box-shadow: 0 0 10px rgb(243, 78, 58), 0 0 40px rgb(243, 78, 58), 0 0 80px rgb(243, 78, 58);
        transition-delay: 0.3s;
    }
    .traning span {
        position: absolute;
        display: block;
        width: 0px;
    }
    .traning span:nth-child(1) {
        top: 0;
        left: 0%;
        width: 50%;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgb(255, 255, 255));
    }
    .traning:hover span:nth-child(1) {
        left: 100%;
        transition: 1s;
        width: 300%;
    }
    .traning span:nth-child(2) {
        bottom: 0;
        right: 0;
        width: 50%;
        height: 2px;
        background: linear-gradient(270deg, transparent, rgb(255, 255, 255));
    }
    .traning:hover span:nth-child(2) {
        right: 100%;
        transition: 1s;
        width: 1000%;
    }


</style>
<header>
    <img src="public/img/fakeLogo.png" alt="logo" class="logo">
    <menu>
        <a href="#" class="menuItem">главная</a>
        <a href="#" class="menuItem">про меня</a>
        <a href="#" class="menuItem">контакты</a>
        <a href="#" class="traning">
            <span></span>
            <span></span>
            тренировки
        </a>
    </menu>
</header>