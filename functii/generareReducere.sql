CREATE OR REPLACE procedure generare_reducere
    (v_id IN NUMBER) 
AS 
    cursor c_id_reducere is SELECT id_reducere FROM produse where id_reducere is not null AND id=v_id ;
    v_procent_reducere int;
    cnumber number;
    vv_id int;
    v_id_red int;
    v_procent int;
    v_pret int;
    v_nume varchar2(60);
    v_pret_redus int;

BEGIN
   open c_id_reducere;
   fetch c_id_reducere into vv_id;
   
    if(vv_id is not null )then
        cnumber:=1;
    else
        cnumber:=0;
    end if;
    
   if(cnumber=0) then
        DBMS_OUTPUT.PUT_LINE('Produsul nu a fost gasit in baza de date sau nu are nicio reducere aplicata. ');
    else
        select nume_produs,pret into v_nume,v_pret from produse where id=v_id;
        select id,procent_reducere into v_id_red,v_procent from reduceri where id=vv_id;
        v_pret_redus := v_pret- (v_procent/100)*v_pret;
        DBMS_OUTPUT.PUT_LINE('Produsul ' || v_nume || ' cu id-ul ' || v_id || ' a ajuns de la suma de ' 
        || v_pret || 'lei la suma de ' || v_pret_redus || 'lei dupa aplicarea reducerii de ' ||  v_procent || '%');
    end if;
    
    close c_id_reducere;
   
END generare_reducere;

set serveroutput on;
begin
    generare_reducere(33333);
end;
