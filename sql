CREATE TABLE produkte (
    ID int NOT NULL AUTO_INCREMENT,
    Name varchar(255) NOT NULL,
    Preis int NOT NULL,
    Kategorie varchar(255) NOT NULL,
    Beschreibung varchar(255) NOT NULL,
    ImageSource varchar(255) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO produkte (
    Name,
    Preis,
    Kategorie,
    Beschreibung,
    ImageSource
)
VALUES
    (
        'Snack für Hunde, Dentalstick mit Minze, 80 g',
        1.65,
        'Tier',
        'Mit einem hohen Anteil an leckerer Hühnchenbrust und mit Minze sind diese Dentalsticks die perfekte Belohnung für Ihren Vierbeiner. Mit den Dein Bestes Dentalsticks mit Minze können Sie Ihren Hund auf angenehme Weise verwöhnen. Der hohe Anteil an leckerer Hühnchenbrust ist unwiderstehlich. Die extra zugesetzte Minze kann zudem zu einem frischeren Atem Ihres Hundes beitragen.',
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1638257413/products/pim/4058172640063-2968494/dein-bestes-snack-fuer-hunde-dentalstick-mit-minze'
    ),
    (
        'Shampoo Anti-Schuppen Classic clean, 500 ml',
        5.95,
        'Haare',
        'Das head & shoulders Classic Clean Anti-Schuppen Shampoo mit Aloe wurde entwickelt, um Ihr Haar und Ihre Kopfhaut mit Feuchtigkeit* zu versorgen – für bis zu 100% schuppenfreies Haar**. Die reichhaltige Formel mit natürlicher Aloe wirkt juckender***, fettiger und trockener Kopfhaut effektiv entgegen und bekämpft Schuppen, bevor sie zu sehen sind.'.
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1630639304/products/pim/8001841734316-2581902/head-und-shoulders-shampoo-anti-schuppen-classic-clean'
    ),    
    (
        'ImmunPro Kids, 15 St., 225 ml',
        7.95,
        'Gesundheit',
        'In Lebensphasen mit Wachstumsschüben oder bei Belastung durch Sport und Schule ist es besonders wichtig, dem Körper ausreichend Nährstoffe zuzuführen. Die in den Hübner ImmunPRO Kids enthaltene Kombination aus Calcium und Vitamin D wird für ein gesundes Wachstum und eine gesunde Entwicklung der Knochen bei Kindern benötigt. Vitamin C trägt zu einer normalen Funktion des Immunsystems bei',
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1565831763/products/pim/4010160000402-1916654/huebner-immunpro-kids-15-st'
    ),    
    (
        'Zucker, Gelierzucker 2:1 für 1kg Früchte, 500 g',
        2.65,
        'Ernährung',
        'Unser dmBio Gelierzucker eignet sich zur Zubereitung von Marmelade mit frischen sowie tiefgefrorenen Früchten oder purem Fruchtsaft.',
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1638257413/products/pim/4058172640063-2968494/dein-bestes-snack-fuer-hunde-dentalstick-mit-minze'
    ),    
    (
        'Snack für Hunde, Dentalstick mit Minze, 80 g',
        1.65,
        'Tier',
        'Mit einem hohen Anteil an leckerer Hühnchenbrust und mit Minze sind diese Dentalsticks die perfekte Belohnung für Ihren Vierbeiner. Mit den Dein Bestes Dentalsticks mit Minze können Sie Ihren Hund auf angenehme Weise verwöhnen. Der hohe Anteil an leckerer Hühnchenbrust ist unwiderstehlich. Die extra zugesetzte Minze kann zudem zu einem frischeren Atem Ihres Hundes beitragen.',
        'https://media.dm-static.com/images/f_auto,q_auto,c_fit,w_1200,h_1200/v1638257413/products/pim/4058172640063-2968494/dein-bestes-snack-fuer-hunde-dentalstick-mit-minze'
    )