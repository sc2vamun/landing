<?php 
use vadim\products\models\Prod;class Cms5821e31a5d58c693527982_2229077273Class extends \Cms\Classes\PartialCode
{

public function onStart() {
 $products = Prod::get();
 $this['products'] =$products;
//    $this['services'] = [
//        ['id' => 'service-1', 'icon' => 'fa-file-code-o'  , 'title' => 'ЖЕНЩИНА-БРИЛЛИАНТ (1-3 мес)'  , 'caption' => '
//• Реализовывать свои цели и мечты 
//• Раскрыть свою женскую энергию и стать более женственной 
//• Говорить с мужчинами так, чтобы они научились Вас слышать и поддерживать 
//и многое др.'],
//        ['id' => 'service-2', 'icon' => 'fa-paper-plane-o', 'title' => 'HTML5 CSS3'  , 'caption' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumenda, eveniet, consectetur, ex doloribus veniam asperiores incidunt mollitia placeat aniet adipscing.'],
 //       ['id' => 'service-3', 'icon' => 'fa-institution'  , 'title' => 'Web Design'  , 'caption' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumenda, eveniet, consectetur, ex doloribus veniam asperiores incidunt mollitia placeat aniet adipscing.'],
  //      ['id' => 'service-4', 'icon' => 'fa-flask'        , 'title' => 'Mobile Ready', 'caption' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumenda, eveniet, consectetur, ex doloribus veniam asperiores incidunt mollitia placeat aniet adipscing.'],
  //  ];

}
}
