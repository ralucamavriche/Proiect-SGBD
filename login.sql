CREATE OR REPLACE procedure login
    (v_email IN varchar2, v_parola IN varchar2) 

AS 
    cursor c_email is SELECT email FROM clienti where email=v_email;
    cursor c_parola is SELECT parola FROM clienti where parola=v_parola;
    cnumber number;
    vv_email varchar2(40);
    vv_parola varchar2(40);
   

BEGIN
   open c_email;
   fetch c_email into vv_email;
   
   open c_parola;
   fetch c_parola into vv_parola;
    
    if(vv_email=v_email and vv_parola=v_parola)then
        cnumber:=1;
    else
        cnumber:=0;
    end if;
    
   if(cnumber=0) then
        DBMS_OUTPUT.PUT_LINE('Emailul si/sau parola sunt incorecte');
    else
        DBMS_OUTPUT.PUT_LINE('Emailul si parola sunt corecte');
    end if;
    
    close c_email;
    close c_parola;
   
END login;
