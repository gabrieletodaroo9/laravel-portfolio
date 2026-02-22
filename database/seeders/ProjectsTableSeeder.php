<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('projects')->delete();
        
        DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Bandcamp',
                'description' => 'In questo progetto ho realizzato una replica funzionale di una piattaforma di streaming musicale, concentrandomi sulla gestione di layout complessi e sull\'organizzazione dei contenuti. Attraverso questo esercizio, ho imparato a strutturare una pagina web in modo professionale, utilizzando una colonna principale per il catalogo degli album e una sidebar dedicata ai dettagli dell\'artista e al player audio. Ho approfondito la creazione di componenti ripetibili come le card musicali, curando l\'interattività tramite pulsanti di riproduzione e sistemi popover per i controlli sonori. Lo sviluppo mi ha permesso di acquisire una maggiore padronanza nell\'uso del CSS per il posizionamento degli elementi e nella gestione della gerarchia visiva, assicurando che l\'interfaccia resti intuitiva e armoniosa. Ho inoltre integrato risorse esterne come icone e font personalizzati, riuscendo a bilanciare estetica e funzionalità in un\'unica esperienza utente fluida e moderna.',
                'link_github' => 'https://github.com/gabrieletodaroo9/html-css-bandcamp',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 11:36:44',
                'type_id' => 1,
                'slug' => 'bandcamp',
                'img_url' => 'projects/images/PonhlBeTfahJTVF7ERUsRkXPcNjIDMz1tF0HMyDf.png',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Discord',
            'description' => 'Con questo progetto ho imparato a costruire una pagina web divisa in sezioni ordinate, replicando la struttura di Discord. Ho fatto pratica con l\'allineamento di testi e immagini affiancati, imparando a invertire la loro posizione per rendere il sito più dinamico e piacevole da guardare. Ho capito come gestire elementi importanti come il "Jumbotron" (la parte iniziale con il titolo grande), i menu del footer organizzati per colonne e i pulsanti personalizzati. Questo esercizio mi è servito molto per imparare a creare un layout pulito e professionale, curando bene gli spazi e i colori per far apparire il sito moderno e facile da navigare su ogni schermo.',
                'link_github' => 'https://github.com/gabrieletodaroo9/htmlcss-discord',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 11:45:57',
                'type_id' => 1,
                'slug' => 'discord',
                'img_url' => 'projects/images/8U6DqkkV1knHm0yLtzHzSqYmak12ljZ9d6ECN7u3.png',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Dropbox',
            'description' => 'Con questo progetto ho imparato a creare layout professionali basati su griglie di prezzi e tabelle comparative. Mi sono esercitato nella costruzione di interfacce strutturate, imparando a gestire diversi tipi di card (singole, per team o aziendali) e a organizzare i contenuti in colonne precise. Ho approfondito l’uso di elementi interattivi come i pulsanti "radio" per la scelta dei piani e l\'integrazione di icone FontAwesome per rendere le informazioni più intuitive.',
                'link_github' => 'https://github.com/gabrieletodaroo9/htmlcss-dropbox',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 11:52:10',
                'type_id' => 1,
                'slug' => 'dropbox',
                'img_url' => 'projects/images/UCyRtWG20O1lwgeBgADC6ShsUqK5HK0TTNL7HRVE.png',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Biglietto treno form',
            'description' => 'Con questo progetto ho mosso i primi passi con JavaScript, imparando a rendere una pagina web dinamica e interattiva. Ho realizzato un calcolatore che, partendo dai dati inseriti dall\'utente in un form (come chilometri ed età), calcola automaticamente il prezzo del biglietto applicando sconti specifici per minorenni o over 65. Attraverso questo esercizio, ho capito come recuperare i valori dai campi di input, come gestire gli eventi al click del mouse e come mostrare i risultati direttamente nella pagina (facendo apparire il biglietto finale). Ho anche utilizzato il framework Bootstrap per dare uno stile rapido e pulito all\'interfaccia, imparando a gestire semplici logiche di calcolo matematico applicate al web.',
                'link_github' => 'https://github.com/gabrieletodaroo9/js-biglietto-treno-form',
                'created_at' => '2026-02-22 11:58:36',
                'updated_at' => '2026-02-22 11:59:18',
                'type_id' => 1,
                'slug' => 'biglietto-treno-form',
                'img_url' => 'projects/images/9OYIq2XkdWenpgygHoycTh3iKVt9Aa0o372BOdAt.png',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Photo blog',
                'description' => 'Con questo progetto ho fatto un passo avanti nell\'uso di JavaScript, imparando a generare contenuti dinamici senza scriverli manualmente nell\'HTML. Ho utilizzato il linguaggio per costruire da zero la struttura delle card e popolarle con immagini e testi. Ho anche implementato una funzione di "overlay", che permette di cliccare su una foto per aprirla a tutto schermo in una finestra dedicata.',
                'link_github' => 'https://github.com/gabrieletodaroo9/js-photo-blog',
                'created_at' => '2026-02-22 12:05:41',
                'updated_at' => '2026-02-22 12:05:41',
                'type_id' => 1,
                'slug' => 'photo-blog',
                'img_url' => 'projects/images/oEgCPx2gjirjCOGPWysWzZZNtg7AfxhCtfEdtYLf.png',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Dc Comics',
            'description' => 'Con questo esercizio sono passato allo sviluppo a componenti utilizzando React. Ho replicato il sito di DC Comics strutturando l\'applicazione in sezioni modulari e riutilizzabili. La sfida principale è stata la gestione dei dati: invece di scrivere tutto nel codice HTML, ho organizzato le informazioni (menu, lista dei fumetti, link social) in grandi oggetti e array di JavaScript, passandoli poi ai vari componenti tramite le props. Questo mi ha permesso di capire come scalare un\'applicazione complessa, separando la logica dei dati dalla visualizzazione estetica, e come gestire dinamicamente il caricamento di immagini e contenuti specifici per ogni sezione.',
                'link_github' => 'https://github.com/gabrieletodaroo9/react-dc-comics',
                'created_at' => '2026-02-22 12:11:12',
                'updated_at' => '2026-02-22 12:11:20',
                'type_id' => 1,
                'slug' => 'dc-comics',
                'img_url' => 'projects/images/emkJ2YZkNS7I3kc6H6tOpJ8Fzu9GK5YcAa5NiqNa.png',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'My journal',
            'description' => 'Con questo progetto ho approfondito la gestione dello stato in React. Ho implementato la logica per aggiungere nuovi articoli a una lista, modificarne il titolo in tempo reale e rimuoverli definitivamente. La sfida principale è stata gestire i diversi stati dell\'interfaccia: il passaggio dalla visualizzazione del testo al modulo di modifica e la sincronizzazione dei dati. Questo esercizio mi ha permesso di padroneggiare l\'uso degli hook come useState, la manipolazione degli array (tramite map e filter) e la comunicazione tra componenti genitori e figli attraverso le funzioni passate come props.',
                'link_github' => 'https://github.com/gabrieletodaroo9/react-form',
                'created_at' => '2026-02-22 12:16:06',
                'updated_at' => '2026-02-22 12:16:06',
                'type_id' => 1,
                'slug' => 'my-journal',
                'img_url' => 'projects/images/3pMUMubEaTfG2riyYfmidRWQVYVhF7zUfq771cDM.png',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Actorpedia',
            'description' => 'In questo progetto ho affrontato l\'integrazione di API esterne in un\'applicazione React, imparando a gestire le operazioni asincrone. Utilizzando la libreria Axios, ho effettuato chiamate HTTP per recuperare dati da due diversi endpoint (attori e attrici). La parte cruciale dell\'esercizio è stata l\'uso combinato degli hook useEffect e useState: il primo per avviare il caricamento dei dati al montaggio della pagina, e il secondo per memorizzare i risultati. Ho inoltre implementato una logica di sincronizzazione che, non appena riceve le risposte dalle API, unisce i due array in un\'unica collezione per mostrarli globalmente nell\'interfaccia.',
                'link_github' => 'https://github.com/gabrieletodaroo9/react-api',
                'created_at' => '2026-02-22 12:21:17',
                'updated_at' => '2026-02-22 12:21:17',
                'type_id' => 1,
                'slug' => 'actorpedia',
                'img_url' => 'projects/images/9zYYFGvbHpRnArCFP8X2LmYNBi9j6gNIr5wIlNHS.png',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Amazonado',
            'description' => 'Con il progetto Amazonado ho realizzato una piattaforma e-commerce completa, segnando un salto di qualità nella gestione di applicazioni React professionali. Il cuore del progetto è l\'implementazione del React Router DOM, che gestisce la navigazione tra diverse sezioni e le rotte dinamiche per le pagine di dettaglio del singolo prodotto. La vera svolta metodologica è stata l\'introduzione di React Context: ho imparato a raggruppare la logica e i dati (come filtri di ricerca, categorie e risultati API) in un unico contenitore globale. Questo mi ha permesso di eliminare il passaggio manuale delle props attraverso i vari livelli della struttura, rendendo i dati accessibili ovunque in modo fluido. L\'app integra chiamate asincrone con Axios, gestione di layout differenziati (inclusa la gestione degli errori) e un sistema di filtraggio avanzato in tempo reale, combinando architettura pulita e un\'esperienza utente moderna e reattiva.',
                'link_github' => 'https://github.com/gabrieletodaroo9/react-context-api',
                'created_at' => '2026-02-22 12:25:39',
                'updated_at' => '2026-02-22 12:29:44',
                'type_id' => 1,
                'slug' => 'amazonado',
                'img_url' => 'projects/images/leecCkrRQ0LzVPrROxujJVVl27U1KRlVBKRLFxyp.png',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Boolfix',
                'description' => 'Con questo progetto ho realizzato un applicativo web ispirato alle popolari piattaforme di streaming. Attraverso la creazione di un GeneralProvider, ho centralizzato l\'intera logica di comunicazione con le API esterne, rendendo i dati relativi a film, serie TV e contenuti popolari immediatamente disponibili in ogni sezione dell\'app.',
                'link_github' => 'https://github.com/gabrieletodaroo9/react-boolflix',
                'created_at' => '2026-02-22 13:22:00',
                'updated_at' => '2026-02-22 13:22:00',
                'type_id' => 1,
                'slug' => 'boolfix',
                'img_url' => 'projects/images/B0dsRzwKvntWtycqz0G3fcpjh42E9SiNLcP7TyTq.png',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Boolroad',
            'description' => 'Applicativo web realizzato in team (4 persone) per ottimizzare la gestione logistica di un\'azienda di viaggi. Il sistema permette agli accompagnatori di accedere in tempo reale ai dati sensibili e aggiornati dei viaggiatori relativi a ogni specifico tour. Ho contribuito attivamente sia allo sviluppo del Backend, partecipando alla modellazione del database e delle API per la gestione dei flussi di dati, sia al Frontend, curando l\'interfaccia utente per rendere la consultazione dei dati rapida e intuitiva. Questo progetto ha consolidato la mia capacità di lavorare in un ambiente collaborativo complesso, gestendo il coordinamento tra client e server e garantendo la coerenza delle informazioni in tempo reale.',
                'link_github' => 'https://github.com/gabrieletodaroo9/bool-road',
                'created_at' => '2026-02-22 13:52:08',
                'updated_at' => '2026-02-22 14:28:36',
                'type_id' => 1,
                'slug' => 'boolroad',
                'img_url' => 'projects/images/sDcbV41us2nk0hpBPokpOsgmMZvyfIRLxZO9xUdi.png',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Stardisk',
                'description' => 'Questo è il mio primo progetto Fullstack, realizzato in team con altri 5 colleghi, dove abbiamo costruito un e-commerce completo per la vendita di vinili. È stato un lavoro ambizioso che mi ha visto coinvolto su entrambi i fronti dello sviluppo: nel Backend, ho partecipato alla progettazione del database e alla creazione delle API per gestire il catalogo musicale e gli ordini; nel Frontend, ho lavorato con React per rendere l\'interfaccia dinamica, collegandola ai dati reali del server. La vera sfida è stata il coordinamento del team tramite Git e la perfetta integrazione tra le due parti dell\'applicativo. Grazie a questa esperienza, ho capito come i dati viaggiano dal database all\'interfaccia utente, consolidando le mie basi di architettura web e imparando a gestire un flusso di lavoro professionale e collaborativo.',
                'link_github' => 'https://github.com/gabrieletodaroo9/stardisk-sito-web',
                'created_at' => '2026-02-22 14:02:12',
                'updated_at' => '2026-02-22 14:28:57',
                'type_id' => 3,
                'slug' => 'stardisk',
                'img_url' => 'projects/images/jaBwDQiEiKV6TZxQ839BThvsvzxUGYlnDrHaUtMi.png',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Password Generator',
                'description' => 'Applicativo backend che genera password sicure in modo dinamico. Ho utilizzato PHP per creare una logica che genera stringhe casuali combinando lettere, numeri e simboli. Il progetto mi è servito per imparare a gestire le funzioni, i cicli e il passaggio di dati tra form e server.',
                'link_github' => 'https://github.com/gabrieletodaroo9/php-strong-password-generator',
                'created_at' => '2026-02-22 14:20:11',
                'updated_at' => '2026-02-22 14:20:11',
                'type_id' => 2,
                'slug' => 'password-generator',
                'img_url' => 'projects/images/n6cYaLXxS3VBBLrrH1ElFiJ74OQBh3vtIPzE6CnO.png',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Boolify',
                'description' => 'In questo esercizio ho creato una galleria dinamica di album musicali. Utilizzando un form, ho implementato la logica per aggiungere nuove card in tempo reale: l\'utente inserisce i dati e l\'URL di un\'immagine e la card viene generata istantaneamente nella pagina. Questo progetto mi è servito per gestire lo stato degli array e la sincronizzazione tra input dell\'utente e interfaccia grafica.',
                'link_github' => 'https://github.com/gabrieletodaroo9/php-dischi-json',
                'created_at' => '2026-02-22 14:25:17',
                'updated_at' => '2026-02-22 14:25:17',
                'type_id' => 2,
                'slug' => 'boolify',
                'img_url' => 'projects/images/QPYyzppAGo4wzyB8X1oqiKIkd2M7P7DjqpD2GrTx.png',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Phpflix',
                'description' => 'Il mio primo progetto multipagina realizzato interamente in PHP puro. Ho sviluppato un catalogo film dinamico dove ogni card conduce a una pagina di dettaglio specifica, gestita tramite il recupero dei dati lato server. L\'applicativo include un sistema di gestione dei generi e un form di contatto interattivo che permette agli utenti di inviare suggerimenti e consigli, processando i dati tramite PHP. È stato un esercizio fondamentale per capire come strutturare un sito dinamico senza l\'ausilio di framework, gestendo la logica delle rotte e l\'elaborazione dei form lato backend.',
                'link_github' => 'https://github.com/gabrieletodaroo9/ex-php8-oop-movie',
                'created_at' => '2026-02-22 14:33:01',
                'updated_at' => '2026-02-22 14:33:01',
                'type_id' => 2,
                'slug' => 'phpflix',
                'img_url' => 'projects/images/PRVULY43bXFkI1QCB94fncR7c6mtEMy0dOOB262g.png',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Laravel Dc Comics',
                'description' => 'In questo progetto ho replicato il layout del sito DC Comics migrando la logica da un approccio frontend puro a una struttura Fullstack con Laravel. Ho utilizzato Blade per gestire la modularità della pagina, creando layout ereditari e componenti riutilizzabili. Il catalogo dei fumetti viene gestito tramite le rotte di Laravel, che passano i dati direttamente alle view, permettendo una generazione dinamica del contenuto lato server.',
                'link_github' => 'https://github.com/gabrieletodaroo9/laravel-comics',
                'created_at' => '2026-02-22 14:42:36',
                'updated_at' => '2026-02-22 14:42:36',
                'type_id' => 2,
                'slug' => 'laravel-dc-comics',
                'img_url' => 'projects/images/zISHmyv5AYM8lAagTrnck5o85MQsunBdfRpEkPPn.png',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'My Films',
                'description' => 'In questo progetto ho mosso i primi passi nella gestione strutturata dei database relazionali utilizzando Laravel. Per la prima volta, ho abbandonato l\'inserimento manuale dei dati a favore delle Migrations, definendo la struttura della tabella film direttamente tramite codice. Ho inoltre implementato dei Seeders per popolare automaticamente il database con dati di test, garantendo un ambiente di sviluppo pronto all\'uso e facilmente replicabile. Questo esercizio è stato essenziale per comprendere il controllo di versione del database e l\'automazione del flusso di lavoro backend.',
                'link_github' => 'https://github.com/gabrieletodaroo9/laravel-migration-seeder',
                'created_at' => '2026-02-22 14:48:37',
                'updated_at' => '2026-02-22 14:48:37',
                'type_id' => 2,
                'slug' => 'my-films',
                'img_url' => 'projects/images/SsIXXsoSrFXrFUsKl34eNgdmIKEC5CbJCcSRZoLA.png',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Portfolio',
            'description' => 'Questo progetto rappresenta il mio hub professionale ed è costruito con un\'architettura a responsabilità separate. Il Frontend è una Single Page Application (SPA) realizzata in React, che gestisce la navigazione fluida tramite React Router per mostrare i miei progetti e le mie competenze. Il Backend, invece, è affidato a Laravel, che funge da solida infrastruttura per la Dashboard di amministrazione (protetta e privata) e fornisce i dati al frontend tramite API RESTful. Questa struttura mi ha permesso di sperimentare la comunicazione asincrona tra due tecnologie diverse, garantendo prestazioni elevate e una gestione dei contenuti dinamica e scalabile.',
                'link_github' => 'https://github.com/gabrieletodaroo9/laravel-portfolio',
                'created_at' => '2026-02-22 14:53:43',
                'updated_at' => '2026-02-22 14:53:43',
                'type_id' => 3,
                'slug' => 'portfolio',
                'img_url' => 'projects/images/iMPTsnV7abh9607ztRuUNm08YgB9RrvOD5ZLAQzg.png',
            ),
        ));
        
        
    }
}