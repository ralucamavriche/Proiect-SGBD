DROP TABLE clienti CASCADE CONSTRAINTS
/
DROP TABLE produse CASCADE CONSTRAINTS
/
DROP TABLE tip_articole CASCADE CONSTRAINTS
/
DROP TABLE comenzi CASCADE CONSTRAINTS
/
DROP TABLE detalii_comenzi CASCADE CONSTRAINTS
/
DROP TABLE reduceri CASCADE CONSTRAINTS
/
DROP TABLE furnizori CASCADE CONSTRAINTS
/
DROP TABLE facturi CASCADE CONSTRAINTS
/

CREATE TABLE clienti (
  email VARCHAR2(40) primary key,
  nume VARCHAR2(15) NOT NULL,
  prenume VARCHAR2(30) NOT NULL,
  strada VARCHAR(300) ,
  bloc VARCHAR(2),
  apartament NUMBER(5),
  telefon NUMBER(10),
  parola varchar2(40)
)
/

CREATE TABLE tip_articole (
  id INT NOT NULL PRIMARY KEY,
  tip_articol varchar(30)
)
/

CREATE TABLE produse (
  id INT NOT NULL PRIMARY KEY,
  id_articol INT NOT NULL,
  id_reducere INT NOT NULL,
  nume_produs VARCHAR2(60),
  pret NUMBER(3),
  numar_bucati NUMBER(10),
  FOREIGN KEY (id_articol) REFERENCES tip_articole(id),
  FOREIGN KEY (id_reducere) REFERENCES reduceri(id)
  )
  /

CREATE TABLE comenzi (
  id INT NOT NULL PRIMARY KEY,
  id_client INT NOT NULL,
  data_comanda DATE,
  FOREIGN KEY (id_client) REFERENCES clienti(id)
)
/

CREATE TABLE detalii_comenzi (
  id INT NOT NULL PRIMARY KEY,
  id_comanda INT NOT NULL,
  id_produs INT NOT NULL,
  numar_bucata_produs NUMBER(30),
  FOREIGN KEY (id_comanda) REFERENCES comenzi(id),
  FOREIGN KEY (id_produs) REFERENCES produse(id) 
)
/

CREATE TABLE furnizori (
  id INT NOT NULL PRIMARY KEY ,
  nume_furnizor VARCHAR2(30),
  id_produs INT NOT NULL ,
  numar_bucati_produse NUMBER(30),
  FOREIGN KEY (id_produs) REFERENCES produse(id)
)
/


CREATE TABLE facturi (
  id INT NOT NULL PRIMARY KEY ,
  data_factura DATE,
  id_furnizor INT NOT NULL, 
  total_plata NUMBER(30),
  FOREIGN KEY (id_furnizor) REFERENCES furnizori(id)
)
/

CREATE TABLE reduceri (
  id INT NOT NULL PRIMARY KEY ,
  procent_reducere varchar2(10)
)
/

