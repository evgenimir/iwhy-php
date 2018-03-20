<!-- News Letter Start -->
<section>
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-inner center-sm">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="newsletter-bg">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Letter End -->

<!-- FOOTER START -->
<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-middle">
                <div class="row mb-60">
                    <div class="col-md-6 f-col footer-middle-left">
                        <div class="f-logo">
                            <a href="/" class="">
                                <img src="/templates/iwhy/images/logo22.png" alt="iWHY.ru">
                            </a>
                        </div>
                        <div class="footer-static-block"> <span class="opener plus"></span>
                            <ul class="footer-block-contant address-footer">
                                <li class="item"> <i class="fa fa-map-marker"> </i>
                                    <p>Москва, ул. Самуила Маршака 20, 10811</p>
                                </li>
                                <li class="item"> <i class="fa fa-envelope"> </i>
                                    <p><a>info@iwhy.ru</a> </p>
                                </li>
                                <li class="item"> <i class="fa fa-phone"> </i>
                                    <p>8 (800) 878 87 78</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 footer-middle-right">
                        <div class="row">
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block"> <span class="opener plus"></span>
                                    <h3 class="title">Аккаунт <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <?php if(User::isGuest()): ?>
                                        <li><a href="/user/login">Войти</a></li>
                                        <li><a href="/user/register">Регистрация</a></li>
                                        <?php else: ?>
                                        <li><a href="/cabinet/">Кабинет</a></li>
                                        <li><a href="/cabinet/edit">Редактировать данные</a></li>
                                        <li><a href="/user/logout">Выйти</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block"> <span class="opener plus"></span>
                                    <h3 class="title">iWhy.ru <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <li><a href="/about/">О нас</a></li>
                                        <li><a href="/delivery/">Доставка</a></li>
                                        <li><a href="/contact/">Контакты</a></li>
                                        <li><a href="/catalog/">Каталог</a></li>
                                        <li><a href="/news/">Новости</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block"> <span class="opener plus"></span>
                                    <h3 class="title">Каталог <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <?php foreach ($categories as $category): ?>
                                            <li>
                                                <a href="/category/<?= $category['id']; ?>" title="<?= $category['name']; ?>"><?= $category['name']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom ">
                <div class="row mtb-30">
                    <div class="col-md-6 ">
                        <div class="copy-right ">© <?= date("Y"); ?> <a href="/" title="iWHY.ru | Интернет-манагин техники Apple">http://iwhy.ru</a> Все права защищены</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scroll-top">
    <div id="scrollup"></div>
</div>
<!-- FOOTER END -->

</div>

<!-- Всплывающий блок -->
<div class="bottom-message">
    <p>Товар успешно добавлен в корзину!</p>
    <a href="/cart">Перейти к оформлению заказа</a>
</div>

<script src="/templates/iwhy/js/jquery-1.12.3.min.js"></script>
<script src="/templates/iwhy/js/bootstrap.min.js"></script>
<script src="/templates/iwhy/js/jquery-ui.min.js"></script>
<script src="/templates/iwhy/js/fotorama.js"></script>
<script src="/templates/iwhy/js/jquery.magnific-popup.js"></script>
<script src="/templates/iwhy/js/owl.carousel.min.js"></script>
<script src="/templates/iwhy/js/custom.js"></script>

<script>
    $(document).ready(function() {
        $(".add-to-cart").click(function() {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function(data) {
                $("#cart-count").html(data);
                // Плавно показываем окно. Интервал - пол секунды.
                $('.bottom-message').fadeIn(500,function(){

                    // Определяем id таймера и устанавливаем его на 2,5 секунды.
                    // По истечению 2,5 секунды будет происходить код: $('.bottom-message').fadeOut(500); , а именно будет плавно исчезать окно.
                    timeoutID = setTimeout("$('.bottom-message').fadeOut(500);",2500);

                });

                // Отменяем таймер, чтобы при нескольких нажатий на кнопку не сбивался таймер.
                clearTimeout(timeoutID);
            });
        return false;
        });

        $(".bottom-message").hover(
            function() {

                clearTimeout(timeoutID); // Если пользователь НАВЁЛ курсор на окно, то отменяем закрытие окна по таймеру.

            }, function() {

                timeoutID = setTimeout("$('.bottom-message').fadeOut(500);",2500); // Если пользователь ОТВЁЛ курсор от окна, то активируем таймер по новому.

            }
        );

    });
</script>

<script type="text/javascript">
    $(function () {
        $('a.nav').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).addClass('current');
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('a.side').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).addClass('active');
            }
        });
    });
</script>

</body>
</html>