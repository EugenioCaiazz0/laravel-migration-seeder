===

1) Creiamo una tabella trains e relativa Migration 
Ogni treno dovrà avere:
 - Azienda
 - Stazione di partenza
 - Stazione di arrivo
 - Orario di partenza
 - Orario di arrivo
 - Codice Treno
 - Numero Carrozze
 - In orario
 - Cancellato

2) Oltre alla migration di creazione della tabella aggiungente una migration di update con rollback funzionante


===
*** Svolgimento ***
- creare una migration tramite terminale con il comando *php artisan make:migration create_trains_table*
- compilare i campi che servono nella tabella e creare un database direttamente tramite *php artisan migrate*
- creazione di update tramite *php artisan make:migration update_trains_table --table=trains* 
- verifica del corretto funzionamento dell'update e del rollback