SET SERVEROUTPUT ON;
DECLARE
  TYPE varr IS VARRAY(1000) OF varchar2(255);
  lista_nume varr := varr('Ababei','Acasandrei','Adascalitei','Afanasie','Agafitei','Agape','Aioanei','Alexandrescu','Alexandru','Alexe','Alexii','Amarghioalei','Ambroci','Andonesei','Andrei','Andrian','Andrici','Andronic','Andros','Anghelina','Anita','Antochi','Antonie','Apetrei','Apostol','Arhip','Arhire','Arteni','Arvinte','Asaftei','Asofiei','Aungurenci','Avadanei','Avram','Babei','Baciu','Baetu','Balan','Balica','Banu','Barbieru','Barzu','Bazgan','Bejan','Bejenaru','Belcescu','Belciuganu','Benchea','Bilan','Birsanu','Bivol','Bizu','Boca','Bodnar','Boistean','Borcan','Bordeianu','Botezatu','Bradea','Braescu','Budaca','Bulai','Bulbuc-aioanei','Burlacu','Burloiu','Bursuc','Butacu','Bute','Buza','Calancea','Calinescu','Capusneanu','Caraiman','Carbune','Carp','Catana','Catiru','Catonoiu','Cazacu','Cazamir','Cebere','Cehan','Cernescu','Chelaru','Chelmu','Chelmus','Chibici','Chicos','Chilaboc','Chile','Chiriac','Chirila','Chistol','Chitic','Chmilevski','Cimpoesu','Ciobanu','Ciobotaru','Ciocoiu','Ciofu','Ciornei','Citea','Ciucanu','Clatinici','Clim','Cobuz','Coca','Cojocariu','Cojocaru','Condurache','Corciu','Corduneanu','Corfu','Corneanu','Corodescu','Coseru','Cosnita','Costan','Covatariu','Cozma','Cozmiuc','Craciunas','Crainiceanu','Creanga','Cretu','Cristea','Crucerescu','Cumpata','Curca','Cusmuliuc','Damian','Damoc','Daneliuc','Daniel','Danila','Darie','Dascalescu','Dascalu','Diaconu','Dima','Dimache','Dinu','Dobos','Dochitei','Dochitoiu','Dodan','Dogaru','Domnaru','Dorneanu','Dragan','Dragoman','Dragomir','Dragomirescu','Duceac','Dudau','Durnea','Edu','Eduard','Eusebiu','Fedeles','Ferestraoaru','Filibiu','Filimon','Filip','Florescu','Folvaiter','Frumosu','Frunza','Galatanu','Gavrilita','Gavriliuc','Gavrilovici','Gherase','Gherca','Ghergu','Gherman','Ghibirdic','Giosanu','Gitlan','Giurgila','Glodeanu','Goldan','Gorgan','Grama','Grigore','Grigoriu','Grosu','Grozavu','Gurau','Haba','Harabula','Hardon','Harpa','Herdes','Herscovici','Hociung','Hodoreanu','Hostiuc','Huma','Hutanu','Huzum','Iacob','Iacobuta','Iancu','Ichim','Iftimesei','Ilie','Insuratelu','Ionesei','Ionesi','Ionita','Iordache','Iordache-tiroiu','Iordan','Iosub','Iovu','Irimia','Ivascu','Jecu','Jitariuc','Jitca','Joldescu','Juravle','Larion','Lates','Latu','Lazar','Leleu','Leon','Leonte','Leuciuc','Leustean','Luca','Lucaci','Lucasi','Luncasu','Lungeanu','Lungu','Lupascu','Lupu','Macariu','Macoveschi','Maftei','Maganu','Mangalagiu','Manolache','Manole','Marcu','Marinov','Martinas','Marton','Mataca','Matcovici','Matei','Maties','Matrana','Maxim','Mazareanu','Mazilu','Mazur','Melniciuc-puica','Micu','Mihaela','Mihai','Mihaila','Mihailescu','Mihalachi','Mihalcea','Mihociu','Milut','Minea','Minghel','Minuti','Miron','Mitan','Moisa','Moniry-abyaneh','Morarescu','Morosanu','Moscu','Motrescu','Motroi','Munteanu','Murarasu','Musca','Mutescu','Nastaca','Nechita','Neghina','Negrus','Negruser','Negrutu','Nemtoc','Netedu','Nica','Nicu','Oana','Olanuta','Olarasu','Olariu','Olaru','Onu','Opariuc','Oprea','Ostafe','Otrocol','Palihovici','Pantiru','Pantiruc','Paparuz','Pascaru','Patachi','Patras','Patriche','Perciun','Perju','Petcu','Pila','Pintilie','Piriu','Platon','Plugariu','Podaru','Poenariu','Pojar','Popa','Popescu','Popovici','Poputoaia','Postolache','Predoaia','Prisecaru','Procop','Prodan','Puiu','Purice','Rachieru','Razvan','Reut','Riscanu','Riza','Robu','Roman','Romanescu','Romaniuc','Rosca','Rusu','Samson','Sandu','Sandulache','Sava','Savescu','Schifirnet','Scortanu','Scurtu','Sfarghiu','Silitra','Simiganoschi','Simion','Simionescu','Simionesei','Simon','Sitaru','Sleghel','Sofian','Soficu','Sparhat','Spiridon','Stan','Stavarache','Stefan','Stefanita','Stingaciu','Stiufliuc','Stoian','Stoica','Stoleru','Stolniceanu','Stolnicu','Strainu','Strimtu','Suhani','Tabusca','Talif','Tanasa','Teclici','Teodorescu','Tesu','Tifrea','Timofte','Tincu','Tirpescu','Toader','Tofan','Toma','Toncu','Trifan','Tudosa','Tudose','Tuduri','Tuiu','Turcu','Ulinici','Unghianu','Ungureanu','Ursache','Ursachi','Urse','Ursu','Varlan','Varteniuc','Varvaroi','Vasilache','Vasiliu','Ventaniuc','Vicol','Vidru','Vinatoru','Vlad','Voaides','Vrabie','Vulpescu','Zamosteanu','Zazuleac');
  lista_prenume_fete varr := varr('Adina','Alexandra','Alina','Ana','Anca','Anda','Andra','Andreea','Andreia','Antonia','Bianca','Camelia','Claudia','Codrina','Cristina','Daniela','Daria','Delia','Denisa','Diana','Ecaterina','Elena','Eleonora','Elisa','Ema','Emanuela','Emma','Gabriela','Georgiana','Ileana','Ilona','Ioana','Iolanda','Irina','Iulia','Iuliana','Larisa','Laura','Loredana','Madalina','Malina','Manuela','Maria','Mihaela','Mirela','Monica','Oana','Paula','Petruta','Raluca','Sabina','Sanziana','Simina','Simona','Stefana','Stefania','Tamara','Teodora','Theodora','Vasilica','Xena');
  lista_prenume_baieti varr := varr('Adrian','Alex','Alexandru','Alin','Andreas','Andrei','Aurelian','Beniamin','Bogdan','Camil','Catalin','Cezar','Ciprian','Claudiu','Codrin','Constantin','Corneliu','Cosmin','Costel','Cristian','Damian','Dan','Daniel','Danut','Darius','Denise','Dimitrie','Dorian','Dorin','Dragos','Dumitru','Eduard','Elvis','Emil','Ervin','Eugen','Eusebiu','Fabian','Filip','Florian','Florin','Gabriel','George','Gheorghe','Giani','Giulio','Iaroslav','Ilie','Ioan','Ion','Ionel','Ionut','Iosif','Irinel','Iulian','Iustin','Laurentiu','Liviu','Lucian','Marian','Marius','Matei','Mihai','Mihail','Nicolae','Nicu','Nicusor','Octavian','Ovidiu','Paul','Petru','Petrut','Radu','Rares','Razvan','Richard','Robert','Roland','Rolland','Romanescu','Sabin','Samuel','Sebastian','Sergiu','Silviu','Stefan','Teodor','Teofil','Theodor','Tudor','Vadim','Valentin','Valeriu','Vasile','Victor','Vlad','Vladimir','Vladut');
  lista_strazi varr :=varr('Februarie','Martie','Soare','Bucurie','Fericire');
  lista_telefon varr := varr('0786231224','0786089310','0786089303','0786231225','0786089304','0786089300','0786089305','0786089307','0786089309','0786089311','0786089312','0786089313','0786231227','0786089314','0786089301','0786089302','0786089308','0786089308','0786231226');
  lista_furnizori varr := varr('Agroindustriala Bucium', 'Alexandrion Grup','Alira','Angelli Spumante','Bachus','Cotnari','Cramele Reca?','Domeniile Tohani','Euroavipo','Global Spirits','Halewood România', 'Indagrara','Jidvei','Murfatlar','Ostrovit','Prodal', 'Prodvinalco','Romanian Drinks Service', 'Senator Wine România','Veritas''Panciu', 'Vinarte' ,'Vincon', 'Vrancea' ,'Vineport', 'Vinia' ,'Vinterra' ,'Zarea','Coca-Cola','Mega','Adria','Selgros','Bila','Market');

      
  v_nume VARCHAR2(255);
  v_prenume VARCHAR2(255);
  v_prenume1 VARCHAR2(255);
  v_prenume2 VARCHAR2(255);
  v_strada VARCHAR2(255);

  v_temp int;
  v_telefon int;
  v_bloc varchar2(2);
  v_apartament int;
  v_email varchar2(40);
  v_parola varchar2(40);

  v_im int;
  v_data date;
  v_ji int;
  v_plata int;
  
  v_categorie VARCHAR2(30);
  v_id clienti.id%type; --
  v_articol tip_articole.id%type;
  v_reduceri reduceri.id%type;
  v_comenzi comenzi.id%type; --
  v_clienti clienti.id%type;
  v_produse produse.id%type;
  v_furnizori furnizori.id%type;
  
  
   lista_produse_legume varr :=varr ('ala','baala','porto','cala');
  lista_produse_fructe varr := varr('mere', 'pere', 'kiwi', 'c?p?uni', 'pepeni', 'prune', 'piersici', 'caise', 'nectarine', 'cire?e', 'struguri', 'ananas', 'mango', 'avocado', 'nuc? de cocos', 'papaya', 'fructe de cactus', 'l?mâi', 'portocale', 'grapefruit', 'mandarine', 'clementine', 'mineole' ,'banana', 'fructe uscate', 'alune', 'semin?e');
  lista_produse_lactate varr := varr('lapte', 'iaurturi', 'sana', 'kefir', 'lapte b?tut', 'smântân?', 'fri?c?','branz? de vaci', 'ricotta', 'mascarpone', 'mozzarella', 'telemea de vac?', 'telemea de oaie', 'telemea de capr?',' brânzeturi u?oare ','camembert', 'brie', 'blue', 'gorgonzola', 'brânz? topit?', 'brânzeturi tari', 'ca?cavaluri cedar', '?vai?er', 'parmezan', 'edam', 'gouda', 'tilsit', 'brânz? afumat?', 'ou?', 'unt', 'deserturi', 'prajituri', 'creme');
  lista_bauturi_alcoolice varr := varr('vin alb', 'vin rosu', 'vin roze', 'spumante', 'bere la doz?', 'bere la sticl?', 'bere la pet', 'whisky', 'brandy', 'vinars', 'cognac', 'vodka', 'gin', 'palinc?', 'horinc?', '?uic?', 'lichior', 'afinat?', 'vi?inat?', 'caisat?', 'fernet', 'bitter', 'vermut', 'digestiv');
  lista_bauturi_nealcoolice varr := varr('nectarur', 'suc r?coritor carbogazoas' ,'suc racoritor necarbogazoas', 'apa minerala' ,'apa plat?', 'energizant', 'sirop', 'Ice Tea');
  lista_produse_carne varr := varr('carne de porc', 'carne de vit?', 'carne de pui' , 'carne de oaie', 'preparat proaspat afumat','preparafum?tura', 'carne tocata', 'piese de berbecut', 'cârna?i proaspe?i');
  list_produse_conserve varr := varr('conserve de fructe', 'conserve de carne', 'conserve muraturi', 'conserve de peste','conserve de tomate');
  lista_produse_alimente_baza varr := varr ('faia?', 'zah?r', 'ulei', 'margarin?', 'crema tartinabila', 'dulce?a', 'gem', 'miere', 'lapte condensat', 'lapte UHT','sare', 'mirodenii', 'mu?tar', 'o?et', 'cereale', 'paste f?inoase', 'orez','soia', 'prafuri');
  lista_produse_panificatie varr := varr('pâine din secar?', 'pâine din grâu', 'pâine din ovaz', 'pâine din orz', 'porumb', 'pâine de grâu', 'pâine mixt?', 'franzele', 'pâine toast', 'chifle', 'batoane', 'baghete','chifle pentru hamburgeri' , 'lipie');
  lista_produse_dulciuri varr := varr('ciocolat?', 'bomboane', 'drajeuri', 'jeleuri', 'bomboane mentolate', 'mixuri bomboane', 'gum? de mestecat', 'cipsuri', 'covrigei', 'sticksuri', 'biscui?i', 'napolitane', 'pr?jituri', 'cozonaci', 'checuri', 'fursecuri', 'brio?e','ceai', 'cafea boabe', 'cafea m?cinat?', 'cafea instant' , 'espresso');
  lista_produse_peste varr := varr('crap', 'p?str?v', 'somn', 'caras', 'somon', 'icre', 'fructe de mare');
  lista_produse_curetenie varr := varr('detergent', 'în?lbitori pentru rufe', 'produse anticalcar', 'detergenti pentru masina de spalat vase', ' detergent baie', 'detergent buc?t?rie ','detergent vase', 'creme', 'prafuri','lavete','bure?i', 'odorizante înc?peri', 'insecticide', 'm?nu?i','sac menajer');
  lista_produse_menajer varr := varr('ceramic', 'portelan', 'servicii de cafea', ' servicii ceai' ,'cadouri', 'lampi decorative', 'sfesnice', 'articole din sticla', 'bambus', 'ratan', 'fier forjat', 'tablouri','ceasuri', 'termometre', 'mese de calcat', 'uscatoare de rufe', 'huse pentru depozitare', 'huse si rafturi pentru pantofi', 'cutii pliabile','uscatoare de vesela', 'castroane', 'site','placi de tocat', 'tavi', 'capace', 'oale', 'cratite', 'tigai', 'ustensile', 'forme de copt','accesorii','tacâmuri', 'cutite','ustensile profesionale','halbe de bere', 'cupe de înghetata', 'boluri pentru gheata', 'carafe', 'scrumiere');
 
  lista_reducere varr := varr('RED10%','RED20%','RED30%','RED40%','RED50%','RED60%','RED70%','RED80%','RED90%','RED100%','RED10%','RED15%','RED25%','RED35%','RED45%','RED55%','RED65%','RED75%','RED85%','RED95%');
  id_categorie_produs int;
  v_nume_produs VARCHAR2(60);
  v_pret int;
  nr_bucati number(10);
  id_val number(10);
  v_reducere VARCHAR2(10);
  
  CURSOR lista_clienti IS SELECT id FROM clienti;
  CURSOR lista_id_articol IS SELECT id FROM tip_articole;
  CURSOR lista_id_reduceri IS SELECT id FROM reduceri;
  CURSOR lista_produse IS SELECT id FROM produse;
  CURSOR lista_id_furnizori IS SELECT id FROM furnizori;
  CURSOR lista_comenzi IS SELECT id FROM comenzi; --
   
