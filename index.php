<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href="#"><span>Головна</span></a></li>
                    <li><a href="#sec2"><span>Про нас</span></a></li>
                    <li><a href="#sec3"><span>Послуги</span></a></li>
                    <li><a href="#sec4"><span>FAQ</span></a></li>
                    <li><a href="#sec6"><span>Contact us</span></a></li>
                </ul>
            </div>
        </div>
        <div class="bg_image">
            <header>
                <div class="container">
                    <div class="block df jb">
                        <div class="logo">
                            <img src="./assets/img/logo.svg" alt="">
                        </div>
                        <div class="menu_items">
                            <ul>
                                <li><a href="#">Головна</a></li>
                                <li><a href="#sec2">Про нас</a></li>
                                <li><a href="#sec3">Послуги</a></li>
                                <li><a href="#sec4">FAQ</a></li>
                                <li><a href="#sec6">Contact us </a></li>
                            </ul>
                        </div>
                        <div class="menu">
                            <!-- Кнопка Мобильного Меню -->
                            <button id="burger-menu">
                                <div class="box box_item1"></div>
                                <div class="box box_item2"></div>
                                <div class="box box_item3"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="deliver">
                <img src="./assets/img/deliver.png" alt="">
            </div>
            <section class="sec1">
                <div class="container" data-aos="fade-up">
                    <div class="info">
                        <h1>Доставка <span>вантажів</span> по <span>всій</span> всій Україні</h1>
                        <p>Зареєструвати свою компанію легко, а ми зробимо всі речі для вас дуже швидко.</p>
                        <a href="#">Оформити заказ</a>
                    </div>
                </div>
            </section>
        </div>
        <section class="sec2" id="sec2">
            <div class="container">
                <div class="bg-photo">
                    <div class="txt-item" data-aos="fade-left">
                        <div class="title">
                            <h2>Про нашу <span>компанiю</span></h2>
                        </div>
                        <p>Ми є командою професіоналів, що спеціалізуються на організації вантажоперевезень усередині країни. Ми пропонуємо надійні та ефективні послуги з доставки вантажів, засновані на нашому багатому досвіді та експертизі в даній галузі. Наша місія – забезпечити наших клієнтів швидкою, безпечною та професійною доставкою вантажів по всій території України.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3" id="sec3">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Наші <span>послуги вантажоперевезень</span> включають кілька етапів<span></span></h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec3-icon1.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Консультація та планування</span>
                            <p>Ми уважно слухаємо ваші потреби та очікування, щоб розробити оптимальний маршрут та план доставки вашого вантажу.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec3-icon2.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Організація перевезення</span>
                            <p>Ми дбаємо про всю організаційну сторону перевезення, включаючи вибір відповідного транспортного засобу, оформлення необхідних документів та взаємодію з водіями та логістами.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec3-icon3.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Відстеження та контроль</span>
                            <p>Ми здійснюємо постійний контроль за пересуванням вашого вантажу протягом усього маршруту, щоб бути впевненими у його безпечній та своєчасній доставці.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec3-icon4.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Доставка та звітність</span>
                            <p>Після прибуття вашого вантажу на місце призначення, ми здійснюємо його передачу одержувачу та надаємо детальні звіти про виконані роботи та статус доставки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4" id="sec4">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Як це працює</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non tellus nullam ultrices netus mauris, phasellus.</p>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec4-icon1.svg" alt="">
                        </div>
                        <p>Отримання</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec4-icon2.svg" alt="">
                        </div>
                        <p>Упаковка</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec4-icon3.svg" alt="">
                        </div>
                        <p>Завантаження</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec4-icon4.svg" alt="">
                        </div>
                        <p>Доставка</p>
                    </div>
                </div>
                <div class="man">
                    <img src="./assets/img/sec4-man.png" alt="">
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <div class="title">
                    <h2>Нашi переваги</h2>
                </div>
                <div class="items" data-aos="fade-right">
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec5-icon1.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Гарантiя збереження ваших вiдправлнень</span>
                            <p>Компанія гарантує цілісність вантажу, що доставляється. Наш багатофункціональний інтернет-сервіс допомагає самостійно відстежувати статус заявки та баланс рахунку в особистому кабінеті.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec5-icon2.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Швидкiсть доставки</span>
                            <p>Як тільки кур'єр отримає вантаж, він одразу ж вирушить на адресу одержувача. Доставка для фізичних осіб по Києву виконується протягом двох годин.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec5-icon3.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Якiсний сервiс</span>
                            <p>Кур'єри, які працюють із фізичними особами, проходять обов'язкове внутрішнє навчання, діючи в рамках посадових інструкцій. Вони поважають і цінують клієнтів: завжди ввічливі та пунктуальні.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec5-icon4.svg" alt="">
                        </div>
                        <div class="descr">
                            <span>Зворотнiй зв'язок</span>
                            <p>З метою підвищення якості сервісу, за ходом виконання доставки від фізичної особи до фізичної особи стежить фахівець. У разі виникнення проблем він сповіщає клієнта і зв'язується для підтвердження даних.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec6" id="sec6">
            <div class="container">
                <form action="#" data-aos="fade-left">
                    <div class="title">
                        <h2><span>Напиши нам</span> і ми запропонуємо</h2>
                        <p>твій індивідуальний ціновий план!</p>
                    </div>
                    <input type="text" placeholder="Вашу адресу електронної пошти">
                    <input type="text" placeholder="Ваше повне ім'я">
                    <input type="text" placeholder="Ваш номер телефону">
                    <button>Зв'язатися з нами</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="container">
                <img src="./assets/img/logo-footer.svg" alt="">
                <p>Copyright Delivery Company - 2023</p>
            </div>
        </footer>
    </div>
    <?php require "footer.php" ?>