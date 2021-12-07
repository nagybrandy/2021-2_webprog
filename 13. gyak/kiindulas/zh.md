# PHP évfolyam zh

## Tudnivalók

- A zárthelyi megoldására **120 perc** áll rendelkezésre. **További 30 perc**et adunk az alább olvasható `README.md` fájl kitöltésére, a feladatok elolvasására, az anyagok letöltésére, összecsomagolására és feltöltésére.
- A feladatokat a Canvas rendszeren keresztül kell beadni. **A rendszer pontban 18:30-kor lezár, ezután nincs lehetőség beadásra**.
- A feladatok megoldásához **bármilyen segédanyag használható** (dokumentáció, előadás, órai anyag, cheat sheet). A zh időtartamában igénybe vett **emberi segítség tilos** (szinkron, aszinkron, chat, fórum, stb)! Erről nyilatkoztok az alább olvasható `README.md` fájlban is, ahol tudomásul veszitek ennek következményeit.
- A feladatok nem épülnek egymásra, **tetszőleges sorrendben** megoldhatók.
- A feladatok megoldásához először [töltsd le az általunk készített keretprogramot](???). Ebben minden feladat külön könyvtárban helyezkedik el. Minden könyvtárban előkészítettük a feladatokat valamilyen mértékben. Ezeken kívül természetesen használhatsz más fájlokat is az adatok tárolására, a kódod további szervezésére, illetve a szerveroldali AJAX/Fetch funkcionalitás megvalósítására, de az alább megadott 4 néven kell hogy elérhetők legyenek a megoldásaid.
  ```
  1. feladat: f1/index.php
  2. feladat: f2/index.php
  3. feladat: f3/index.php
  4. feladat: f4/index.php
  ```
- A letöltött keretprogramban lévő `README.md` fájlban töltsétek ki a nevetek és a Neptun azonosítótokat (a <> jeleket nem kell beleírni)! **A megfelelően kitöltött `README.md` fájl nélkül a megoldást nem fogadjuk el!**
  ```txt
  <Hallgató neve> 
  <Neptun kódja> 
  Webprogramozás - számonkérés
  Ezt a megoldást a fent írt hallgató küldte be és készítette a Webprogramozás kurzus számonkéréséhez.
  Kijelentem, hogy ez a megoldás a saját munkám. Nem másoltam vagy használtam harmadik féltől 
  származó megoldásokat. Nem továbbítottam megoldást hallgatótársaimnak, és nem is tettem közzé. 
  Az Eötvös Loránd Tudományegyetem Hallgatói Követelményrendszere 
  (ELTE szervezeti és működési szabályzata, II. Kötet, 74/C. §) kimondja, hogy mindaddig, 
  amíg egy hallgató egy másik hallgató munkáját - vagy legalábbis annak jelentős részét - 
  saját munkájaként mutatja be, az fegyelmi vétségnek számít. 
  A fegyelmi vétség legsúlyosabb következménye a hallgató elbocsátása az egyetemről.
  ```
- Minden feladat könyvtárában találsz egy `TASKS.md` fájlt. Ezekben az egyes `[ ]` közötti szóközt cseréld le `x`-re azokra a részfeladatokra, amiket sikerült (akár részben) megoldanod! Ez segít nekünk abban, hogy miket kell néznünk az értékeléshez.

## 1. feladat: Alaprajz (8 pont)

Egy egyszerű ábra felülnézeti LEGO megvalósításához szükséges elemeket és pozíciójukat egy tömbben tároljuk. Rajzoljuk ki az alaprajzot!  A kódolás megkezdése előtt érdemes tanulmányozni és megérteni az `index.php` fájlban megadott adatok szerkezetét!

- a. (2 pont) A kiinduló `index.php` fájlban található adatok között meg van adva az alaprajz szélessége és magassága (`width`, `height`). Ezek alapján generálj táblázatot, amely ennek megfelelő mennyiségű sorból és oszlopból áll!
- b. (3 pont) Ha egy adott legódarab bal felső sarka (`x`, `y`) egy adott cellába esik, akkor színezd annak a cellának a háttérszínét (`background-color`) a legódarab színére (`colour`).
- c. (2 pont) Ha egy adott legódarab bal felső sarka (`x`, `y`) egy adott cellába esik, akkor vond össze megfelelő szélességben és magasságban a szomszédos cellákkal (`width`, `height`). A legódarabok között nincs átfedés.
- d. (1 pont) Az adott legódarabnak a keretszínét (`border`) is add meg 2px vastagságban!

## 2. feladat: Házhozszállítás (8 pont)

A LEGO szett megvásárlásakor biztosra kell menni, hogy jó házhozszállítási adatokkal rendeljük meg, mert szomorúak leszünk, ha a megrendelt készlet nem érkezik meg, mert elrontottuk a címet. Ha viszont jó a cím, akkor szeretnénk a szállítási költséget megtekinteni. 