BEGIN

--clienti

   DBMS_OUTPUT.PUT_LINE('Inserarea in tabela clienti...');
   FOR v_i IN 1..10000 LOOP
      v_nume := lista_nume(TRUNC(DBMS_RANDOM.VALUE(0,lista_nume.count))+1);
      IF (DBMS_RANDOM.VALUE(0,100)<50) THEN      
         v_prenume1 := lista_prenume_fete(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_fete.count))+1);
         LOOP
            v_prenume2 := lista_prenume_fete(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_fete.count))+1);
            exit when v_prenume1<>v_prenume2;
         END LOOP;
       ELSE
         v_prenume1 := lista_prenume_baieti(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_baieti.count))+1);
         LOOP
            v_prenume2 := lista_prenume_baieti(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_baieti.count))+1);
            exit when v_prenume1<>v_prenume2;
         END LOOP;
       END IF;

     IF (DBMS_RANDOM.VALUE(0,100)<60) THEN  
        IF LENGTH(v_prenume1 || ' ' || v_prenume2) <= 20 THEN
          v_prenume := v_prenume1 || ' ' || v_prenume2;
        END IF;
        else 
           v_prenume:=v_prenume1;
      END IF;

      LOOP  
        v_strada := lista_strazi(TRUNC(DBMS_RANDOM.VALUE(0,lista_strazi.count))+1);
        v_bloc := chr(TRUNC(DBMS_RANDOM.VALUE(0,20))+65) || chr(TRUNC(DBMS_RANDOM.VALUE(0,8))+49);
        v_apartament := TRUNC(DBMS_RANDOM.VALUE(0,99))+1;
        v_telefon := lista_telefon(TRUNC(DBMS_RANDOM.VALUE(0,lista_telefon.count))+1);

        select count(*) into v_temp from clienti where strada=v_strada and bloc=v_bloc and apartament=v_apartament and telefon=v_telefon;
        exit when v_temp < 30;
      END LOOP;
      
      v_temp:='';
      v_email := lower(v_nume ||'.'|| v_prenume1);
      v_parola:= lista_nume(TRUNC(DBMS_RANDOM.VALUE(0,lista_nume.count))+1);
      LOOP         
         select count(*) into v_temp from clienti where email = v_email||v_temp;
         exit when v_temp=0;
         v_temp :=  TRUNC(DBMS_RANDOM.VALUE(0,100));
      END LOOP;    
      
      if (TRUNC(DBMS_RANDOM.VALUE(0,5))=0) then v_email := v_email ||'@gmail.com';
         else v_email := v_email ||'@info.ro';
      end if;

      insert into clienti values(v_email, v_nume, v_prenume,v_strada, v_bloc,v_apartament, v_telefon,v_parola);
      DBMS_OUTPUT.PUT_LINE(v_email || v_nume || v_prenume || v_strada || v_bloc || v_apartament || v_telefon || v_parola);
   END LOOP;
   DBMS_OUTPUT.PUT_LINE('Inserarea in tabela clienti... GATA !');

