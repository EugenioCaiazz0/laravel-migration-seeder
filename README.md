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
*Svolgimento*
- creare una migration tramite terminale con il comando *php artisan make:migration create_trains_table*
- compilare i campi che servono nella tabella e creare un database direttamente tramite *php artisan migrate*
- creazione di update tramite *php artisan make:migration update_trains_table --table=trains* 
- verifica del corretto funzionamento dell'update e del rollback


=== 
*Parte 2*
- Continuare popolando la tabella con il seeder.
- Realizzare quindi un seeder con il Faker per l’inserimento di treni
- Stampare poi in una view l’elenco dei treni

*BONUS*
- Paginare i risultati
- Creare un nuovo seeder che inserisca nel db i dati presenti nel file csv allegato


=== 
*Svolgimento*
- creare un seeder con il comando *php artisan make:seeder TrainsTableSeeder*
- creare un model di riferimento con il comando *php artisan make:model Train*
- una volta creato l'elemento da istanziare nel seeder, popolare il db con un ciclo e inserire il comando *php artisan db:seed --class=TrainsTableSeeder*
- creare faker con info della tabella e iterarlo x volte

