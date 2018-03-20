<?php if(User::isAdmin()): ?>
    <section class="lypanel-bar">
        <ul class="nav nav-pills bar-top">
            <li><img class="icon-img" src="/upload/images/lypanel244.png"></li>
            <li class="ly"><a title="Администраторская панель" class="top-l" href="/admin">Админ-панель</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Добавить
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/product/create"><i class="fa fa-cart-arrow-down"></i>Товар</a></li>
                    <li><a href="/admin/category/create"><i class="fa fa-archive"></i>Категорию</a></li>
                    <li class="divider"></li>
                    <li><a href="/admin/news/create"><i class="fa fa-pencil"></i>Новость</a></li>
                </ul>
            </li>
            <li class="right-li"><a>Привет, Админ!</a></li>
        </ul>
    </section>
    <div style="padding-bottom: 40px"></div>
<?php endif; ?>