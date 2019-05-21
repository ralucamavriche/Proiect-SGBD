CREATE OR REPLACE procedure afisare_produse_reduse
AS 
    v_nume varchar2(60);
    cursor c_id_reducere is SELECT id_reducere FROM produse where id_reducere is not null;
   vv_id int;
    v_procent_reducere int;
    v_id int;
    v_id_red int;
    v_procent int;
    v_pret int;
    
    v_pret_redus int;

BEGIN
   open c_id_reducere;
LOOP
   fetch c_id_reducere into vv_id;
   exit when c_id_reducere%NOTFOUND;

    select id,nume_produs,pret into v_id,v_nume,v_pret from produse where id=vv_id;
    select id,procent_reducere into v_id_red,v_procent from reduceri where id=vv_id;
    v_pret_redus := v_pret- (v_procent/100)*v_pret;
    dbms_output.put_line('Produsul ' || v_nume || ' cu id-ul ' || v_id || ' a ajuns de la suma de ' 
    || v_pret || 'lei la suma de ' || v_pret_redus || 'lei dupa aplicarea reducerii de ' ||  v_procent || '%');
END LOOP;
close c_id_reducere;
END;

set serveroutput on;
begin
    afisare_produse_reduse();
end;
