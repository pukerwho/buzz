<?php

function bookcook_create_link() {
  $bookcook_links = bookcook_links();
  // Получаем случайное число соответсвующее какому-то объекту
  $i = random_int(1,count($bookcook_links));

  // Генерируем случайное число для Анкора
  $count_anchors_array = count($bookcook_links[$i]['anchors']) - 1;
  $a = random_int(0,$count_anchors_array);

  $random_link = $bookcook_links[$i]['link'];
  $random_anchor = $bookcook_links[$i]['anchors'][$a];
  $prepare_link = '<a href="'.$random_link.'">'.$random_anchor.'</a>';

  return $prepare_link; 
}

function bookcook_links() {
		
  $bookcook_links = Array(
    1 => array (
"link" => "https://book-cook.net/steviya-koryst-ta-shkoda/",
"anchors" => array (
"Що лікує стевія",
"Що краще стевія чи цукор",
"Як стевія впливає на організм",
"чим шкідлива стевія",
"Шкода стевії",
"Стевія: користь і шкода для організму",
)),
2 => array (
"link" => "https://book-cook.net/chym-shkidlyva-mivina-abo-shho-bude-yakshho-yisty-mivina-shhodnya/",
"anchors" => array (
"чим шкідлива мівіна",
"Що шкідливого в Мівіні",
"Що входить в склад Мівіни",
"Що буде якщо їсти сиру Мівіну",
)),
3 => array (
"link" => "https://book-cook.net/diyetychna-syrna-zapikanka-z-yablukamy/",
"anchors" => array (
"Дієтична запіканка з яблуками в духовці",
"Дієтична сирна запіканка в духовці",
"як приготувати дієтичну сирну запіканку з яблуками",
)),
4 => array (
"link" => "https://book-cook.net/salat-do-shashlyku-6-riznyh-variantiv/",
"anchors" => array (
"Салат з капусти до шашлику",
"салат з помідорів до шашлику",
"салат з цибулі до шашлику",
"Овочеві салати до шашлику",
"Швидкий маринований салат до шашлику",
)),
5 => array (
"link" => "https://book-cook.net/reczept-grechky-z-morkvoyu-i-czybuleyu/",
"anchors" => array (
"гречка з морквою і цибулею",
"гречка з морквою і цибулею в мультиварці",
"Як варити гречку з зажаркою",
)),
6 => array (
"link" => "https://book-cook.net/pechinkovi-oladky-z-mankoyu-najkrashhyj-reczept/",
"anchors" => array (
"Печінкові оладки рецепт з манкою",
"як приготувати печінкові оладки",
)),
7 => array (
"link" => "https://book-cook.net/oladky-zi-svynyachoyi-pechinky-4-smachnyh-reczeptiv/",
"anchors" => array (
"як приготувати оладки зі свинячої печінки",
"Рецепт: Оладки зі свинячої печінки",
"Оладки зі свинячої печінки",
"Печінкові оладки",
)),
8 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-soyeve-myaso/",
"anchors" => array (
"як правильно приготувати соєве м'ясо",
"Як приготувати соєве м'ясо",
)),
9 => array (
"link" => "https://book-cook.net/holodecz-z-kuryachyh-gomilok-prostyj-ta-smachnyj-reczept/",
"anchors" => array (
"Рецепт смачного холодцю із гомілок",
"як приготувати Холодець з курячих гомілок",
"Скільки потрібно желатину на курячий холодець",
"холодець з курячих гомілок",
"холодець з курячих гомілок без желатину",
)),
10 => array (
"link" => "https://book-cook.net/musovyj-tort-z-dzerkalnoyu-glazuryu-yak-zrobyty/",
"anchors" => array (
"торт з дзеркальною глазур'ю",
"Як правильно покривати торт дзеркальною глазур'ю",
"Мусовий торт з дзеркальною глазур'ю",
"як зробити Мусовий торт з дзеркальною глазур'ю",
)),
11 => array (
"link" => "https://book-cook.net/salat-z-varenoyi-morkvy-10-smachnyh-variantiv-reczepta/",
"anchors" => array (
"рецепт Салату з вареної моркви",
"як приготувати Салат з вареної моркви",
"салат з вареної моркви і горошку",
"салат з вареної моркви і сирка",
"салат з вареної моркви з олією",
"салат з вареної моркви і ковбаси",
"салат з вареної моркви і яєць",
"салат з вареної моркви і кукурудзи",
"салат з вареної моркви і буряка",
"салат з вареної моркви і квасолі",
"салат з вареної моркви з часником",
"салат з вареної моркви та картоплі",
)),
12 => array (
"link" => "https://book-cook.net/pyrig-z-konservovanymy-persykamy-prostyj-reczept/",
"anchors" => array (
"пиріг з консервованими персиками",
"Простий пиріг з консервованими персиками",
"рецепт пирога з консервованими персиками",
"як приготувати Пиріг з консервованими персиками",
)),
13 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-gorbushu-na-skovorodi/",
"anchors" => array (
"Горбуша смажена на сковороді",
"Як жарити горбушу",
"Горбуша на сковороді",
"Як посмажити філе горбуші",
"рецепт смаженої горбуші на сковороді",
)),
14 => array (
"link" => "https://book-cook.net/tefteli-z-pidlyvoyu-na-skovorodi-5-prostyh-ta-smachnyh-reczeptiv/",
"anchors" => array (
"тефтелі на сковороді",
"Тефтелі на сковороді без рису",
"тефтелі з томатною підливою на сковороді",
"тефтелі тушені на сковороді",
"рецепт Тефтелей з підливою на сковороді",
"як приготувати тефтелі на сковороді",
)),
15 => array (
"link" => "https://book-cook.net/fruktova-tarilka-dlya-ditej-7-variantiv-oformlennya/",
"anchors" => array (
"як зробити фруктову тарілку",
"ідеї для фруктової тарілки",
"фруктова тарілка",
"фруктова тарілка для дітей",
"фруктова тарілка фото",
"фруктова тарілка з ананасом",
"фруктова тарілка оформлення",
"Оформлення фруктів на тарілці",
)),
16 => array (
"link" => "https://book-cook.net/salat-z-yazykom-i-marynovanymy-ogirkamy-5-reczeptiv/",
"anchors" => array (
"Салат з язика і маринованих огірків",
"Салат із язиком і солоними огірками",
"рецепт Салату з язиком і маринованими огірками",
"як приготувати Салат з язиком і маринованими огірками",
)),
17 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-zamorozheni-midiyi-5-reczeptiv/",
"anchors" => array (
"Як приготувати заморожені мідії",
"Як варити заморожені мідії",
"Рецепт приготування заморожених мідій",
"Як приготувати заморожені мідії",
"Заморожені мідії: як правильно готувати",
"Як приготувати заморожене м'ясо мідії",
)),
18 => array (
"link" => "https://book-cook.net/10-strav-z-farshu-na-shvydku-ruku/",
"anchors" => array (
"Страви з м'ясного фаршу на швидку руку",
"Прості страви з фаршу",
"страви з фаршу на швидку руку",
"що приготувати з фаршу на швидку руку",
)),
19 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-salat-z-kopchenym-syrom-8-smachnyh-reczeptiv/",
"anchors" => array (
"Як приготувати салат з копченим сиром",
"рецепт салату з копченим сиром",
"Салат з ковбасним сиром",
"салат з копченим сиром косичка",
"салат з копченим сиром і сухариками",
"салат з копченим сиром і корейською морквою",
"салат з копченим сиром і мисливськими ковбасками",
"салат з буряка і копченим сиром",
"салат з крабовими паличками і копченим сиром",
"салат з копченою куркою і копченим сиром",
)),
20 => array (
"link" => "https://book-cook.net/morozyvo-z-solonoyu-karamellyu-yak-zrobyty-vdoma-prostyj-reczept/",
"anchors" => array (
"Морозиво з солоною карамеллю",
"як зробити Морозиво з солоною карамеллю вдома",
"простий рецепт Морозива з солоною карамеллю",
"як приготувати Морозиво з солоною карамеллю",
)),
21 => array (
"link" => "https://book-cook.net/salat-z-savojskoyi-kapusty-prostyj-reczept/",
"anchors" => array (
"Простий рецепт салату з савойської капусти",
"як приготувати савойську капусту",
"Савойська капуста в різних стравах",
"Що таке савойська капуста",
"Корисні властивості савойської капусти",
)),
22 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-kuryachogo-farshu-5-smachnyh-reczeptiv/",
"anchors" => array (
"Що приготувати з курячого фаршу",
"рецепти з курячим фаршом",
"ідеї страв з курячим фаршом",
)),
23 => array (
"link" => "https://book-cook.net/salat-z-buryakom-i-fetoyu-prostyj-reczept/",
"anchors" => array (
"Рецепт салату з буряком і фетою",
"Корисні властивості буряка та фети",
"Різні види сиру для салату з буряку",
"як приготувати салат з буряком і фетою",
)),
24 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-kambalu-v-duhovczi/",
"anchors" => array (
"Рецепт камбали в духовці",
"Як приготувати камбалу в духовці",
"Які спеції найкраще використовувати для приготування камбали",
)),
25 => array (
"link" => "https://book-cook.net/amarant-shho-cze-ta-yak-pravylno-varyty/",
"anchors" => array (
"Що таке амарант",
"як правильно варити амарант",
"як готувати амарант",
"Харчова цінність амаранту",
)),
26 => array (
"link" => "https://book-cook.net/yak-pravylno-zasolyty-salo-shhob-vono-bulo-myake/",
"anchors" => array (
"Як правильно засолити сало щоб воно було м’яке",
"як солити сало",
"Користь від споживання сала",
"шкода від споживання сала",
)),
27 => array (
"link" => "https://book-cook.net/salat-z-tunczem-7-prostyh-ta-smachnyh-reczeptiv/",
"anchors" => array (
"прості рецепти салату з тунцем",
"Смачні заправки до салатів з тунцем",
"Чи можна їсти салати з тунцем на сніданок",
)),
28 => array (
"link" => "https://book-cook.net/keks-na-kefiri-z-yablukamy-prostyj-reczept/",
"anchors" => array (
"простий рецепт Кексу на кефірі з яблуками",
"як приготувати Кекс на кефірі з яблуками",
)),
29 => array (
"link" => "https://book-cook.net/konfi-kompote-kuli-shho-cze-ta-chym-vidriznyayetsya/",
"anchors" => array (
"що таке Конфі",
"що таке компоте",
"що таке кулі",
"корисність Конфі",
"корисність компоте",
"корисність кулі",
"чим відрізняється Конфі компоте кулі",
)),
30 => array (
"link" => "https://book-cook.net/yajcze-benedykt-z-lososem-prostyj-reczept-na-snidanok/",
"anchors" => array (
"простий рецепт Яйце Бенедикт з лососем",
"Яка різниця між яйцем пашот та яйцем Бенедикт",
"Яйце Бенедикт з лососем рецепт",
"що таке Яйце Бенедикт",
"Яйце Бенедикт харчова цінність",
)),
31 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-selery-os-11-variantiv-shho-zrobyty-z-seleroyu/",
"anchors" => array (
"Що приготувати з селери",
"що зробити з селерою",
"Який смак у селери",
"Чи складно вирощувати селеру",
"Чи можна селерою зіпсувати страву",
)),
32 => array (
"link" => "https://book-cook.net/yaka-kalorijnist-grechky-rysu-ta-inshyh-krup/",
"anchors" => array (
"калорійність гречки",
"користь гречки",
"Чи покращує гречка стан шкіри",
"Яка калорійність манної крупи",
"Чим відрізняється білий рис від бурого",
"калорійність рису",
"користь рису",
"калорійність пшена",
"калорійність манної крупи",
"калорійність кускус",
"калорійність кіноа",
)),
33 => array (
"link" => "https://book-cook.net/yak-varyty-kuskus-chas-ta-proporcziyi/",
"anchors" => array (
"Як варити кускус",
"скільки часу варити кускус",
"пропорції для приготування кускусу",
"Що корисніше: булгур чи кускус",
"Користь кускусу для здоров’я",
"з чим їсти кускус",
"Чи можна на дієті їсти кускус",
"Які спеції найкраще використовувати для приготування кускуса",
"",
)),
34 => array (
"link" => "https://book-cook.net/yak-zrobyty-halvu-vdoma-6-reczeptiv-domashnoyi-halvy/",
"anchors" => array (
"рецепт Класична халва з насіння",
"рецепт Кокосова халва з горіхами",
"рецепт Шоколадна халва з кунжутом",
"рецепт Мигдальна халва з медом",
"рецепт Тахіні халва з медом і фруктами",
"рецепт Горіхова халва з медом і родзинками",
"походження халви",
"Яка може бути шкода від халви",
"Зі скількох років можна давати дитині халву",
"Чи існує дієтична халва",
"Як зробити халву вдома",
"рецепти домашньої халви",
)),
35 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-pasku-vdoma-6-prostyh-ta-smachnyh-reczeptiv/",
"anchors" => array (
"рецепт класичної паски",
"рецепт фруктової паски",
"рецепт шоколадної паски",
"Нетрадиційні інгредієнти до паски",
"Для чого готувати паску",
"рецепт паски Без випічки",
"рецепт паски з горіхами та медом",
"рецепт паски з маком та цитрусовими",
"Як приготувати паску вдома",
"прості та смачні рецепти домашньої паски",
"Які є поради щодо зберігання паски",
"чи є обов’язковим приготування паски на Великдень",
)),
36 => array (
"link" => "https://book-cook.net/10-diyetychnyh-strav-z-kabachkiv-smachni-ta-prosti-reczepty/",
"anchors" => array (
"дієтичні страви з кабачків",
"смачні та прості рецепти дієтичних страв з кабачків",
"Коли в Україні з'явились кабачки",
"Цікаві факти про кабачки",
"Як виростити кабачки в умовах міста",
"Корисні властивості кабачків",
"Що буде з організмом якщо місяць їсти лише кабачки",
"",
)),
37 => array (
"link" => "https://book-cook.net/sous-demiglas-shho-cze-yak-gotuvaty-z-chym-poyednuyetsya-ta-chym-mozhna-zaminyty/",
"anchors" => array (
"Що таке Соус деміглас",
"як готувати Соус деміглас",
"походження Соусу деміглас",
"з чим поєднується Соус деміглас",
"чим можна замінити Соус деміглас",
"Чи можна соус деміглас дитині",
)),
38 => array (
"link" => "https://book-cook.net/zelena-grechka-yaka-vid-neyi-koryst/",
"anchors" => array (
"Харчова цінність зеленої гречки",
"Як правильно їсти зелену гречку",
"Чи можна їсти зелену гречку кожного дня",
"Чим звичайна гречка відрізняється від зеленої",
"Користь зеленої гречки для здоров'я",
"Застосування зеленої гречки в кулінарії",
"Вітаміни у зеленій гречці",
"Гречана дієта",
)),
39 => array (
"link" => "https://book-cook.net/yak-pravylno-varyty-krevetky/",
"anchors" => array (
"Як правильно варити креветки",
"Як визначити готовність креветок під час варіння",
"Як прикрасити та подати варені креветки",
"Особливості варіння різних видів креветок",
" Час варіння креветок",
)),
40 => array (
"link" => "https://book-cook.net/mini-picza-na-batoni-v-duhovczi-prostyj-reczept/",
"anchors" => array (
"простий рецепт Міні-піци на батоні в духовці",
"Рецепт міні-піци на батоні",
"Варіанти начинок для піц на батоні",
"ідеї для креативного сервірування міні-піци на батоні в духовці",
"альтернативні варіанти тіста для міні-піци на батоні в духовці",
)),
41 => array (
"link" => "https://book-cook.net/salat-z-kovbasoyu-i-syrom-10-smachnyh-reczeptiv/",
"anchors" => array (
"смачні рецепти Салату з ковбасою і сиром",
"чим корисний салат з ковбасою і сиром",
"як приготувати салат з ковбасою і сиром",
)),
42 => array (
"link" => "https://book-cook.net/chy-korysni-vodorosti-nori/",
"anchors" => array (
"Чи корисні водорості норі",
"що таке водорості норі",
"Негативний вплив на організм водоростей норі",
"Корисні властивості водоростей норі",
"Який негативний вплив водоростей норі на організм після обробки",
"Поживні речовини у водорості норі",
)),
43 => array (
"link" => "https://book-cook.net/shho-treba-yisty-shhob-nabraty-vagu-spysok-produktiv/",
"anchors" => array (
"Що треба їсти щоб набрати вагу",
"список продуктів для набору ваги",
"Як часто потрібно їсти для набору ваги",
"Чи можна займатись спортом якщо хочеш набрати вагу",
"Продукти від яких збільшується вага",
"Чому деяким людям проблематично набрати вагу",
"Від чого люди набирають вагу",
)),
44 => array (
"link" => "https://book-cook.net/sviti-shho-cze-za-frukt-yak-jogo-yisty/",
"anchors" => array (
"Світі що це за фрукт",
"як їсти світі",
"характеристики світі",
"Що можна приготувати зі світі",
"користь світі",
"Які мінерали знаходяться в світі",
"Які основні вітаміни містить фрукт світі",
)),
45 => array (
"link" => "https://book-cook.net/med-koryczya-cze-korysno-chy-ni/",
"anchors" => array (
"як вживати Мед з корицею",
"Мед з корицею це корисно чи ні",
"Як вживати корицю з медом найкраще",
"Шкода меду та кориці при алергічних реакціях",
"користь меду та кориці",
)),
46 => array (
"link" => "https://book-cook.net/kendi-bar-candy-bar-dlya-ditej-svoyimy-rukamy-10-idej/",
"anchors" => array (
"Кенді бар для дітей своїми руками",
"Candy bar для дітей своїми руками",
"Як зробити тематичний Кенді Бар для дітей",
"Що таке Кенді Бар",
"Чим актуальний Кенді Бар на весіллі",
)),
47 => array (
"link" => "https://book-cook.net/yak-pravylno-yisty-kovbasu-fuet/",
"anchors" => array (
"Як правильно їсти ковбасу фует",
"Походження ковбаси фует",
"Як зробити ковбасу фует",
"Як сушити ковбасу фует",
"чим корисна ковбаса фует",
)),
48 => array (
"link" => "https://book-cook.net/smuzi-z-avokado-5-smachnyh-reczeptiv/",
"anchors" => array (
"Смузі з авокадо",
"рецепт Смузі з авокадо",
"Який рецепт авокадо-ягідного смузі",
"Яка користь смузі з авокадо",
)),
49 => array (
"link" => "https://book-cook.net/chy-mozhna-yisty-borshh-pry-czukrovomu-diabeti/",
"anchors" => array (
"Чи можна їсти борщ при цукровому діабеті",
"Як часто можна їсти борщ при цукровому діабеті",
"Як впливає буряк на цукровий діабет",
)),
50 => array (
"link" => "https://book-cook.net/kasha-artek-yak-varyty-yaki-proporcziyi-skilky-chasu/",
"anchors" => array (
"як варити Кашу Артек",
"які пропорції варіння Каши Артек",
"скільки часу варити Кашу Артек",
"рецепти Каши Артек",
)),
51 => array (
"link" => "https://book-cook.net/ogirky-po-finsky/",
"anchors" => array (
"Рецепт огірків по-фінськи",
"Звідки походить традиція огірків по-фінськи",
)),
52 => array (
"link" => "https://book-cook.net/10-smachnyh-nachynok-dlya-lavasha-na-shvydku-ruku/",
"anchors" => array (
"начинки для лаваша на швидку руку",
"Смачні начинки для лаваша",
"Яка начинка для лаваша готується найшвидше",
)),
53 => array (
"link" => "https://book-cook.net/syrni-kulky-prostyj-pokrokovyj-reczept/",
"anchors" => array (
"простий рецепт Сирних кульок",
"Зберігання Сирних кульок",
"ідеї для подачі сирних кульок",
"як приготувати Сирні кулькі",
)),
54 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-yabluk-5-smachnyh-reczeptiv/",
"anchors" => array (
"Що приготувати з яблук",
"рецепти Що приготувати з яблук",
"Які рецепти з яблук підійдуть новачкам",
)),
55 => array (
"link" => "https://book-cook.net/smachni-nachynky-dlya-mlyncziv-ideyi-ta-reczepty/",
"anchors" => array (
"Смачні начинки для млинців",
"рецепт Смачних начинок для млинців",
"Як правильно загортати начинку у млинці",
"як приготувати начинки для млинців",
"Яке мʼясо краще обрати для начинки для млинців",
)),
56 => array (
"link" => "https://book-cook.net/pyshni-keksy-na-smetani-pokrokovyj-reczept/",
"anchors" => array (
"Пишні кекси на сметані",
"рецепт Пишних кексів на сметані",
"як приготувати Пишні кекси на сметані",
"Яку начинку найкраще використовувати у кексах",
)),
57 => array (
"link" => "https://book-cook.net/salat-z-ananasamy-5-prostyh-ta-smachnyh-reczeptiv/",
"anchors" => array (
"рецепт Салату з ананасами",
"як приготувати Салат з ананасами",
"Як правильно вибирати та зберігати свіжі ананаси для салатів",
)),
58 => array (
"link" => "https://book-cook.net/yak-smachno-zamarynuvaty-skumbriyu/",
"anchors" => array (
"Як смачно замаринувати скумбрію",
"Простий рецепт маринаду для скумбрії",
"Як правильно вибрати свіжу скумбрію перед маринуванням",
"Як правильно зберігати свіжу скумбрію перед маринуванням",
)),
59 => array (
"link" => "https://book-cook.net/yak-pravylno-rozvodyty-suhe-moloko-instrukcziya/",
"anchors" => array (
"Як правильно розводити сухе молоко",
"інструкція Як правильно розводити сухе молоко",
"Якою водою потрібно розводити сухе молоко",
"Як зберігати сухе молоко після розведення",
)),
60 => array (
"link" => "https://book-cook.net/koryst-arahisu-dlya-cholovikiv/",
"anchors" => array (
"Користь арахісу для чоловіків",
"Арахіс у спортивному харчуванні чоловіків",
"Скільки можна їсти арахісу за один день",
)),
61 => array (
"link" => "https://book-cook.net/salaty-iz-buryaka-25-legkyh-reczeptiv/",
"anchors" => array (
"Салати із буряка",
"рецепти Салату із буряка",
"як приготвувати Салат із буряка",
"простий рецепт Салату із буряка",
)),
62 => array (
"link" => "https://book-cook.net/syrnyj-pyrig-prostyj-reczept-pyroga-z-syrom/",
"anchors" => array (
"простий рецепт пирога з сиром",
"як приготувати пиріг з сиром",
"начинки для пирога з сиром",
"Скільки часу займає приготування пирога з сиром",
)),
63 => array (
"link" => "https://book-cook.net/koryst-avokado-shho-bude-yakshho-kozhnogo-dnya-yisty-avokado/",
"anchors" => array (
"Користь авокадо",
"Користь авокадо для організму",
"вітаміни в авокадо",
"Вплив авокадо на регуляцію ваги",
"Чому не можна їсти багато авокадо",
"мінерали в авокадо",
"Кому не можна їсти авокадо",
"Скільки авокадо можна їсти в день",
"Яка користь з авокадо для жінок",
)),
64 => array (
"link" => "https://book-cook.net/diyetychni-salaty-z-kukurudzoyu-4-prostyh-reczepta/",
"anchors" => array (
"Дієтичні салати з кукурудзою",
"рецепт Дієтичного салату з кукурудзою",
"як приготувати Дієтичний салат з кукурудзою",
)),
65 => array (
"link" => "https://book-cook.net/energetyky-korysno-chy-shkidlyvo-vzhyvaty-energetychni-napoyi/",
"anchors" => array (
"Склад енергетичного напою",
"Як енергетичний напій діє на організм",
"Чому шкідливо вживати енергетичні напої",
"Чим замінити енергетичні напої",
"Чи є користь від енергетика",
)),
66 => array (
"link" => "https://book-cook.net/koryst-yabluka-shho-bude-yakshho-kozhnogo-dnya-yisty-yabluka/",
"anchors" => array (
"Користь яблука",
"що буде якщо кожного дня їсти яблука",
"Яблука та дієтологія",
"Вітаміни в яблуках",
"Як яблука впливають на вагу",
"Скільки можна їсти яблук в день",
"Коли треба їсти яблука",
"Як яблука впливають на шкіру обличчя",
)),
67 => array (
"link" => "https://book-cook.net/8-produktiv-yaki-krashhe-spozhyvaty-syrymy/",
"anchors" => array (
"Користь сирих продуктів",
"продукти які можна вживати сирими",
"Чи варто вживати сиру їжу",
"Шкода сирих продуктів",
)),
68 => array (
"link" => "https://book-cook.net/yaka-koryst-mango-dlya-zhinok/",
"anchors" => array (
"користь манго для жінок",
"Скільки можна вживати манго в день",
"Чи можна схуднути за допомогою манго",
)),
69 => array (
"link" => "https://book-cook.net/diyetychni-salaty-na-vecheryu-5-smachnyh-reczeptiv/",
"anchors" => array (
"Дієтичні салати на вечерю",
"рецепти Дієтичних салатів на вечерю",
"як приготувати Дієтичний салат на вечерю",
)),
70 => array (
"link" => "https://book-cook.net/prostyj-reczept-domashnogo-hliba-na-vodi/",
"anchors" => array (
"Рецепт хліба на воді",
"Простий рецепт домашнього хліба на воді",
"Види домашнього хліба",
"як приготувати домашній хліб на воді",
)),
71 => array (
"link" => "https://book-cook.net/moloko-z-medom-chy-dopomagaye-czej-napij-pry-prostudi/",
"anchors" => array (
"чи допомагає Молоко з медом при простуді",
"спосіб приготування Молока з медом",
"Корисні властивості молока з медом",
"Чи можна вживати молоко з медом зранку",
"Чи можна пити молоком з медом та маслом дитині віком від дванадцяти років",
"Скільки днів поспіль можна вживати молоко з медом",
)),
72 => array (
"link" => "https://book-cook.net/keks-i-mafin-v-chomu-riznyczya/",
"anchors" => array (
"в чому різниця Кексу і мафіну",
"чим кекс відрізняється від мафіну",
"Що швидше готується кекси чи мафіни",
"Що корисніше Кекс чи мафін",
"Що смачніше Кекс чи мафін",
)),
73 => array (
"link" => "https://book-cook.net/mlynczi-prylypayut-do-skovorody-shho-robyty/",
"anchors" => array (
"що робити якщо Млинці прилипають до сковороди",
"Як посмажити млинці щоб вони не прилипали",
"Скільки смажити млинці",
"Чому млинці прилипають до сковороди",
"Рецепт тіста на млинці яке не прилипає до сковороди",
)),
74 => array (
"link" => "https://book-cook.net/shho-vhodyt-do-skladu-vasabi-z-chogo-roblyat-vasabi/",
"anchors" => array (
"Що входить до складу васабі",
"з чого роблять васабі",
"Приготування васабі вдома",
"Корисні властивості васабі",
"Як правильно їсти васабі",
)),
75 => array (
"link" => "https://book-cook.net/z-chogo-roblyat-halvu-sklad-kalorijnist-koryst-ta-shkoda/",
"anchors" => array (
"З чого роблять халву",
"склад халви",
"калорійність халви",
"користь халви",
"шкода халви",
"Чи можна давати халву дитині",
)),
76 => array (
"link" => "https://book-cook.net/z-chogo-roblyat-zhelatyn-sklad-koryst-ta-shkoda/",
"anchors" => array (
"З чого роблять желатин",
"склад желатину",
"користь желатину",
"шкода желатину",
"Чи шкодить здоров'ю щоденне вживання желатину",
"Як желатин стає густим",
"Процес виготовлення желатину",
"альтернативи желатину",
)),
77 => array (
"link" => "https://book-cook.net/z-chogo-roblyat-zefir-sklad-ta-kalorijnist/",
"anchors" => array (
"З чого роблять зефір",
"склад зефіру",
"калорійність зефіру",
"види зефіру",
)),
78 => array (
"link" => "https://book-cook.net/z-chogo-roblyat-manku-mannu-krupu-sklad-ta-kalorijnist/",
"anchors" => array (
"З чого роблять манку",
"З чого роблять манну крупу",
"склад манки",
"Вплив манки на здоровʼя",
"калорійність манки",
"склад манної крупи",
"калорійність манної крупи",
"Чи можна викреслити із свого раціону манну крупу",
)),
79 => array (
"link" => "https://book-cook.net/chym-dzhem-vidriznyayetsya-vid-varennya-porivnyannya-reczeptiv/",
"anchors" => array (
"Чим джем відрізняється від варення",
"різниця між джемом та варіням",
"Способи використання варення та джему в кулінарії",
)),
80 => array (
"link" => "https://book-cook.net/tisto-na-pelmeni-na-moloczi-yak-prygotuvaty-v-domashnih-umovah/",
"anchors" => array (
"як приготувати в домашніх умовах Тісто на пельмені на молоці",
"Чому додають молоко у тісто на пельмені",
"рецепт Тіста на пельмені на молоці",
"Як варити пельмені з тіста на молоці",
)),
81 => array (
"link" => "https://book-cook.net/salat-tiffani-yak-prygotuvaty/",
"anchors" => array (
"як приготувати Салат Тіффані",
"рецепт Салату Тіффані",
"Скільки калорій у салаті Тіффані",
)),
82 => array (
"link" => "https://book-cook.net/tisto-na-manty-prostyj-pokrokovyj-reczept/",
"anchors" => array (
"як приготувати Тісто на манти",
"рецет Тіста на манти",
"Начинка на манти",
"з чим подавати манти",
)),
83 => array (
"link" => "https://book-cook.net/skilky-chasu-treba-zamochuvaty-gorihy/",
"anchors" => array (
"Чому потрібно замочувати горіхи",
"як краще замочувати горіхи",
"Скільки часу треба замочувати горіхи",
"Чому горіхи потрібно замочувати у воді",
)),
84 => array (
"link" => "https://book-cook.net/syrno-garbuzova-zapikanka-pokrokovyj-reczept/",
"anchors" => array (
"Сирно-гарбузова запіканка",
"Рецепт сирно-гарбузової запіканки",
"Рецепт запіканки з гарбуза",
"як приготувати сирно-гарбузову запіканку",
)),
85 => array (
"link" => "https://book-cook.net/z-chogo-roblyat-coca-cola-shho-dodayut-v-napij/",
"anchors" => array (
"З чого роблять Coca-Cola",
"що додають в Кока-колу",
"Що входить до складу Кока Коли",
"Як роблять Coca-Cola в Україні",
)),
86 => array (
"link" => "https://book-cook.net/garbuzova-kasha-z-pshonom-na-moloczi-prostyj-reczept/",
"anchors" => array (
"Гарбузова каша з пшоном на молоці",
"як приготувати Гарбузову кашу на молоці",
"рецепт гарбузової каши з пшном на молоці",
"Як приготувати молочну кашу з гарбуза",
)),
87 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-klasychni-belgijski-vafli-v-vafelnyczi/",
"anchors" => array (
"Як приготувати класичні бельгійські вафлі в вафельниці",
"Рецепт класичних бельгійських вафель",
"Хрусткі й золотисті бельгійські вафлі",
"Рецепти бельгійських вафель",
"Бельгійські вафлі - рецепт приготування",
"Хрусткі вафлі у вафельниці",
)),
88 => array (
"link" => "https://book-cook.net/kartoplya-po-selyansky-v-duhovczi-pokrokovyj-reczept/",
"anchors" => array (
"Картопля по-селянськи в духовці",
"рецепт картоплі по селянськи",
"Рецепт найсмачнішої картоплі по-селянськи",
"Як правильно запікати картоплю по селянськи",
"Скільки готується картопля по селянськи в духовці",
"Як приготувати хрустку картоплю в духовці",
)),
89 => array (
"link" => "https://book-cook.net/shho-bude-yakshho-kozhen-den-pyty-chaj-z-myatoyu/",
"anchors" => array (
"Що буде якщо кожен день пити чай з м'ятою",
"користь чаю з м'ятою",
"Чому не можна пити багато м'ятного чаю",
"Кому не можна пити чай з м'ятою",
)),
90 => array (
"link" => "https://book-cook.net/salaty-z-yazyka-5-smachnyh-reczeptiv/",
"anchors" => array (
"Салати з язика",
"Як правильно варити язик",
"рецепт салату з язиком",
"як приготувати салат з язика",
)),
91 => array (
"link" => "https://book-cook.net/buterbrody-na-den-narodzhennya-15-ideyi-ta-reczeptiv/",
"anchors" => array (
"Бутерброди на день народження",
"Бутерброди на день народження дитини",
"рецепти смачних бутербродів",
"Бутерброди на святковий стіл",
"Рецепти найсмачніших бутербродів",
"Канапки на святковий стіл",
)),
92 => array (
"link" => "https://book-cook.net/yak-pravylno-smazhyty-syr-halumi-porady-ta-rekomendacziyi/",
"anchors" => array (
"Як правильно смажити сир Халумі",
"Як правильно приготувати сир Халумі вдома",
"Як смажити халумі",
"Скільки смажити сир Халумі",
"Як правильно смажити сир халумі на сковороді",
)),
93 => array (
"link" => "https://book-cook.net/banan-na-nich-korysno-chy-ni/",
"anchors" => array (
"Банан на ніч: корисно чи ні",
"чи можна їсти банан на ніч",
"чи корисно їсти банан на ніч",
"Що буде якщо з'їсти банан на ніч",
"чому не можна їсти банан перед сном",
)),
94 => array (
"link" => "https://book-cook.net/salat-kozel-v-gorodi-prostyj-reczept/",
"anchors" => array (
"Салат козел в городі",
"покроковий рецепт салату козел в городі",
"як приготувати салат козел в городі",
)),
95 => array (
"link" => "https://book-cook.net/tort-iz-pechyva-mariya-pokrokovyj-reczept/",
"anchors" => array (
"Торт із печива Марія",
"смачний торт з печива марія",
"як приготувати торт з печива марія",
"рецепт торта з печива марія",
)),
96 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-ovsyanomlyn-bez-moloka/",
"anchors" => array (
"Як приготувати овсяномлин без молока",
"рецепт приготування овсяномлина без молока",
"овсяномлин без молока",
)),
97 => array (
"link" => "https://book-cook.net/shho-yist-yizhak-chym-mozhna-jogo-nagoduvaty/",
"anchors" => array (
"Що їсть їжак",
"чим можна годувати їжака",
"Коли краще годувати їжака",
"що не можна давати їжаку",
"чим не можна годувати їжаків",
)),
98 => array (
"link" => "https://book-cook.net/veseli-snidanky-dlya-ditej-20-czikavyh-idej/",
"anchors" => array (
"Веселі сніданки для дітей",
"рецепти креативних сніданків для дітей",
)),
99 => array (
"link" => "https://book-cook.net/korysni-snidanky-dlya-dytyny-v-2-3-roky-prosti-reczepty/",
"anchors" => array (
"Корисні сніданки для дитини в 2-3 роки",
"Що приготувати дитині 2 роки на сніданок",
"Харчування дитини в 2 роки",
"креативні рецепти для дитини 3 роки",
)),
100 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-yakshho-vse-nabrydlo/",
"anchors" => array (
"Що приготувати якщо все набридло",
)),
101 => array (
"link" => "https://book-cook.net/buterbrody-iz-somgoyu-15-variantiv/",
"anchors" => array (
"Бутерброди із сьомгою",
"Бутерброди з сьомгою",
"Прості бутерброди з сьомгою",
"рецепт бутербруда з сьомгою",
)),
102 => array (
"link" => "https://book-cook.net/salat-z-synoyi-kapusty-5-prostyh-reczeptiv-ta-ideyi/",
"anchors" => array (
"Салат з синьої капусти",
"рецепти салатів із синьої капусти",
"Салат із синьою капустою та кунжутом",
"Ідеї салатів із синьої капусти",
)),
103 => array (
"link" => "https://book-cook.net/porady-yak-zamorozyty-bilokachannu-kapustu-na-zymu/",
"anchors" => array (
"як заморозити білокачанну капусту на зиму",
"Чи можна заморожувати білокачанну капусту в морозилці",
"Чи можна заморожувати свіжу капусту на зиму",
"Як заморозити капусту на зиму",
)),
104 => array (
"link" => "https://book-cook.net/chy-mozhna-vagitnym-yisty-chipsy/",
"anchors" => array (
"Чи можна вагітним їсти чіпси",
"Чіпси при вагітності: можна їсти чи ні",
"Що не рекомендують їсти вагітним",
"Що не можна їсти при вагітності",
)),
105 => array (
"link" => "https://book-cook.net/10-czikavyh-faktiv-pro-czukerky/",
"anchors" => array (
"Цікаві факти про цукерки",
"факти про цукерки для дітей",
"Цікаві факти про солодощі",
)),
106 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-studentu-v-gurtozhytku-ideyi-ta-reczepty/",
"anchors" => array (
"Що приготувати студенту в гуртожитку",
"Що приготувати студенту на тиждень",
"Що приготувати студенту",
"Що можна приготувати з собою в гуртожиток",
"Бюджетні страви для студентів",
)),
107 => array (
"link" => "https://book-cook.net/korysni-snidanky-dlya-pidlitkiv-shho-prygotuvaty-pered-shkoloyu/",
"anchors" => array (
"Корисні сніданки для підлітків",
"сніданки для школярів",
"Прості та корисні сніданки для школярів",
"що приготувати перед школою",
"Який сніданок найкращий для дітей",
)),
108 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-choloviku-na-robotu-7-prostyh-reczeptiv/",
"anchors" => array (
"Що приготувати чоловіку на роботу",
"Що приготувати на роботу",
)),
109 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-koly-gosti-na-porozi/",
"anchors" => array (
"Що приготувати коли гості на порозі",
"Рецепти закусок за кілька хвилин",
"прості і смачні страви на швидку руку",
"Гості на порозі: рецепти швидких страв",
)),
110 => array (
"link" => "https://book-cook.net/vafelni-trubochky-na-skovorodi-prostyj-reczept/",
"anchors" => array (
"Вафельні трубочки на сковороді",
"як приготувати вафельні трубочки на сковороді",
"рецепт начинки для вафельних трубочок",
"рецепт вафельних трубочок на сковороді",
)),
111 => array (
"link" => "https://book-cook.net/yak-ta-chym-goduvaty-shotlandske-vyslovuhe-koshenya/",
"anchors" => array (
"що їсть шотландське висловухе кошеня",
"чим годувати шотландське висловухе кошеня",
)),
112 => array (
"link" => "https://book-cook.net/chym-goduvaty-kachok-na-ozeri-shho-mozhna-davaty-a-shho-ni/",
"anchors" => array (
"Чим годувати качок на озері",
"Які продукти можна давати качкам на озері",
"Що не можна давати качкам",
"Що можна давати качкам",
)),
113 => array (
"link" => "https://book-cook.net/yak-ta-chym-goduvaty-vagitnu-kishku/",
"anchors" => array (
"Чим годувати вагітну кішку",
"як правильно годувати вагітну кішку",
"Годування кішки в період вагітності",
)),
114 => array (
"link" => "https://book-cook.net/lajm-chy-lymon-shho-korysnishe/",
"anchors" => array (
"Лайм чи лимон: що корисніше",
"що корисніше лайм чи лимон",
)),
115 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-v-duhovczi-omlet-bez-moloka/",
"anchors" => array (
"Як приготувати в духовці омлет без молока",
"омлет без молока: простий рецепт",
"Омлет в духовці без молока",
)),
116 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-keks-v-mikrohvylovczi-bez-moloka/",
"anchors" => array (
"Як приготувати кекс в мікрохвильовці без молока",
"рецепт кекса без молока в мікрохвильовці",
"Кекс в мікрохвильовці за 5 хвилин",
"Як зробити кекс без молока в мікрохвильовій печі",
)),
117 => array (
"link" => "https://book-cook.net/chy-mozhna-davaty-krolyam-ogirky-porady-chym-goduvaty-krolykiv/",
"anchors" => array (
"Чи можна давати кролям огірки",
"Чим годувати кроликів",
"Користь огірків для кроликів",
)),
118 => array (
"link" => "https://book-cook.net/myaso-po-franczuzky-u-multyvarczi-prostyj-reczept/",
"anchors" => array (
"Мʼясо по-французьки у мультиварці",
"Рецепт мʼяса по-франузьки з курятиною",
"як приготувати мʼясо у мультиварці",
)),
119 => array (
"link" => "https://book-cook.net/kefir-abo-ryazhanka-shho-korysnishe/",
"anchors" => array (
"Кефір або ряжанка: що корисніше",
"кефір корисніше ніж ряженка чи ні",
"Що корисніше для схуднення: кефір або ряжанка",
"Чим відрізняється кефір від ряжанки",
)),
120 => array (
"link" => "https://book-cook.net/skilky-chasu-varyty-grechku-v-multyvarczi/",
"anchors" => array (
"Скільки часу варити гречку в мультиварці",
"Як варити гречку в мультиварці",
"Скільки вариться гречка в мультиварці",
"Скільки та як варити гречку в мультиварці",
)),
121 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-biskvit-z-yablukamy-v-multyvarczi/",
"anchors" => array (
"Як приготувати бісквіт з яблуками в мультиварці",
"рецепт бісквіту з яблуками в мультиварці",
"шарлотка з яблуками в мультиварці",
"Яблучний пиріг у мультиварці",
)),
122 => array (
"link" => "https://book-cook.net/5-diyetychnyh-strav-prygotovanyh-v-duhovczi/",
"anchors" => array (
"дієтичні страви в духовці",
"рецепти дієтичних страв в духовці",
"Рецепти дієтичних страв в духовці",
)),
123 => array (
"link" => "https://book-cook.net/chy-yidyat-sobaky-morkvu/",
"anchors" => array (
"Чи їдять собаки моркву",
"Чи люблять собаки моркву",
"Користь моркви для собак",
)),
124 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-syrnyky-bez-yayecz-v-duhovczi/",
"anchors" => array (
"Як приготувати сирники без яєць в духовці",
"рецепт сирників в духовці без яєць",
"Чим замінити яйця в сирниках",
)),
125 => array (
"link" => "https://book-cook.net/shho-bude-yakshho-zyisty-vovchi-yagody/",
"anchors" => array (
"Що буде якщо зʼїсти вовчі ягоди",
"що робити якщо з'їв вовчі ягоди",
"Де ростуть вовчі ягоди",
)),
126 => array (
"link" => "https://book-cook.net/yaku-yizhu-yidyat-kosmonavty/",
"anchors" => array (
"Яку їжу їдять космонавти",
"Система харчування космонавтів",
"що їдять космонавти",
)),
127 => array (
"link" => "https://book-cook.net/skilky-chasu-varyty-zamorozheni-pelmeni/",
"anchors" => array (
"Скільки часу варити заморожені пельмені",
"Скільки варити пельмені з яловичиною",
"Скільки варити пельмені з курячого мʼяса",
"Скільки варити пельмені зі свинного мʼяса",
)),
128 => array (
"link" => "https://book-cook.net/grybna-yushka-z-pecherycz-zi-smetanoyu-prostyj-reczept/",
"anchors" => array (
"Грибна юшка з печериць зі сметаною",
"Як зварити густий грибний суп із шампіньйонів",
"рецепт грибної юшки з печериць",
)),
129 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-rozsypchastyj-rys-iz-zamorozhenymy-ovochamy/",
"anchors" => array (
"Як приготувати розсипчастий рис із замороженими овочами",
"Як приготувати розсипчастий рис",
"Швидкий рецепт розсипчастого рису на гарнір",
)),
130 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-pechyvo-v-mikrohvylovij-pechi-pokrokovyj-reczept/",
"anchors" => array (
"Як приготувати печиво в мікрохвильовій печі",
"Як швидко приготувати печиво в мікрохвильовці",
"Печиво в мікрохвильовці за 5 хвилин",
)),
131 => array (
"link" => "https://book-cook.net/smachni-pisni-vafli-bez-yayecz-najkrashhyj-reczept/",
"anchors" => array (
"пісні вафлі без яєць",
"Як приготувати вафлі без використання яєць",
"пісні та тонкі вафлі без яєць",
)),
132 => array (
"link" => "https://book-cook.net/smachnyj-pechinkovyj-tort-bez-moloka/",
"anchors" => array (
"печінковий торт без молока",
"як приготувати печінковий торт без молока",
"Чим замінити молоко в печінковому торті",
)),
133 => array (
"link" => "https://book-cook.net/smachnyj-salat-z-kopchenoyu-kurkoyu-ta-pomidoramy/",
"anchors" => array (
"салат з копченою куркою та помідорами",
"рецепт салату з куркою та помідорами",
"як приготувати салат з копченою куркою та помідорами",
)),
134 => array (
"link" => "https://book-cook.net/smachnyj-pyrig-do-chayu-za-5-hvylyn-najprostishyj-reczept/",
"anchors" => array (
"Смачний пиріг до чаю за 5 хвилин",
"швидкий рецепт пирога до чаю",
)),
135 => array (
"link" => "https://book-cook.net/chaj-masala-shho-cze-ta-yak-pravylno-zavaryuvaty/",
"anchors" => array (
"Чай Масала",
"рецепт чаю масала",
"Користь чаю масала для здоров’я",
"як заварювати чай масала",
)),
136 => array (
"link" => "https://book-cook.net/smachnyj-pyrig-z-garbuzom-ta-yablukamy/",
"anchors" => array (
"Смачний пиріг з гарбузом та яблуками",
"рецепт гарбузового пирога з яблуками",
)),
137 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-farshu-i-kartopli-czikavi-ideyi/",
"anchors" => array (
"Що приготувати з фаршу і картоплі",
"Що зробити з фаршу і картоплі",
)),
138 => array (
"link" => "https://book-cook.net/yabluchnyj-pyrig-na-kefiri-v-multyvarczi-pokrokovyj-reczept/",
"anchors" => array (
"Яблучний пиріг на кефірі в мультиварці",
"Яблучний пиріг у мультиварці",
"Пиріг на кефірі з яблуками в мультиварці",
"Пиріг на кефірі з яблуками",
)),
139 => array (
"link" => "https://book-cook.net/prostyj-reczept-shokoladnyh-pankejkiv/",
"anchors" => array (
"Простий рецепт шоколадних панкейків",
"Шоколадні панкейки",
"Як приготувати панкейки із шоколадною начинкою",
"Простий рецепт шоколадних панкейків до сніданку",
)),
140 => array (
"link" => "https://book-cook.net/chaj-chy-kava-shho-korysnishe-pyty-zranku/",
"anchors" => array (
"Чай чи кава: що корисніше пити зранку",
"Порівняння кави та чаю",
"Чай пити замість кави",
"чи корисніше пити чай замість кави",
)),
141 => array (
"link" => "https://book-cook.net/rys-abo-makarony-shho-korysnishe/",
"anchors" => array (
"Рис або макарони: що корисніше",
"Що краще для схуднення: рис чи макарони",
"Що краще для діабетиків: рис або макарони",
)),
142 => array (
"link" => "https://book-cook.net/shho-bude-yakshho-yisty-kartoplyu-kozhnogo-dnya/",
"anchors" => array (
"Що буде якщо їсти картоплю кожного дня",
"Побічні ефекти вживання картоплі",
"Користь картоплі для здоров'я",
)),
143 => array (
"link" => "https://book-cook.net/najsmachnishi-kuhni-svitu-top-10/",
"anchors" => array (
"Найсмачніші кухні світу",
"10 найсмачніших кухонь світу",
"У якій країні найсмачніша їжа",
"Рейтинг найкращих кухонь світу",
"Кращі кухні світу",
)),
144 => array (
"link" => "https://book-cook.net/2-sposoby-vyznachyty-chy-zipsovane-yajcze/",
"anchors" => array (
"як визначити чи зіпсоване яйце",
"Як визначити що яйце не свіже",
"Як зрозуміти що яйце протухло",
"Як визначити вдома чи свіже куряче яйце",
"як за допомогою води визначити чи свіже яйце",
)),
145 => array (
"link" => "https://book-cook.net/yak-shvydko-dozrity-avokado/",
"anchors" => array (
"Як швидко дозріти авокадо",
"Чи безпечно їсти незрілий авокадо",
"Чи можна розігріти авокадо в мікрохвильовці",
"Як дозріти авокадо",
"Як зробити авокадо стиглим у домашніх умовах",
)),
146 => array (
"link" => "https://book-cook.net/shho-yidyat-ravlyky-chym-yih-mozhna-goduvaty/",
"anchors" => array (
"Що їдять равлики",
"Що не можна їсти равликам",
"Як годувати равлика",
"Що їдять садові равлики",
)),
147 => array (
"link" => "https://book-cook.net/prostyj-reczept-bananovogo-pyroga-na-skovorodi/",
"anchors" => array (
"рецепт бананового пирога на сковороді",
"банановий пиріг на сковороді",
"Пиріг з бананами на сковороді",
"Банановий пиріг на сковороді: рецепт десерту",
"Простий банановий пиріг на сковороді",
)),
148 => array (
"link" => "https://book-cook.net/syrna-zapikanka-z-yablukamy-i-bananom-prostyj-reczept/",
"anchors" => array (
"Сирна запіканка з яблуками і бананом",
"Як приготувати сирну запіканку з яблуком та бананом",
"рецепт сирної запіканки з яблуками та бананами",
)),
149 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-kartoplyu-fri-v-domashnih-umovah/",
"anchors" => array (
"Як приготувати картоплю фрі в домашніх умовах",
"Рецепт приготування картоплі фрі вдома",
"Як зробити картоплю фрі як в Макдональдсі",
)),
150 => array (
"link" => "https://book-cook.net/yak-zagustyty-zavarnyj-krem-korysni-porady/",
"anchors" => array (
"Як загустити заварний крем",
"чому заварний крем не загустів і як це виправити",
)),
151 => array (
"link" => "https://book-cook.net/chym-mozhna-zaminyty-yajcze-v-chyzkejku/",
"anchors" => array (
"Чим можна замінити яйце в чизкейку",
"Як замінити яйця в чізкейку",
"Найкращі замінники яєць для чізкейку",
"як замінити яйце в чізкейку",
)),
152 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-koly-nichogo-nemaye-ideyi-ta-porady/",
"anchors" => array (
"Що приготувати коли нічого немає",
"що приготувати з нічого",
"Що приготувати коли нічого немає в холодильнику",
"Що приготувати їсти з нічого",
)),
153 => array (
"link" => "https://book-cook.net/skilky-kalorij-v-alkogolnyh-napoyah/",
"anchors" => array (
"Скільки калорій в алкогольних напоях",
"Чи додає вагу вживання алкоголю",
"Який алкоголь має найменшу калорійність",
"Який алкоголь містить найбільше калорій",
)),
154 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-prostrochenogo-jogurtu-5-smachnyh-ideyi/",
"anchors" => array (
"Що приготувати з простроченого йогурту",
"Чи можна використовувати прострочений йогурт для випічки",
"Чи безпечно вживати прострочений йогурт",
)),
155 => array (
"link" => "https://book-cook.net/himichna-diyeta-usama-hamdi-menyu-shho-mozhna-yisty/",
"anchors" => array (
"Хімічна дієта Усама Хамді",
"Що таке хімічна дієта Усами Хамді",
"Чи справді діє хімічна дієта",
"що можна їсти на хімічній дієті",
"дієта Усама Хамді: меню",
)),
156 => array (
"link" => "https://book-cook.net/paleo-diyeta-menyu-shho-mozhna-a-shho-zaboroneno-yisty/",
"anchors" => array (
"Палео дієта",
"Що таке палео-дієта",
"список продуктів для палеодієти",
"що не можна їсти при палео дієті",
"Палео-дієта: що можна їсти",
)),
157 => array (
"link" => "https://book-cook.net/reczept-fruktovogo-tortu-bez-vypichky-yak-prygotuvaty/",
"anchors" => array (
"Рецепт фруктового торту без випічки",
"Рецепт фруктового пирога без випічки",
"Торт без випічки з фруктами",
)),
158 => array (
"link" => "https://book-cook.net/yak-zrobyty-nutellu-v-domashnih-umovah-pokrokovyj-reczept/",
"anchors" => array (
"Як зробити нутеллу в домашніх умовах",
"Рецепт домашньої Нутелли",
"Які інгредієнти є в Nutella",
"Приготування домашньої нутелли",
)),
159 => array (
"link" => "https://book-cook.net/shho-take-bananova-voda-i-chy-spravdi-vona-korysna-dlya-roslyn/",
"anchors" => array (
"Що таке бананова вода",
"Як зробити бананову воду для рослин",
"Чи корисна бананова вода для рослин",
"Як зробити бананову воду для квітів",
"Бананова вода",
)),
160 => array (
"link" => "https://book-cook.net/dobryvo-z-bananovoyi-shkirky-yak-pravylno-vykorystovuvaty/",
"anchors" => array (
"Добриво з бананової шкірки",
"як зробити добриво з бананової шкірки",
"добриво для квітів з бананової шкірки",
"Які рослини люблять добриво з бананової шкірки",
"Чому корисне добриво з бананової шкірки",
)),
161 => array (
"link" => "https://book-cook.net/banan-z-molokom-vid-kashlyu-pokrokovyj-reczept/",
"anchors" => array (
"Банан з молоком від кашлю",
"Молоко з бананом від кашлю",
"Як лікувати кашель бананом",
)),
162 => array (
"link" => "https://book-cook.net/yaki-stravy-mozhna-prygotuvaty-z-bananu-smachni-domashni-reczepty/",
"anchors" => array (
"Рецепти страв із бананів",
"Страви з бананів",
"Що можна приготувати з бананів",
"Що приготувати з банановим м'якушем",
)),
163 => array (
"link" => "https://book-cook.net/czikavi-fakty-pro-banan/",
"anchors" => array (
"Цікаві факти про банан",
"Факти про банани",
)),
164 => array (
"link" => "https://book-cook.net/chomu-banany-chorniyut-detalne-poyasnennya/",
"anchors" => array (
"Чому банани чорніють",
"Чи можна їсти почорнілі банани",
"Що робити щоб не потемніли банани",
"Як правильно зберігати банани",
)),
165 => array (
"link" => "https://book-cook.net/chy-yidyat-sobaky-pomidory/",
"anchors" => array (
"Чи їдять собаки помідори",
"Чи можна давати помідор собаці",
)),
166 => array (
"link" => "https://book-cook.net/perevagy-ta-nedoliky-vzhyvannya-chasnyku-shhodnya/",
"anchors" => array (
"Переваги та недоліки вживання часнику щодня",
"Що буде якщо їсти часник щодня",
"Чи корисно їсти часник щодня",
"Переваги вживання сирого часнику",
)),
167 => array (
"link" => "https://book-cook.net/chy-yidyat-sobaky-popkorn/",
"anchors" => array (
"Чи їдять собаки попкорн",
"чи можна собакам попкорн",
"чим шкідливий попкорн для собак",
)),
168 => array (
"link" => "https://book-cook.net/shho-vidbuvayetsya-z-tilom-yakshho-yisty-chornyczyu-shhodnya/",
"anchors" => array (
"Що відбувається з тілом якщо їсти чорницю щодня",
"Що трапиться якщо з’їсте забагато чорниці",
"Скільки чорниці можна їсти в день",
"Як їсти чорницю з користю для здоров'я",
"Чи корисна чорниця",
)),
169 => array (
"link" => "https://book-cook.net/nasinnya-lonu-perevagy-ta-ryzyky-dlya-organizmu/",
"anchors" => array (
"Користь насіння льону для здоров’я",
"Чим корисне насіння льону для жінок",
"Найкращий час для вживання насіння льону",
"Чи можна їсти насіння льону щодня",
"Ризики споживання насіння льону",
)),
170 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-moti-vdoma-prostyj-reczept/",
"anchors" => array (
"Як приготувати моті вдома",
"Рецепт японського моті",
"Інгредієнти для моті",
"Що таке Моті",
"Найкращий рис для моті",
)),
171 => array (
"link" => "https://book-cook.net/yak-zrobyty-rysove-boroshno-v-domashnih-umovah/",
"anchors" => array (
"Як зробити рисове борошно в домашніх умовах",
"Чи можна приготувати рисове борошно без замочування рису",
"Приготування рисового борошна без блендера",
"Як самому зробити рисове борошно",
)),
172 => array (
"link" => "https://book-cook.net/5-najkrashhyh-zaminnykiv-rysovogo-boroshna/",
"anchors" => array (
"найкращі замінники рисового борошна",
"чим можна замінити рисове борошно",
"що додати замість рисового борошна для моті",
"Що таке рисове борошно",
)),
173 => array (
"link" => "https://book-cook.net/specziyi-ta-prypravy-yak-dodaty-vashomu-rysu-smaku/",
"anchors" => array (
"Які спеції додати до рису",
"Що додати до рису щоб наситити смак",
"Які спеції потрібно додавати в рис",
"Спеції для рису",
"Приправа для рису",
)),
174 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-lavasha-na-vecheryu-legki-smachni-reczepty/",
"anchors" => array (
"Що приготувати з лаваша на вечерю",
"Ідеї начинки для солодкого лаваша",
"Ідеї начинки для лаваша",
"Що приготувати з лаваша",
)),
175 => array (
"link" => "https://book-cook.net/yaka-koryst-vid-agrusu-shho-likuye-agrus/",
"anchors" => array (
"Яка користь від агрусу",
"Що лікує агрус",
"Шкода від агрусу",
"Агрус: користь і шкода",
"Користь агрусу",
)),
176 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-farshu-na-vecheryu-najkrashhi-stravy/",
"anchors" => array (
"Що приготувати з фаршу на вечерю",
"Прості рецепти смачних страв з фаршу",
"Список страв з м'ясного фаршу",
)),
177 => array (
"link" => "https://book-cook.net/shho-prygotuvaty-z-kabachkiv-ideyi-ta-reczepty/",
"anchors" => array (
"Що приготувати з кабачків",
"Що приготувати з кабачків на вечерю",
"легкі страви з кабачків",
"Страви з кабачків",
"Оригінальні страви з кабачків",
"Найкращі рецепти з кабачків",
)),
178 => array (
"link" => "https://book-cook.net/top-10-produktiv-yaki-rozridzhuyut-krov/",
"anchors" => array (
"які продукти розріджують кров",
"Що їсти для розрідження крові",
"Що найкраще розріджує кров",
)),
179 => array (
"link" => "https://book-cook.net/chy-mozhna-na-nich-yisty-yabluka-shho-kazhut-diyetology/",
"anchors" => array (
"Чи можна на ніч їсти яблука",
"чому не можна їсти яблука на ніч",
"Чому не можна перекушувати яблуками перед сном",
"Чи можна їсти яблука перед сном",
"Яблуко на ніч: користь чи шкода",
)),
180 => array (
"link" => "https://book-cook.net/chy-mozhna-yisty-syri-baklazhany/",
"anchors" => array (
"Чи можна їсти сирі баклажани",
"Чи можна вживати сирі баклажани",
"Чи можна вживати в їжу сирі баклажани",
)),
181 => array (
"link" => "https://book-cook.net/chy-mozhna-yisty-sup-na-nich/",
"anchors" => array (
"Чи можна їсти суп на ніч",
"чому не можна їсти суп на ніч",
)),
182 => array (
"link" => "https://book-cook.net/chy-potribno-chystyty-pecheryczi-pered-prygotuvannyam/",
"anchors" => array (
"Чи потрібно чистити печериці перед приготуванням",
"Навіщо чистити шампіньйони",
"Як чистити печериці перед приготуванням",
)),
183 => array (
"link" => "https://book-cook.net/prostyj-reczept-vershkovogo-supu-z-smazhenogo-garbuza/",
"anchors" => array (
"Простий рецепт вершкового супу з смаженого гарбуза",
"Рецепт гарбузового супу від Джеймі Олівера",
"Як згустити гарбузовий суп",
"Рецепт вершкового супу зі смаженого гарбуза",
)),
184 => array (
"link" => "https://book-cook.net/yak-vybraty-idealnyj-syr-dlya-chizkejku/",
"anchors" => array (
"Як вибрати ідеальний сир для чізкейку",
"Вибір вершкового сиру для чізкейку",
"Який сир ідеально підходить для чізкейку",
"Який сир краще брати на чізкейк",
"Вершковий сир для чізкейку",
)),
185 => array (
"link" => "https://book-cook.net/maskarpone-i-filadelfiya-v-chomu-riznyczya/",
"anchors" => array (
"Маскарпоне і Філадельфія: в чому різниця",
"Чим відрізняється маскарпоне від філадельфії",
"Яка різниця між Філадельфією і маскарпоне",
)),
186 => array (
"link" => "https://book-cook.net/kamamber-abo-bri-porivnyuyemo-vidomi-syry/",
"anchors" => array (
"Камамбер або Брі",
"Що корисніше: брі чи камамбер",
"Яка різниця між брі та камамбером",
"чим камамбер відрізняється від брі",
)),
187 => array (
"link" => "https://book-cook.net/syr-parmezan-koryst-i-shkoda-dlya-organizmu/",
"anchors" => array (
"чим корисний сир пармезан",
"в чому користь пармезана",
"пармезан: користь і шкода для організму",
)),
188 => array (
"link" => "https://book-cook.net/syr-feta-koryst-i-shkoda-dlya-organizmu/",
"anchors" => array (
"чим корисний сир фета",
"корисні властивості сиру фета",
"сир фета: з чим їсти",
"Кому не можна їсти сир Фета",
"яка шкода від сиру фета",
)),
189 => array (
"link" => "https://book-cook.net/salat-vitaminnyj-zdorova-yizha-dlya-zdorovogo-zhyttya/",
"anchors" => array (
"Салат Вітамінний",
"користь салату вітамінний",
"рецепт салату Вітамінний",
"інгредієнти салату Вітамінний",
)),
190 => array (
"link" => "https://book-cook.net/yak-prygotuvaty-richkovu-forel-v-duhovczi-smachni-reczepty-ta-porady/",
"anchors" => array (
"Як приготувати річкову форель в духовці",
"приготування річкової форелі в духовці",
"Рецепти форелі в духовці",
"Запечена річкова форель в духовці",
)),
191 => array (
"link" => "https://book-cook.net/plavlenyj-syr-koryst-i-shkoda/",
"anchors" => array (
"Плавлений сир: користь і шкода",
"яка користь плавленого сиру",
"яка шкода від плавленого сиру",
"Факти про користь та шкоду плавленого сиру",
"склад плавленого сиру",
)),
192 => array (
"link" => "https://book-cook.net/kinza-ta-koriandr-v-chomu-riznyczya/",
"anchors" => array (
"Яка різниця між кінзою та коріандром",
"чим відрізняється кінза від коріандру",
"кінза та коріандр: в чому різниця",
)),
193 => array (
"link" => "https://book-cook.net/petrushka-i-kinza-v-chomu-riznyczya/",
"anchors" => array (
"відмінності між кінзою та петрушкою",
"Кінза і петрушка: основні відмінності",
"яка різниця між кінзою та петрушкою",
"Чим петрушка відрізняється від кінзи",
)),
194 => array (
"link" => "https://book-cook.net/navishho-do-kavy-podayut-sklyanku-holodnoyi-vody/",
"anchors" => array (
"навіщо до кави подають воду",
"навіщо до кави подають склянку води",
"навіщо до кави подають холодну воду",
"навіщо до кави еспресо подають воду",
)),
195 => array (
"link" => "https://book-cook.net/na-skilky-chasu-treba-zamochuvaty-voloski-gorihy-porady-ta-rekomendacziyi/",
"anchors" => array (
"На скільки часу замочувати волоські горіхи",
"Чому рекомендують замочувати горіхи перед вживанням",
"Як довго замочувати горіхи",
"скільки часу і чому замочують горіхи",
"Чому горіхи потрібно замочувати у воді",
"Як правильно замочувати волоські горіхи",
)),
196 => array (
"link" => "https://book-cook.net/yak-pozbutysya-girkoty-v-voloskyh-gorihah/",
"anchors" => array (
"Як позбутися гіркоти в волоських горіхах",
"Причини гіркоти волоських горіхів",
"Чому горіхи гіркі",
"Як прибрати гіркоту з волоських горіхів",
"Відмінності між гіркими та солодкими сортами волоських горіхів",
"Вплив волоських горіхів на здоров'я",
"Рецепти приготування волоських горіхів",
)),
197 => array (
"link" => "https://book-cook.net/najsolodshi-sorty-tomativ-vybir-najkrashhyh/",
"anchors" => array (
"Найсолодші сорти томатів",
"Топ солодких сортів томатів для домашнього вирощування",
"Які помідори найсмачніші і найсолодші",
"Найсолодші сорти томатів для відкритого грунту",
"солодкі сорти томатів для теплиць",
)),
198 => array (
"link" => "https://book-cook.net/shho-yidyat-gorobczi-chym-goduvaty-ptashenya-gorobczya/",
"anchors" => array (
"що їдять горобці",
"Список продуктів для годування горобців",
"Як годувати пташенят горобця вдома",
"Що їдять дорослі горобці",
"Що їдять пташеня горобця",
)),
199 => array (
"link" => "https://book-cook.net/yaki-frukty-ta-ovochi-mozhna-yisty-pry-pankreatyti/",
"anchors" => array (
"Які фрукти та овочі можна їсти при панкреатиті",
"Рекомендації щодо раціону при запаленні підшлункової",
"Як правильно готувати фрукти та овочі при панкреатиті",
"Фрукти та овочі які не рекомендується вживати при запаленні підшлункової",
"Список корисних продуктів при панкреатиті",
)),
200 => array (
"link" => "https://book-cook.net/shho-potribno-yisty-vagitnym-v-pershyj-trymestr/",
"anchors" => array (
"Що потрібно їсти вагітним в перший триместр",
"Раціон в перший триместр",
"Нутрієнти в першому триместрі вагітності",
)),
201 => array (
"link" => "https://book-cook.net/frukty-ta-vagitnist-shho-vazhlyvo-znaty/",
"anchors" => array (
"які фрукти можна їсти під час вагітності",
"Які фрукти необхідно вживати вагітним жінкам",
"Які фрукти краще уникати під час вагітності",
)),
202 => array (
"link" => "https://book-cook.net/chy-mozhna-yisty-kivi-pid-chas-vagitnosti-koryst-i-shkoda/",
"anchors" => array (
"Чи можна їсти ківі під час вагітності",
"Алергічні реакції на ківі у вагітних",
"Рекомендації щодо вживання ківі вагітним",
"шкода від споживання ківі під час вагітності",
)),
203 => array (
"link" => "https://book-cook.net/chasnykovyj-sup-prostyj-pokrokovyj-reczept/",
"anchors" => array (
"Часниковий суп",
"чеський часниковий суп",
"Часниковий суп по-чеськи",
"простий рецепт часникового супу",
)),
204 => array (
"link" => "https://book-cook.net/tradyczijnyj-franczuzkyj-czybulevyj-sup/",
"anchors" => array (
"французький цибулевий суп",
"класичний рецепт цибулевого супу",
"Цибулевий суп на бульйоні",
)),
205 => array (
"link" => "https://book-cook.net/seredzemnomorskyj-krem-sup-z-sochevyczi-pokrokovyj-reczept/",
"anchors" => array (
"Середземноморський крем-суп з сочевиці",
"Крем-суп з сочевиці",
"Крем-суп з червоної сочевиці",
"рецепт крем-супа з сочевиці",
"як приготувати крем суп з сочевиці",
)),
206 => array (
"link" => "https://book-cook.net/salat-z-kurkoyu-i-makaronamy-pokrokovyj-reczept/",
"anchors" => array (
"салат з куркою і макаронами",
"рецепт салату з куркою та макаронами",
"як приготувати салат з куркою та макаронами",
)),
207 => array (
"link" => "https://book-cook.net/piyaz-tureczkyj-salat-z-biloyi-kvasoli-pokrokovyj-reczept/",
"anchors" => array (
"піяз - турецький салат з білої квасолі",
"рецепт салату з білої квасолі",
)),
208 => array (
"link" => "https://book-cook.net/yakyj-rys-najkrashhe-pidhodyt-dlya-prygotuvannya-spravzhnogo-uzbeczkogo-plovu/",
"anchors" => array (
"який краще рис для плову",
"як вибрати рис для плову",
"Який рис найкраще підходить для приготування плову",
)),
209 => array (
"link" => "https://book-cook.net/tureczkyj-desert-iz-mannoyi-krupy-shekerpare-pokrokovyj-reczept/",
"anchors" => array (
"турецький десерт із манної крупи (Шекерпаре)",
"Турецький десерт з манки",
)),
210 => array (
"link" => "https://book-cook.net/bazlama-yak-prygotuvaty-tureczkyj-hlib-na-skovoridczi/",
"anchors" => array (
"як приготувати турецький хліб на сковорідці",
"базлама: рецепт",
)),
211 => array (
"link" => "https://book-cook.net/chy-mozhna-yisty-morozyvo-koly-bolyt-gorlo/",
"anchors" => array (
"чи можна їсти морозиво коли болить горло",
"чи можна їсти морозиво при хворому горлі",
)),
212 => array (
"link" => "https://book-cook.net/salo-pry-czukrovomu-diabeti-mify-ta-realnist/",
"anchors" => array (
"чи можна їсти сало при цукровому діабеті",
"Сало при цукровому діабеті",
"Чи можна їсти сало при цукровому діабеті 2 типу",
)),
213 => array (
"link" => "https://book-cook.net/garbuzove-pechyvo-bez-glyutenu-pokrokovyj-reczept/",
"anchors" => array (
"гарбузове печиво без глютену",
"як приготувати печиво з гарбуза",
)),
214 => array (
"link" => "https://book-cook.net/shokoladne-pechyvo-bez-czukru-pokrokovyj-reczept/",
"anchors" => array (
"рецепт шоколадного печива без цукру",
"шоколадне печиво без цукру",
)),
215 => array (
"link" => "https://book-cook.net/vybir-idealnogo-kremu-dlya-shokoladnogo-biskvitu/",
"anchors" => array (
"який крем підійде для шоколадного бісквіту",
"ідеальний крем для шоколадного бісквіту",
)),
216 => array (
"link" => "https://book-cook.net/italijskyj-tyramisu-klasychnyj-reczept-desertu/",
"anchors" => array (
"класичний рецепт тирамісу",
"оригінальний рецепт італійського тирамісу",
)),
217 => array (
"link" => "https://book-cook.net/hrustki-spring-roly-z-kurkoyu-pokrokovyj-reczept/",
"anchors" => array (
"спрінг-роли з куркою",
"спринг-роли з куркою",
"як приготувати спрінг роли з куркою",
"хрусткі спрінг-роли з куркою",
"рецепт приготування спринг-ролів з куркою",
)),
218 => array (
"link" => "https://book-cook.net/farshyrovani-yajczya-bez-majonezu-idealnyj-reczept-z-avokado/",
"anchors" => array (
"фаршировані яйця без майонезу",
"фаршировані яйця з авокадо",
"рецепт фаршированих яєць без майонезу",
)),
219 => array (
"link" => "https://book-cook.net/svynyacha-lopatka-v-multyvarczi-pokrokovyj-reczept/",
"anchors" => array (
"свиняча лопатка в мультиварці",
"як приготувати свинячу лопатку в мультиварці",
)),
220 => array (
"link" => "https://book-cook.net/yaka-koryst-zapechenogo-garbuza/",
"anchors" => array (
"яка користь печеного гарбуза",
)),
221 => array (
"link" => "https://book-cook.net/v-chomu-koryst-alychi/",
"anchors" => array (
"в чому користь аличі",
"корисні властивості аличі",
"користь аличі",
)),
222 => array (
"link" => "https://book-cook.net/yabluchnyj-pyrig-na-kefiri-pokrokovyj-reczept/",
"anchors" => array (
"яблучний пиріг на кефірі",
"швидкий пиріг з яблуками на кефірі",
"як приготувати смачний пиріг з яблуками на кефірі",
"Найпростіший пиріг з яблуками на кефірі",
)),
223 => array (
"link" => "https://book-cook.net/yaki-frukty-korysni-dlya-pechinky/",
"anchors" => array (
"які фрукти корисні для печінки",
"корисні фрукти для печінки",
"Який фрукт найкорисніший для печінки",
"",
)),
224 => array (
"link" => "https://book-cook.net/reczept-kuryachogo-shashlyku-marynovanogo-v-jogurti/",
"anchors" => array (
"курячий шашлик маринований в йогурті",
"Курячий шашлик в маринаді з йогурту",
"Шашлик на йогурті",
)),
225 => array (
"link" => "https://book-cook.net/franczuzkyj-kartoplyanyj-salat-prostyj-reczept/",
"anchors" => array (
"французький картопляний салат",
"класичний французький картопляний салат",
)),
226 => array (
"link" => "https://book-cook.net/kuryacha-kotleta-dlya-burgera-prostyj-reczept/",
"anchors" => array (
"куряча котлета для бургера",
"як приготувати котлету для бургера",
)),
227 => array (
"link" => "https://book-cook.net/vivsyane-pechyvo-z-bananom-bez-czukru-pokrokovyj-reczept/",
"anchors" => array (
"вівсяне печиво з бананом без цукру",
"Печиво з вівсяних пластівців без цукру",
"Дієтичне печиво з бананом",
)),
228 => array (
"link" => "https://book-cook.net/kuryachi-kotlety-na-paru-v-multyvarczi/",
"anchors" => array (
"курячі котлети на пару в мультиварці",
"як приготувати котлети на пару в мультиварці",
"Дієтичні котлети на пару в мультиварці",
"Як приготувати курячі котлети на пару",
"Парові котлети у мультиварці",
)),
229 => array (
"link" => "https://book-cook.net/kuryachi-kotlety-bez-hliba-u-duhovczi/",
"anchors" => array (
"курячі котлети без хліба у духовці",
"курячі котлети без хліба: покроковий рецепт",
)),
230 => array (
"link" => "https://book-cook.net/reczept-bananovyh-pankejkiv-bez-moloka/",
"anchors" => array (
"рецепт бананових панкейків без молока",
"бананові панкейки без молока",
)),
231 => array (
"link" => "https://book-cook.net/reczept-okroshky-na-kefiri-ta-mineralnij-vodi/",
"anchors" => array (
"рецепт окрошки на кефірі та мінеральній воді",
"окрошка на кефірі та мінералці",
)),
232 => array (
"link" => "https://book-cook.net/reczept-okroshky-na-kefiri-bez-redysky/",
"anchors" => array (
"рецепт окрошки на кефире без редиски",
"як приготувати окрошку без редиски",
)),
233 => array (
"link" => "https://book-cook.net/shho-mozhna-solodke-prygotuvaty-v-mikrohvylovczi/",
"anchors" => array (
"Що можна солодке приготувати в мікрохвильовці",
"десерти в мікрохвильовій печі",
"Смачні страви в мікрохвильовій печі",
)),
234 => array (
"link" => "https://book-cook.net/reczept-kvashenyh-pomidoriv-u-vidri/",
"anchors" => array (
"Рецепт квашених помідорів у відрі",
"Як зробити квашені помідори",
"Як квасити помідори у відрі",
"Квашені помідори у відрі за 3 дні",
"простий рецепт квашених помідорів у відрі",
)),
235 => array (
"link" => "https://book-cook.net/picza-na-gotovij-osnovi-v-mikrohvylovczi-pokrokovyj-reczept/",
"anchors" => array (
"Піца на готовій основі в мікрохвильовці",
"Як приготувати піцу в мікрохвильовій печі",
"Піца в мікрохвильовці за 15 хвилин",
"Рецепт піци в мікрохвильовій печі",
)),
236 => array (
"link" => "https://book-cook.net/reczept-tyramisu-bez-yayecz-u-sklyanczi/",
"anchors" => array (
"як приготувати тирамісу без яєць",
"рецепт тирамісу без яєць у склянці",
)),
237 => array (
"link" => "https://book-cook.net/reczept-majonezu-bez-yayecz-u-domashnih-umovah/",
"anchors" => array (
"Рецепт майонезу без яєць у домашніх умовах",
"Рецепт майонезу без яєць",
"як приготувати домашній майонез без яєць",
)),
238 => array (
"link" => "https://book-cook.net/reczept-vafli-bez-yayecz-u-vafelnyczi/",
"anchors" => array (
"Вафлі без яєць у вафельниці",
"як приготувати вафлі без яєць",
"Бельгійські вафлі без яєць",
)),
239 => array (
"link" => "https://book-cook.net/reczept-keks-bez-yayecz-u-mikrohvylovij-pechi/",
"anchors" => array (
"Кекс без яєць у мікрохвильовій печі",
"рецепт кекса без яєць в мікрохвильовій печі",
"як приготувати кекс в мікрохвильовці",
)),
240 => array (
"link" => "https://book-cook.net/prostyj-reczept-bulochok-z-koryczeyu-bez-yayecz/",
"anchors" => array (
"Простий рецепт булочок з корицею без яєць",
"Тісто для булочок без яєць і дріжджів з корицею",
"як приготувати булочку з корицею без яєць",
)),
241 => array (
"link" => "https://book-cook.net/obzharenaya-risovaya-lapsha-i-druzya-reczept/",
"anchors" => array (
"Смажена рисова локшина",
"Рецепт смаженої локшини з креветками",
"смажена рисова локшина з овочами і креветками",
)),
242 => array (
"link" => "https://book-cook.net/sous-majonez-s-kapersami-reczept/",
"anchors" => array (
"Соус-майонез з каперсами",
"рецепт соусу з каперсами",
"як приготувати соус з каперсами",
)),
243 => array (
"link" => "https://book-cook.net/kotlety-iz-lososya-i-brokkoli-reczept/",
"anchors" => array (
"Котлети з лосося та брокколі",
"Корисні котлети з броколі та лосося для дітей",
"лососеві котлети з броколі",
"рецепт котлет з лосося та броколі",
)),
244 => array (
"link" => "https://book-cook.net/kuricza-s-koriczej-i-izyumom-reczept/",
"anchors" => array (
"Курка з корицею та родзинками",
"Курка з корицею",
"рецепт курки з корицею та родзинками",
)),
245 => array (
"link" => "https://book-cook.net/brusketta-s-moczarelloj-i-oregano-reczept/",
"anchors" => array (
"Брускетта з моцарелою та орегано",
"рецепт брускетти з моцарелою",
)),
246 => array (
"link" => "https://book-cook.net/shokoladnaya-kolbasa-s-foto-reczept/",
"anchors" => array (
"Шоколадна ковбаса",
"рецепт солодкої ковбаси",
"як приготувати солодку ковбаску",
)),
247 => array (
"link" => "https://book-cook.net/ruletiki-iz-kurinyh-bedryshek-reczept/",
"anchors" => array (
"Рулетики з курячих стегон",
"Фаршировані рулетики з курячого стегна",
"рецепт рулетиків з курячих стегон",
)),
248 => array (
"link" => "https://book-cook.net/salat-iz-skumbrii-reczept/",
"anchors" => array (
"Салат зі скумбрії",
"рецепт салату зі скумбрії",
"як приготувати салат зі скумбрії",
"Салат із запеченою скумбрією",
"Скумбрія в салатах",
)),
249 => array (
"link" => "https://book-cook.net/brokkoli-s-vetchinoj-pod-syrom-reczept/",
"anchors" => array (
"Брокколі з шинкою під сиром",
"рецепт броколі з шинкою під сиром",
"як приготувати броколі з шинкою",
)),
250 => array (
"link" => "https://book-cook.net/salat-s-yazykom-reczept/",
"anchors" => array (
"Салат з язиком",
"рецепт салату з язиком",
)),
251 => array (
"link" => "https://book-cook.net/brokkoli-s-kurinymi-frikadelkami-reczept/",
"anchors" => array (
"Брокколі з курячими фрикадельками",
"рецепт броколі з курячими фрикадельками",
"як приготувати броколі з курячими фрикадельками",
)),
252 => array (
"link" => "https://book-cook.net/kurinye-krylyshki-farshirovannye-gribami-reczept/",
"anchors" => array (
"Курячі крильця фаршировані грибами",
"рецепт фаршированих курячих крилець",
)),
253 => array (
"link" => "https://book-cook.net/vinegret-s-kalmarami-reczept/",
"anchors" => array (
"Вінегрет з кальмарами",
"Приготування вінегрету з кальмарами",
"як приготувати вінегрет з кальмарами",
"рецепт вінегрету з кальмарами",
)),
254 => array (
"link" => "https://book-cook.net/morskoj-okun-s-krevetkami-reczept/",
"anchors" => array (
"Морський окунь із креветками",
"Приготування морського окуня із креветками",
"Морський окунь із креветками в духовці",
)),
255 => array (
"link" => "https://book-cook.net/salat-s-inzhirom-ot-dzhejmi-olivera-reczept/",
"anchors" => array (
"Салат з інжиром від Джеймі Олівера",
"Приготування салату з інжиром",
"рецепт салату з інжиром",
)),
256 => array (
"link" => "https://book-cook.net/blinchiki-s-lososem-i-slivochnym-syrom-reczept/",
"anchors" => array (
"Млинці з лососем та вершковим сиром",
"Приготування млинців з лососем та вершковим сиром",
"Млинці з лососем та крем-сиром",
"Як приготувати млинці з лососем",
)),
257 => array (
"link" => "https://book-cook.net/salat-imperial-reczept/",
"anchors" => array (
"Салат Імперіал",
"Приготування салату Імперіал",
"рецепт салату Імперіал",
)),
258 => array (
"link" => "https://book-cook.net/krylyshki-indejki-farshirovannye-reczept/",
"anchors" => array (
"Крильця індички фаршировані",
"Приготування фаршированих крилець індички",
)),
259 => array (
"link" => "https://book-cook.net/blinchiki-s-kuriczej-i-gribami-reczept/",
"anchors" => array (
"Млинці з куркою та грибами",
"Фаршировані млинці з куркою і грибами",
"Як приготувати налисники з куркою та грибами",
"рецепт млинців з куркою та грибами",
)),
260 => array (
"link" => "https://book-cook.net/oladi-kartofelno-kabachkovye-s-opyatami-reczept/",
"anchors" => array (
"Оладки картопляно-кабачкові з опеньками",
"Картопляно-кабачкові оладки",
"Кабачкові деруни з картоплею",
)),
261 => array (
"link" => "https://book-cook.net/salat-s-kopchenym-lososem-reczept/",
"anchors" => array (
"Салат із копченим лососем",
"Приготування салату з копченим лососем",
"Різнокольоровий салат із копченим лососем",
"Салат з лососем гарячого копчення",
)),
262 => array (
"link" => "https://book-cook.net/utka-s-opyatami-reczept/",
"anchors" => array (
"Качка з опеньками",
"як приготувати качку з грибами",
"Качка з грибами",
"Качка в рукаві з грибами",
)),
263 => array (
"link" => "https://book-cook.net/kurinye-ruletiki-s-ananasom-v-bekone-reczept/",
"anchors" => array (
"Курячі рулетики з ананасом в беконі",
"Курячі рулетики з ананасом та беконом",
"Курячі рулетики в беконі в духовці",
)),
264 => array (
"link" => "https://book-cook.net/forel-s-sousom-iz-luka-poreya-s-apelsinovym-sokom-reczept/",
"anchors" => array (
"Форель із соусом з цибулі-порею з апельсиновим соком",
)),
265 => array (
"link" => "https://book-cook.net/skumbriya-zapechennaya-s-ovoshhami-v-aerogrile-reczept/",
"anchors" => array (
"Скумбрія запечена з овочами в аерогрилі",
"Покрокові рецепти скумбрії в аерогрилі",
"Скумбрія в аерогрилі",
)),
266 => array (
"link" => "https://book-cook.net/keksy-kofejnye-s-shokoladom-dlya-aerogrilya-reczept/",
"anchors" => array (
"Кекси кавові з шоколадом для аерогрилю",
)),
267 => array (
"link" => "https://book-cook.net/kartofelnye-zrazy-s-pechenyu-reczept/",
"anchors" => array (
"Картопляні зрази з печінкою",
"Зрази з печінкою",
"Рецепт картопляних зраз із печінкою",
)),
268 => array (
"link" => "https://book-cook.net/czarskoe-zharkoe-reczept/",
"anchors" => array (
"Печінка по-царськи",
"Приготування царського жаркого",
)),
269 => array (
"link" => "https://book-cook.net/risovye-bitochki-s-gribami-reczept/",
"anchors" => array (
"Рисові биточки з грибами",
"Приготування рисових биточків із грибами",
"Рисові котлети з грибами",
"грибні котлети з рисом",
"Рисові биточки",
)),
270 => array (
"link" => "https://book-cook.net/pechenochnye-blinchiki-reczept/",
"anchors" => array (
"Печінкові млинчики",
"Приготування печінкових млинців",
"Печінкові млинці",
"Печінкові рулетики з начинкою",
"рецепт млинців з печінки",
)),
271 => array (
"link" => "https://book-cook.net/kuricza-v-aerogrile-reczept/",
"anchors" => array (
"Курка в аерогрилі",
"Приготування курки в аерогрилі",
)),
272 => array (
"link" => "https://book-cook.net/zapekanka-iz-makaron-reczept/",
"anchors" => array (
"Запіканка з макаронів",
"Приготування запіканки з макаронів",
"Проста запіканка з макаронів",
"рецепт запіканки з макаронів",
)),
273 => array (
"link" => "https://book-cook.net/pate-iz-tvoroga-s-krevetkami-reczept/",
"anchors" => array (
"Пате з кисломолочного сиру з креветками",
"Приготування пате з сиру",
)),
274 => array (
"link" => "https://book-cook.net/kish-s-kuriczej-i-gribami-reczept/",
"anchors" => array (
"Кіш з куркою та грибами",
"Кіш з куркою і грибами",
"Покроковий рецепт кіш лорена з куркою і грибами",
"Кіш лорен з куркою і грибами",
)),
275 => array (
"link" => "https://book-cook.net/tushenyj-kartofel-s-myasom-i-ovoshhami-reczept/",
"anchors" => array (
"Тушкована картопля з м'ясом та овочами",
"Тушкована картопля з м'ясом",
"рецепт картоплі з м'ясом та овочами",
)),
276 => array (
"link" => "https://book-cook.net/kambala-pod-sousom-reczept/",
"anchors" => array (
"Камбала під соусом",
"рецепт як приготувати камбалу під соусом",
)),
277 => array (
"link" => "https://book-cook.net/lin-zharenyj-reczept/",
"anchors" => array (
"Лін смажений",
"Приготування смаженого линя",
"Смажений лин",
"Лінь в паніровці",
)),
278 => array (
"link" => "https://book-cook.net/losos-zapechennyj-pod-shuboj-reczept/",
"anchors" => array (
"Лосось запечений під шубою",
"Рецепт шуби із лососем",
"Лосось під шубою",
)),
279 => array (
"link" => "https://book-cook.net/tvorozhnye-syrki-reczept/",
"anchors" => array (
"Сирні сирки",
"Домашні глазуровані сирки",
"Глазуровані сирки в домашніх умовах",
"Сирки глазуровані",
"Як зробити вдома глазурований дитячий сирок",
)),
280 => array (
"link" => "https://book-cook.net/bezdrozhzhevoj-hleb-reczept/",
"anchors" => array (
"бездріжджовий хліб",
"Хліб без дріжджів",
"Рецепти бездріжджового хліба",
"Як спекти хліб без дріжджів",
)),
281 => array (
"link" => "https://book-cook.net/zharenye-kashtany-reczept/",
"anchors" => array (
"Смажені каштани",
"Як смажити каштани",
"Як готувати смажені каштани",
)),
282 => array (
"link" => "https://book-cook.net/pshennye-kotlety-s-panirom-i-zelenyu-reczept/",
"anchors" => array (
"Пшоняні котлети з паніром та зеленню",
"Котлети з пшоняної каші",
"Пшоняні котлети",
"як приготувати пшоняні котлети",
)),
283 => array (
"link" => "https://book-cook.net/myaso-pod-slivochno-gribnym-sousom-reczept/",
"anchors" => array (
"М'ясо під вершково-грибним соусом",
"Приготування м'яса під вершково-грибним соусом",
"рецепт м'яса з вершково-грибним соусом",
)),
284 => array (
"link" => "https://book-cook.net/salat-iz-pecheni-treski-s-gribami-reczept/",
"anchors" => array (
"Салат із печінки тріски з грибами",
"Приготування салату з печінки тріски з грибами",
"рецепт салату з печінки тріски",
)),
285 => array (
"link" => "https://book-cook.net/skumbriya-zapechennaya-s-gribami-reczept/",
"anchors" => array (
"Скумбрія запечена з грибами",
"Приготування скумбрії з грибами",
"Скумбрія запечена з печерицями",
"Скумбрія з грибами в духовці",
"рецепт запеченої скумбрії з грибами",
)),
286 => array (
"link" => "https://book-cook.net/baranina-s-ovoshhami-reczept/",
"anchors" => array (
"Баранина з овочами",
"Приготування баранини з овочами",
"рецепт баранини з овочами",
)),
287 => array (
"link" => "https://book-cook.net/kartofelnaya-zapekanka-reczept/",
"anchors" => array (
"Картопляна запіканка",
"Приготування картопляної запіканки",
"рецепт картопляної запіканки",
"Запіканка з картоплі",
"Як приготувати смачну запіканку з картоплі",
"",
)),
288 => array (
"link" => "https://book-cook.net/salat-s-kurinoj-grudinkoj-i-krabovym-myasom-reczept/",
"anchors" => array (
"Салат з курячою грудинкою та крабовим м'ясом",
"Приготування салату з курячою грудинкою та крабовим м'ясом",
)),
289 => array (
"link" => "https://book-cook.net/talyatelli-s-palochkami-s-myasom-kraba-reczept/",
"anchors" => array (
"Тальятеллі з паличками з м'ясом краба",
"Тальятелле з крабовим м'ясом",
"Приготування тальятелле",
)),
290 => array (
"link" => "https://book-cook.net/piczcza-s-krabovoj-nachinkoj-reczept/",
"anchors" => array (
"Піца з крабовою начинкою",
"Приготування піци з крабовою начинкою",
"рецепт піци з крабовими паличками",
)),
291 => array (
"link" => "https://book-cook.net/pechenochnye-rulety-s-salom-reczept/",
"anchors" => array (
"Печінкові рулети із салом",
"Приготування печінкових рулетів із салом",
"рецепт печінкових рулетиків з салом",
)),
292 => array (
"link" => "https://book-cook.net/salat-s-krevetkami-kalmarami-i-ikroj-reczept/",
"anchors" => array (
"Салат з креветками і кальмарами та ікрою",
"Приготування салату з креветками і кальмарами та ікрою",
"рецепт салату з креветками кальмаром та ікрою",
)),
293 => array (
"link" => "https://book-cook.net/tartaletki-s-kuriczej-i-gribami-reczept/",
"anchors" => array (
"Тарталетки з куркою та грибами",
"Приготування тарталеток з грибами та куркою",
"Інгредієнти для тарталеток з куркою та грибами",
"Рецепт закуски в тарталетках з куркою та грибами",
"",
)),
294 => array (
"link" => "https://book-cook.net/salat-rozovyj-flamingo-reczept/",
"anchors" => array (
"Салат Рожевий фламінго",
)),
295 => array (
"link" => "https://book-cook.net/pashtet-iz-lososya-reczept/",
"anchors" => array (
"Паштет із лосося",
"Приготування паштету з лосося",
"паштет із запеченого лосося",
"Як приготувати паштет з лосося",
)),
296 => array (
"link" => "https://book-cook.net/tilapiya-telapiya-s-gribami-pod-syrom-reczept/",
"anchors" => array (
"Тілапія з грибами під сиром",
"тилапія з грибами під сиром",
"Приготування риби з грибами під сиром",
"Інгредієнти для риби із грибами під сиром",
)),
297 => array (
"link" => "https://book-cook.net/krucheniki-s-omletom-i-gribami-reczept/",
"anchors" => array (
"Крученики з омлетом та грибами",
"Приготування кручеників з омлетом та грибами",
"Крученики у грибному соусі",
"Крученики з грибами та омлетом рецепт із фото",
)),
298 => array (
"link" => "https://book-cook.net/brokkoli-v-bekone-reczept/",
"anchors" => array (
"Брокколі в беконі",
"Приготування брокколі в беконі",
"Броколі в беконі - покроковий рецепт",
"як приготувати брокколі з беконом",
)),
299 => array (
"link" => "https://book-cook.net/salat-s-kalmarami-i-krevetkami-reczept/",
"anchors" => array (
"Салат з кальмарами та креветками",
"Приготування салату з кальмарами та креветками",
"рецепт салату з креветками та кальмарами",
)),
300 => array (
"link" => "https://book-cook.net/kartofel-s-salom-reczept/",
"anchors" => array (
"Картопля з салом",
"Приготування картоплі із салом",
"Запечена картопля із салом",
"Картопля з салом в духовці",
"Рецепт запеченої картоплі з салом",
)),
301 => array (
"link" => "https://book-cook.net/pashalnoe-myaso-myasnoj-rulet-reczept/",
"anchors" => array (
"м'ясний рулет",
"рецепти м'ясних рулетів",
"як приготувати м'ясний рулет",
)),
302 => array (
"link" => "https://book-cook.net/losos-v-lavashe-reczept/",
"anchors" => array (
"Лосось у лаваші",
"Приготування лосося в лаваші",
"Рулет з лаваша з лососем",
)),
303 => array (
"link" => "https://book-cook.net/rulet-iz-lavasha-s-farshem-reczept/",
"anchors" => array (
"Рулет із лаваша з фаршем",
"Приготування рулету з лаваша",
"як приготувати рулет із лаваша з фаршем",
"рецепт рулета з фаршем",
)),
304 => array (
"link" => "https://book-cook.net/zakuska-iz-semgi-reczept/",
"anchors" => array (
"Закуска з сьомги",
"Приготування закуски із сьомги",
"рецепт закуски з сьомги",
"Як приготувати закуску з сьомги",
)),
305 => array (
"link" => "https://book-cook.net/makaronnye-gnezda-s-gribami-reczept/",
"anchors" => array (
"Макаронні гнізда з грибами",
"Макарони гнізда рецепт",
"Приготування гнізд із грибами",
)),
306 => array (
"link" => "https://book-cook.net/salat-iz-avokado-lososya-i-svezhih-shampinonov-reczept/",
"anchors" => array (
"Салат з авокадо лосося та печериць",
"Приготування салату з авокадо лосося та печериць",
"рецепт салата з авокадо лосося та печериць",
)),
307 => array (
"link" => "https://book-cook.net/salat-s-myasom-krilya-reczept/",
"anchors" => array (
"Салат з м'ясом криля",
"рецепт салата з м'ясом криля",
"Приготування салату з м'ясом криля",
"як приготувати салат з м'ясом криля",
)),
308 => array (
"link" => "https://book-cook.net/salat-s-fetoj-i-avokado-reczept/",
"anchors" => array (
"Салат з фетою та авокадо",
"Приготування салату з фетою та авокадо",
"Інгредієнти для салату з фетою та авокадо",
"рецепт салату з фетою та авокадо",
"як приготувати салат з фетою та авокадо",
)),
309 => array (
"link" => "https://book-cook.net/lodochki-iz-avokado-s-morskim-kaktejlem-reczept/",
"anchors" => array (
"Човники з авокадо",
"Приготування човників з авокадо",
"як зробити човник з авокадо",
)),
310 => array (
"link" => "https://book-cook.net/kurinye-zheludki-v-slivochnom-souse-reczept/",
"anchors" => array (
"Курячі шлунки у вершковому соусі",
"Приготування курячих шлунків у вершковому соусі",
"як приготувати курячі шлунки у вершковому соусі",
"рецепт курячих шлунків у вершковому соусі",
)),
311 => array (
"link" => "https://book-cook.net/omlet-s-ovoshhami-i-svininoj-reczept/",
"anchors" => array (
"Омлет з овочами та свининою",
"Приготування омлету з овочами та свининою",
"як приготувати омлет з овочами та свининою",
"рецепт омлета зі свининою",
)),
312 => array (
"link" => "https://book-cook.net/svinoe-koleno-reczept/",
"anchors" => array (
"Свиняче коліно рецепт",
"Приготування свинячого коліна",
"як приготувати свиняче коліно",
)),
313 => array (
"link" => "https://book-cook.net/kartofel-s-lisichkami-reczept/",
"anchors" => array (
"Картопля з лисичками",
"Приготування картоплі з лисичками",
"Інгредієнти для картоплі з лисичками",
"як приготувати картоплю з лисичками",
"рецепт картоплі з лисичками",
)),
314 => array (
"link" => "https://book-cook.net/goryachij-shokolad-s-perczem-reczept/",
"anchors" => array (
"Гарячий шоколад із перцем",
"Приготування гарячого шоколаду з перцем",
"Інгредієнти для гарячого шоколаду з перцем",
"як приготувати гарячий шоколад з перцем",
"рецепт гарячого шоколаду з перцем",
)),
315 => array (
"link" => "https://book-cook.net/oladi-iz-czukini-s-morskim-koktejlem-reczept/",
"anchors" => array (
"Оладки з цукіні з морським коктейлем",
"Приготування оладок із цукіні з морським коктейлем",
"Інгредієнти для оладок із цукіні з морським коктейлем",
)),
316 => array (
"link" => "https://book-cook.net/ragu-iz-czukini-s-kopchenymi-kolbaskami-reczept/",
"anchors" => array (
"Рагу з цукіні з копченими ковбасками",
"Приготування рагу з цукіні з копченими ковбасками",
"Інгредієнти для рагу з цукіні з копченими ковбасками",
"",
)),
317 => array (
"link" => "https://book-cook.net/tvorozhnaya-zapekanka-s-shokoladom-reczept/",
"anchors" => array (
"Сирна запіканка з шоколадом",
"Інгредієнти для сирної запіканки із шоколадом",
"Приготування запіканки з шоколадом",
"рецепт сирної запіканки з шоколадом",
)),
318 => array (
"link" => "https://book-cook.net/salat-iz-seldi-reczept/",
"anchors" => array (
"Салат з оселедця",
"Приготування салату з оселедця",
"Інгредієнти для салату з оселедця",
"Салат з оселедцем за 10 хвилин",
)),
319 => array (
"link" => "https://book-cook.net/spagetti-s-midiyami-reczept/",
"anchors" => array (
"Спагетті з мідіями",
"Приготування спагетті з мідіями",
"Інгредієнти для спагетті з мідіями",
)),
320 => array (
"link" => "https://book-cook.net/plov-s-myasom-i-lisichkami-reczept/",
"anchors" => array (
"Плов з м'ясом та лисичками",
"Приготування плову з м'ясом та лисичками",
"Інгредієнти для плову з м'ясом та лисичками",
)),
321 => array (
"link" => "https://book-cook.net/kurinye-rulety-s-bekonom-pod-sousom-dorblyu-reczept/",
"anchors" => array (
"Курячі рулети з беконом під соусом Дорблю",
"Приготування курячих рулетів із беконом під соусом Дорблю",
"Інгредієнти для курячих рулетів із беконом під соусом Дорблю",
)),
322 => array (
"link" => "https://book-cook.net/telyatina-tushenaya-s-baklazhanami-reczept/",
"anchors" => array (
"Телятина тушкована з баклажанами",
"Приготування телятини з баклажанами",
"Інгредієнти для тушкованої телятини з баклажанами",
)),
323 => array (
"link" => "https://book-cook.net/draniki-s-krevetkami-reczept/",
"anchors" => array (
"Деруни з креветками",
"Спосіб приготування дерунів з креветками",
"Інгредієнти для дерунів з креветками",
)),
324 => array (
"link" => "https://book-cook.net/baranina-v-ezhevichnom-souse-reczept/",
"anchors" => array (
"Баранина в ожиновому соусі",
"Приготування баранини в соусі ожин",
"Інгредієнти для баранини в соусі ожини",
)),
325 => array (
"link" => "https://book-cook.net/salat-s-vyalenymi-pomidorami-reczept/",
"anchors" => array (
"Салат з в'яленими помідорами",
"Приготування салату з в'яленими помідорами",
"Інгредієнти для салату з в'яленими помідорами",
"рецет салату з в'яленими помідорами",
)),
326 => array (
"link" => "https://book-cook.net/rybnye-kotlety-iz-shhuki-reczept/",
"anchors" => array (
"Рибні котлети з щуки",
"Приготування рибних котлет із щуки",
"Інгредієнти для рибних котлет",
"Котлети з щуки рецепт з фото",
)),
327 => array (
"link" => "https://book-cook.net/okorochka-farshirovannye-reczept/",
"anchors" => array (
"фаршировані стегенця",
"Приготування фаршированих стегенець",
"Інгредієнти для фаршированих стегенець",
"Як приготувати фаршировані курячі ніжки",
)),
    // 328 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 329 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 330 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 331 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 332 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 333 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 334 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 335 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 336 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 337 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 338 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 339 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 340 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 341 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 342 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 343 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 344 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 345 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 346 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 347 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 348 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 349 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 350 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 351 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 352 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 353 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 354 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 355 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 356 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 357 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 358 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 359 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 360 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 361 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 362 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 363 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 364 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 365 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 366 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 367 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 368 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 369 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 370 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 371 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 372 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 373 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 374 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 375 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 376 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 377 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 378 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 379 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 380 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 381 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 382 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 383 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 384 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 385 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 386 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 387 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 388 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 389 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 390 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 391 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 392 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 393 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 394 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 395 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 396 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 397 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 398 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 399 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 400 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 401 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 402 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 403 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 404 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 405 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 406 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 407 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 408 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 409 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 410 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 411 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 412 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 413 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 414 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 415 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 416 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 417 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 418 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 419 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 420 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 421 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 422 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 423 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 424 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 425 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 426 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 427 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 428 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 429 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 430 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 431 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 432 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 433 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 434 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 435 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 436 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 437 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 438 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 439 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 440 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 441 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 442 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 443 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 444 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 445 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 446 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 447 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 448 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 449 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 450 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 451 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 452 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 453 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 454 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 455 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 456 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 457 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 458 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 459 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 460 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 461 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 462 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 463 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 464 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 465 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 466 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 467 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 468 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 469 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 470 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 471 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 472 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 473 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 474 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 475 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 476 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 477 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 478 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 479 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 480 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 481 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 482 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 483 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 484 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 485 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 486 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 487 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 488 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 489 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 490 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 491 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 492 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 493 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 494 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 495 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 496 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 497 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 498 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 499 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 500 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 501 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 502 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 503 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 504 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 505 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 506 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 507 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 508 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 509 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 510 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 511 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 512 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 513 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 514 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 515 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 516 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 517 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 518 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 519 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 520 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 521 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 522 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 523 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 524 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 525 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 526 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 527 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 528 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 529 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 530 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 531 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 532 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 533 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 534 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 535 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 536 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 537 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 538 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 539 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 540 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 541 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 542 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 543 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 544 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 545 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 546 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 547 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 548 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 549 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 550 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 551 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 552 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 553 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 554 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 555 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 556 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 557 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 558 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 559 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 560 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 561 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 562 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 563 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 564 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 565 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 566 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 567 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 568 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 569 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 570 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 571 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 572 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 573 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 574 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 575 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 576 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 577 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 578 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 579 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 580 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 581 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 582 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 583 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 584 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 585 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 586 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 587 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 588 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 589 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 590 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 591 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 592 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 593 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 594 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 595 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 596 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 597 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 598 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 599 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 600 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
  );

  return $bookcook_links;
}
?>