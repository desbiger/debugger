# Дебагер
## пакет помогает расставить тайминги по проекту
Пример использования:

``
$checker = \Desbiger\TimeChecker::init();

//код

$checker->getNowInterval(true) // выведет сколько прошло милисекунд с момента инициализации класса

//код

$checker->getNowInterval(true) // выведет интервал времени с начала инициализации а так же до предидущего считывания интервала
``