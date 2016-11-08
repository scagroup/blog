<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('MODX_API_MODE', true);
@include(dirname(__FILE__) . '/config.core.php');
@include_once(MODX_CORE_PATH . "model/modx/modx.class.php");
$modx= new modX();
$modx->initialize('web');
?>
<html>
<head>
    <meta charset="UTF8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <title><?php
        echo $modx->getOption('site_name');
        ?>
    </title>
</head>
<body>
<div class="navi" state="on">
    <nav class="menu">
        <div class="row">
            <div class="logo">
                <div class="logo-left">
                    <div class="logo-ico">
                        <img src="http://placehold.it/40x40" alt="" width="100%">
                    </div>
                    <div class="logo-text">
                        KL<strong>Insight</strong>
                    </div>
                </div>
                <div class="logo-right">
                    <a href="#menu-on-off" state="on">
                        <div class="menu-on-off">
                            <div class="palka"></div>
                            <div class="palka"></div>
                            <div class="palka"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <ul>
            <li><a href="#">Аналитика<span class="badge">5</span></a></li>
            <li><a href="#">Алгаритмы<span class="badge">5</span></a></li>
            <li><a href="#">Методологии<span class="badge">5</span></a></li>
            <li><a href="#">Программирование<span class="badge">5</span></a></li>
            <li><a href="#">Продажи<span class="badge">5</span></a></li>
            <li><a href="#">Окружение<span class="badge">5</span></a></li>
        </ul>
        <hr>
        <ul>
            <li><a href="#">Об авторе</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Ежедневник</a></li>
        </ul>
        <hr>
        <div class="search">
            <div class="form-wrapper">
                <div class="insert-search-wrapper">
                    <div class="insert-search">Найти:</div>
                </div>
                <div class="input-search-wrapper">
                    <div class="write-search-wrapper">
                        <input type="search" placeholder="Что ищем?">
                    </div>
                </div>
                <div class="input-search-button-wrapper">
                    <button type="button" calss="btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-wrapper">
                <div class="profile-img">
                    <div class="profile-overflow-img">
                        <img src="http://placehold.it/50x50" alt="" width="100%">
                    </div>
                </div>
                <div class="profile-nlp">
                    <div class="profile-nick">djfaber</div>
                    <div class="profile-profile"><a href="">
                            <small>Профиль</small>
                        </a></div>
                    <div class="profile-logout"><a href="">
                            <small>Выйти</small>
                        </a></div>
                </div>
            </div>

        </div>
    </nav>