----tip_articole
--   DBMS_OUTPUT.PUT_LINE('Inserarea tipurilor articolelor...');
--   FOR v_i IN 1..5000 LOOP
--      v_ji := TRUNC(DBMS_RANDOM.VALUE(1,13));
--      IF (v_ji = 1) THEN v_categorie := 'Legume'; END IF;
--      IF (v_ji = 2) THEN v_categorie := 'Fructe'; END IF; 
--      IF (v_ji = 3) THEN v_categorie := 'Produse lactate'; END IF; 
--      IF (v_ji = 4) THEN v_categorie := 'Bauturi alcoolice'; END IF; 
--      IF (v_ji = 5) THEN v_categorie := 'Bauturi nealcoolice'; END IF; 
--      IF (v_ji = 6) THEN v_categorie := 'Carne'; END IF; 
--      IF (v_ji = 7) THEN v_categorie := 'Conserve'; END IF; 
--      IF (v_ji = 8) THEN v_categorie := 'Alimente de baza'; END IF; 
--      IF (v_ji = 9) THEN v_categorie := 'Produse de panificatie'; END IF; 
--      IF (v_ji = 10) THEN v_categorie := 'Dulciuri'; END IF; 
--      IF (v_ji = 11) THEN v_categorie := 'Peste'; END IF; 
--      IF (v_ji = 12) THEN v_categorie := 'Produse de curatenie'; END IF; 
--      IF (v_ji = 13) THEN v_categorie := 'Produse de menaj'; END IF; 
--      insert into tip_articole values (v_i, v_categorie);
--   END LOOP;
--   DBMS_OUTPUT.PUT_LINE('Inserarea tipurilor articolelor... GATA !');


