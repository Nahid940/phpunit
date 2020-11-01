<?php
include_once 'vendor/autoload.php';
//$man=new \App\Man();
//$man1=new \App\Man();
//$man2=new \App\Man();
//echo $man->count();
//echo count($man);

//$subject=new \App\observer\Subject();
//$o1=new \App\observer\ConcreteObserver();
//$subject->attach($o1);

//$o2=new \App\observer\ConcreteObserver2();
//$subject->attach($o2);
//$subject->changeState(rand(0,10));
//$subject->someBusinessLogic();

//$subject->someBusinessLogic();
//$subject->detach($o2);
//$subject->someBusinessLogic();


//$password_changed=true;
//$userSubject=new \App\userobserver\UserSubject($password_changed);
//$userSubject->attach(new \App\userobserver\PasswordChangeObserver(new \App\userobserver\SmsSender()));
//$userSubject->notify();


//$a=new SplDoublyLinkedList();
//$arr=[1,2,3,4,5,6,7,8,9];
//
//for($i=0;$i<count($arr);$i++){
//    $a->add($i,$arr[$i]);
//}
//$a->rewind();
//
//$s=serialize($a);
//
//print_r($s);
//
//echo PHP_EOL,PHP_EOL;
//
//$unserialze=unserialize($s);
//
//print_r($unserialze);
//$filePath = 'data.csv';
//$iterator=new \App\iterator\BasicIterator($filePath);
//foreach ($iterator as $i => $row) {
//    var_dump($row);
//}

// create new DirectoryIterator object

$container=new DI\Container();

//
//$builder = new DI\ContainerBuilder();
//$builder->addDefinitions('UserManager');
//$container = $builder->build();


//$userManager = $container->get('App\di\UserManager');

//$userManager->register("e","e");
// loop through the directory listing

$items=[4,25,234,5,2345,234,52,345,234,5,243,67,5367,6,46,45,674,567,4,64,567,4];
function a($items) {
    foreach ($items as $item) {
        yield $item + 1;
    }
}

foreach (a($items) as $is)
{
    echo $is;
}