</div>
<h1>Как правильно вести рекламные кампании в Яндекс.Директ</h1>
<div class="container">
    <div class="clear-h1"></div>
    <div class="breadcrumb">
        <ul>
            <li>Где вы находитесь:</li>
            <li><a href="#">Аналитика</a></li>
            <li>Как анализировать рекламные кампании</li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="text">
            <?php //print_r ($modx->resource->get('id'));
            $object = $modx->getObject("modResource","1");
            echo $object->getContent();
            ?>
            <p>Многие говорят, что реклама на «Поиске» стоит дорого, поэтому я буду рекламироваться в «Рекламных Сетях
                «Яндекс»», сразу же скажу что это не правильный подход к ведению рекламной кампании.</p>
            <p>Все дело в том, что ставки на клики в Яндекс очень пугают, сбивают с толку, и я бы на вашем месте сильно
                не обращал внимания на них. Ведь с поиска может быть 1 клик, но зато очень качественный клиент, а с РСЯ
                придется запустить 10 чтобы получить такого же, и это может оказаться куда дороже, поэтому необходим
                правильный подход к ведению рекламных кампаний.</p>
            <p>Необходимые инструменты, Яндекс, дал вам в руки, нужно ими просто воспользоваться. Такими являются отчеты
                Директ, Я.Метрика, статистика Директ. О статистике «Директ» дальше и пойдет речь.</p>
            <p>Большинство начинающих директологов, да и не только, ставят цель на конечное действие (отправку формы),
                это конечно нужно делать, но я призываю к дроблению ваших процессов на более мелкие. Дробление даст
                больше шагов и чем они будут меньше, тем эффективней вы сможете управлять рекламными кампаниями. Может
                быть прозвучало не понятно, но попытаюсь объяснить.</p>
            <p>Назначая цель только на конечное действие вы упускаете процессы, которые протекали внутри и вы видите
                только вход и выход в конверсионное действие. Что бы более эффективно управлять рекламной кампанией
                необходимо учитывать и эти самые процессы которые протекают внутри. Одним из таких процессов является
                глубина просмотра, в «Яндекс» и SEO специалисты выделяют ее в поведенческий фактор. Ведь что бы получить
                первую конверсию по каждой рекламной кампании особенно когда их штук 30, придется потратить кругленькую
                сумму, а данный метод позволит этого избежать.</p>
            <p>На прикрепленном скрине видно, что цена цели(глубина просмотра) на поиске в 4 раза выше чем в РСЯ, а
                значит использовать данную кампанию в таком виде не рентабельно, из чего следует что с ней нужно еще
                поработать, что бы добиться хотя бы такой же цены как и в РСЯ.</p>
            <p>После проработки кампаний выполните группировку целей глубины и конечного действия(отправка заявки), что
                поможет более эффективно вести ваши рекламные кампании.</p>
            <p>Если есть вопросы, задавайте, я с удовольствием Вам помогу!</p>
            <div class="img"><img src="/img/1.jpg" watchAlt="on" alt="Пример показателей кампании из РСЯ"></div>
        </div>
        <hr>
        <div class="comment">
            <div class="comm-prof-wrapper">
                <div class="comm-prof">
                    <div class="comm-prof-img">
                        <div class="comm-prof-img-overflow">
                            <img src="http://placehold.it/200x200" alt="" width"100%">
                        </div>
                    </div>
                    <div class="comm-profile-dop-info">
                        <div class="comm-prof-nick">djfaber</div>
                        <div class="comm-prof-dat">09.10.2016 в 21:02</div>
                    </div>
                </div>
            </div>
            <div class="comm-text-wrapper">
                <div class="comm-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, a, ipsam assumenda dolore
                        alias qui tempora consequuntur rem quos commodi temporibus nihil tempore nisi. Quidem pariatur
                        ipsum distinctio nulla tempora.</p>
                    <p>Vel, quo, sit, minima deserunt molestias asperiores optio incidunt qui ad sapiente corporis
                        dolorum in eius voluptatibus officiis ab provident minus voluptas commodi iste ratione at
                        mollitia autem quae repudiandae.</p>
                    <p>Tenetur, vel, voluptate, exercitationem, voluptatibus nostrum voluptates at placeat modi corrupti
                        similique culpa quasi animi consequatur hic repellendus consectetur necessitatibus magni aperiam
                        nisi officiis est odit incidunt natus quod soluta?</p>
                    <p>Ipsam, incidunt, ad nesciunt sequi natus a asperiores enim rem modi mollitia earum et dolores
                        labore nobis voluptatum iste minus deleniti recusandae libero alias soluta veritatis
                        reprehenderit suscipit numquam corporis.</p>
                    <p>Error, eius molestias dolores nulla saepe accusantium possimus minima excepturi consequuntur
                        cupiditate laudantium nam facere veritatis delectus a officiis numquam neque sit voluptatum
                        ratione dignissimos porro reiciendis suscipit sapiente incidunt.</p>
                </div>
                <div class="comm-like-dislike-wrapper">
                    <div class="comm-like-dislike">
                        <div class="like"><a href=""><i class="fa fa-lg fa-thumbs-o-up" aria-hidden="true"></i>1</a>
                        </div>
                        <div class="dislike"><a href="#"><i class="fa fa-lg fa-thumbs-o-up fa-flip-vertical"
                                                            aria-hidden="true"></i>1</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <div class="comm-prof-wrapper">
                <div class="comm-prof">
                    <div class="comm-prof-img">
                        <div class="comm-prof-img-overflow">
                            <img src="http://placehold.it/200x200" alt="" width"100%">
                        </div>
                    </div>
                    <div class="comm-profile-dop-info">
                        <div class="comm-prof-nick">djfaber</div>
                        <div class="comm-prof-dat">09.10.2016 в 21:02</div>
                    </div>
                </div>
            </div>
            <div class="comm-text-wrapper">
                <div class="comm-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, a, ipsam assumenda dolore
                        alias qui tempora consequuntur rem quos commodi temporibus nihil tempore nisi. Quidem pariatur
                        ipsum distinctio nulla tempora.</p>
                    <p>Vel, quo, sit, minima deserunt molestias asperiores optio incidunt qui ad sapiente corporis
                        dolorum in eius voluptatibus officiis ab provident minus voluptas commodi iste ratione at
                        mollitia autem quae repudiandae.</p>
                    <p>Tenetur, vel, voluptate, exercitationem, voluptatibus nostrum voluptates at placeat modi corrupti
                        similique culpa quasi animi consequatur hic repellendus consectetur necessitatibus magni aperiam
                        nisi officiis est odit incidunt natus quod soluta?</p>
                    <p>Ipsam, incidunt, ad nesciunt sequi natus a asperiores enim rem modi mollitia earum et dolores
                        labore nobis voluptatum iste minus deleniti recusandae libero alias soluta veritatis
                        reprehenderit suscipit numquam corporis.</p>
                    <p>Error, eius molestias dolores nulla saepe accusantium possimus minima excepturi consequuntur
                        cupiditate laudantium nam facere veritatis delectus a officiis numquam neque sit voluptatum
                        ratione dignissimos porro reiciendis suscipit sapiente incidunt.</p>
                </div>
                <div class="comm-like-dislike-wrapper">
                    <div class="comm-like-dislike">
                        <div class="like"><a href=""><i class="fa fa-lg fa-thumbs-o-up" aria-hidden="true"></i>1</a>
                        </div>
                        <div class="dislike"><a href="#"><i class="fa fa-lg fa-thumbs-o-up fa-flip-vertical"
                                                            aria-hidden="true"></i>1</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <div class="comm-prof-wrapper">
                <div class="comm-prof">
                    <div class="comm-prof-img">
                        <div class="comm-prof-img-overflow">
                            <img src="http://placehold.it/200x200" alt="" width"100%">
                        </div>
                    </div>
                    <div class="comm-profile-dop-info">
                        <div class="comm-prof-nick">djfaber</div>
                        <div class="comm-prof-dat">09.10.2016 в 21:02</div>
                    </div>
                </div>
            </div>
            <div class="comm-text-wrapper">
                <div class="comm-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, a, ipsam assumenda dolore
                        alias qui tempora consequuntur rem quos commodi temporibus nihil tempore nisi. Quidem pariatur
                        ipsum distinctio nulla tempora.</p>
                    <p>Vel, quo, sit, minima deserunt molestias asperiores optio incidunt qui ad sapiente corporis
                        dolorum in eius voluptatibus officiis ab provident minus voluptas commodi iste ratione at
                        mollitia autem quae repudiandae.</p>
                    <p>Tenetur, vel, voluptate, exercitationem, voluptatibus nostrum voluptates at placeat modi corrupti
                        similique culpa quasi animi consequatur hic repellendus consectetur necessitatibus magni aperiam
                        nisi officiis est odit incidunt natus quod soluta?</p>
                    <p>Ipsam, incidunt, ad nesciunt sequi natus a asperiores enim rem modi mollitia earum et dolores
                        labore nobis voluptatum iste minus deleniti recusandae libero alias soluta veritatis
                        reprehenderit suscipit numquam corporis.</p>
                    <p>Error, eius molestias dolores nulla saepe accusantium possimus minima excepturi consequuntur
                        cupiditate laudantium nam facere veritatis delectus a officiis numquam neque sit voluptatum
                        ratione dignissimos porro reiciendis suscipit sapiente incidunt.</p>
                </div>
                <div class="comm-like-dislike-wrapper">
                    <div class="comm-like-dislike">
                        <div class="like"><a href=""><i class="fa fa-lg fa-thumbs-o-up" aria-hidden="true"></i>1</a>
                        </div>
                        <div class="dislike"><a href="#"><i class="fa fa-lg fa-thumbs-o-up fa-flip-vertical"
                                                            aria-hidden="true"></i>1</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <div class="comm-prof-wrapper">
                <div class="comm-prof">
                    <div class="comm-prof-img">
                        <div class="comm-prof-img-overflow">
                            <img src="http://placehold.it/200x200" alt="" width"100%">
                        </div>
                    </div>
                    <div class="comm-profile-dop-info">
                        <div class="comm-prof-nick">djfaber</div>
                        <div class="comm-prof-dat">09.10.2016 в 21:02</div>
                    </div>
                </div>
            </div>
            <div class="comm-text-wrapper">
                <div class="comm-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, a, ipsam assumenda dolore
                        alias qui tempora consequuntur rem quos commodi temporibus nihil tempore nisi. Quidem pariatur
                        ipsum distinctio nulla tempora.</p>
                    <p>Vel, quo, sit, minima deserunt molestias asperiores optio incidunt qui ad sapiente corporis
                        dolorum in eius voluptatibus officiis ab provident minus voluptas commodi iste ratione at
                        mollitia autem quae repudiandae.</p>
                    <p>Tenetur, vel, voluptate, exercitationem, voluptatibus nostrum voluptates at placeat modi corrupti
                        similique culpa quasi animi consequatur hic repellendus consectetur necessitatibus magni aperiam
                        nisi officiis est odit incidunt natus quod soluta?</p>
                    <p>Ipsam, incidunt, ad nesciunt sequi natus a asperiores enim rem modi mollitia earum et dolores
                        labore nobis voluptatum iste minus deleniti recusandae libero alias soluta veritatis
                        reprehenderit suscipit numquam corporis.</p>
                    <p>Error, eius molestias dolores nulla saepe accusantium possimus minima excepturi consequuntur
                        cupiditate laudantium nam facere veritatis delectus a officiis numquam neque sit voluptatum
                        ratione dignissimos porro reiciendis suscipit sapiente incidunt.</p>
                </div>
                <div class="comm-like-dislike-wrapper">
                    <div class="comm-like-dislike">
                        <div class="like"><a href=""><i class="fa fa-lg fa-thumbs-o-up" aria-hidden="true"></i>1</a>
                        </div>
                        <div class="dislike"><a href="#"><i class="fa fa-lg fa-thumbs-o-up fa-flip-vertical"
                                                            aria-hidden="true"></i>1</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <div class="comm-prof-wrapper">
                <div class="comm-prof">
                    <div class="comm-prof-img">
                        <div class="comm-prof-img-overflow">
                            <img src="http://placehold.it/200x200" alt="" width"100%">
                        </div>
                    </div>
                    <div class="comm-profile-dop-info">
                        <div class="comm-prof-nick">djfaber</div>
                        <div class="comm-prof-dat">09.10.2016 в 21:02</div>
                    </div>
                </div>
            </div>
            <div class="comm-text-wrapper">
                <div class="comm-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, a, ipsam assumenda dolore
                        alias qui tempora consequuntur rem quos commodi temporibus nihil tempore nisi. Quidem pariatur
                        ipsum distinctio nulla tempora.</p>
                    <p>Vel, quo, sit, minima deserunt molestias asperiores optio incidunt qui ad sapiente corporis
                        dolorum in eius voluptatibus officiis ab provident minus voluptas commodi iste ratione at
                        mollitia autem quae repudiandae.</p>
                    <p>Tenetur, vel, voluptate, exercitationem, voluptatibus nostrum voluptates at placeat modi corrupti
                        similique culpa quasi animi consequatur hic repellendus consectetur necessitatibus magni aperiam
                        nisi officiis est odit incidunt natus quod soluta?</p>
                    <p>Ipsam, incidunt, ad nesciunt sequi natus a asperiores enim rem modi mollitia earum et dolores
                        labore nobis voluptatum iste minus deleniti recusandae libero alias soluta veritatis
                        reprehenderit suscipit numquam corporis.</p>
                    <p>Error, eius molestias dolores nulla saepe accusantium possimus minima excepturi consequuntur
                        cupiditate laudantium nam facere veritatis delectus a officiis numquam neque sit voluptatum
                        ratione dignissimos porro reiciendis suscipit sapiente incidunt.</p>
                </div>
                <div class="comm-like-dislike-wrapper">
                    <div class="comm-like-dislike">
                        <div class="like"><a href=""><i class="fa fa-lg fa-thumbs-o-up" aria-hidden="true"></i>1</a>
                        </div>
                        <div class="dislike"><a href="#"><i class="fa fa-lg fa-thumbs-o-up fa-flip-vertical"
                                                            aria-hidden="true"></i>1</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="add-comment">
            <div class="add-comment-wrapper">
                <div class="add-comment-profile-wrapper">
                    <div class="add-comment-profile-text">Прокоментировать как:</div>
                    <div class="add-comment-profile-img-wrapper">
                        <div class="add-comment-profile-img-overflow">
                            <img src="http://placehold.it/200x200" alt="">
                        </div>
                    </div>
                    <div class="add-comment-profile-nick">djfaber</div>
                </div>
                <div class="add-comment-textarea-wrapper">
                    <div class="textarea-add-comment">
                        <div class="text-add-write-comment" contenteditable="true"></div>
                    </div>
                </div>
                <div class="add-comment-button-wrapper">
                    <div class="button-add-comment">
                        <button>Закоминтить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script
    src="http://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous">
</script>
<script type="text/javascript" src="/js/my.js"></script>
<script type="text/javascript" src="/js/function.js"></script>
</html>