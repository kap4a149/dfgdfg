<?php

/* Определение чёт/нечёт недели */
$curr = date_create_from_format('d.m.Y', date('d.m.Y'));
$base = date_create_from_format('d.m.Y', '26.02.2018');

$weeks = date_format($curr, 'W') - date_format($base, 'W') ;
$weeks++;

// Костыль для дат после нового года
$weeks = ( $weeks < 0 ) ? $weeks + 52 : $weeks ;
$w = array("четная", "нечетная");
// echo "debug mode<br>site version 2.1";

/* Вывод даты */
function showDate(){
    global $w, $weeks;
    return $w[$weeks % 2]." неделя (" . $weeks . '-я)' ;
}

//Определение текущей чёт/нечёт неделя
function getWeek(){
    if ($GLOBALS['weeks'] % 2) {
       $weektype = 1;
    } else {
    $weektype = 2;
    }
    return $weektype;
    }

//Определение следующего типа недели чёт/нечёт
function getNextWeek(){
    if ($GLOBALS['weeks'] % 2) {
       $weektype = 2;
    } else {
    $weektype = 1;
    }
    return $weektype;
    }

function showLessonsToday(){
  include 'config/pairs.php';
  $day = date('N');

if($day == '1' && getWeek() == '1'){
  return (
  $array[0]["0"]['0'] . ' - ' . $array[0]['0']['1'] . ' - ' . $array[0]['0']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
  );
}
if($day == '1' && getWeek() == '2'){
  return (
  $array[0]["1"]['0'] . ' - ' . $array[0]['1']['1'] . ' - ' . $array[0]['1']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
  );
}

if($day == '2' && getWeek() == '1'){
  return (
  $array[0]["4"]['0'] . "\n" .
  $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
  $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
  $array[0]["7"]['0'] . ' - ' . $array[0]['7']['1'] . ' - ' . $array[0]['7']['2']
  );

}
if($day == '2' && getWeek() == '2'){
  return (
  $array[0]["4"]['0'] . "\n" .
  $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
  $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
  $array[0]["8"]['0'] . ' - ' . $array[0]['8']['1'] . ' - ' . $array[0]['8']['2']
  );
}

if($day == '3' && getWeek() == '1'){
  return (
  $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
  $array[0]["10"]['0'] . ' - ' . $array[0]['10']['1'] . ' - ' . $array[0]['10']['2'] ."\n" .
  $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2']
  );
}
if($day == '3' && getWeek() == '2'){
  return (
  $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
  $array[0]["11"]['0'] . ' - ' . $array[0]['11']['1'] . ' - ' . $array[0]['11']['2'] ."\n" .
  $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2']
  );
}

if($day == '4' && getWeek() == '1'){
  return (
  $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2']."\n" .
  $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] ."\n" .
  $array[0]["15"]['0'] . ' - ' . $array[0]['15']['1'] . ' - ' . $array[0]['15']['2']
  );
}
if($day == '4' && getWeek() == '2'){
  return (
  $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2']."\n" .
  $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] ."\n" .
  $array[0]["16"]['0'] . ' - ' . $array[0]['16']['1'] . ' - ' . $array[0]['16']['2']
  );
}

if($day == '5' && getWeek() == '1'){
  return (
  $array[0]["17"]['0'] ."\n" .
  $array[0]["18"]['0'] . ' - ' . $array[0]['18']['1'] . ' - ' . $array[0]['18']['2'] ."\n" .
  $array[0]["20"]['0'] . ' - ' . $array[0]['20']['1'] . ' - ' . $array[0]['20']['2']
  );
}
if($day == '5' && getWeek() == '2'){
  return (
  $array[0]["17"]['0'] ."\n" .
  $array[0]["19"]['0'] . ' - ' . $array[0]['19']['1'] . ' - ' . $array[0]['19']['2'] ."\n" .
  $array[0]["21"]['0'] . ' - ' . $array[0]['21']['1'] . ' - ' . $array[0]['21']['2']
  );
}

if($day == '6' || $day == '7' && getNextWeek() == '1'){
  return (
  '*Пары в понедельник:*' . "\n" .
  $array[0]["0"]['0'] . ' - ' . $array[0]['0']['1'] . ' - ' . $array[0]['0']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
  );
}
if($day == '6' || $day == '7' && getNextWeek() == '2'){
  return (
  '*Пары в понедельник:*' . "\n" .
  $array[0]["1"]['0'] . ' - ' . $array[0]['1']['1'] . ' - ' . $array[0]['1']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
  );
}
}

