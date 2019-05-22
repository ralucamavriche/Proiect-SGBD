CREATE OR REPLACE function total_suma_comanda
        (v_id IN INT) return number
AS 
    v_nume varchar2(60);
    cursor c_id_comanda is SELECT id_comanda FROM detalii_comenzi where id_comanda=v_id;
    cursor c_id_produs is SELECT id_produs FROM detalii_comenzi where id_comanda=v_id;
    vv_id int;
    v_nr_bucati int;
    vv_id_produs int;
    v_suma int;
    v_pret int;

BEGIN
    v_suma:=0;
   open c_id_comanda;
   open c_id_produs;   
LOOP
    fetch c_id_produs into vv_id_produs;
    exit when c_id_produs%NOTFOUND;
     select nume_produs,pret into v_nume, v_pret from produse where vv_id_produs=id;
     
    fetch c_id_comanda into vv_id;
    exit when c_id_comanda%NOTFOUND;
    select numar_bucata_produs  into  v_nr_bucati from detalii_comenzi where id_comanda=vv_id and id_produs=vv_id_produs;

    v_suma:= v_suma + v_pret*v_nr_bucati;
END LOOP;
close c_id_comanda;
close c_id_produs;

return v_suma;
END total_suma_comanda;

set serveroutput on;
begin
    DBMS_OUTPUT.PUT_LINE('Comanda este in valoare de: ');
    DBMS_OUTPUT.PUT_LINE(total_suma_comanda(222222) || ' lei');
end;