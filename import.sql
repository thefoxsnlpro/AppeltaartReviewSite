DROP DATABASE IF EXISTS appeltaart;
CREATE DATABASE appeltaart;

USE appeltaart;

CREATE TABLE IF NOT EXISTS review (
    reviewID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam varchar(255) NOT NULL,
    datum varchar(20) NOT NULL,
    appeltaarten int(5) NOT NULL,
    plaats varchar(200) NOT NULL,
    restaurant varchar(200) NOT NULL,
    review varchar(255) NOT NULL,
    koffie int(5) NOT NULL
)


/*
Test Informatie: De goede

INSERT INTO review (gebruikersnaam, datum, appeltaarten, plaats, restaurant, review, koffie) VALUES 
('Bram','30-08-23', 4, 'Alkmaar', 'wijkwaard', 'Super goeie appeltaart en koffie', 2),
('Damien', '24-04-24', 2, 'Alkmaar', 'Bakkerok Koning B.V.', 'Hele fanatastische appeltaart. Heel lekker', 4),
('Daan', '11-11-23', 5, 'Alkmaar', 'Lidl Koedijk', 'Koffie', 4),
('Ruben ', '12-07-20', 1, 'Limmen', 'Alberthein', 'Fantastische baltablud', 4),
('Thijn', '9-06-22', 5, 'Obdam', 'Alberthein', 'Fantastische baltablud', 5);

*/