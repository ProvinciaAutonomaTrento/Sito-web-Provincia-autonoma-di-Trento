<?php /* #?ini charset="utf-8"?

[InstanceSettings]
NomeAmministrazioneAfferente=Governo Italiano
UrlAmministrazioneAfferente=https://www.governo.it

[CreditsSettings]
Name=OpenCity
Url=https://opencityitalia.it/
Title=OpenCity Italia - Servizi pubblici digitali per la tua città
CodeVersion=dev-
CodeUrl=https://gitlab.com/opencity-labs/sito-istituzionale/cid-pat/cms
IsOpenCityFork=true

[Stili]
UsaNeiBlocchi=enabled
Nodo_NomeStile[]
Nodo_NomeStile[]=0;bg-100
Nodo_NomeStile[]=0;section section-muted section-inset-shadow pb-5

[GeneralSettings]
theme=default
favicon_src=base64
favicon=data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///8AAAAhAAAAKQAAADEACAgxAAgQMQAAADkAAABCAAAIQgAYGEIAISFKABghUgAhIVIAKSlSABAIWgAhIVoAIRhjADE5awA5QnMAOTF7ADE5hABSUoQAY2OMAEpKlABjY5QAa2uUAFJanABra5wAa3OcAFJSpQBCWqUAWlqlAEpjpQBza6UAe3ulAGNjrQBza60AWnOtAGtrtQBza7UAY3u1AHt7tQCEhLUAhIy1AHOctQB7c70AY5y9AGulvQB7pb0AhLW9AIy1vQCEhMYAjJzGAGulxgClxsYAe3vOAJSUzgCclM4AlK3OAKW9zgCMxs4Ata3WAITG1gCtztYAnNbWAM7W1gClnN4Ata3eAL213gDGtd4AxsbeAM7G3gCUzt4Apc7eAM7O3gCt1t4AnKXnAL215wDGvecAzsbnAMbO5wDOzucAxr3vAM7G7wDOzu8A1s7vANbW7wDW5+8Avcb3ANbW9wDO5/cA1u/3AOf39wC1vf8Avb3/AMbG/wDGzv8Azs7/AM7W/wDe1v8A3t7/AOfe/wDv9/8A9/f/AP/3/wDe//8A5///AO///wD3//8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABoZ0RPaGgAAAAAAAAAAABnZz1NTkRsaAAAAAAAAAAAZz0hBw4zRWgAAAAAAAAAaE8hLR03IylZaAAAAAAAAGc5HyYUFxonPWcAAGgAAABkQg8IAwMHEjhmaAAAAABoRhsIDAEEDwgqRwBoAAAAaEYcEmIFCmQRK0ZoAAAAAGhHFgxYFQ1TCiJGaAAAAABoRlYYYExkWRlURgAAbAAAAGZGUl1dXV9gVWcAAAAAbABsZjolICAlNGZsAAAAAAAAbFosLy8uLyxabAAAAAAAAGY2SUA8PkhJO1wAAAAAAGxBV1dpMTFpV1tBAABsAABsbGxraj8/aWtsbGxsAAAA//cAAP//AABh7wAA//8AAP//AABtjwAA//8AAP//AAD//wAAQ/8AAP//AAD//wAA//8AAP//AAD//wAAyoQ=
AutoDiscoverProfileLinks=disabled
FooterAutoMenu=enabled
ShowMainContacts=disabled
ShowUeLogo=disabled
tag_line=
AdditionalFooterObjectLinks[]
StaticLogoUrl=/logo

[WebsiteToolbar]
ShowMediaRoot=enabled
ShowUsersRoot=disabled
ShowEditorRoles=enabled

[MotoreRicerca]
IncludiClassi[]=public_policy
IncludiClassi[]=topic
IncludiClassi[]=pagina_sito
IncludiClassi[]=faq
IncludiClassi[]=frontpage
IncludiClassi[]=article
IncludiClassi[]=organization
IncludiClassi[]=banner
IncludiClassi[]=dataset
IncludiClassi[]=faq_group
IncludiClassi[]=place
IncludiClassi[]=insight
IncludiClassi[]=channel
IncludiClassi[]=selection_process
IncludiClassi[]=document
IncludiClassi[]=event
IncludiClassi[]=public_private_organization
IncludiClassi[]=public_person
IncludiClassi[]=public_project
IncludiClassi[]=public_service
IncludiClassi[]=banner
IncludiClassi[]=link


[CookiesSettings]
Consent=advanced

[TopMenu]
LimitePrimoLivello=30
LimiteSecondoLivello=30
LimiteTerzoLivello=30
NascondiNodi[]
#Approfondimenti
NascondiNodi[]=271
#Notizie
NascondiNodi[]=93
#Luoghi
NascondiNodi[]=96
NascondiNodi[]=64633
# dati e statistiche
NascondiAlberturaNodi[]=252

[SideMenu]
NascondiNodi[]
NascondiNodi[]=271
NascondiNodi[]=93
NascondiNodi[]=96
NascondiNodi[]=64633
NascondiAlberturaNodi[]=252

[AttributeHandlers]
UniqueStringCheck[]=document/has_code
UniqueStringCheck[]=lotto/cig
UniqueStringCheck[]=public_service/identifier
InputValidators[]
InputValidators[]=DocumentFileValidator
InputValidators[]=PublicServiceStatusValidator
InputValidators[]=UniqueStringValidator
InputValidators[]=EventCostsValidator
InputValidators[]=OneOfFieldValidator:public_service;has_temporal_coverage,has_processing_time_text
MainContentFields[]
MainContentFields[]=name
MainContentFields[]=alternative_name
MainContentFields[]=alt_name
MainContentFields[]=type
MainContentFields[]=identifier
MainContentFields[]=other_service_code
MainContentFields[]=content_type
MainContentFields[]=status_note
MainContentFields[]=has_public_event_typology
MainContentFields[]=document_type
MainContentFields[]=announcement_type
MatrixColumnSuggestionByTag[]
MatrixColumnSuggestionByTag[public_project-unique_project_codes-type]=Tipo CUP

[ViewSettings]
FaqTreeView=enabled
ChildrenFilter=enabled
ShowYearInEventCard=enabled
ShowTitleInSingleBlock=enabled
ForceShowServiceChannel=enabled

[HideRelationsTitle]
AttributeIdentifiers[]
#AttributeIdentifiers[]=has_spatial_coverage
#AttributeIdentifiers[]=has_online_contact_point
AttributeIdentifiers[]=opening_hours_specification
AttributeIdentifiers[]=has_channel
AttributeIdentifiers[]=temporal

[EditSettings]
AvoidInContextCreation[]=public_service/has_module_input
AvoidInContextCreation[]=public_service/is_compliant_with_rule
AvoidInContextCreation[]=public_service/has_attachment
AvoidInContextCreation[]=public_service/requires_service
AvoidInContextCreation[]=public_service/related_service

*/ ?>
