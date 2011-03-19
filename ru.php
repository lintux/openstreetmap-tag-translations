<?
//  All tags should have translations in www/lang/tags_XX.php, with
//  language strings like "tag:key" for the translation of the key and
//  "tag:key=value" for the translation of the value. E.g.
//  $lang_str["tag:amenity"]=array("Amenity", "Amenities");
//  $lang_str["tag:amenity=bar"]=array("Bar", "Bars");
//
//  Furthermore you can describe the tags with the array $tag_type. Every
//  entry is an array again to further specify its type, e.g.:
//  $tag_type["width"]=array("number", "m", "in");
//                ^             ^       ^    ^
//                |             |       |    \-- the preferred unit in this locale
//                |             |       \------- the default unit for this tag
//                |             \--------------- the type of the value
//                \----------------------------- tag
//
//  This defines, that the default value for the tag width is a number, with
//  its default unit m (for meter) and the preferred unit for this locale is
//  in (for inch).
//
//  The following types are valid:
//  * text          default (e.g. religion, name)
//  * number        a value, with default unit and preferred unit as defined
//                  by the second and third entry in this array (e.g. width,
//                  voltage)
//  * count         an integer value (e.g. population)
//  * date          a date
//  * link          an Internet URL
//
//  NOTE: the $tag_type can already be defined, but it's not used yet.
//  There might also be more tag types soon and a way to format the output
//  (e.g. "100.000 m" or "2010-12-24").

// accomodation
$lang_str["tag:accomodation"]="Жильё";

// address
$lang_str["tag:address"]="Адрес";

// addr:housenumber
$lang_str["tag:addr:housenumber"]="Номер дома";

// admin_level
$lang_str["tag:admin_level=2"]="Граница Страны";
#$lang_str["tag:admin_level=3"]="Divisions";
#$lang_str["tag:admin_level=4"]="State Border";
#$lang_str["tag:admin_level=5"]="Community Border";
#$lang_str["tag:admin_level=6"]="County Border";
#$lang_str["tag:admin_level=8"]="Town/Municipality Border";
#$lang_str["tag:admin_level=10"]="Subdivisions of Cities";

// amenity
#$lang_str["tag:amenity"]="Amenity";
$lang_str["tag:amenity=cinema"]=array("Кинотеатр", "Кинотеатры");
$lang_str["tag:amenity=restaurant"]=array("ресторан", "рестораны");
$lang_str["tag:amenity=pub"]=array("Паб", "Пабы");

// building
#$lang_str["tag:building=yes"]="Buildings";
#$lang_str["tag:building=default"]="Buildings";
#$lang_str["tag:building=worship"]="Religious Buildings";
#$lang_str["tag:building=road_amenities"]="Facilities for Transportation (Stations, Terminals, Toll Booths, ...)";
#$lang_str["tag:building=nature_building"]="Natural Buildings (e.g. Barriers)";
#$lang_str["tag:building=industrial"]="Industrial Buildings";
#$lang_str["tag:building=education"]="Educational Buildings";
$lang_str["tag:building=shop"]="Магазины";
#$lang_str["tag:building=public"]="Public Buildings";
#$lang_str["tag:building=military"]="Military Buildings";
#$lang_str["tag:building=historic"]="Historical Buildings";
#$lang_str["tag:building=emergency"]="Buildings of emergency facilities";
#$lang_str["tag:building=health"]="Buildings of health services";
#$lang_str["tag:building=communication"]="Buildings for communication";
#$lang_str["tag:building=residential"]="Residential Buildings";
#$lang_str["tag:building=culture"]="Cultural Buildings";
#$lang_str["tag:building=tourism"]="Touristic Buildings";
#$lang_str["tag:building=sport"]="Buildings for sport activities";

// cables
$lang_str["tag:cables"]="Кабели";

// cuisine
#$lang_str["tag:cuisine"]="Cuisine";
#$lang_str["tag:cuisine=regional"]="regional";

// description
$lang_str["tag:description"]="Описание";

