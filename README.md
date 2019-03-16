# CHM - Computer Hardware Market
>When Quality Matters

**Gruppmedlemmar:**
Jesper\ 
Johan\ 
Samer\ 
Tuy-Vi\

*Binero länk*

**Admin login:**\
Username: admin\
Password: secret\

# Kravspecifikation på projektet: 

**Alla sidor skall vara responsiva. (G)**\
Vi har arbetat med bootstrap för att få sidan så responsiv som möjligt.

**Arbetet ska implementeras med objektorienterade principer. (G)**\
ÅTERKOMMER

**Skapa ett konceptuellt ER diagram, detta ska lämnas in vid idégodkännandet G)**\
Vårat första diagram som godkändes vid första inlämningsfasen, som vi sedan har modifierat något.

**Beskriv er företagsidé i en kort textuell presentation, detta ska lämnas in vid idégodkännandet (G)**\
Detta gjorde vi i samband med presentationen av diagrammet.

**All data som programmet utnyttjar ska vara sparat i en MYSQL databas (produkter, beställningar, konton mm) (G)**\
Vi sparar all data i våran databas "chmgrupp".

**Det ska finnas ett normaliserat diagram över databasen i gitrepot G)**\
Finns under mappen "database-diagram"

**Man ska kunna logga in som administratör i systemet (G)**\
Funkar utmärkt. En user som är admin och loggar in tas automatiskt till admin dashboarden.

**Man ska kunna registrera sig som administratör på sidan, nya användare ska sparas i databasen (VG)**\
Vi har inte lagt in någon funktion för admin reg. Däremot sparas nya användare i databasen.

**En administratör behöver godkännas av en tidigare administratör innan man kan logga in fösta gången (VG)**\
Inte uppnåt

**Inga Lösenord får sparas i klartext i databasen (G)**\
Lösenord sparas som en hash

**En besökare ska kunna beställa produkter från sidan, detta ska uppdatera lagersaldot i databasen (G)**\
ÅTERKOMMER

**Administratörer ska kunna se en lista på alla gjorda beställningar (G)**\
ÅTERKOMMER

**Administratörer ska kunna markera beställningar som skickade (VG)**\
Inte uppnåt

**Sidans produkter ska delas upp i kategorier, en produkt ska tillhöra minst en kategori, men kan tillhöra flera (G)**\
Vi har just nu fyra produkter per kategori. 

**Från hemsidan ska man kunna se en lista över alla produkter, och man ska kunna lista bara dom produkter som tillhör en kategori (G)**\
Det finns olika kategorier och när man klickar på en av dem så får man värdet som är kopplat till databasen och visar tillhörande produkter till den kategori man valt.


**Besökare ska kunna lägga produkterna i en kundkorg, som är sparad i session på servern (G)**\
Produkterna sparas i en session och printas ut på cartPage.php

**Man ska från hemsidan kunna skriva upp sig för att få butikens nyhetsbrev genom att ange sitt namn och epostadress (G)**\
I våran footer finns en knapp för att skriva upp sig. Är man en inloggad kund sparas namn automatiskt i formuläret.

**När man gör en beställning ska man också få chansen att skriva upp sig för nyhetsbrevet (VG)**\
När kunden trycker slutför köp har de ett alternativ att skriva upp sig.

**När besökare gör en beställning ska hen få ett lösenord till sidan där man kan logga in som kund (VG)**\
Inte uppnåt

**När man är inloggad som kund ska man kunna se sina gjorda beställning och om det är skickade eller inte (VG)**\
Inte uppnåt

**Som inloggad kund ska man kunna markera sin beställning som mottagen (VG)**\
Inte uppnåt

**Administratörer ska kunna se en lista över personer som vill ha nyhetsbrevet och deras epost adresser (G)**\
En lista går att hitta under fliken "nyhetsbrev" i dmin dashboarden.

**Besökare ska kunna välja ett av flera fraktalternativ (G)**\
Vi erbjuder antingen hemleverans eller hämta i butik när du slutför ett köp.

**Tillgängliga fraktalternativ ska vara hämtade från databasen (G)**\
ÅTERKOMMER

**Administratörer ska kunna redigera vilka kategorier en produkt tillhör (VG)**\
Inte uppnåt

**Administratörer ska kunna skicka nyhetsbrev från sitt gränssnitt, nyhetsbrevet ska sparas i databasen samt innehålla en titel och en brödtext (VG)**\
Inte uppnåt

**Administratörer ska kunna lägga till och ta bort produkter (VG)**\
Detta fungerar utmärkt och samtliga produkter i våran databas är tillagda via den här funktionen. Ta bort funkar också. 
