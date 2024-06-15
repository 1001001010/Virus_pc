<footer>
    <link rel="stylesheet" href="{{ asset('css/headandfoot.css') }}" />
    <div class="fon2">
        <div class="fot">
            <div class="text5">
                <p class="mod">Модели</p>
                @foreach ($categories as $category)
                    <a class="optim"
                        href="{{ route('category', ['category_link' => $category->link]) }}">{{ $category->name }}</a>
                @endforeach
            </div>
            <div class="kontakt">
                <p class="kon">
                    Контакты</p>
                <a class="nom"
                    href="https://yandex.ru/maps/63/irkutsk/house/ulitsa_lenina_5a/ZUkCaAVoSEYBXUJvYWJzeX9iYAA=/?ll=104.281201%2C52.284068&z=17.96">+7(950)-054-99-99<br>
                    Ежедневно с 9:00 до 18:00<br>
                    г.Иркутск, ул.Ленина 5а</a>
            </div>
        </div>
    </div>
</footer>