// domination
#$lang_str["tag:domination"]="Domination";

// food
#$lang_str["tag:food"]="Serves food";

// highway
#$lang_str["tag:highway"]=array("Highway", "Highways");
#$lang_str["tag:highway=motorway"]="Motorway";
#$lang_str["tag:highway=trunk"]="Trunk Road";
#$lang_str["tag:highway=primary"]="Primary Road";
#$lang_str["tag:highway=secondary"]="Secondary Road";
#$lang_str["tag:highway=tertiary"]="Tertiary Road";
#$lang_str["tag:highway=minor"]="Minor Road";
#$lang_str["tag:highway=service"]="Service Road";
#$lang_str["tag:highway=pedestrian"]="Pedestrian Zone";
#$lang_str["tag:highway=track"]="Track";
#$lang_str["tag:highway=path"]="Path";

// is_in
#$lang_str["tag:is_in"]="Is in";

// landuse
$lang_str["tag:landuse=park"]="Парк";
#$lang_str["tag:landuse=education"]="Area of educational facilities";
#$lang_str["tag:landuse=tourism"]="Area of touristic facilities";
#$lang_str["tag:landuse=garden"]="Farms, Plantages, Gardens";
#$lang_str["tag:landuse=industrial"]="Industrial and Railway Areas";
#$lang_str["tag:landuse=sport"]="Areas of sport facilities";
#$lang_str["tag:landuse=cemetery"]="Cemeteries";
#$lang_str["tag:landuse=residental"]="Residental areas";
#$lang_str["tag:landuse=nature_reserve"]="Nature Reserves";
#$lang_str["tag:landuse=historic"]="Areas with historical value";
#$lang_str["tag:landuse=emergency"]="Areas of emergency facilities";
#$lang_str["tag:landuse=health"]="Areas of health facilities";
#$lang_str["tag:landuse=public"]="Areas for public services";
#$lang_str["tag:landuse=water"]="Water Areas";
// the following tags are deprecated
#$lang_str["tag:landuse=natural|sub_type=t0"]="Woods and Forest";
#$lang_str["tag:landuse=natural|sub_type=t1"]="Wetland";
#$lang_str["tag:landuse=natural|sub_type=t2"]="Glaciers";
#$lang_str["tag:landuse=natural|sub_type=t3"]="Screes, Heaths";
#$lang_str["tag:landuse=natural|sub_type=t4"]="Mud";
#$lang_str["tag:landuse=natural|sub_type=t5"]="Пляжи";

// leisure
$lang_str["tag:leisure=sports_centre"]="Спортивный центр";
$lang_str["tag:leisure=golf_course"]="Курсы гольфа";
$lang_str["tag:leisure=stadium"]="Стадион";
$lang_str["tag:leisure=track"]="Трек";
#$lang_str["tag:leisure=pitch"]="Pitche";
#$lang_str["tag:leisure=water_park"]="Water Park";
#$lang_str["tag:leisure=marina"]="Marina";
#$lang_str["tag:leisure=slipway"]="Slipway";
$lang_str["tag:leisure=fishing"]="Рыбалка";
#$lang_str["tag:leisure=nature_reserve"]="Nature Reserve";
#$lang_str["tag:leisure=park"]="Leisure Park";
$lang_str["tag:leisure=playground"]="Игровая площадка";
$lang_str["tag:leisure=garden"]="Сад";
#$lang_str["tag:leisure=common"]="Common";
$lang_str["tag:leisure=ice_rink"]="Ледовый каток";
$lang_str["tag:leisure=miniature_golf"]="Мини-гольф";
$lang_str["tag:leisure=swimming_pool"]="Бассейн";
$lang_str["tag:leisure=beach_resort"]="Пляжный курорт";
#$lang_str["tag:leisure=bird_hide"]="Bird Hide";
$lang_str["tag:leisure=sport"]="Другой спорт";

// name
#$lang_str["tag:name"]=array("Name", "Namen");

