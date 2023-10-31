-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                11.1.2-MariaDB-1:11.1.2+maria~ubu2204 - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Versie:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumpen data van tabel website.page: ~17 rows (ongeveer)
INSERT INTO `page` (`ID`, `Titel`, `Tekst1`, `Tekst2`, `imgPath1`, `imgPath2`, `kleur`) VALUES
	(1, 'Einde aan de armoede', 'Einde aan de armoede gaat over het verminderen van alle vormen van armoede. De SDG-agenda vraagt speciale aandacht voor sociale bescherming, gelijke economische rechten en weerbaarheid van arme en kwetsbare groepen. Omdat armoede in Nederland er anders uit ziet dan armoede in de armste landen van de wereld is dit voor Nederland aangepast. Nederland richt zich op het voorkomen en tegengaan van armoede en problematische schulden, met speciale aandacht voor kinderen die in armoede leven.', 'Tegen SDG 1 (Geen armoede) kan je dit doen: Draag bij aan lokale liefdadigheidsinstellingen door geld of tijd te doneren, neem deel aan gemeenschapsprojecten die gericht zijn op armoedebestrijding en werk aan het vergroten van bewustwording over armoedekwesties.', 'img/sdg1.svg', 'img/sdg-foto1.webp', '#FF0000'),
	(2, 'Einde aan de honger', 'Einde aan de honger gaat over het doel honger te beëindigen, voedselzekerheid te garanderen en betere voeding en duurzame landbouw te stimuleren. Omdat in Nederland ondervoeding en voedselonzekerheid niet vaak voorkomen, kijken we ook wel naar obesitas, overvoeding en hoe wij voedsel produceren: hoe duurzaam doen we dat? En welk impact heeft dat op de leefomgeving. Ook voedselverspilling tegengaan hoort hierbij.', 'Tegen SDG 2 (Geen honger) kan je dit doen: Verspil minder voedsel door zorgvuldig in te kopen en te koken, steun lokale boerenmarkten en boerderijen, en doneer voedsel of tijd aan voedselbanken en voedselhulpprojecten.', 'img/sdg2.svg', 'img/sdg-foto2.webp', '#EDAA10'),
	(3, 'Goede gezondheid en welzijn', 'Goede gezondheid en welzijn gaat over dat iedereen de kans heeft in zo goed mogelijke gezondheid te leven, door behandeling van ziektes en psychische problemen en voorkomen dat mensen te vroeg sterven. Dit doel gaat ook over het tegengaan van verslaving ( alcohol, drugs, roken) en ook over het voorkomen van verkeersdoden.', 'Tegen SDG 3 (Goede gezondheid en welzijn) kan je dit doen: Houd een gezonde levensstijl aan door regelmatig te bewegen en evenwichtig te eten, doneer bloed om levens te redden, en ondersteun medische organisaties met vrijwilligerswerk of donaties.', 'img/sdg3.svg', 'img/sdg-foto3.webp', '#00A000'),
	(4, 'Kwaliteitsonderwijs', 'Kwaliteitsonderwijs gaat over dat iedereen toegang heeft tot goed onderwijs. Passende en scholing is voor alle leeftijdsgroepen en in alle levensfasen van belang, van kleuter- en basisonderwijs tot beroeps- en hoger onderwijs, en daarna via ‘leven lang ontwikkelen’. Vaardigheden van leerlingen worden voor een groot deel bepaald door de kwaliteit van het aangeboden onderwijs. Bovendien zorgt onderwijs ervoor dat de bevolking nu en in de toekomst over de goede vaardigheden beschikt om te functioneren in een kennismaatschappij en goed kunnen meedraaien in de maatschappij.', 'Tegen SDG 4 (Kwaliteitsonderwijs) kan je dit doen: Bied vrijwillige bijlessen of mentorship aan, doneer boeken of schoolbenodigdheden aan kansarme gemeenschappen, en pleit voor inclusieve onderwijsmogelijkheden.', 'img/sdg4.svg', 'img/sdg-foto4.webp', '#DA0822'),
	(5, 'Gendergelijkheid', 'Mannen en vrouwen moeten gelijk behandeld worden en een gelijkwaardige plek in de samenleving hebben. Hiervoor moet een eind komen aan achterstand van vooral vrouwen en meisjes op allerlei gebieden, waaronder dwang en geweld, werk en zorg, maar ook invloed in het openbare leven.', 'Tegen SDG 5 (Gendergelijkheid) kan je dit doen: Ondersteun organisaties die zich inzetten voor gendergelijkheid, pleit voor gelijke beloning op de werkplek, en moedig de deelname van vrouwen aan leiderschapsposities aan.', 'img/sdg5.svg', 'img/sdg-foto5.webp', '#FF4000'),
	(6, 'Schoon water en sanitair', 'De toegang tot drinkwater en sanitair en duurzaam beheer van water vormen de kern van SDG 6. Vrijwel iedereen in Nederland heeft toegang tot schoon drinkwater en goed sanitair. Drinkwater moet betaalbaar blijven voor ons allemaal. De vraag naar drinkwater is tijdens de afgelopen droge en hete zomers gestegen. Ook de groeiende bevolking en de behoefte aan meer woningen, en daarmee meer aansluitingen, zorgen voor meer vraag. Omdat er weinig mogelijkheden zijn om meer water te winnen, concurreren drinkwaterbedrijven steeds vaker met de belangen van natuur, landbouw en klimaatactie. Als er vaker droge zomers vaker voorkomen, kan de leveringszekerheid van drinkwater op termijn onder druk komen.', 'Tegen SDG 6 (Schoon water en sanitair) kan je dit doen: Conserveer water in huis door bewust watergebruik, steun projecten voor schoon drinkwater in ontwikkelingslanden en vermijd het lozen van schadelijke stoffen in waterlichamen.', 'img/sdg6.svg', 'img/sdg-foto6.webp', '#00AED9'),
	(7, 'Betaalbare en schone energie', 'Energiezekerheid, verduurzaming en energie-efficiëntie zijn erg belangrijk. Steeds minder mensen hebben de mogelijkheid om voldoende energie te gebruiken omdat het heel duur is geworden. In koude winters gebruiken veel mensen daarom extra dikke kleding en dekens om lekker warm te blijven en de kachel een beetje kouder te zetten.', 'Tegen SDG 7 (Betaalbare en schone energie) kan je dit doen: Installeer zonne-energiepanelen op je woning, verminder energieverspilling door efficiënt gebruik van elektriciteit, en pleit voor het gebruik van schone energiebronnen.', 'img/sdg7.svg', 'img/sdg-foto7.webp', '#FDBE00'),
	(8, 'Waardig werk en economische groei', 'Economische groei, met aandacht voor innovatie, ondernemerschap en milieu is erg belangrijk voor een duurzame wereld. Economische activiteiten kunnen op lange termijn schadelijk zijn voor de brede welvaart, de leefomgeving en het welbevinden van de mensen en dieren. Voor de productie van goederen en diensten is input nodig van kapitaal, arbeid en grondstoffen. Worden deze duurzaam en productief ingezet? En hoe worden de winsten en inkomens verdeeld worden over burgers en bedrijven?', 'Tegen SDG 8 (Waardig werk en economische groei) kan je dit doen: Koop ethische producten, steun fair trade-initiatieven, en mentor jongeren om hun carrière en ondernemerschap te bevorderen.', 'img/sdg8.svg', 'img/sdg-foto8.webp', '#9F0830'),
	(9, 'Industrie, innovatie en infrastructuur', 'Infrastructuur en mobiliteit, industrie en duurzame bedrijvigheid, en kennis en innovatie zijn belangrijk in een duurzame wereld. Een toegankelijke infrastructuur en mobiliteit voor iedereen. Mobiliteit en infrastructuur helpen mensen om van plek a naar plek b te komen, bijvoorbeeld naar het werk, contacten te onderhouden en vrije tijd in te vullen met sport, muziek of theater. Als mensen lang in de file staan dan is dat nadelig voor het milieu en wanneer mensen te hard rijden dan gaat het niet goed met de verkeersveiligheid en het milieu.', 'Tegen SDG 9 (Industrie, innovatie en infrastructuur) kan je dit doen: Stimuleer innovatie door ideeën te delen en start-ups te ondersteunen, en pleit voor duurzame infrastructuurprojecten in je gemeenschap.', 'img/sdg9.svg', 'img/sdg-foto9.webp', '#FF6919'),
	(10, 'Ongelijkheidsvermindering', 'Sociale samenhang is onmisbaar voor het goed functioneren van een samenleving. De sociale infrastructuur – familie, buren, vrienden, verenigingen en hulp en ondersteuning – vormt hiervan de basis. Mensen moeten mee kunnen doen, zodat ze zich deel van een groep kunnen voelen. Dat geld ook voor mensen uit andere landen die hier komen werken.', 'Tegen SDG 10 (Ongelijkheidsvermindering) kan je dit doen: Steun organisaties die zich richten op sociale rechtvaardigheid, vrijwilligerswerk bij lokale gemeenschapscentra, en pleit voor eerlijke wetgeving om ongelijkheid te verminderen.', 'img/sdg10.svg', 'img/sdg-foto10.webp', '#FF006E'),
	(11, 'Duurzame steden en gemeenschappen', 'Er zijn weinig betaalbare woningen beschikbaar, hoe houden we de lokale leefomgeving veilig, betaalbaar, toegankelijk en duurzaam? Hoeveel ruimte is er per persoon beschikbaar en hoe gaat het met de afvalverwerking en overheidsuitgaven voor het milieu. Een schone en veilige leefomgeving in het dorp, de wijk of de stad is daarbij erg belangrijk.', 'Tegen SDG 11 (Duurzame steden en gemeenschappen) kan je dit doen: Neem deel aan lokale planning en milieuprojecten, bevorder het gebruik van openbaar vervoer, en verminder je eigen ecologische voetafdruk.', 'img/sdg11.svg', 'img/sdg-foto11.webp', '#F9B000'),
	(12, 'Verantwoorde consumptie en productie', 'Bedrijven, overheid en consumenten worden aangespoord om bewuste keuzes te maken om de druk op het milieu te verlagen en de minder afhankelijk te zijn van grondstoffen. Zo beperken we de negatieve gevolgen van ons consumptie voor volgende generaties.', 'Tegen SDG 12 (Verantwoorde consumptie en productie) kan je dit doen: Koop duurzame producten, recycleer, en verminder afval door bewust te consumeren en te hergebruiken.', 'img/sdg12.svg', 'img/sdg-foto12.webp', '#F08700'),
	(13, 'Klimaatactie', 'Door doelen te stellen voor weerbaarheid en klimaatadaptatie, nationaal klimaatbeleid, en middelen om bewustwording en draagvlak te creëren voor de klimaatmaatregelen. Met het Deltaprogramma, dat Nederland moet beschermen tegen overstromingen en de gevolgen van extreem weer, kunnen we belangrijke stappen maken. Ook de vermindering van uitstoot van broeikasgassen, waarbij energiebesparing en hernieuwbare energie spelen een belangrijke rol.', 'Tegen SDG 13 (Klimaatactie) kan je dit doen: Verminder je eigen koolstofvoetafdruk door energie-efficiëntie, duurzaam reizen en het verminderen van afval, en steun organisaties die zich inzetten voor klimaatverandering.', 'img/sdg13.svg', 'img/sdg-foto13.webp', '#379223'),
	(14, 'Leven in het water', 'Zeewater bedekt ongeveer driekwart van de planeet en vormt het grootste ecosysteem ter wereld. De toenemende negatieve effecten van klimaatverandering, overbevissing en vervuiling vormen een bedreiging voor de waarde van het ecosysteem zelf en voor het gebruik dat ervan gemaakt wordt. Aandacht voor de waterkwaliteit en de duurzaamheid van de visserij in de Noordzee zijn voor ons erg belangrijk.', 'Tegen SDG 14 (Leven in het water) kan je dit doen: Verminder plastic afval en milieuvervuiling, ondersteun mariene beschermingsorganisaties, en doe mee aan opruimacties langs stranden en waterwegen.', 'img/sdg14.svg', 'img/sdg-foto14.webp', '#0D81DF'),
	(15, 'Leven op het land', 'Bescherming en herstel van ecosystemen en biodiversiteit versterken de weerbaarheid tegen toenemende bevolkingsdruk, intensivering van landgebruik en klimaatverandering. Gezonde ecosystemen zijn erg belangrijk zoals de beschikbaarheid van schoon water en schone lucht, de aanwezigheid van insecten voor bestuiving en de mogelijkheden voor ontspanning, recreatie en educatie.', 'Tegen SDG 15 (Leven op het land) kan je dit doen: Plant bomen, onderhoud natuurreservaten en steun initiatieven voor natuurbehoud om ecosystemen te beschermen.', 'img/sdg15.svg', 'img/sdg-foto15.webp', '#56C739'),
	(16, 'Vrede, justitie en sterke instellingen', 'Voor veiligheid en vrede moeten alle vormen van geweld en de sterfte die daarvan het gevolg is verminderd worden. Speciale aandacht gaat uit naar geweld tegen kinderen en naar georganiseerde misdaad. In een veilige samenleving heeft iedereen toegang tot het rechtssysteem, en wordt corruptie tegengegaan. Het ervaren van onveiligheid, met gevoelens van kwetsbaarheid en onzekerheid kunnen een grote impact hebben op het persoonlijke leven.', 'Tegen SDG 16 (Vrede, justitie en sterke instellingen) kan je dit doen: Word actief in lokale gemeenschapsorganen, ondersteun organisaties die zich richten op mensenrechten en sociale gerechtigheid, en pleit voor eerlijke wetshandhaving en rechtsstaat.', 'img/sdg16.svg', 'img/sdg-foto16.webp', '#0E559C'),
	(17, 'Partnerschappen voor de doelen', 'Dit vraagt om samenhangend beleid, een meewerkende omgeving en de bereidheid tot aangaan van nieuwe partnerschappen. Met wie werk je samen en waarom? Het gaat er bij dit doel om welk effect ontwikkelingen in Nederland op andere landen hebben.', 'Tegen SDG 17 (Partnerschappen voor de doelen) kan je dit doen: Werk samen met lokale, nationale en internationale organisaties, neem deel aan burgerinitiatieven en steun projecten voor mondiale ontwikkeling om partnerschappen te versterken en de implementatie van de SDGs te bevorderen.', 'img/sdg17.svg', 'img/sdg-foto17.webp', '#362397');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;