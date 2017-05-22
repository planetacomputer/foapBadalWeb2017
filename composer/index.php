<?php
use Acme\Car\CarIntro as CarIntro1;
use Acme\Vehicles\Cars\CarIntro as CarIntro2;
require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');



$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::INFO));
$log->addInfo('My logger is now ready');
$log->addWarning('Foo');
$log->addError('Aixoi es un error');

$var1 = "test";
dump($var1);
$a = [
    'ak1' => 'av1',
    'ak2' => 'av2',
    'ak3' => 'av3',
    'ak4' => 'av4',
    'ak5' => 'av5',
];
dump($a);
echo $a;


class Test {
    public $prop1 = 10;
    private $prop2 = 20;
    protected $prop3 = 30;
    private $prop4 = 40;

    public function __construct($value) {
        $this->undefinedProp = $value;
    }
}
$t = new Test(50);
dump($t);

$car = new CarIntro1();
echo $car->sayHello();

$car2 = new CarIntro2();
echo $car2->sayHello();