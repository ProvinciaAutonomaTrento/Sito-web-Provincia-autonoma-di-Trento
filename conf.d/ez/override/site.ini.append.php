<?php /* #?ini charset="utf-8"?

[DatabaseSettings]
DatabaseImplementation=ezpostgresql
Server=postgres
Port=
User=
Password=
Database=
Charset=utf-8
Socket=disabled
SQLOutput=disabled

[ExpiryHandler]
ExpiryFilePerSiteAccess=disabled

[FileSettings]
VarDir=

[SiteSettings]
SiteName=
SiteURL=
DefaultAccess=it
SiteList[]
SiteList[]=backend
SiteList[]=en
SiteList[]=es
SiteList[]=fr
SiteList[]=de
SiteList[]=po
SiteList[]=it

[HTTPHeaderSettings]
CustomHeader=enabled
OnlyForAnonymous=disabled
OnlyForContent=enabled
Cache-Control[]
Cache-Control[/]=public, max-age=3000, s-maxage=259200
HeaderList[]=Vary
Vary[/]=X-User-Context-Hash
HeaderList[]=X-Powered-By
X-Powered-By[/]=OpencityItalia
HeaderList[]=X-Instance
X-Instance[/]=example

[VarnishSettings]
VarnishHostName=
VarnishPort=
VarnishServers[]

[SearchSettings]
LogSearchStats=disabled

[RoleSettings]
PolicyOmitList[]=user/login
PolicyOmitList[]=user/logout
PolicyOmitList[]=user/do_logout
PolicyOmitList[]=user/activate
PolicyOmitList[]=user/success
PolicyOmitList[]=user/forgotpassword
PolicyOmitList[]=layout
PolicyOmitList[]=switchlanguage
PolicyOmitList[]=ezjscore/call
PolicyOmitList[]=openpa/classdefinition
PolicyOmitList[]=openpa/calendar
PolicyOmitList[]=openpa/object
PolicyOmitList[]=openpa/data
PolicyOmitList[]=robots.txt
PolicyOmitList[]=openpa/cookie
PolicyOmitList[]=feed/rss
PolicyOmitList[]=feed/list
PolicyOmitList[]=exportas/csv
PolicyOmitList[]=exportas/xml
PolicyOmitList[]=exportas/custom
PolicyOmitList[]=ezinfo/is_alive
PolicyOmitList[]=newsletter/configure
PolicyOmitList[]=newsletter/archive
PolicyOmitList[]=userpaex/password
PolicyOmitList[]=userpaex/forgotpassword
PolicyOmitList[]=opendata/api
PolicyOmitList[]=opendata/console
PolicyOmitList[]=opendata/analyzer
PolicyOmitList[]=opendata/help
PolicyOmitList[]=recurrence/parse
PolicyOmitList[]=_fos_user_context_hash
PolicyOmitList[]=bootstrapitalia/avatar

[Session]
SessionNameHandler=custom
CookieSecure=true
CookieHttponly=true
Handler=ezpSessionHandlerPHP
ForceStart=disabled

[SiteAccessSettings]
RemoveSiteAccessIfDefaultAccess=enabled
ForceVirtualHost=true
DebugAccess=enabled
CheckValidity=false
MatchOrder=uri
URIMatchType=map
URIMatchMapItems[]
URIMatchMapItems[]=it;it
URIMatchMapItems[]=backend;backend
URIMatchMapItems[]=en;en
URIMatchMapItems[]=es;es
URIMatchMapItems[]=fr;fr
URIMatchMapItems[]=de;de
URIMatchMapItems[]=po;po
RelatedSiteAccessList[]
RelatedSiteAccessList[]=backend
RelatedSiteAccessList[]=en
RelatedSiteAccessList[]=es
RelatedSiteAccessList[]=fr
RelatedSiteAccessList[]=it
RelatedSiteAccessList[]=de
RelatedSiteAccessList[]=po
AvailableSiteAccessList[]
AvailableSiteAccessList[]=backend
AvailableSiteAccessList[]=en
AvailableSiteAccessList[]=es
AvailableSiteAccessList[]=fr
AvailableSiteAccessList[]=it
AvailableSiteAccessList[]=de
AvailableSiteAccessList[]=po

[MailSettings]
TransportAlias[smtp]=OpenPASMTPTransport
Transport=smtp
TransportConnectionType=tls
TransportServer=
TransportPort=
TransportUser=
TransportPassword=
AdminEmail=
EmailSender=
SenderHost=
BlackListEmailDomains[]
BlackListEmailDomainSuffixes[]

[InformationCollectionSettings]
EmailReceiver=

[UserSettings]
LogoutRedirect=/?logout
RegistrationEmail=
MaxNumberOfFailedLogin=10

[TimeZoneSettings]
TimeZone=Europe/Rome

[RegionalSettings]
TextTranslation=enabled

[DebugSettings]
QuickSettingsList[]
DebugToolbar=disabled
AlwaysLog[]=error
AlwaysLog[]=warning

[UserFormToken]
CookieHttponly=true
CookieSecure=1

[SiteAccessRules]
Rules[]
Rules[]=access;enable
Rules[]=moduleall
Rules[]=access;disable
Rules[]=module;ezinfo/about
Rules[]=module;setup/extensions
Rules[]=module;content/tipafriend
Rules[]=module;settings/edit
Rules[]=module;user/register
Rules[]=module;user/forgotpassword

[Event]
Listeners[]=content/download@OpenPADownloadFilter::addXRobotsTagHeader

*/ ?>
