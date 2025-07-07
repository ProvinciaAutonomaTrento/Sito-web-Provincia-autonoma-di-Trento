<?php

define( 'CLUSTER_STORAGE_GATEWAY_PATH',  getenv('CLUSTER_STORAGE_GATEWAY_PATH') );
define( 'CLUSTER_STORAGE_BACKEND',       'dfspostgresql'  );
define( 'CLUSTER_STORAGE_CHARSET',       'utf8' );
define( 'CLUSTER_METADATA_TABLE_CACHE',  'ezdfsfile_cache' );
define( 'CLUSTER_METADATA_CACHE_PATH',   '/cache/' );
define( 'CLUSTER_METADATA_STORAGE_PATH', '/storage/' );
define( 'CLUSTER_EXPIRY_TIMEOUT',        31536000 );

define( 'CLUSTER_STORAGE_HOST',          getenv('EZINI_file__eZDFSClusteringSettings__DBHost') );
define( 'CLUSTER_STORAGE_PORT',          getenv('EZINI_file__eZDFSClusteringSettings__DBPort') );
define( 'CLUSTER_STORAGE_USER',          getenv('EZINI_file__eZDFSClusteringSettings__DBUser') );
define( 'CLUSTER_STORAGE_PASS',          getenv('EZINI_file__eZDFSClusteringSettings__DBPassword') );
define( 'CLUSTER_STORAGE_DB',            getenv('EZINI_file__eZDFSClusteringSettings__DBName') );
define( 'CLUSTER_MOUNT_POINT_PATH',      getenv('EZINI_file__eZDFSClusteringSettings__MountPointPath') );
