<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softgroups Junior PHP developer courses entrance test">
    <meta name="author" content="Artur Lukashchuk">
    <title>Junior PHP developer courses entrance test</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/site.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=cyrillic" rel="stylesheet">
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php"><img src="assets/img/logo-1.png" alt="Softgroup logo" width="158" height="54"></a>
            <!--  <a class="navbar-brand" href="/"></a>-->
        </div>
        <!--   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
        <ul class="nav navbar-nav">
            <li><a href="/">Головна</a></li>
            <li><a href="/about.php">Автор</a></li>
            <li><a href="/softgroup.ua" target="_blank">Soft Group</a></li>
        </ul>
        <!-- </div>-->
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="col-md-left-sidebar">
                <div class="list-group">
                    <a href="#test_one" class="list-group-item active">Рішення завдання №1</a>
                    <a href="#test_two" class="list-group-item">Рішення завдання №2</a>
                    <a href="#test_three" class="list-group-item">Рішення завдання №3</a>
                    <a href="#test_four" class="list-group-item">Рішення завдання №4</a>
                    <a href="#test_five" class="list-group-item">Рішення завдання №5</a>
                    <a href="#test_six" class="list-group-item">Рішення завдання №6</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="thumbnail">
                <div id="test_one">
                    <div class="caption-full">
                        <h2>Завдання №1</h2>
                    <span class="task"><p>У форму вводиться число <code>N</code>. Знайти всі досконалі числа до
                            <code>N</code>.
                            Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
                            крім себе самого.
                            Наприклад, число <code>6</code> є досконалим, тому що крім себе
                            самого ділиться на числа <code>1</code>, <code>2</code> і <code>3</code>, які в сумі дають
                            <code>6</code>.</p>
                    </span>
                    <span class="answer"><br>
                         <span class="demo">Рішення:</span><p>
                            <form action="tasks.php" method="post">
                        <p>Введіть число: <input name="number" type="text"></p>
                        <p><input type='submit' value='Відправити'></p>
                        </form>
                        <?php
                        $inputVal = $_POST[number];
                        $perfectArray = array(6, 28, 496, 8128, 33550336, 8589869056, 137438691328, 2305843008139952128, 2658455991569831744654692615953842176, 191561942608236107294793378084303638130997321548169216);
                        foreach ($perfectArray as $value) {

                            if ($inputVal > $value) {
                                echo "<p>Результат: $value </p>";
                            }
                        }
                        ?>
                        </p>
                    </span>
                    </div>
                </div>
                <hr class="hr">
                <br><br>
                <div id="test_two">
                    <div class="caption-full">
                        <h2>Завдання №2</h2>
                    <span class="task"><p>У форму вводиться текст, слова в якому розділені пробілами і
                            розділовими знаками. Вилучити з цього тексту всі слова найбільшої
                            довжини. (Слів найбільшої довжини може бути декілька).</p>
                    </span>
                    <span class="answer"><br>
                         <span class="demo">Рішення:</span><p>
                            <form action="tasks.php" method="post">
                        <p>Введіть слова: <input name="words" type="text"></p>
                        <p><input type='submit' value='Відправити'></p>
                        </form>
                        <?php
                        $inputVal = $_POST[words];
                        $long = "";
                        $words = explode(" ", preg_replace("/\W+[^a-zа-яА-ЯA-Z0-9]/iu", " ", $inputVal));
                        //$re = '/[a-zа-яА-ЯA-Z0-9]+/imus';
                        //preg_match_all($re, $inputVal, $matches);
                        //var_dump($words);exit; // Массив
                        foreach ($words as $word)

                            //$wwww = implode(preg_replace("/\W+[^a-zа-яА-ЯA-Z0-9]/iu"), $words);
                            $wwwwLeng = mb_strlen(trim($wwww));
                        $sortedWWWWllen = rsort($sortedWWWWllen, SORT_DESC);
                        var_dump($sortedWWWWllen);
                        exit;
                        var_dump($wwwwLeng);
                        exit;
                        var_dump($word);
                        exit;
                        $length = (mb_strlen($word) > mb_strlen($long)) ? $word : $long;
                        echo $long;


                        /*    for($i=0; $i < count($matches[0]); $i++){
                                for($x=0; $x < count($matches[$i]); $x++){
                                    if(strlen($matches[$i][$x]) > $word["length"])
                                    {
                                        $word["word"] = $matches[$i][$x];
                                        //var_dump($word["word"]);exit;
                                        $word["length"] = mb_strlen($matches[$i][$x]);
                                        //var_dump($word["length"]);exit;
                                    }
                                    echo rsort($word);
                                    //$longestM = implode(", ", $longM);
                                    //echo "Самые длинные слова: {$longestM} <br>";

                                }
                            }
     */
                        // Print the entire match result
                        //krsort($matches[0]);
                        //  foreach ($matches[0] as $key => $val) {
                        //      echo "$val\n";
                        //  }
                        //var_dump($matches[0]);

                        //$longestM = array();
                        //echo $longestM;
                        /*    $arrays = explode(' ',$inputVal);
                            var_dump($arrays);exit;
                            $word["length"] = 0;
                            $word["word"] = "";
                            for($i=0; $i < count($arrays);$i++)
                            {
                                if(strlen($arrays[$i]) > $word["length"])
                                {
                                    $word["word"] = $arrays[$i];
                                    $word["length"] = strlen($arrays[$i]);
                                }
                                $strLn = (strlen($word["word"]));
                                var_dump($word["word"]);
                            }

                            echo "Первое самое длинное слово: <b> {$word["word"]}</b>. Длинна строки = {$word["length"]}";
    */
                        ?>
                        </p>
                    </span>
                    </div>
                </div>
                <hr class="hr">
                <br><br>
                <div id="test_three">
                    <div class="caption-full">
                        <h2>Завдання №3</h2>
                    <span class="task"><p>Вводяться <code>N</code> натуральних чисел більше <code>2</code>.
                            Підрахувати, скільки серед них простих чисел.</p>
                    </span>
                    </div>
                </div>
                <hr class="hr">
                <br><br>
                <div id="test_four">
                    <div class="caption-full">
                        <h2>Завдання №4</h2>
                    <span class="task"><p>
                            Політичне життя однієї країни дуже жваве.
                            У країні діє <code>K</code> політичних партій, кожна з яких регулярно оголошує національний
                            страйк.
                            Дні, коли хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя
                            (коли і так ніхто не працює), завдають великої шкоди економіці країни.
                            <code>i</code>-та партія оголошує страйки строго кожні <code>bi</code> днів, починаючи з дня
                            з
                            номером <code>ai</code>.
                            Тобто <code>i</code>-та партія оголошує страйки в дні <code>ai, ai + bi, ai + 2bi</code> і
                            т.д.
                            Якщо в якийсь день кілька партій оголошує страйк, то це вважається
                            загальнонаціональним страйком.
                            У календарі країни <code>N</code> днів, пронумерованих від <code>1</code> до <code>N</code>.
                            Перший день року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається з
                            семи днів.
                            <span class="demo">Вхідні дані</span>
                            Програма отримує на вхід число днів в році <code>N</code>
                            <code>(1 < N < 1000000)</code> і число
                            політичних партій <code>K (1 < K < 100)</code>. Далі йде <code>K</code> рядків, що описують
                            графіки
                            проведення страйків. <code>i</code>-й рядок містить числа <code>ai</code> і <code>bi</code>
                            <code>(1 < ai, bi < N)</code>.
                            <span class="demo">Вихідні дані:</span>
                            Виведіть єдине число: кількість страйків, що відбулися протягом року.
                            <span class="demo">Примітка</span>
                            Перша партія оголошує страйки в дні <code>2, 5, 8, 11, 14, 17</code>.
                            Друга партія оголошує страйки в дні <code>3, 8, 13, 18</code>.
                            Третя партія - в дні <code>9</code> і <code>17</code>.
                            Дні номер <code>6, 7, 13, 14</code> є вихідними.
                            Таким чином, загальнонаціональні страйки пройдуть в дні <code>2, 3, 5, 8, 9, 11, 17,
                                18.</code>
                        </p></span>
                    </div>
                </div>
                <hr class="hr">
                <br><br>
                <div id="test_five">
                    <div class="caption-full">
                        <h2>Завдання №5</h2>
                    <span class="task"><p>Задано текст. Словом вважається послідовність непробільних символів,
                            які йдуть підряд. Слова розділені одним або більшим числом пробілів або
                            символами кінця рядка.
                            Для кожного слова з цього тексту підрахуйте, скільки разів воно
                            зустрічалося в цьому тексті раніше. Використайте словники.</p>
                    </span>
                        <span class="demo">Приклад:</span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Ввід</th>
                                <th>Вивід</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>one two one two three</td>
                                <td>0 0 1 1 0</td>
                            </tr>
                            <tr>
                                <td>She sells sea shells on the sea
                                    shore;
                                    The shells that she sells are sea
                                    shells I'm sure.
                                    So if she sells sea shells on the
                                    sea shore,
                                    I'm sure that the shells are sea
                                    shore shells.
                                </td>
                                <td>0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3
                                    1 1 4 0 1 0 1 2 4 1 5 0 0
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="hr">
                <br><br>
                <div id="test_six">
                    <div class="caption-full">
                        <h2>Завдання №6</h2>
                    <span class="task"><p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:
                            Кожен учасник реєструється на сайті гри під певним ігровим ім'ям. Імена
                            учасників не повторюються.
                            Чемпіонат проводиться протягом певного часу. У будь-який момент цього
                            часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і
                            почати залікову гру. Після закінчення гри її результат (кількість балів)
                            фіксується і заноситься до протоколу.
                            Учасники мають право грати кілька разів. Кількість спроб одного учасника
                            не обмежується. Остаточний результат учасника визначається по одній грі,
                            кращою для даного учасника. Більш високе місце в змаганнях займає
                            учасник, що показав кращий результат. При рівності результатів більш
                            високе місце займає учасник, раніше показав кращий результат.
                            В ході змагань заповнюється протокол, кожен рядок якого описує одну гру
                            і містить результат учасника і його ігрове ім'я. Протокол формується в
                            реальному часі по ходу проведення чемпіонату, тому рядки в ньому
                            розташовані в порядку проведення ігор: чим раніше зустрічається рядок у
                            протоколі, тим раніше закінчилася відповідна цьому рядку гра.
                            Напишіть програму, яка за даними протоколу визначає переможця і
                            призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.</p>
                    </span><br><br>
                        <span class="demo">Приклад:</span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Ввід</th>
                                <th>Вивід</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>197128</td>
                                <td>1 місце. Qwerty (197128)</td>
                            </tr>
                            <tr>
                                <td>
                                    95715 qwerty
                                    95715 Alex
                                    83647 M
                                    197128 qwerty
                                    95715 Jack
                                    93289 Alex
                                    95715 Alex
                                    95715 M
                                    69485 Jack

                                </td>
                                <td>
                                    2 місце. Alex (95715)<br>
                                    3 місце. Jack (95715)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="hr">
            </div> <!-- thumbnail -->
        </div><!-- Left Menu -->
    </div><!-- Row -->
</div><!-- Container -->

<div class="container">
    <hr>
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>&copy; 2016-2017 <a href="mailto:agressortm@gmail.com">Artur Lukashchuk 2016<a/></p>
                <p align="right"><a href="#top">Вгору</a></p>
            </div>
        </div>
    </footer>
</div>
<!-- /.container -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.js"></script>
</body>
</html>