# Basic classroom media

Basic Classroom Media è una semplice applicazione web per la gestione di file multimediali in un contesto scolastico. Consente agli utenti di caricare, visualizzare ed eliminare file multimediali associati a specifici argomenti.

## Funzionalità

- Autenticazione degli utenti: Gli utenti possono creare un account, effettuare il login e fare il logout.
- Caricamento di media: Gli utenti possono caricare file multimediali con titoli, descrizioni e tag di argomento.
- Visualizzazione dei media: Gli utenti possono visualizzare un elenco di file multimediali caricati insieme ai relativi dettagli.
- Eliminazione dei media: Gli utenti con le autorizzazioni appropriate possono eliminare i file multimediali caricati.

## Tecnologie utilizzate

- PHP: Linguaggio di scripting lato server utilizzato per lo sviluppo del backend.
- MySQL: Sistema di gestione di database relazionali per l'archiviazione dei dati.
- HTML/CSS: Markup e stile per il frontend.
- JavaScript: Scripting lato client per funzionalità interattive (non presente negli snippet di codice forniti).

## Installazione

1. Clonare il repository:
2. Configurare il database:

- Creare un nuovo database MySQL.
- Importare il file `database.sql` fornito nel repository per configurare le tabelle necessarie.

3. Configurare l'applicazione:

- Aprire il file `connect.php` e aggiornare i dettagli della connessione al database (`$servername`, `$username`, `$password`, `$dbname`) con le proprie credenziali del database.

4. Avviare l'applicazione:

- Posizionare i file del progetto nella directory radice del server web.
- Accedere all'applicazione tramite il browser web.

## Utilizzo

1. Registrare un nuovo account o effettuare il login se si possiede già un account.
2. Caricare file multimediali utilizzando la funzionalità "Nuovo Materiale".
3. Visualizzare e gestire i file multimediali caricati nella sezione "Visualizza Materiali".
4. Eseguire il logout quando si ha finito di utilizzare l'applicazione.

## Contributi

I contributi a Basic Classroom Media sono i benvenuti! Se desideri contribuire, segui questi passaggi:

1. Fork del repository.
2. Crea un nuovo branch per la tua modifica o correzione di bug.
3. Effettua le modifiche e committale.
4. Pusha le tue modifiche sul tuo fork.
5. Sottometti una pull request al repository principale.

## Licenza

Questo progetto è distribuito con la licenza [MIT License](LICENSE).

