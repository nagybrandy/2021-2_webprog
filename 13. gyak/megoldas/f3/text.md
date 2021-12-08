Szeretnénk egy megvásárolt űrhajót összerakni. A nagyobb építőkészletek zacskókba szedve érkeznek, hogy könnyebben látni lehessen, mit mikor kell felhasználni. Készíts olyan alkalmazást az alábbi pontokat követve, amely segít számontartani, hogy adott pillanatban hány építőelem van az egyes zacskókban és összeépítve!

a. Jelenítsük meg az oldalon, hogy hány építőelem található jelenleg az egyes zacskókban és a modellbe beépítve! A doboz kibontásakor mindhárom zacskóban 150 elem van, a beépítettek száma pedig értelemszerűen 0. *(Figyelem! Ez nem azt jelenti, hogy minden oldalbetöltéskor ebből az állapotból indulunk, hiszen a munkamenet korábban már létrejöhetett.)*

b. A *Kivesz* gombra kattintva csökkentsük a kiválasztott zacskóban lévő építőelemek darabszámát az űrlapon beírt értékkel, majd adjunk hozzá a beépített elemek számához ugyanannyit! **Minden adatfeldolgozást szerver oldalon kell végezni és AJAX/fetch segítségével megoldani az adatcserét a kliens- és szerver között!**

c. Az áthelyezés ne történjen meg, ha nincs a zacskóban a kívánt számú elem. Ilyenkor a darabszámok ne változzanak, hanem az `error` azonosítójú `span` elembe írjunk ki hibaüzenetet! **A művelet sikerességét is szerver oldalon határozd meg, csak a kiírást végezd JavaScript segítségével!**

d. A *Visszahelyez* gombra kattintva a beépített elemek közül rakjunk vissza adott számút a kiválasztott zacskóba!

e. Ha az előző pontban megvalósított művelet után a beépített elemek száma 0 alá esne, ne változzanak a darabszámok, hanem az `error` azonosítójú `span` elembe írjunk hibaüzenetet!

f. Ez a megvalósítás megengedi, hogy a kivett elemeket rossz zacskóba helyezzük vissza. Ha egy zacskóban az eredeti 150 elemnél több van, pirossal jelenjen meg a darabszám!
