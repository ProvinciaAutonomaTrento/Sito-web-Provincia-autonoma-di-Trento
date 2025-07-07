<?php /*

[CreateSettings]
MimeClassMap[application/pdf]=file
MimeClassMap[application/x-pdf]=file
MimeUploadHandlerMap[image]=OpenPABootstrapItaliaImageUploadHandler

#azzerato per evitare i problemi di upload di file doc o simili di ezodf
MimeUploadHandlerMap[]
MimeUploadHandlerMap[application/zip]=ezzipuploadhandler

[file_ClassSettings]
FileAttribute=file
NameAttribute=name
NamePattern=<original_filename_base>

[image_ClassSettings]
FileAttribute=image
NameAttribute=name
LicenseAttribute=license
NamePattern=<original_filename_base>
DefaultLicenseKeyword=Licenza sconosciuta

*/ ?>
