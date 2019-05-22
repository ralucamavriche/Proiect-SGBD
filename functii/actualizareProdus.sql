CREATE OR REPLACE procedure actualizare_produs
    (v_id IN INT, v_nr_produse IN INT) 

AS 
    cursor c_id is SELECT id FROM clienti where id=v_id;
    cnumber number;
    vv_id int;
   

BEGIN
   open c_id;
   fetch c_id into vv_id;
   
    if(vv_id=v_id)then
        cnumber:=1;
    else
        cnumber:=0;
    end if;
    
   if(cnumber=0) then
        DBMS_OUTPUT.PUT_LINE('Produsul nu a fost gasit in baza de date');
    else
        UPDATE produse set numar_bucati= numar_bucati-v_nr_produse where vv_id=v_id;
        DBMS_OUTPUT.PUT_LINE('Produs actualizat');
    end if;
    
    close c_id;
   
END actualizare_produs;

set serveroutput on;
begin
    actualizare_produs(1,3);
end;

select * from produse where id=1;