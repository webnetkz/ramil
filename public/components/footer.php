<style>
    footer {
        position: absolute;
        top: 538vh;
        width: 100vw;
        height: 70vh;
        background: rgb(27, 27, 27);
    }
    .promo {
        height: 15vh;
        background: rgb(243, 78, 58);
    }
    .promo > div {

    }
    .promoImg {
        position: absolute;
    }
    .promoImgFake {
        position: absolute;
    }
</style>
<footer>
    <div class="promo flex row">
        <div>
            <img src="public/img/promoImg.png" alt="promo" class="promoImg">
            <img src="public/img/promoImg.png" alt="promo" class="promoImgFake">
        </div>
        <div>
            <img src="public/img/promoImg.png" alt="promo" class="promoImg">
            <img src="public/img/promoImg.png" alt="promo" class="promoImgFake">
        </div>
        <div>
            <img src="public/img/promoImg.png" alt="promo" class="promoImg">
            <img src="public/img/promoImg.png" alt="promo" class="promoImgFake">
        </div>
        <div>
            <img src="public/img/promoImg.png" alt="promo" class="promoImg">
            <img src="public/img/promoImg.png" alt="promo" class="promoImgFake">
        </div>
        <div>
            <img src="public/img/promoImg.png" alt="promo" class="promoImg">
            <img src="public/img/promoImg.png" alt="promo" class="promoImgFake">
        </div>
    </div>
</footer>
      <script>
          // Проверка браузера на поддержку service worker
         if('serviceWorker' in navigator) {
             // Подключаем sw
             navigator.serviceWorker.register('/sw.js').then(function() {
                 console.log("Service Worker Registered");
             });
         }
      </script>
      <script src="public/js/main.js" type="module"></script>
    </body>
</html>