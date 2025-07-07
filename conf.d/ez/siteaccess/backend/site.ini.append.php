<?php /* #?ini charset="utf-8"?

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

[SiteSettings]
SiteName=Progetto CID
SiteURL=opencity-pat.localtest.me/backend
DefaultPage=content/dashboard
LoginPage=custom

[SiteAccessSettings]
RequireUserLogin=true
ShowHiddenNodes=true
RelatedSiteAccessList[]
RelatedSiteAccessList[]=backend
RelatedSiteAccessList[]=it
RelatedSiteAccessList[]=en
RelatedSiteAccessList[]=es
RelatedSiteAccessList[]=fr
RelatedSiteAccessList[]=de
RelatedSiteAccessList[]=po

[DesignSettings]
SiteDesign=backend
AdditionalSiteDesignList[]
AdditionalSiteDesignList[]=admin2
AdditionalSiteDesignList[]=admin
AdditionalSiteDesignList[]=ezflow
AdditionalSiteDesignList[]=standard

[RegionalSettings]
Locale=ita-IT
ContentObjectLocale=ita-IT
ShowUntranslatedObjects=enabled
SiteLanguageList[]=ita-IT
TextTranslation=enabled

[FileSettings]
VarDir=var/cidpat

[ContentSettings]
CachedViewPreferences[full]=admin_navigation_content=1;admin_children_viewmode=list;admin_list_limit=1
TranslationList=

[MailSettings]
AdminEmail=no-reply@opencontent.it
EmailSender=no-reply@opencontent.it

[UserSettings]
RegistrationEmail=

[InformationCollectionSettings]
EmailReceiver=

[ExtensionSettings]
ActiveAccessExtensions[]
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