--   produse
--   DBMS_OUTPUT.PUT_LINE('Inserarea produs...');
--   open lista_id_articol;
--   open lista_id_reduceri;
--   FOR v_i IN 1..5050 LOOP
--      fetch lista_id_articol into v_articol;
--      exit when lista_id_articol%NOTFOUND;
--
--      fetch lista_id_reduceri into v_reduceri;
--      exit when lista_id_reduceri%NOTFOUND;
--
--      id_categorie_produs := TRUNC(DBMS_RANDOM.VALUE(1,13));
--      IF (id_categorie_produs = 1) THEN v_nume_produs := lista_produse_legume(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_legume.count))+1); END IF;
--      IF (id_categorie_produs = 2) THEN v_nume_produs :=lista_produse_fructe(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_fructe.count))+1); END IF; 
--      IF (id_categorie_produs = 3) THEN v_nume_produs :=lista_produse_lactate(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_lactate.count))+1); END IF; 
--      IF (id_categorie_produs = 4) THEN v_nume_produs :=lista_bauturi_alcoolice(TRUNC(DBMS_RANDOM.VALUE(0,lista_bauturi_alcoolice.count))+1); END IF; 
--      IF (id_categorie_produs = 5) THEN v_nume_produs :=lista_bauturi_nealcoolice(TRUNC(DBMS_RANDOM.VALUE(0,lista_bauturi_nealcoolice.count))+1); END IF; 
--      IF (id_categorie_produs = 6) THEN v_nume_produs :=lista_produse_carne(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_carne.count))+1); END IF; 
--      IF (id_categorie_produs = 7) THEN v_nume_produs :=list_produse_conserve(TRUNC(DBMS_RANDOM.VALUE(0,list_produse_conserve.count))+1); END IF; 
--      IF (id_categorie_produs = 8) THEN v_nume_produs :=lista_produse_alimente_baza(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_alimente_baza.count))+1); END IF; 
--      IF (id_categorie_produs = 9) THEN v_nume_produs :=lista_produse_panificatie(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_panificatie.count))+1); END IF; 
--      IF (id_categorie_produs = 10) THEN v_nume_produs :=lista_produse_dulciuri(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_dulciuri.count))+1); END IF; 
--      IF (id_categorie_produs = 11) THEN v_nume_produs :=lista_produse_peste(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_peste.count))+1); END IF; 
--      IF (id_categorie_produs = 12) THEN v_nume_produs :=lista_produse_curetenie(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_curetenie.count))+1); END IF; 
--      IF (id_categorie_produs = 13) THEN v_nume_produs :=lista_produse_menajer(TRUNC(DBMS_RANDOM.VALUE(0,lista_produse_menajer.count))+1); END IF;
--
--       v_pret := TRUNC(DBMS_RANDOM.VALUE(1,1000));
--       nr_bucati := TRUNC(DBMS_RANDOM.VALUE(1,2000));
--      insert into produse values (v_i, v_articol, v_reduceri, v_nume_produs, v_pret,nr_bucati);
--   END LOOP;
--   close lista_id_articol;
--   close lista_id_reduceri;
--   DBMS_OUTPUT.PUT_LINE('Inserarea produs... GATA !');



