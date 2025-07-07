<?php /* #?ini charset="utf-8"?

[SearchSettings]
DelayedIndexing=enabled

[HTTPHeaderSettings]
CustomHeader=enabled
OnlyForAnonymous=disabled
OnlyForContent=enabled
Cache-Control[]
Cache-Control[/]=public, must-revalidate, max-age=10, s-maxage=259200
HeaderList[]=Vary
Vary[/]=X-User-Context-Hash
Expires[/]=7200
HeaderList[]=X-Instance
X-Instance[/]=cidpat

[ExtensionSettings]
ActiveAccessExtensions[]=ocopenapi
ActiveAccessExtensions[]=ezflow
ActiveAccessExtensions[]=ezgmaplocation
ActiveAccessExtensions[]=ezjscore
ActiveAccessExtensions[]=ezmultiupload
ActiveAccessExtensions[]=ezoe
ActiveAccessExtensions[]=ezwt
ActiveAccessExtensions[]=ocmaintenance
ActiveAccessExtensions[]=occsvimport
ActiveAccessExtensions[]=sqliimport
ActiveAccessExtensions[]=ocinigui
ActiveAccessExtensions[]=openpa
ActiveAccessExtensions[]=ezfind
ActiveAccessExtensions[]=ocsearchtools
ActiveAccessExtensions[]=occhangeobjectdate
ActiveAccessExtensions[]=jcremoteid
ActiveAccessExtensions[]=batchtool
ActiveAccessExtensions[]=ocmap
ActiveAccessExtensions[]=ezprestapiprovider
ActiveAccessExtensions[]=ocopendata
ActiveAccessExtensions[]=ocexportas
ActiveAccessExtensions[]=ezchangeclass
ActiveAccessExtensions[]=ezclasslists
ActiveAccessExtensions[]=eztags
ActiveAccessExtensions[]=ocembed
ActiveAccessExtensions[]=ezstarrating
ActiveAccessExtensions[]=ocrss
ActiveAccessExtensions[]=ocrecaptcha
ActiveAccessExtensions[]=ocbootstrap
ActiveAccessExtensions[]=openpa_bootstrapitalia
ActiveAccessExtensions[]=eztagdescription
ActiveAccessExtensions[]=ocbinarynullparser
ActiveAccessExtensions[]=ocmultibinary
ActiveAccessExtensions[]=ocoperatorscollection
ActiveAccessExtensions[]=ocsupport
ActiveAccessExtensions[]=ezuserformtoken
ActiveAccessExtensions[]=ocgdprtools
ActiveAccessExtensions[]=ezmbpaex
ActiveAccessExtensions[]=ocevents
ActiveAccessExtensions[]=ocopendata_forms
ActiveAccessExtensions[]=ocfoshttpcache
ActiveAccessExtensions[]=oceasyontology
ActiveAccessExtensions[]=occhart
ActiveAccessExtensions[]=cjw_newsletter
ActiveAccessExtensions[]=openpa_newsletter
ActiveAccessExtensions[]=oceditorialstuff
ActiveAccessExtensions[]=ocwebhookserver
ActiveAccessExtensions[]=occustomfind
ActiveAccessExtensions[]=octranslate
ActiveAccessExtensions[]=octranslate_deepl

[DatabaseSettings]
DatabaseImplementation=ezpostgresql
Server=db.saasopenpa-astratto
Port=
User=openpa
Password=open1oc
Database=cidpat
Charset=utf-8
Socket=disabled
SQLOutput=disabled

[Session]
SessionNamePerSiteAccess=disabled

[SiteSettings]
SiteName=Provincia autonoma di Trento
SiteURL=opencity-pat.localtest.me/en
LoginPage=embedded
AdditionalLoginFormActionURL=https://cid-pat.myopen.city/backend/user/login

[SiteAccessSettings]
RequireUserLogin=false
ShowHiddenNodes=false
RelatedSiteAccessList[]
RelatedSiteAccessList[]=backend
RelatedSiteAccessList[]=it
RelatedSiteAccessList[]=en
RelatedSiteAccessList[]=es
RelatedSiteAccessList[]=fr
RelatedSiteAccessList[]=de
RelatedSiteAccessList[]=po

[DesignSettings]
SiteDesign=bootstrapitalia2110
AdditionalSiteDesignList[]
AdditionalSiteDesignList[]=bootstrapitalia284
AdditionalSiteDesignList[]=bootstrapitalia2
AdditionalSiteDesignList[]=bootstrapitalia
AdditionalSiteDesignList[]=ocbootstrap4
AdditionalSiteDesignList[]=ocbootstrap
AdditionalSiteDesignList[]=standard

[RegionalSettings]
Locale=eng-GB
HTTPLocale=en
ContentObjectLocale=eng-GB
ShowUntranslatedObjects=disabled
SiteLanguageList[]
SiteLanguageList[]=eng-GB
SiteLanguageList[]=ita-IT
SiteLanguageList[]=ger-DE
SiteLanguageList[]=fre-FR
SiteLanguageList[]=por-BR
SiteLanguageList[]=esl-ES
TextTranslation=enabled
TranslationSA[]
TranslationSA[it]=ITA
TranslationSA[en]=ENG
TranslationSA[de]=GER
TranslationSA[fr]=FRA
TranslationSA[es]=ESP
TranslationSA[po]=POR

[MailSettings]
AdminEmail=no-reply@opencontent.it
EmailSender=no-reply@opencontent.it

[FileSettings]
VarDir=var/cidpat

[ContentSettings]
TranslationList=

[SiteAccessRules]
Rules[]
Rules[]=access;enable
Rules[]=moduleall
Rules[]=access;disable
Rules[]=module;ezinfo/about
Rules[]=module;ezinfo/copyright
Rules[]=module;ezinfo/copyright
Rules[]=module;setup/extensions
Rules[]=module;content/tipafriend
Rules[]=module;settings/edit
Rules[]=module;user/register
*/ ?>