Az oldalon elő van már készítve egy űrlap, amelyen keresztül az ellenőrizendő adatokat meg lehet adni. A feladatod ezeknek a GET kérésként érkező adatoknak az alábbi szabályoknak megfelelő ellenőrzése, hiba esetén a hibaüzenetek kiírása felsorolásként, helyes adatok esetén a szállítási költség meghatározása a kiválasztott szállítócég alapján, amelyhez a keretprogramban adva van egy név-ár összerendelés. A szabályok a következők:
- `delivery_company`: kötelező, csak a megadott tömbbeli értékeket veheti fel
- `postal_code`: kötelező, 4 hosszú, csak számjegyekből állhat
- `street`: kötelező, legalább 2 szóból áll (szóközzel elválasztva), az utolsó szó pedig csak `út`, `utca`, `tér` lehet
- `house_number`: kötelező, szám

Feladatok:
- a. (1 pont) Ha nincs érkező adat, üres űrlap jelenik meg, se hibalista, se szállítási költség nem jelenik meg
- b. (1 pont) `delivery_company` ellenőrzése
- c. (1 pont) `postal_code` ellenőrzése
- d. (1 pont) `street` ellenőrzése
- e. (1 pont) `house_number` ellenőrzése
- f. (1 pont) Hibás adatok esetén a hibaüzenetek listaként megjelennek, a szállítási költség nem jelenik meg
- g. (1 pont) Helyes adatok esetén a szállítási költség meghatározásra kerül és az űrlap alatt megjelenik
- h. (1 pont) Az űrlap állapottartó, azaz az érkező adatok visszaírásra kerülnek az űrlapmezőkbe

## 3. feladat: Építőelemek (8 pont)

Szeretnénk egy megvásárolt űrhajót összerakni. A nagyobb építőkészletek zacskókba szedve érkeznek, hogy könnyebben látni lehessen, mit mikor kell felhasználni. Készíts olyan alkalmazást az alábbi pontokat követve, amely segít **munkamenetben** számontartani, hogy adott pillanatban hány építőelem van az egyes zacskókban és összeépítve!

- a. (1 pont) Jelenítsük meg az oldalon a **munkamenetben tárolt** adatok alapján, hogy hány építőelem található jelenleg az egyes zacskókban és a modellbe beépítve! Ha még nem létezik a munkamenet, akkor most látunk hozzá az építéshez: ilyenkor mindhárom zacskóban 150 elem van, a beépítettek száma pedig értelemszerűen 0. *(Figyelem! Ez nem azt jelenti, hogy minden oldalbetöltéskor ebből az állapotból indulunk, hiszen a munkamenet korábban már létrejöhetett és az értékek megváltozhattak - lásd következő feladatok.)*
- b. (2 pont) A *Kivesz* gombra kattintva csökkentsük a kiválasztott zacskóban lévő építőelemek darabszámát az űrlapon beírt értékkel, majd adjunk hozzá a beépített elemek számához ugyanannyit! **Minden adatfeldolgozást szerver oldalon kell végezni és AJAX/fetch segítségével megoldani az adatcserét a kliens- és szerver között!**
- c. (1 pont) Az áthelyezés ne történjen meg, ha nincs a zacskóban a kívánt számú elem. Ilyenkor a darabszámok ne változzanak, hanem az `error` azonosítójú `span` elembe írjunk ki hibaüzenetet! **A művelet sikerességét is szerver oldalon határozd meg, csak a kiírást végezd JavaScript segítségével!**
- d. (2 pont) A *Visszahelyez* gombra kattintva a beépített elemek közül rakjunk vissza adott számút a kiválasztott zacskóba!
- e. (1 pont) Ha az előző pontban megvalósított művelet után a beépített elemek száma 0 alá esne, ne változzanak a darabszámok, hanem az `error` azonosítójú `span` elembe írjunk hibaüzenetet!
- f. (1 pont) Ez a megvalósítás megengedi, hogy a kivett elemeket rossz zacskóba helyezzük vissza. Ha egy zacskóban az eredeti 150 elemnél több van, pirossal jelenjen meg a darabszám!

## 4. feladat: Nyilvántartás (8 pont)

Mindenki tudja, milyen nagy LEGO rajongók vagyunk, így életünkben már sok készletet kaptunk. Készíts programot, amely ezeknek a nyilvántartását elvégzi. Lehessen új készletet rögzíteni, a készleteket kilistázni, valamint - ha netán eladnánk vagy elajándékoznánk - egy készletet archiválni.

- a. (2 pont) A keretprogramban megadott űrlap segítségével vegyél fel egy új készletet. Az űrlapadatok mellett mentsünk el egy `archived` attribútumot is `false` kezdőértékkel! **Az űrlapadatok ellenőrzésére nincs szükség, feltételezhetjük, hogy azok megfelelő formátumban érkeznek!** Az adatokat megfelelő sorosítás után fájlban tároljuk!
- b. (1 pont) Sikeres mentés után irányítsuk át a böngészőt ugyanerre az oldalra (`index.php`)!
- c. (2 pont) Ugyanezen az oldalon listázd ki az összes készletet a megadott formátumban!
- d. (1 pont) A listázás során vedd figyelembe az `archived` attribútumot, ahol ez igaz, azok ne kerüljenek megjelenítésre!
- e. (1 pont) A listaelemeknél ne generáljunk képet, ahol a kép URL nincs megadva (`image_url`)!
- f. (1 pont) Az "archivál" linkre kattintva és az `id`-t átadva állítsuk be az adott készlet `archived` tulajdonságát igazra, majd irányítsuk át a böngészőt az `index.php` oldalra!
