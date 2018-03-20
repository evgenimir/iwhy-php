    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="copyright pull-right">
            &copy; 2013-2018 Все права защищены
        </div>
    </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="/templates/admin/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/templates/admin/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/templates/admin/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="/templates/admin/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/templates/admin/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="/templates/admin/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/templates/admin/js/demo.js"></script>

<script type="text/javascript">
    $(function () { // когда страница загружена
        $('ul.nav li a').each(function () { // проходим по нужным нам ссылками
            var location = window.location.href // переменная с адресом страницы
            var link = this.href // переменная с url ссылки
            var result = location.match(link); // результат возвращает объект если совпадение найдено и null при обратном

            if(result != null) { // если НЕ равно null
                $(this).addClass('active'); // добавляем класс
            }
        });
    });
</script>

<!-- CKEditor Plugin -->
<script src="/plugins/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace("content");
</script>

</html>