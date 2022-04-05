<?php

require_once 'vendor/autoload.php';

use Ssz\WebtM6Vegas\Hotel;

$src = 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/193379077.jpg?k=1dd9c166c180acfd0854957bd6498b8818ba7977d79bbea648bd7c2c94307b01&o=&hp=1';
$description = 'Dieses farbenfrohe Casino-Resort im ägyptischen Stil liegt am südlichen Ende des Las Vegas Strip in einer
                30-stöckigen Pyramide, auf deren Spitze sich ein 315.000-Watt-Scheinwerfer befindet. Zum Flughafen McCarran
                International sind es 2 Meilen (3,2 km).
                Die freundlichen Zimmer sind traditionell eingerichtet und mit einem Flachbildfernseher und WLAN
                ausgestattet.
                Die Suiten bieten eine Badewanne, ein separates Wohnzimmer und teilweise auch eine Bar mit Spüle. Die Zimmer
                und Suiten in der Pyramide haben schräge Wände. Zimmerservice ist verfügbar.';

$hotels[] = new Hotel('Luxor',$src,$description);

$src = 'https://pix8.agoda.net/hotelImages/5112/-1/fe9015ba17cc4ca1e6da65483ab67414.jpg?ca=11&ce=1&s=1024x768';
$description = 'Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am
                lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (
                22,5 km) vom Rio Secco Golf Club entfernt.
                Die elegant eingerichteten und auf 5 Turmgebäude verteilten Zimmer bieten WLAN, einen Flachbildfernseher
                und eine Minibar. Die Suiten haben außerdem einen Wohnbereich und eine Whirlpool-Badewanne. In den
                Suiten mit gehobener Ausstattung gibt es einen Billardtisch und/oder eine Tanzfläche. Zimmerservice wird
                rund um die Uhr angeboten.';

$hotels[] = new Hotel('Caesars palace',$src,$description);

$src = 'https://exp.cdn-hotels.com/hotels/1000000/150000/140600/140596/88ef46b9_z.jpg?impolicy=fcrop&w=1000&h=666&q=medium';
$description = 'Dieses luxuriöse Casino-Resort am Las Vegas Strip bietet Blick auf einen 3 Hektar großen See mit tanzenden
                Springbrunnen. Es ist 2 Meilen (3,2 km) vom Flughafen McCarran International entfernt.
                Die hellen, eleganten Zimmer sind mit Kunstwerken, einem Marmorbad mit Badewanne, Smart-TV und einer
                Sitzecke ausgestattet. Die prachtvollen Suiten bieten einen privaten Aufzug, ein Wohnzimmer, eine
                Whirlpool-Badewanne und einen Butlerservice. Ein Flughafenshuttle ist teilweise inbegriffen.';

$hotels[] = new Hotel('Bellagio',$src,$description);

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.html');
echo $template->render([
    'hotels' => $hotels
]);