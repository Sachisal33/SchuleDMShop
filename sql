CREATE DATABASE dmshop;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `products` (`name`, `code`,`category`,`description`, `price`, `image`) VALUES
    
        (
        'Badeöl Gesundheit Arnika Aktiv, 100 ml',
        'Badeöl',
        'Gesundheit',
        'Das Kneipp Gesundheitsbad Gelenke & Muskel Wohl mit dem Extrakt der Arnika und natürlichen ätherischen Ölen aus Cabreuva, Pinus-Arten und Rosmarin verhilft im Zusammenspiel mit dem warmen Wasser zu einer wohltuenden Wirkung für Gelenke und Muskeln. Das Bad wirkt wohltuend, wärmend und reaktivierend.',
        14.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1625021156/products/pim/4008233038438-2763367/kneipp-badeoel-gesundheit-arnika-aktiv'
    ), 
    (
        'Bart-Waschschaum, 150 ml',
        'Maennerpflege03',
        'Maennerpflege',
        'Der Balea MEN Wasch-Schaum für Bart und Gesicht bildet einen reichhaltigen, cremigen Schaum für eine gründliche Reinigung - jeden Tag. Er reinigt den Bart und die darunter liegende Haut gründlich. Die Barthaare fühlen sich weich an. Der Wasch-Schaum ist auch für die Gesichtsreinigung geeignet und befreit von überschüssigem Hauttalg und Schmutzpartikeln. Für einen gepflegten Bart!',
        2.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1585818855/products/pim/4058172187513-2114939/balea-men-bart-waschschaum'
    ), 
    (
        'Conditioner Feuchtigkeit, 250 ml',
        'Pflege01',
        'Pflegeundparfum',
        'Für glänzendes Haar und eine gepflegte Kopfhaut: Der Moisture Care Conditioner von Langhaarmädchen versorgt dein Haar mit intensiver Pflege. So erhält deine Langhaarpracht mehr Lebendigkeit und Geschmeidigkeit bis in die Spitzen. Die Rezeptur mit einer Kombination aus Bambuswasser, Ginkgo-Extrakt und Hyaluron sorgt für einen Feuchtigkeitskick. Rezeptur ohne Mikroplastik und wasserlösliche rein synthetische Polymere.',
        4.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1638340017/products/pim/4058172481901-2156215/langhaarmaedchen-conditioner-feuchtigkeit'
    ),
    (
        'Eau de Toilette Signature man, 50 ml',
        'Parfum01',
        'pflegeundparfum',
        'Ein Duft mit selbstbewusstem Ausdruck, der die Verführungskraft von energetischer Männlichkeit und lässigem Charme besitzt: Otto Kern Signature man Eau de Toilette wirkt stets als unaufdringlicher, aber dennoch exklusiver Begleiter. Mit der charakterstarken Kreation lässt sich eine stilvolle Lebensphilosophie unterstreichen.',
        13.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1624011371/products/pim/4011700837106-2691095/otto-kern-eau-de-toilette-signature-man'
    ), 
        (
        'Erste Hilfe für Babys und Kinder, 1 St',
        'Gesundheit02',
        'Gesundheit',
        'Mit diesem übersichtlichen Buch „Erste Hilfe für Babys und Kinder“ von Dorling Kindersley können Sie bei Symptomen wie Atemnot, Fieber oder Schmerzen schnell nachschlagen und Notfälle sofort und sicher erkennen. In detaillierten Schritt-für-Schritt-Anleitungen werden alle wichtigen Maßnahmen mit visuell einzigartigen Illustrationen anschaulich und leicht verständlich erklärt. Es ist das unentbehrliche Handbuch für alle Eltern. Dabei ist es auf dem neusten Stand der Notfallmedizin und entwickelt mit dem Malteser Hilfsdienst!
Auch ideal als Geschenk.',
        14.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1587787537/products/pim/9783831037186-1805867/dorling-kindersley-erste-hilfe-fuer-babys-und-kinder'
    ), 
    (
        'Fixierspray Make Up Setting Spray Matte Finish/Long Lasting 01, 60 ml',
        'Makeup02',
        'Makeup',
        'Für den perfekten Look: Das NYX Professional Makeup Fixierspray Make Up Setting Spray Matte Finish/Long Lasting 1 ist ein leichtes Make-up-Setting Spray, dass dafür sorgt, dass das Make-up den ganzen Tag hält und frisch wirkt.',
        7.85,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1626315349/products/pim/800897813710-1574497/nyx-professional-makeup-fixierspray-make-up-setting-spray-matte-finish-long-lasting-01'
    ), 
    (
        'Gemüsebrühe Nachfüllpack, glutenfrei, 290 g',
        'Ernaehrung03',
        'Ernaehrung',
        'Die dmBio Gemüsebrühe hefefrei im Glas ist beim Kochen vielseitig einsetzbar. Der intensive Geschmack von Gemüse und die Aromen feiner Kräuter verleihen der Brühe eine kräftige und würzige Note. Die Gemüsebrühe ist glutenfrei.',
        2.75,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1638399727/products/pim/4058172333354-2431468/dmbio-gemuesebruehe-nachfuellpack-glutenfrei'
    ),
    (
        'Haarmaske Unicorn, Hair Mask + Unicorn Cap, 20 ml',
        'haare05',
        'haare',
        'Die Bear Fruits Magische Feuchtigkeits-Haarmaske 20 ml kommt zusammen mit einer Unicorn-Haube daher und versorgt Ihr durstiges Haar bis in die Spitzen mit Feuchtigkeit. Einfach Haube aufziehen und wohlfühlen, während die Maske die Arbeit erledigt. Sie enthält Arganöl und Aloe Vera, verleiht Ihrem Haar einen Feuchtigkeitsboost und sorgt für wunderschön glänzende Locken. Genau wie eine Gesichtsmaske, nur für Ihre Haare.',
        6.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1635169091/products/pim/8006540155103-2777790/bear-fruits-haarmaske-unicorn-hair-mask-unicorn-cap'
    ), 
    (
        'Haaröl Oil Repair Intensiv, 100 ml',
        'haare04',
        'haare',
        'Das Balea Professional Oil Repair Intensiv Haaröl besitzt eine leistungsstarke Formel für ein spürbares & sichtbares Ergebnis und ist eine Soforthilfe zur Bändigung für widerspenstiges, stark geschädigtes Haar. Das Haaröl sorgt für gesundes, kräftiges und glänzendes Haar bis in die Spitzen. Zudem macht es Ihr Haar weich und geschmeidig Haar, ohne zu beschweren. Die Hautverträglichkeit ist dabei dermatologisch bestätigt.',
        2.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1638969401/products/pim/4058172830587-2592594/balea-professional-haaroel-oil-repair-intensiv'
    ), 
    (
        'Hydro Tuchmaske, 1 St',
        'Maennerpflege01',
        'Maennerpflege',
        'Die Balea MEN Tuchmaske spendet anspruchsvoller Männerhaut wertvolle Feuchtigkeit* und Pflege. Die Tuchmaske mit Kamillenextrakt, Aloe Vera und einem angenehmen Kühleffekt unterstützt die Hautberuhigung** Sie sorgt für ein erfrischtes, gut gepflegtes und entspanntes Hautgefühl** Dabei ist die Tuchmaske auch ideal nach der Rasur**.',
        1.25,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1578987034/products/pim/4058172329869-2077171/balea-men-hydro-tuchmaske'
    ), 
        (
        'ImmunPro Kids, 15 St., 225 ml',
        'KidsMeds01',
        'Gesundheit',
        'In Lebensphasen mit Wachstumsschüben oder bei Belastung durch Sport und Schule ist es besonders wichtig, dem Körper ausreichend Nährstoffe zuzuführen. Die in den Hübner ImmunPRO Kids enthaltene Kombination aus Calcium und Vitamin D wird für ein gesundes Wachstum und eine gesunde Entwicklung der Knochen bei Kindern benötigt. Vitamin C trägt zu einer normalen Funktion des Immunsystems bei',
        7.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1565831763/products/pim/4010160000402-1916654/huebner-immunpro-kids-15-st'
    ), 
    (
        'Pflanzendrink, Sojadrink ohne Zucker, 1 l',
        'Ernaehrung02',
        'Ernaehrung',
        'Bio, Glutenfrei, Laktosefrei, Ohne Aromastoffe, Ohne Farbstoffe, Ohne Konservierungsstoffe, Ohne Zuckerzusatz, Vegan',
        2.15,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1618822845/products/pim/5411188513513-2648425/provamel-pflanzendrink-sojadrink-ohne-zucker'
    ), 
    (
        'Priorin Kapseln, 120 St',
        'haare02',
        'haare',
        'Priorin unterstützt den Zellstoffwechsel der Haarwurzel mit einem Komplex aus speziellen Mikronährstoffen. Die Priorin Kapseln wirken auf der Basis natürlicher Inhaltsstoffe der Hirse in Kombination mit dem essentiellen Vitamin B5 (Pantothensäure) und dem Eiweißbaustein L-Cystin.',
        32.85,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1611111026/products/pim/2050000040306-843562/priorin-priorin-kapseln'
    ), 
    (
        'Reinigendes Handgel Magic Forest, 50 ml',
        'Pflege03',
        'pflegeundparfum',
        'Das zuverlässig reinigende Handgel Magic Forest von Balea trocknet die Hände nicht aus. Sie müssen es einfach nur in den Handflächen verreiben, damit es seine Wirkung entfaltet. Die Anwendung funktioniert ganz ohne Wasser und Seife.',
        1.95,
       'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1639485910/products/pim/4058172830907-2993788/balea-reinigendes-handgel-magic-forest'
    ), 
    (
        'Rasierklingen Revolution 5.1, 8 St',
        'Maennerpflege02',
        'Maennerpflege',
        'Die Balea MEN Rasierklingen Revolution 5.1 zeichnen sich durch einen Gleitstreifen mit Sheabutter und Jojobaöl aus. Dieser sorgt für ein optimales Gleiten der Klinge über die Haut – sicher und hautschonend.',
        8.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1628774600/products/pim/4058172631726-2447332/balea-men-rasierklingen-revolution-5-1'
    ), 
    (
        'Shampoo Anti-Schuppen Classic clean, 500 ml',
        'Shampoo01',
        'Haare',
        'Das head & shoulders Classic Clean Anti-Schuppen Shampoo mit Aloe wurde entwickelt, um Ihr Haar und Ihre Kopfhaut mit Feuchtigkeit* zu versorgen – für bis zu 100% schuppenfreies Haar**. Die reichhaltige Formel mit natürlicher Aloe wirkt juckender***, fettiger und trockener Kopfhaut effektiv entgegen und bekämpft Schuppen, bevor sie zu sehen sind.',
        5.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1630639304/products/pim/8001841734316-2581902/head-und-shoulders-shampoo-anti-schuppen-classic-clean'
    ),
    (
        'Snack für Hunde, Dentalstick mit Minze, 80 g',
        'DogSnack01',
        'Tier',
        'Mit einem hohen Anteil an leckerer Hühnchenbrust und mit Minze sind diese Dentalsticks die perfekte Belohnung für Ihren Vierbeiner. Mit den Dein Bestes Dentalsticks mit Minze können Sie Ihren Hund auf angenehme Weise verwöhnen. Der hohe Anteil an leckerer Hühnchenbrust ist unwiderstehlich. Die extra zugesetzte Minze kann zudem zu einem frischeren Atem Ihres Hundes beitragen.',      
        1.65, 
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1638257413/products/pim/4058172640063-2968494/dein-bestes-snack-fuer-hunde-dentalstick-mit-minze'
    ), 
    (
        'Tagescreme Getönt Teint Perfektion Magic Teint, 50 ml',
        'Pflege02',
        'pflegeundparfum',
        'Zauberhaft schöne Haut: Die Balea Teint Perfektion Magic Teint Creme verleiht einen optimierten Teint. Sie begeistert mit ihrem Soft-Make-up Effekt durch hauttonanpassende Mikro-Kapseln. So werden beim Verreiben auf der Haut Tönungspigmente freigesetzt, die den Teint natürlich erstrahlen lassen. Hautrötungen und Unebenheiten werden sofort kaschiert. Die Pflegeformulierung mit MYRAMAZE® versorgt Ihre Haut intensiv mit Feuchtigkeit* und verbessert die Hautqualität sichtbar**. Zudem wird die Hautbeschaffenheit optimiert und Poren wirken verfeinert**.',
        5.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1606825417/products/pim/4058172187414-2089255/balea-tagescreme-getoent-teint-perfektion-magic-teint'
    ), 
    (
        'Trockenfutter für Katzen, Adult, mit Lachs & Weissfisch, 0,75 kg',
        'Catfood01',
        'Tier',
        'Das CRAVE™ Trockenfutter für Katzen Adult mit Lachs & Weissfisch besteht aus mindestens 60% tierischen Zutaten. Denn proteinreiche Nahrung liefert die Nährstoffe für eine starke, gesunde Katze und versorgt sie mit ausreichend Energie. Darum werden alle CRAVE™ Rezepturen stets mit hochwertigen tierischen Proteinen gefertigt. Das Trockenfutter enthält kein Getreide, keinen Mais, keinen Weizen, kein Soja und keine Molkereierzeugnisse.',
        4.89,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1634866031/products/pim/4008429114649-2923168/crave-trockenfutter-fuer-katzen-adult-mit-lachs-und-weissfisch'
    ),
    (
        'Trockenfutter für Katzen, sensitive mit Truthahn, 750 g',
        'Catfood02',
        'Tier',
        'Das sensitive 1+ Katzenfutter von Perfect Fit ist das perfekte Trockenfutter für Ihre Samtpfote! Das Futter ist reich an Truthahn und wurde speziell auf die Bedürfnisse von empfindlichen Katzen abgestimmt. Dank der schmackhaften Rezeptur ohne Weizen und Soja ist das Futter besonders gut verträglich. Mit der innovativen Total 5-Formel kann das Futtermittel zudem die Abwehrkräfte, Harnwege, Verdauung, Fell und Haut sowie die Gewichtskontrolle Ihres Tieres unterstützen. Das perfekte Futter für Ihren Liebling!',
        4.89,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1631000755/products/pim/4008429088711-2564115/perfect-fit-trockenfutter-fuer-katzen-sensitive-mit-truthahn'
    ),
    (
        'Trockenshampoo helles Haar, 200 ml',
        'haare03',
        'haare',
        'Für Zwischendurch und auf Reisen: Das Balea Trockenshampoo helles Haar ist die ideale Trockenwäsche zwischen den normalen Haarwäschen! Die Frisur ist anschließend von Grund auf erfrischt und hat wieder Fülle. Ganz ohne Wasser und Föhnen zu neuem Volumen und Schwung! Rezeptur ohne Mikroplastik und wasserlösliche rein synthetische Polymere.',
        1.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1638969397/products/pim/4058172488269-2466066/balea-trockenshampoo-helles-haar'
    ), 
    (
        'Wimperntusche Lash Sensational Sky High Mascara Very Black, 7,2 ml',
        'Makeup03',
        'Makeup',
        'Die Lash Sensational Sky High Mascara von Maybelline New York sorgt für extreme Länge und volles Wimpernvolumen. Dank der Formel mit Bambusextrakt und Fasern, wirken die Wimpern gestärkt und gewinnen zudem optisch an Länge. Durch die innovative Tower Flex Bürste wird zudem jede Wimper einzeln, vom Ansatz an, mit der innovativen Formel umhüllt, wodurch die Wimpern länger und voluminöser wirken. Für intensiv verlängert wirkende Wimpern den ganzen Tag.',
        10.95,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1624673249/products/pim/30166967-2479714/maybelline-new-york-wimperntusche-lash-sensational-sky-high-mascara-very-black'
    ), 
    (
        'Zucker, Gelierzucker 2:1 für 1kg Früchte, 500 g',
        'Ernaehrung01',
        'Ernaehrung',
        'Unser dmBio Gelierzucker eignet sich zur Zubereitung von Marmelade mit frischen sowie tiefgefrorenen Früchten oder purem Fruchtsaft.',
        2.65,
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_500,h_440/v1638340019/products/pim/4058172457067-2215174/dmbio-zucker-gelierzucker-2-1-fuer-1kg-fruechte'
    )