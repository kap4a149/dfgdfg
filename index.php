<?php
date_default_timezone_set('Europe/Kiev');

include_once 'core/Schedule.php';
include_once 'config/config.php';

$api = 'bot591907321:AAEuAP6wOHyMpoFaaUGZCyD_cMeEbSJKWF8';
$input = file_get_contents('php://input');
$update = json_decode($input, true);
$message = $update['message']['text'];
$chatid = $update['message']['chat']['id'];


function sendMessage($chatid, $text){
  global $api;
  $url = "https://api.telegram.org/$api/sendMessage?chat_id=$chatid&text=".urlencode($text)."&parse_mode=markdown";
  $get = file_get_contents($url);
}

if($message == '/weektype' || $message == '/weektype@EmelieBot' || $message == 'тип'){
  sendMessage($chatid, showDate());
}

if($message == '/today' || $message == '/today@EmelieBot' || $message == '1'){
  sendMessage($chatid, showLessonsToday());
}

if($message == '/tomorrow' || $message == '/tomorrow@EmelieBot' || $message == '2'){
  sendMessage($chatid, showLessonsTomorrow());
}

if($message == '/odd' || $message == '/odd@EmelieBot' || $message == 'нечёт'){
  sendMessage($chatid, showLessonsOdd());
}

if($message == '/even' || $message == '/even@EmelieBot' || $message == 'чёт'){
  sendMessage($chatid, showLessonsEven());
}

if($message == '/teachers' || $message == '/teachers@EmelieBot'){
  sendMessage(
    $chatid,
    '*Культура делового общения* - Прокопович Лада Валерьевна' . "\n" .
    '*Теория вероятности* - Ситник Владимир Анатолиевич' . "\n" .
    '*Английский язык - 1 группа* - Ершова Юлия Анатольевна' . "\n" .
    '*Английский язык - 2 группа* - хз :)' . "\n" .
    '*ТКП* - Галчонков Олег Николаевич' . "\n" .
    '*Физкультура* - Небож Игорь Виталиевич' . "\n" .
    '*Философия* - Барановская Ольга Николаевна' . "\n" .
    '*Экономика - лекции* - Журан Елена Анатольевна' . "\n" .
    '*Экономика - практика* - Журавльова Наталья Михайловна' . "\n" .
    '*Численные методы - лекции* - Рудниченко Николай Дмитриевич' . "\n" .
    '*Численные методы - практика* - Шпиньковский Александр Анатольевич' . "\n" .
    '*ООП* - Годовиченко Николай Анатолиевич'
   );
}

if($message == '/annotations' || $message == '/annotations@EmelieBot'){
  sendMessage($chatid,
  '*Культура делового общения* - /annotationsculture' . "\n" .
  '*Теория вероятности* - /annotationstheory' . "\n" .
  '*Веб* - /annotationsweb' . "\n" .
  '*Экономика* - /annotationseconomy' . "\n" .
  '*ООП* - /annotationsoop' . "\n" .
  '*ТКП* - /annotationstkp' . "\n" .
  '*Английский* - /annotationsenglish' . "\n" .
  '*Численные методы* - /annotationschm' . "\n"

);
}

// Блок отвечающий за отображение аннотаций к предмету
if($message == '/annotationsculture' || $message == '/annotationsculture@EmelieBot'){
  sendMessage($chatid, showAnnotationsCulture());
}

if($message == '/annotationstheory' || $message == '/annotationstheory@EmelieBot'){
  sendMessage($chatid, showAnnotationsTheory());
}

if($message == '/annotationsweb' || $message == '/annotationsweb@EmelieBot'){
  sendMessage($chatid, showAnnotationsWebTechnology());
}

if($message == '/annotationseconomy' || $message == '/annotationseconomy@EmelieBot'){
  sendMessage($chatid, showAnnotationsEconomy());
}

if($message == '/annotationsoop' || $message == '/annotationsoop@EmelieBot'){
  sendMessage($chatid, showAnnotationsOop());
}

if($message == '/annotationstkp' || $message == '/annotationstkp@EmelieBot'){
  sendMessage($chatid, showAnnotationsTkp());
}

if($message == '/annotationsenglish' || $message == '/annotationsenglish@EmelieBot'){
  sendMessage($chatid, showAnnotationsEnglish());
}

if($message == '/annotationschm' || $message == '/annotationschm@EmelieBot'){
  sendMessage($chatid, showAnnotationsChm());
}
// Конец блока

// Отображение списка экзаменов
if($message == '/exams' || $message == '/exams@EmelieBot'){
  sendMessage($chatid,
  'Веб технологии - 609ф - 9:00 - 11 июня' . "\n" .
  'Философия - 204ф - 9:00 - 14 июня' . "\n" .
  'ООП - 607ф - 9:00 - 19 июня' . "\n" .
  'Английский язык - хз - 9:00 - 22 июня' . "\n" .
  'Теория вероятности - 606ф - 9:00 - 26 июня' . "\n"
  );
}

if($message == '/consults' || $message == '/consults@EmelieBot'){
  sendMessage($chatid,
  '*Галчонков О.М.* _Четверг(15:20-16:55)_, _Пятница_(13:30-15:00)' . "\n" .
  '*Годовиченко М.А.* _Пятница_(13:30-15:00), _Среда н-парн_(13:30-15:00), _Четверг парн_(13:30-15:00)' . "\n" .
  '*Ситник В.А.* _Понедельник_(13:30-15:00), _Среда_(13:30-15:00)' . "\n" .
  '*Червоненко П.П.* _Понедельник_(13:30-15:00), _Вторник_(13:30-15:00)' . "\n" .
  '*Шпиньковський О.А.* _Вторник_(13:30-15:00), _Среда_(13:30-15:00)' . "\n" .
  '*Панькина Г.С.* _Четверг_(13:30-15:00), _Пятница_(15:20-16:55)' . "\n"
  );
}

if($message == '/short'){
  sendMessage($chatid,
  'Для ленивых людей добавлен специальный список комманд, для этого просто наберите необходимое слово в чат:' . "\n" .
  '1 - отобразить рассписание на сегодня' . "\n" .
  '2 - отобразить рассписание на завтра' . "\n" .
  'тип - отобразить тип недели' . "\n" .
  'чёт - отобразить рассписание на чётной неделе' . "\n" .
  'нечёт - отобразить рассписание на нечётной неделе' . "\n"
  );
}

if($message == '/list' || $message == '/list@EmelieBot'){
  sendMessage($chatid,
  'Список по журналу:' . "\n" .
  '*1.* Варчук' . "\n" .
  '*2.* Голобородько' . "\n" .
  '*3.* Давыдов' . "\n" .
  '*4.* Дутковский' . "\n" .
  '*5.* Ершов' . "\n" .
  '*6.* Кириллов' . "\n" .
  '*7.* Козар' . "\n" .
  '*8.* Лунц' . "\n" .
  '*9.* Миняйло' . "\n" .
  '*10.* Настасьев' . "\n" .
  '*11.* Оксененко' . "\n" .
  '*12.* Орешко' . "\n" .
  '*13.* Пилипенко' . "\n" .
  '*14.* Подольхов' . "\n" .
  '*15.* Пичул' . "\n" .
  '*16.* Попроцкая' . "\n" .
  '*17.* Смоков' . "\n" .
  '*18.* Сторчак' . "\n" .
  '*19.* Ткаченко' . "\n" .
  '*20.* Тонкошкур' . "\n" .
  '*21.* Атаев' . "\n"
);
}


// my id = -316789649
//ourchatid =

?>
