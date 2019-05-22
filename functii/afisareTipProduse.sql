 CREATE OR REPLACE function afisare_tip_articole
(v_id IN INT, v_comanda IN VARCHAR2) RETURN VARCHAR2
IS
    v_nume varchar2(60);
    cursor c_id_articol is select id_articol from produse where id=v_id;
   vv_id int;
    v_id_red int;
    v_procent int;
    v_pret int;
    v_id_produse int;
    v_id_reducere int;
    v_numar_bucati int;
    v_pret_redus int;
    v_tip varchar2(50);

BEGIN
   open c_id_articol;
   fetch c_id_articol into vv_id;

    select id_reducere, nume_produs,pret, numar_bucati into v_id_reducere, v_nume, v_pret, v_numar_bucati from produse where id=v_id;
    select tip_articol into v_tip from tip_articole where id=vv_id;

    
IF upper(v_comanda)='TIP_ARTICOL' then
        RETURN v_tip;
    end if;
IF upper(v_comanda)='ID_REDUCERE' THEN
        RETURN v_id_reducere;
        end if;
IF upper(v_comanda)='NUME_PRODUS' THEN
       RETURN v_nume;
        end if;
IF upper(v_comanda)='PRET' THEN
       RETURN v_pret;
        end if;
IF upper(v_comanda)='NUMAR_BUCATI' THEN
       RETURN v_numar_bucati;
        end if;
        
close c_id_articol;
END;

set serveroutput on;
begin
    DBMS_OUTPUT.PUT_LINE(afisare_tip_articole(3619,'TIP_ARTICOL'));
end;

