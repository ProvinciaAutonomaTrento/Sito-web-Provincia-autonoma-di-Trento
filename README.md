# Portale istituzionale

[![pipeline status](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/badges/main/pipeline.svg)](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/commits/main)
[![license](https://img.shields.io/badge/license-GPL-blue.svg)](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/-/blob/main/LICENSE)
[![issues](https://img.shields.io/badge/Issues-open-red?logo=gitlab)](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/-/issues)
[![docker](https://img.shields.io/badge/docker-ready-blue?logo=docker)](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/container_registry)
[![developersitalia](https://img.shields.io/badge/forum-italia-blue)](https://forum.italia.it/c/software-open-source-per-la-pa/49)

Sito Istituzionale della Provincia autonoma di Trento, conforme alle linee guida
di [Design Italia](https://docs.italia.it/italia/designers-italia).

## Descrizione

È un modello di portale web avanzato, adatto a promuovere i contenuti di un ente pubblico in modalità multi-canale (pc,
tablet, smartphone, totem). 

Conforme alle Linee Guida di design per i servizi web della PA e sviluppato utilizzando i KIT di Designers Italia, 
il sistema guida i redattori a creare e pubblicare contenuti strutturati, che vengono inseriti una sola volta
nel sistema e possono essere rappresentati automaticamente in gallerie fotografiche, calendari, mappe, grafici interattivi, 
aree riservate. 

In base ai permessi, il contenuto diventa disponibile agli utenti anche attraverso un motore di ricerca unico, dotato di filtri
progressivi e di suggerimenti automatici. 

Strumento ideale per le redazioni distribuite: ciascun redattore detiene permessi e ruoli in base alla competenza.

## Altri riferimenti

Per maggiori informazioni è possibile:

* visitare l'[ambiente di produzione](https://www.provincia.tn.it/)
* consultare il [manuale utente](https://manuale.opencontent.it)

## API

* [Endpoint API dell'ambiente demo](https://www.provincia.tn.it/api/openapi/)
* [Documentazione API](https://www.provincia.tn.it/openapi/doc)

## Stato del progetto

Il prodotto è *stabile* e *production ready* e usato in produzione.
Lo sviluppo avviene in modo costante, sia su richiesta degli Enti utilizzatori, sia su iniziativa autonoma del *maintainer*.

### Come provare il protale

Per avere un ambiente completo di demo è necessario avere Docker installato
sul proprio desktop. Una volta che docker è disponibile clonare il repository e posizionarvisi nella cartella radice. 

A questo punto è sufficiente dare il comando:

```bash
docker compose up -d
```

Il prototipo sarà disponibile ai seguenti indirizzi:

* [https://opencity-pat.localtest.me](https://opencity-pat.localtest.me)
* [https://opencity-pat.localtest.me/backend](https://opencity-pat.localtest.me/backend), per l'area riservata agli
  amministratori

E' possibile fare accesso come amministratore usando l'account:
* utente:  `admin`
* password: `changethispassword`

> Il certificato usato per tutti i domini è un certificato autofirmato valido sul
> dominio `*.localtest.me`,
>quindi al primo collegamento si ottiene un warning
> con quasi tutti i moderni browser.

### Come creare un ambiente di sviluppo locale

Per avere un ambiente completo di sviluppo clonare
il repository e dalla directory principale dare i comandi:

```bash
cp docker/compose-override/docker-compose.override-dev.yml docker-compose.override.yml
docker compose up -d
```

Il prototipo sarà disponibile ai seguenti indirizzi:

* [https://opencity-pat.localtest.me](https://opencity-pat.localtest.me)
* [https://opencity-pat.localtest.me/backend](https://opencity-pat.localtest.me/backend), per l'area riservata agli
  amministratori (l'utente di default con cui si accede è `admin`)
* [http://solr-opencity-pat.localtest.me/solr/](http://solr-opencity-pat.localtest.me/solr/), per l'interfaccia amministrativa
  del motore di ricerca Solr
* [http://traefik.localtest.me](https://traefik.localtest.me) per l'interfaccia amministrativa di Traefik
* [http://mailhog.localtest.me](http://mailhog.localtest.me/), le email inviate in questo ambiente
  sono visibili in questa interfaccia web

Il funzionamento del sistema è configurato per funzionare solo con il protocollo https.
Il certificato usato per tutti i domini è un wildcard self-signed certificate sul dominio `*.localtest.me`, quindi al
primo collegamento verso tutti i domini `*.localtest.me` si riceve l'avviso di connessione non privata.

### Comandi utili

Per vedere i log di tutti container:

    docker compose logs -f --tail 20

o solo uno di essi (ad esempio del container app):

    docker compose logs -f --tail 20 app

Per ottenere una shell all'interno del container PHP, eseguire:

    docker compose exec app bash

Per accedere al database da CLI:

    docker compose exec postgres bash
    bash-4.4# psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB"

Per reindicizzare tutti i contenuti su Solr:

    docker compose exec app bash -c 'php bin/php/updatesearchindex.php'

Per svuotare le cache:

    docker compose exec app bash -c 'php bin/php/ezcache.php --clear-all'

## Informazioni tecniche

L'applicazione è sviluppata sul CMS eZ Publish e consta di codice PHP,
il dump del database contenente una installazione pienamente funzionante
dell'applicativo e i file di configurazione necessari per il motore di
ricerca.

### Struttura del Repository

Il repository contiene i seguenti file:

```
composer.json
composer.lock
```

Il repository non contiene direttamente il codice applicativo, contiene
invece il file delle dipendenze PHP (`composer.json`) che elenca tutti i componenti
necessari all'applicazione: il CMS eZ Publish, le estensioni dello stesso
utilizzate e tra queste l'estensione opencity che implementa le funzionalità
più rilevanti.

Con un comando `composer install` dalla stessa directory è possibile ottenere il codice dell'applicativo
pronto all'uso (si veda
anche [Dockerfile](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/-/blob/main/Dockerfile))

Il file `Dockerfile` e le directory `/docker` e `/conf.d` contengono file di supporto per la creazione delle immagini
Docker dell'applicativo.

Il file `docker-compose.yml` contiene i servizi minimi necessari per l'esecuzione di OpenCity e può essere usato per il
deploy su un singolo host o su un cluster Docker Swarm o Kubernetes.

Il file `docker-compose.override.yml` viene usato automaticamente da docker-compose quando è disponibile: quando si
clona il
repository ad esempio e si hanno tutti i file a disposizione, questo aggiunge alcuni servizi di supporto utili in
ambiente di sviluppo, come una interfaccia web per il database.

### Requisiti

Lo stack minimo di OpenCity è il seguente:

* database PostgreSQL 14
* PHP 7.2
* Solr 4.10.x per il motore di ricerca

Nel file `docker-compose.yml` vengono inoltre utilizzati:

* Varnish per la cache dei contenuti
* Traefik per il routing tra i diversi container
* Minio per lo storage dei file

Le dipendenze del sistema operativo sono risolte nell'immagine da cui origina l'immagine di OpenCity,
ovvero [opencontentcoop/ezpublish](https://hub.docker.com/r/opencontentcoop/ezpublish).
Per i dettagli su questa immagine si rimanda al [repository](https://www.github.com/OpencontentCoop/docker-ezpublish) ad
essa dedicata.

Le configurazioni di Solr sono impostate
nell'[immagine dedicata](https://gitlab.com/opencity-labs/sito-istituzionale/solr)
così come [quelle di Varnish](https://gitlab.com/opencity-labs/sito-istituzionale/varnish)

### Come si esegue la build del repository

Con il comando che segue:

    docker build -t opencity-pat .

si esegue la build dell'immagine docker dell'applicazione: vengono installate le dipendenze
del sistema operativo e successivamente composer e le dipendenze applicative.

### Continuous Integration

Il software ha una pipeline di CI, che esegue una build ad ogni commit, disponibile alla seguente url:

https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/-/pipelines

Le build delle immagini docker sono disponibili
nel [Registry](https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms/container_registry) di GitLab.

## Copyright (C)

Il titolare del software è la Provincia Autonoma di Trento

Il software è rilasciato con licenza aperta ai sensi dell'art. 69 comma 1
del [Codice dell’Amministrazione Digitale](https://cad.readthedocs.io/)

### Maintainer

OpenCity Labs srl è responsabile della progettazione, realizzazione e manutenzione tecnica di OpenCity