--comenzi
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela comenzi...');
--    open lista_clienti;
--    FOR v_i IN 1..5000 LOOP
--        fetch lista_clienti into v_clienti;
--        exit when lista_clienti%NOTFOUND;
----        LOOP  
----           v_im := TRUNC(DBMS_RANDOM.VALUE(0,999))+1;
----            select count(*) into v_temp from comenzi where id_client=v_id ;
----           exit when v_temp < 30;
----        END LOOP;
--        
--        v_data := TO_DATE('01-01-1974','MM-DD-YYYY')+TRUNC(DBMS_RANDOM.VALUE(0,365));
--        insert into comenzi values(v_i,v_clienti,v_data);
--    end loop;
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela comenzi... GATA !');


--detalii comenzi
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela detalii_comenzi...');
--    open lista_produse;
--    open lista_comenzi;
--    FOR v_i IN 1..5000 LOOP
--        fetch lista_produse into v_id;
--        exit when lista_produse%NOTFOUND;
--        
--        fetch lista_comenzi into v_comenzi;
--        exit when lista_comenzi%NOTFOUND;
--        
--        LOOP  
--           nr_bucati := TRUNC(DBMS_RANDOM.VALUE(0,99))+1;
--           select count(*) into v_temp from detalii_comenzi where id_comanda=v_id and id_produs=v_comenzi and numar_bucata_produs=nr_bucati;
--           exit when v_temp < 30;
--        END LOOP;
--        insert into detalii_comenzi values(v_i,v_id,v_comenzi,nr_bucati);
--    END LOOP;
--    close lista_produse;
--    close lista_comenzi;
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela detalii_comenzi... GATA !');