function showLessonsOdd(){
  include_once 'config/pairs.php';
  return (
  "*Нечётная неделя*\n\n" . '*Понедельник:*' . "\n" .
  $array[0]["0"]['0'] . ' - ' . $array[0]['0']['1'] . ' - ' . $array[0]['0']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2'] . "\n" .
  '*Вторник:*' . "\n" .
  $array[0]["4"]['0'] . "\n" .
  $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
  $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
  $array[0]["7"]['0'] . ' - ' . $array[0]['7']['1'] . ' - ' . $array[0]['7']['2'] . "\n" .
  '*Среда:*' . "\n" .
  $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
  $array[0]["10"]['0'] . ' - ' . $array[0]['10']['1'] . ' - ' . $array[0]['10']['2'] ."\n" .
  $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2'] . "\n" .
  '*Четверг:*' . "\n" .
  $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2']."\n" .
  $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] ."\n" .
  $array[0]["15"]['0'] . ' - ' . $array[0]['15']['1'] . ' - ' . $array[0]['15']['2'] . "\n" .
  '*Пятница:* ' . "\n" .
  $array[0]["17"]['0'] ."\n" .
  $array[0]["18"]['0'] . ' - ' . $array[0]['18']['1'] . ' - ' . $array[0]['18']['2'] ."\n" .
  $array[0]["20"]['0'] . ' - ' . $array[0]['20']['1'] . ' - ' . $array[0]['20']['2']
  );
}