// network
#$lang_str["tag:network"]="Network";

// note
$lang_str["tag:note"]="Заметка";

// old_name
$lang_str["tag:old_name"]="Старое(-ые) имя(-ена)";

// opening_hours
$lang_str["tag:opening_hours"]="Часы работы";

// operator
$lang_str["tag:operator"]="Оператор";

// place
#$lang_str["tag:place"]="Place";
$lang_str["tag:place=continent"]=array("Континент", "Континенты");
$lang_str["tag:place=country"]=array("Страна", "Страны");
$lang_str["tag:place=state"]=array("Штат", "Штаты");
$lang_str["tag:place=region"]=array("Регион", "Регионы");
#$lang_str["tag:place=county"]=array("County", "Counties");
$lang_str["tag:place=city"]=array("Город", "Города");
#$lang_str["tag:place=town"]="Город";
$lang_str["tag:place=village"]=array("Деревни", "Деревня");
#$lang_str["tag:place=suburb"]=array("Suburb", "Suburbs");
#$lang_str["tag:place=locality"]=array("Locality", "Localities");
#$lang_str["tag:place=island"]=array("Island", "Islands");
#$lang_str["tag:place=islet"]=array("Islet", "Islets");
// the following tags are deprecated
#$lang_str["tag:place=city;population>1000000"]=array("City, > 1 Mio Inhabitants", "Cities, > 1 Mio Inhabitants");
#$lang_str["tag:place=city;population>200000"]=array("City, > 200.000 Inhabitants", "Cities, > 200.000 Inhabitants");
#$lang_str["tag:place=town"]="Town";
#$lang_str["tag:place=town;population>30000"]=array("Town, > 30.000 Inhabitants", "Towns, > 30.000 Inhabitants");

// population
$lang_str["tag:population"]="Популяция";
$tag_type["population"]=array("count");

// power
#$lang_str["tag:power"]="Power";
#$lang_str["tag:power=generator"]="Power Generator";
#$lang_str["tag:power=line"]="Power Line";
#$lang_str["tag:power=tower"]="Power Tower";
#$lang_str["tag:power=pole"]="Power Pole";
#$lang_str["tag:power=station"]="Power Station";
#$lang_str["tag:power=sub_station"]="Power Substation";

// power_source
#$lang_str["tag:power_source"]="Power source";
#$lang_str["tag:power_source=biofuel"]="Biofuel";
#$lang_str["tag:power_source=oil"]="Oil";
#$lang_str["tag:power_source=coal"]="Coal";
#$lang_str["tag:power_source=gas"]="Gas";
#$lang_str["tag:power_source=waste"]="Waste";
#$lang_str["tag:power_source=hydro"]="Hydro";
#$lang_str["tag:power_source=tidal"]="Tidal";
#$lang_str["tag:power_source=wave"]="Wave";
#$lang_str["tag:power_source=geothermal"]="Geothermal";
#$lang_str["tag:power_source=nuclear"]="Nuclear";
#$lang_str["tag:power_source=fusion"]="Fusion";
#$lang_str["tag:power_source=wind"]="Wind";
#$lang_str["tag:power_source=photovoltaic"]="Photovoltaic";
#$lang_str["tag:power_source=solar-thermal"]="Solar Thermal";

// real_ale
#$lang_str["tag:real_ale"]="Real ale offered";

// religion
#$lang_str["tag:religion"]="Religion";
$lang_str["tag:religion=christian"]="христианский";

// route
#$lang_str["tag:route=train"]="Train";
#$lang_str["tag:route=railway"]="Railway";
#$lang_str["tag:route=rail"]="Railway";
#$lang_str["tag:route=light_rail"]="Light Rail";
#$lang_str["tag:route=subway"]="Subway";
#$lang_str["tag:route=tram"]="Tram";
#$lang_str["tag:route=trolley"]="Trolley";
#$lang_str["tag:route=trolleybus"]="Trolley";
#$lang_str["tag:route=bus"]="Bus";
#$lang_str["tag:route=minibus"]="Minibus";
#$lang_str["tag:route=ferry"]="Ferry";
#$lang_str["tag:route=road"]="Road";
#$lang_str["tag:route=bicycle"]="Bicycle";
#$lang_str["tag:route=hiking"]="Hiking";
#$lang_str["tag:route=mtb"]="Mountainbike";

