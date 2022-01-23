-- Istnieją 3 grupy uprawnień w bazie danych MySQL:

-- 1. Do zarządzani danymi: select, insert, delete, update.
-- 2. Do manipulowania strukturą baz oraz tabel, m.in: create, alter, drop, show.
-- 3. Do administracji serwerem, m.in: grant, create user, reload, super.

-- Każde z tych uprawnień może być pojedynczo lub zbiorczo przypisywane użytkownikowi. Użytkownik może mieć określona prawa działające na poziomie całego serwera, pojedynczej bazy, a nawet pojedynczej tabeli w bazie.

--wyświetlenie zalogowanych użytkowników:

select current_user();

--alternatywnie: 

select user();

--wyświetlenie wszystkich istniejących użytkowników na serwerze:

select user from mysql.user;

--wyświetlenie uprawnień zalogowanego użytkownika:

show GRANTS;

/*
utworzenie nowego użytkownika - nazwa_użytkownika powinna zostać zamieniona na właściwy login, np: Dawid, Dyrektor czy Handlowiec, identified by to jego hasło
pamiętaj o apostrofach! WAŻNE!!! Localhost oznacza, że jest to użytkownik mający prawa do baz tylko na serwerze, na którym został utworzony:
*/ 
create user 'nazwa_użytkownika'@'localhost' identified by 'qwerty';

/*
nadanie pełnych praw dla przykładowego użytkownika marian do wszystkich baz i tabel na serwerze (pierwsza * oznacza wszystkie bazy, kolejna * po kropce oznacza wszystkie tabele w bazach, 
'with grant option' oznacza, że marian może również tworzyć użytkowników i nadawać im uprawnienia:
*/

grant all PRIVILEGES on *.* to 'marian'@'localhost' with grant option;

Przykłady:

--utworzenie konta użytkownika bibliotekarz (zapytanie 1) i nadanie mu pełnych praw do bazy biblioteka (zapytanie 2):

create user 'bibliotekarz'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on biblioteka.* to 'bibliotekarz'@'localhost' ;

--utworzenie konta użytkownika bibliotekarz_autor (zapytanie 1) i nadanie mu pełnych praw tylko do tabeli autorzy w bazie biblioteka (zapytanie 2):

create user 'bibliotekarz_autor'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on biblioteka.autorzy to 'bibliotekarz_autor'@'localhost'; 

--utworzenie konta użytkownika bibliotekarz_ksiazka (zapytanie 1) i nadanie mu prawa do wyświetlania, dodawania i aktualizowania danych z tabeli książki bazie biblioteka (zapytanie 2):

create user 'bibliotekarz_ksiazka'@'localhost' identified by 'qwerty';
grant select, insert, update on biblioteka.ksiazki to 'bibliotekarz_ksiazka'@'localhost';

--jeśli chcemy nadać uprawnienia do dwóch tabel w bazie, polecenie należy powtórzyć, np:

grant select, insert, delete on biblioteka.ksiazki to 'bibliotekarz'@'localhost';
grant select, insert, delete on biblioteka.autorzy to 'bibliotekarz'@'localhost';

--aktualizacja haseł użytkownika:

alter user 'bibliotekarz'@'localhost' identified by 'qwerty123';

alternatywnie:

UPDATE mysql.user SET authentication_string = PASSWORD('nowe_hasło') WHERE User = 'użytkownik' AND Host = 'localhost';
FLUSH PRIVILEGES;


create user 'admin_zwierzaki'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on zwierzaki.* to 'admin_zwierzaki'@'localhost' ;

create user 'admin_kotki'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on kotki.* to 'admin_kotki'@'localhost' ;

create user 'admin_pieski'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on pieski.* to 'admin_pieski'@'localhost' ;

create user 'admin_swinki'@'localhost' identified by 'qwerty';
grant all PRIVILEGES on swinki.* to 'admin_swinki'@'localhost' ;

create user 'maniek'@'localhost' identified by 'qwerty';
grant select on kotki.* to 'maniek'@'localhost' ;

create user 'jozek'@'localhost' identified by 'qwerty';
grant select, insert, delete on pieski.* to 'jozek'@'localhost' ;

create user 'bronek'@'localhost' identified by 'qwerty';
grant create, alter on zwierzaki.* to 'bronek'@'localhost' ;
grant select on kotki.* to 'bronek'@'localhost' ;

--ROLE



CREATE ROLE 'programista', 'tester', 'wydawca';

GRANT ALL privileges ON *.* TO 'programista';
GRANT SELECT ON baza.* TO 'tester';
GRANT INSERT, UPDATE, DELETE ON baza.* TO 'wydawca';

CREATE USER 'p1'@'localhost' IDENTIFIED BY 'qwerty';
CREATE USER 't1'@'localhost' IDENTIFIED BY 'qwerty';
CREATE USER 'w1'@'localhost' IDENTIFIED BY 'qwerty';

GRANT 'programista' to 'p1'@'localhost';
GRANT 'tester' to 't1'@'localhost';
GRANT 'wydawca' to 'w1'@'localhost';

SET DEFAULT ROLE 'programista' for 'p1'@'localhost';
SET DEFAULT ROLE 'tester' for 't1'@'localhost';
SET DEFAULT ROLE 'wydawca' for 'w1'@'localhost';




create role 'jedenRol', 'dwaRol', 'trzyRol';

GRANT select ON zwierzaki.* TO 'jedenRol';
GRANT select ON zwierzaki.* TO 'dwaRol';
GRANT select on zwierzaki.* TO 'trzyRol';

CREATE USER 'testroli1'@'localhost' IDENTIFIED BY 'qwerty';
CREATE USER 'testroli2'@'localhost' IDENTIFIED BY 'qwerty';
CREATE USER 'testroli3'@'localhost' IDENTIFIED BY 'qwerty';

GRANT 'jedenRol' to 'testroli1'@'localhost';
GRANT 'dwaRol' to 'testroli2'@'localhost';
GRANT 'trzyRol' to 'testroli3'@'localhost';

SET DEFAULT ROLE 'jedenRol' for 'testroli1'@'localhost';
SET DEFAULT ROLE 'dwaRol' for 'testroli2'@'localhost';
SET DEFAULT ROLE 'trzyRol' for 'testroli3'@'localhost';