function showLessonsTomorrow(){
  include 'config/pairs.php';
  $day = date('N');

  if($day == '1' && getWeek() == '1'){
    return (
    'Пары во вторник:' . "\n" .
    $array[0]["4"]['0'] . "\n" .
    $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
    $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
    $array[0]["7"]['0'] . ' - ' . $array[0]['7']['1'] . ' - ' . $array[0]['7']['2']
    );
  }
  if($day == '1' && getWeek() == '2'){
    return (
    'Пары во вторник:' . "\n" .
    $array[0]["4"]['0'] . "\n" .
    $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
    $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
    $array[0]["8"]['0'] . ' - ' . $array[0]['8']['1'] . ' - ' . $array[0]['8']['2']
    );
  }

  if($day == '2' && getWeek() == '1'){
    return (
    'Пары в среду:' . "\n" .
    $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
    $array[0]["10"]['0'] . ' - ' . $array[0]['10']['1'] . ' - ' . $array[0]['10']['2'] ."\n" .
    $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2']
    );
  }
  if($day == '2' && getWeek() == '2'){
    return (
    'Пары в среду:' . "\n" .
    $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
    $array[0]["11"]['0'] . ' - ' . $array[0]['11']['1'] . ' - ' . $array[0]['11']['2'] ."\n" .
    $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2']
    );
  }

  if($day == '3' && getWeek() == '1'){
    return (
    'Пары в четверг:' . "\n" .
    $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2']."\n" .
    $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] ."\n" .
    $array[0]["15"]['0'] . ' - ' . $array[0]['15']['1'] . ' - ' . $array[0]['15']['2']
    );
  }
  if($day == '3' && getWeek() == '2'){
    return (
    'Пары в четверг:' . "\n" .
    $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2']."\n" .
    $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] ."\n" .
    $array[0]["16"]['0'] . ' - ' . $array[0]['16']['1'] . ' - ' . $array[0]['16']['2']
    );
  }

  if($day == '4' && getWeek() == '1'){
    return (
    'Пары в пятницу:' . "\n" .
    $array[0]["17"]['0'] ."\n" .
    $array[0]["18"]['0'] . ' - ' . $array[0]['18']['1'] . ' - ' . $array[0]['18']['2'] ."\n" .
    $array[0]["20"]['0'] . ' - ' . $array[0]['20']['1'] . ' - ' . $array[0]['20']['2']
    );
  }
  if($day == '4' && getWeek() == '2'){
    return (
    'Пары в пятницу:' . "\n" .
    $array[0]["17"]['0'] ."\n" .
    $array[0]["19"]['0'] . ' - ' . $array[0]['19']['1'] . ' - ' . $array[0]['19']['2'] ."\n" .
    $array[0]["21"]['0'] . ' - ' . $array[0]['21']['1'] . ' - ' . $array[0]['21']['2']
    );
  }

  if($day == '5' && getNextWeek() == '1'){
    return (
    '*Пары в понедельник:*' . "\n" .
    $array[0]["0"]['0'] . ' - ' . $array[0]['0']['1'] . ' - ' . $array[0]['0']['2']."\n" .
    $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
    $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
    );
  }
  if($day == '5' && getNextWeek() == '2'){
    return (
    '*Пары в понедельник:*' . "\n" .
    $array[0]["1"]['0'] . ' - ' . $array[0]['1']['1'] . ' - ' . $array[0]['1']['2']."\n" .
    $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
    $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
    );
  }

  if($day == '6' || $day == '7' && getNextWeek() == '1'){
    return (
    '*Пары в понедельник:*' . "\n" .
    $array[0]["0"]['0'] . ' - ' . $array[0]['0']['1'] . ' - ' . $array[0]['0']['2']."\n" .
    $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
    $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
    );
  }
  if($day == '6' || $day == '7' && getNextWeek() == '2'){
    return (
    '*Пары в понедельник:*' . "\n" .
    $array[0]["1"]['0'] . ' - ' . $array[0]['1']['1'] . ' - ' . $array[0]['1']['2']."\n" .
    $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
    $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2']
    );
  }
}

  function showLessonsEven(){
    include_once 'config/pairs.php';
    return (
    "*Чётная неделя*\n\n" . '*Понедельник:*' . "\n" .
    $array[0]["1"]['0'] . ' - ' . $array[0]['1']['1'] . ' - ' . $array[0]['1']['2']."\n" .
  $array[0]["2"]['0'] . ' - ' . $array[0]['2']['1'] . ' - ' . $array[0]['2']['2'] ."\n" .
  $array[0]["3"]['0'] . ' - ' . $array[0]['3']['1'] . ' - ' . $array[0]['3']['2'] . "\n" .
  '*Вторник:*' . "\n" .
  $array[0]["4"]['0'] . "\n" .
  $array[0]["5"]['0'] . ' - ' . $array[0]['5']['1'] . ' - ' . $array[0]['5']['2'] ."\n" .
  $array[0]["6"]['0'] . ' - ' . $array[0]['6']['1'] . ' - ' . $array[0]['6']['2'] . "\n" .
  $array[0]["8"]['0'] . ' - ' . $array[0]['8']['1'] . ' - ' . $array[0]['8']['2'] . "\n" .
  '*Среда:*' . "\n" .
  $array[0]["9"]['0'] . ' - ' . $array[0]['9']['1'] . ' - ' . $array[0]['9']['2']."\n" .
  $array[0]["11"]['0'] . ' - ' . $array[0]['11']['1'] . ' - ' . $array[0]['11']['2'] ."\n" .
  $array[0]["12"]['0'] . ' - ' . $array[0]['12']['1'] . ' - ' . $array[0]['12']['2'] . "\n" .
  '*Четверг*' . "\n" .
  $array[0]["13"]['0'] . ' - ' . $array[0]['13']['1'] . ' - ' . $array[0]['13']['2'] . "\n" .
  $array[0]["14"]['0'] . ' - ' . $array[0]['14']['1'] . ' - ' . $array[0]['14']['2'] . "\n" .
  $array[0]["16"]['0'] . ' - ' . $array[0]['16']['1'] . ' - ' . $array[0]['16']['2'] . "\n" .
  '*Пятница:*' . "\n" .
  $array[0]["17"]['0'] ."\n" .
  $array[0]["19"]['0'] . ' - ' . $array[0]['19']['1'] . ' - ' . $array[0]['19']['2'] ."\n" .
  $array[0]["21"]['0'] . ' - ' . $array[0]['21']['1'] . ' - ' . $array[0]['21']['2']
  );
  }

  function showAnnotationsCulture(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['0']['0'] . ' - (' . $annotations[0]['0']['1'] . ')'
    );
  }

  function showAnnotationsTheory(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['1']['0'] . ' - (' . $annotations[0]['1']['1'] . ')'
    );
  }

  function showAnnotationsWebTechnology(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['2']['0'] . ' - (' . $annotations[0]['2']['1'] . ')' . "\n" .
    $annotations[0]['3']['0'] . ' - (' . $annotations[0]['3']['1'] . ')'
    );
  }

  function showAnnotationsEconomy(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['4']['0'] . ' - (' . $annotations[0]['4']['1'] . ')' . "\n" .
    $annotations[0]['15']['0'] . ' - (' . $annotations[0]['15']['1'] . ')' . "\n" .
    $annotations[0]['16']['0'] . ' - (' . $annotations[0]['16']['1'] . ')' . "\n"
    );
  }

  function showAnnotationsOop(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['5']['0'] . ' - (' . $annotations[0]['5']['1'] . ')'
    );
  }

  function showAnnotationsTkp(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['6']['0'] . ' - (' . $annotations[0]['6']['1'] . ')' . "\n" .
    $annotations[0]['7']['0'] . ' - (' . $annotations[0]['7']['1'] . ')' . "\n" .
    $annotations[0]['8']['0'] . ' - (' . $annotations[0]['8']['1'] . ')' . "\n" .
    $annotations[0]['9']['0'] . ' - (' . $annotations[0]['9']['1'] . ')' . "\n" .
    $annotations[0]['14']['0'] . ' - (' . $annotations[0]['14']['1'] . ')' . "\n"
    );
  }

  function showAnnotationsEnglish(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['10']['0'] . ' - (' . $annotations[0]['10']['1'] . ')'
    );
  }

  function showAnnotationsChm(){
    include_once 'config/annotations.php';
    return(
    $annotations[0]['11']['0'] . ' - (' . $annotations[0]['11']['1'] . ')' . "\n" .
    $annotations[0]['12']['0'] . ' - (' . $annotations[0]['12']['1'] . ')' . "\n" .
    $annotations[0]['13']['0'] . ' - (' . $annotations[0]['13']['1'] . ')'
    );
  }

?>