--furnizori 
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela furnizori...');
--    open lista_produse;
--    FOR v_i IN 1..5000 LOOP
--        fetch lista_produse into v_produse;
--        exit when lista_produse%NOTFOUND;
--        LOOP 
--           v_nume := lista_furnizori(TRUNC(DBMS_RANDOM.VALUE(0,lista_furnizori.count))+1);
--           nr_bucati := TRUNC(DBMS_RANDOM.VALUE(0,99))+1;
--
--           select count(*) into v_temp from furnizori where id_produs=v_produse and numar_bucati_produse=nr_bucati;
--           exit when v_temp < 30;
--        END LOOP;
--        insert into furnizori values(v_i,v_nume,v_produse,nr_bucati);
--    END LOOP;
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela furnizori... GATA !');


--facturi
--DBMS_OUTPUT.PUT_LINE('Inserarea in tabela facturi...');
--    open lista_id_furnizori;
--    FOR v_i IN 1..5000 LOOP
--        fetch lista_id_furnizori into v_furnizori;
--        exit when lista_id_furnizori%NOTFOUND;
--        v_data := TO_DATE('01-01-1974','MM-DD-YYYY')+TRUNC(DBMS_RANDOM.VALUE(0,365));
--        LOOP 
--           v_plata := TRUNC(DBMS_RANDOM.VALUE(0,99999))+1;
--           select count(*) into v_temp from facturi where id_furnizor=v_furnizori and total_plata=v_plata;
--           exit when v_temp < 30;
--        END LOOP;
--        insert into facturi values(v_i,v_data,v_furnizori,v_plata);
--    END LOOP;
--    close lista_id_furnizori;
--    DBMS_OUTPUT.PUT_LINE('Inserarea in tabela facturi... GATA !');
    
    
--reduceri
--    DBMS_OUTPUT.PUT_LINE('Inserarea REDUCERE...');
--    FOR v_i IN 1..5000 LOOP
--        v_reducere :=lista_reducere(TRUNC(DBMS_RANDOM.VALUE(0,lista_reducere.count))+1);
--        INSERT INTO reduceri VALUES(v_i,v_reducere);
--    END LOOP;
--    DBMS_OUTPUT.PUT_LINE('Inserarea reducere... GATA !');

END;
/

select * from clienti;
select * from produse;
select * from tip_articole;
select * from comenzi;
select * from detalii_comenzi;
select *from reduceri;
select *from furnizori;
select *from facturi;
