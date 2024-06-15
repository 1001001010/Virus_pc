@extends('layouts.app')

@section('content')
    <div class="main-container">
        <p class="silka">Главная / Модели / {{ $product->name }}</p>
        <div class="gr1">
            <div class="inviz"></div>
            <div class="txtgr1">
                <p class="one">ONE</p>
                <div class="flex1">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <p class="reviews">(5 отзывов)</p>
                </div>
                <p class="game-platform">Игровая платформа, построенная на базе процессора Intel® Core™ i5-12400(F)
                    [до 4.4GHz, 6 ядер] и видеокарты Palit GeForce RTX 4060 Dual [8GB, 3072CUDA].</p>
                <div class="flex2">
                    <p class="price">Цена 116 300 ₽</p>
                    <button class="butcorzin">
                        <div class="corzin"></div>
                        <p class="add">В корзину</p>
                    </button>
                </div>
                <div class="flex3">
                    <div class="clock"></div>
                    <p class="time">На заказ, 6 - 9 дн.</p>
                </div>
                <div class="geforcepic"></div>
            </div>
        </div>
        <p class="pc">Комплектация ONE</p>
        <div class="flex4">
            <div class="geforceimage"></div>
            <div class="textgr2">
                <p class="videocard">Видеокарта</p>
                <p class="geforce">Palit GeForce RTX 4060 Dual [8GB, 3072 CUDA]</p>
                <p class="opis">GeForce RTX™ 4060 серии Dual имеет гладкое черное покрытие. Благодаря
                    двум большим 95-мм вентиляторам и отверстиям повышенной площади на задней панели видеокарты, видеокарта
                    обеспечивает
                    конкурентоспособные эффективность охлаждения и акустические характеристики. Тонкая RGB-подсветка на
                    задней панели также
                    добавляет компьютеру визуальный стиль, не отвлекая при этом слишком много внимания.</p>
            </div>
        </div>
        <div class="flex4">
            <div class="textgr2">
                <p class="videocard">Процессор</p>
                <p class="geforce">Intel® Core™ i5-12400(F) [до 4.4GHz, 6 ядер]</p>
                <p class="opis">Оцените исключительную производительность ПК для дома и бизнеса благодаря наличию 6 ядер
                    для игр, творчества и многозадачности.</p>
            </div>
            <div class="geforceimage1"></div>
        </div>
        <div class="flex4">
            <div class="geforceimage2"></div>
            <div class="textgr2">
                <p class="videocard">Материнская плата</p>
                <p class="geforce">MSI PRO B760M-A [DDR4, Wi-Fi]</p>
                <p class="opis">MSI PRO B660M-A DDR4 (Wi-Fi) PRO-серии сочетаются отличная функциональность и высокое
                    качество
                    изготовления – они идеально подходят для продуктивного труда.</p>
            </div>
        </div>
        <div class="flex4">
            <div class="textgr2">
                <p class="videocard">Охлаждение</p>
                <p class="geforce">DeepCool AG400 BK ARGB</p>
                <p class="opis">Кулер для процессора DEEPCOOL AG400 BK ARGB оснащен мощным вентилятором 12 см, который
                    развивает скорость до 2000 об/мин. Автоматическая регулировка увеличивает/уменьшает мощность
                    для быстрого отвода тепла под нагрузкой и экономичного потребления при нормальной температуре.
                    Кулер дополнен яркой ARGB-подсветкой крыльчатки и гидродинамическим подшипником для тихой и
                    эффективной работы.</p>
            </div>
            <div class="geforceimage3"></div>
        </div>
        <div class="flex4">
            <div class="geforceimage4"></div>
            <div class="textgr2">
                <p class="videocard">Оперативная память</p>
                <p class="geforce">16GB Kingston FURY Beast RGB [DDR4, 3600MHz,
                    2x8GB]</p>
                <p class="opis">Модуль памяти Kingston FURY™ Beast DDR4 RGB помогает выразить свой стиль и обеспечивает
                    повышение производительности благодаря частоте 3600 МГц, агрессивному дизайну и RGB-подсветке
                    по всей длине модуля, которая обеспечивает плавные, потрясающие световые эффекты.</p>
            </div>
        </div>
        <div class="flex4">
            <div class="textgr2">
                <p class="videocard">SSD накопитель</p>
                <p class="geforce">500GB ADATA LEGEND 800 [3500MB/s, Gen4]</p>
                <p class="opis">M.2 накопитель ADATA LEGEND 800 способен обеспечить высокую отзывчивость и
                    производительность при обработке ресурсоемких задач: рендеринг, визуализация, создание
                    трехмерных изображений и видео, запуск игр.</p>
            </div>
            <div class="geforceimage5"></div>
            <div class="flex4">
                <div class="geforceimage6"></div>
                <div class="textgr2">
                    <p class="videocard">Блок питания</p>
                    <p class="geforce">500W DeepCool PK500D [80+ Bronze]</p>
                    <p class="opis">Deepcool PK500D обеспечивают надежность питания и низкий уровень шума во в течении
                        всего
                        периода эксплуатации, а энергоэффективность соответствует требованиям сертификата 80 PLUS
                        Bronze.</p>
                </div>
            </div>
            <div class="flex4">
                <div class="textgr2">
                    <p class="videocard">Корпус</p>
                    <p class="geforce">DeepCool CC360 ARGB</p>
                    <p class="opis">Корпус DeepCool CC360 ARGB предназначен для сборки мощного игрового ПК. Он представлен
                        в
                        формате Mini-Tower, что говорит о его компактных размерах. Перфорированная лицевая панель
                        обеспечивает усиленную вентиляцию, благодаря чему эффективно отводится тепло от всех
                        компонентов. Внутрь корпуса встроены 3 вентилятора диаметром 120 мм с ARGB-подсветкой.</p>
                </div>
                <div class="geforceimage7"></div>
                <div class="flex4">
                    <div class="textgr2">
                        <p class="videocard">Подсветка</p>
                        <p class="geforce">Стандартная Зеленая</p>
                        <p class="opis">Подсветка представляет собой не просто функциональное дополнение к вашему
                            компьютеру, но и
                            мощный инструмент персонализации, позволяющий отразить ваш уникальный стиль и настроение. С
                            широким выбором цветов — от живой радуги RGB, пылкого красного, успокаивающего зеленого,
                            прохладного синего, вдохновляющего фиолетового, до чистого и минималистичного белого —
                            каждый может найти идеальный оттенок, соответствующий его предпочтениям и образу жизни.</p>
                    </div>
                    <div class="geforceimage8"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
