CREATE OR REPLACE function afisare_produse_reduse
(v_id IN INT, v_comanda IN VARCHAR2) RETURN VARCHAR2
AS 
    v_nume varchar2(60);
    cursor c_id_reducere is SELECT id_reducere FROM produse where id_reducere is not null and id=v_id;
   vv_id int;
    v_id_red int;
    v_procent int;
    v_pret int;
    v_id_produse int;
    v_id_articol int;
    v_numar_bucati int;
    v_pret_redus int;

BEGIN
   open c_id_reducere;
   fetch c_id_reducere into vv_id;

    select id, id_articol, nume_produs,pret, numar_bucati into v_id_produse, v_id_articol, v_nume,v_pret, v_numar_bucati from produse where id=v_id;
    select id,procent_reducere into v_id_red,v_procent from reduceri where id=vv_id;
    v_pret_redus := v_pret- (v_procent/100)*v_pret;
    
IF upper(v_comanda)='NUME_PRODUS' then
        RETURN v_nume;
    end if;
IF upper(v_comanda)='ID_ARTICOL' THEN
        RETURN v_id_articol;
        end if;
IF upper(v_comanda)='ID_REDUCERE' THEN
        RETURN v_id_red;
        end if;
IF upper(v_comanda)='PRET' THEN
        RETURN v_pret;
        end if;
IF upper(v_comanda)='NUMAR_BUCATI' THEN
        RETURN v_numar_bucati;
        end if;
IF upper(v_comanda)='PRET_REDUS' THEN
        RETURN v_pret_redus;
        end if;
        
close c_id_reducere;
END;

 set serveroutput on;
 begin
    DBMS_OUTPUT.PUT_LINE(afisare_produse_reduse(3619,'NUMAR_BUCATI'));
 end;