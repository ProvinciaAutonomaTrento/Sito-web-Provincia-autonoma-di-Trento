<?php /* #?ini charset="utf-8"?

[ClusteringSettings]
FileHandler=eZDFSFileHandler
NonExistantStaleCacheHandling[viewcache]=generate
NonExistantStaleCacheHandling[cacheblock]=generate
NonExistantStaleCacheHandling[misc]=generate

[eZDFSClusteringSettings]
MountPointPath=/mnt/efs/cluster-openpa/
DBBackend=eZDFSFileHandlerPostgresqlBackend
DFSBackend=OpenPADFSFileHandlerDFSDispatcher
DBName=
DBHost=
DBPort=
DBSocket=
DBUser=
DBPassword=
DBConnectRetries=3
DBExecuteRetries=20
MaxCopyRetries=5

[FileSettings]
FileExtensionBlackList[]=exe
FileExtensionBlackList[]=sh
FileExtensionBlackList[]=bash
FileExtensionBlackList[]=java
FileExtensionBlackList[]=bat

*/ ?>
