<?php

$template = file_get_contents('main.html');
function replace($array)
{
    global $template;

    foreach ($array as $key => $value) {
        $template = str_replace(
            "###$key###",
            $value,
            $template);
    }
}

$hotel1['HOTELNAME1'] = 'Luxor';
$hotel1['DESCRIPTION1'] = 'Dieses farbenfrohe Casino-Resort im ägyptischen Stil liegt am südlichen Ende des Las Vegas Strip in einer
                30-stöckigen Pyramide, auf deren Spitze sich ein 315.000-Watt-Scheinwerfer befindet. Zum Flughafen McCarran
                International sind es 2 Meilen (3,2 km).
                Die freundlichen Zimmer sind traditionell eingerichtet und mit einem Flachbildfernseher und WLAN
                ausgestattet.
                Die Suiten bieten eine Badewanne, ein separates Wohnzimmer und teilweise auch eine Bar mit Spüle. Die Zimmer
                und Suiten in der Pyramide haben schräge Wände. Zimmerservice ist verfügbar.';

$hotel2['HOTELNAME2'] = 'Caesars palace';
$hotel2['DESCRIPTION2'] = 'Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am
                lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (
                22,5 km) vom Rio Secco Golf Club entfernt.
                Die elegant eingerichteten und auf 5 Turmgebäude verteilten Zimmer bieten WLAN, einen Flachbildfernseher
                und eine Minibar. Die Suiten haben außerdem einen Wohnbereich und eine Whirlpool-Badewanne. In den
                Suiten mit gehobener Ausstattung gibt es einen Billardtisch und/oder eine Tanzfläche. Zimmerservice wird
                rund um die Uhr angeboten.';

$hotel3['HOTELNAME3'] = 'Bellagio';
$hotel3['DESCRIPTION3'] = 'Dieses luxuriöse Casino-Resort am Las Vegas Strip bietet Blick auf einen 3 Hektar großen See mit tanzenden
                Springbrunnen. Es ist 2 Meilen (3,2 km) vom Flughafen McCarran International entfernt.
                Die hellen, eleganten Zimmer sind mit Kunstwerken, einem Marmorbad mit Badewanne, Smart-TV und einer
                Sitzecke ausgestattet. Die prachtvollen Suiten bieten einen privaten Aufzug, ein Wohnzimmer, eine
                Whirlpool-Badewanne und einen Butlerservice. Ein Flughafenshuttle ist teilweise inbegriffen.';

replace($hotel1);
replace($hotel2);
replace($hotel3);

echo $template;