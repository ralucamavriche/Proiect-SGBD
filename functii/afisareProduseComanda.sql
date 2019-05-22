CREATE OR REPLACE procedure afisare_produse_comanda
        (v_id IN INT) 
AS 
    v_nume varchar2(60);
    cursor c_id_comanda is SELECT id_comanda FROM detalii_comenzi where id_comanda=v_id;
    cursor c_id_produs is SELECT id_produs FROM detalii_comenzi where id_comanda=v_id;
    vv_id int;
    v_nr_bucati int;
    vv_id_produs int;

BEGIN
   open c_id_comanda;
   open c_id_produs;
   dbms_output.put_line('Comanda cu id-ul ' || v_id || ' are urmatoarele produse: ');
   
LOOP
    fetch c_id_produs into vv_id_produs;
    exit when c_id_produs%NOTFOUND;
     select nume_produs into v_nume from produse where vv_id_produs=id;
     
    fetch c_id_comanda into vv_id;
    exit when c_id_comanda%NOTFOUND;
    select numar_bucata_produs  into  v_nr_bucati from detalii_comenzi where id_comanda=vv_id and id_produs=vv_id_produs;

    dbms_output.put_line(v_nume || ': ' || v_nr_bucati || ' bucati ');
END LOOP;
close c_id_comanda;
close c_id_produs;
END afisare_produse_comanda;

set serveroutput on;
begin
    afisare_produse_comanda(4);
end;