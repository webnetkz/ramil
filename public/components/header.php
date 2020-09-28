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
    }
    .menuItem:hover {
        color: rgb(243, 78, 58);
        cursor: pointer;
    }
    .activeItem {
        color: rgb(243, 78, 58);
    }

    .downMenu {
        display: none;
        position: absolute;
        transition-duration: 500ms;
        background: rgb(17, 17, 17);
        top: 100px;
        color: rgb(255, 255, 255);
        padding: 10px;
        width: 500px;
        height: 200px;
    }

    .xx:hover ~ .forHome {
        display: block;
    }
    .xxx:hover ~ .forPages {
        display: block;
    }
</style>
<header>
    <img src="public/img/fakeLogo.png" alt="logo" class="logo">
    <menu>
        <p class="menuItem xx">home</p>

        <p class="menuItem xxx">pages</p>

        <p class="menuItem">portfolio</p>
        <p class="menuItem">blog</p>
        <p class="menuItem">event</p>
        <p class="menuItem">shop</p>
        <p class="menuItem">elements</p>
        <div class="downMenu forHome">
123123
        </div>
        <div class="downMenu forPages">
            <p>123</p>
            <p>123</p>
            <p>123</p>
            <p>12</p>

        </div>
    </menu>
</header>