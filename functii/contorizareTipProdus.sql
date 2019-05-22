CREATE OR REPLACE function contorizare_tip_produs
(v_comanda IN VARCHAR2) RETURN INT
AS 
    v_count int;

BEGIN
    select count(ROWNUM) into v_count from tip_articole where upper(tip_articol)=upper(v_comanda);
RETURN v_count;
END;

 set serveroutput on;
 begin
    DBMS_OUTPUT.PUT_LINE(contorizare_tip_produs('dulciuri'));
 end;