// route_type
// the following tags are deprecated
#$lang_str["tag:route_type"]="Route type";

// shop
$lang_str["tag:shop"]="Магазин";

// sport
$lang_str["tag:sport"]="Спорт";
$lang_str["tag:sport=9pin"]="Боулинг (9-ти кеглевый)";
$lang_str["tag:sport=10pin"]="Боулинг (10-ти кеглевый)";
$lang_str["tag:sport=archery"]="Стрельба из лука";
$lang_str["tag:sport=athletics"]="Атлетика";
$lang_str["tag:sport=australian_football"]="Австралийский футбол";
$lang_str["tag:sport=baseball"]="Бейсбол";
$lang_str["tag:sport=basketball"]="Баскетбол";
$lang_str["tag:sport=beachvolleyball"]="Пляжный воллейбол";
#$lang_str["tag:sport=boules"]="Boules";
#$lang_str["tag:sport=bowls"]="Bowls";
$lang_str["tag:sport=canoe"]="Каноэ";
$lang_str["tag:sport=chess"]="Шахматы";
$lang_str["tag:sport=climbing"]="Скалолазанье";
$lang_str["tag:sport=cricket"]="Крикет";
#$lang_str["tag:sport=cricket_nets"]="Cricket Nets";
$lang_str["tag:sport=croquet"]="Крокет";
$lang_str["tag:sport=cycling"]="Велоспорт";
$lang_str["tag:sport=diving"]="Дайвинг";
$lang_str["tag:sport=dog_racing"]="Собачьи бега";
$lang_str["tag:sport=equestrian"]="Конный спорт";
$lang_str["tag:sport=football"]="Футбол";
$lang_str["tag:sport=golf"]="Гольф";
$lang_str["tag:sport=gymnastics"]="Гимнастика";
$lang_str["tag:sport=hockey"]="Хоккей";
$lang_str["tag:sport=horse_racing"]="Лошадиные бега";
$lang_str["tag:sport=korfball"]="Корфбол";
#$lang_str["tag:sport=motor"]="Motor";
#$lang_str["tag:sport=multi"]="Multi";
$lang_str["tag:sport=orienteering"]="Спортивное ориентирование";
#$lang_str["tag:sport=paddle_tennis"]="Paddle Tennis";
$lang_str["tag:sport=paragliding"]="Парапланеризм";
$lang_str["tag:sport=pelota"]="Пелота";
#$lang_str["tag:sport=racquet"]="Racquet";
$lang_str["tag:sport=rowing"]="Гребля";
$lang_str["tag:sport=rugby"]="Регби";
$lang_str["tag:sport=shooting"]="Стрельба";
$lang_str["tag:sport=skating"]="Конькобежный спорт";
$lang_str["tag:sport=skateboard"]="Скейтборд";
$lang_str["tag:sport=skiing"]="Лыжный спорт";
$lang_str["tag:sport=soccer"]="Футбол";
$lang_str["tag:sport=swimming"]="Плавание";
$lang_str["tag:sport=table_tennis"]="Настольный теннис";
$lang_str["tag:sport=team_handball"]="Гандбол";
$lang_str["tag:sport=tennis"]="Теннис";
$lang_str["tag:sport=volleyball"]="Воллейбол";

// vending
#$lang_str["tag:vending"]="Vending";

// voltage
#$lang_str["tag:voltage"]="Voltage";
$tag_type["voltage"]=array("number", "V", "V");

// wires
#$lang_str["tag:wires"]="Wires";
$tag_type["wires"]=array("count");

// website
#$lang_str["tag:website"]="Website";
$tag_type["website"]=array("link");


