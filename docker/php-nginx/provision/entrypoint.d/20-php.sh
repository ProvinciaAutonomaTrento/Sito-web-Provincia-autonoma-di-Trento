#!/usr/bin/env bash

container-file-auto-restore "/opt/docker/etc/php/php.webdevops.ini"

echo '' >> /opt/docker/etc/php/php.webdevops.ini
echo '; container env settings' >> /opt/docker/etc/php/php.webdevops.ini

# General php setting
for ENV_VAR in $(envListVars "php\."); do
    env_key=${ENV_VAR#php.}
    env_val=$(envGetValue "$ENV_VAR")

    echo "$env_key = ${env_val}" >> /opt/docker/etc/php/php.webdevops.ini
done


if [[ -n "${PHP_DATE_TIMEZONE+x}" ]]; then
    echo "date.timezone = ${PHP_DATE_TIMEZONE}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_DISPLAY_ERRORS+x}" ]]; then
    echo "display_errors = ${PHP_DISPLAY_ERRORS}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_MEMORY_LIMIT+x}" ]]; then
    echo "memory_limit = ${PHP_MEMORY_LIMIT}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_MAX_EXECUTION_TIME+x}" ]]; then
    echo "max_execution_time = ${PHP_MAX_EXECUTION_TIME}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_POST_MAX_SIZE+x}" ]]; then
    echo "post_max_size = ${PHP_POST_MAX_SIZE}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_UPLOAD_MAX_FILESIZE+x}" ]]; then
    echo "upload_max_filesize = ${PHP_UPLOAD_MAX_FILESIZE}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_OPCACHE_MEMORY_CONSUMPTION+x}" ]]; then
    echo "opcache.memory_consumption = ${PHP_OPCACHE_MEMORY_CONSUMPTION}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_OPCACHE_MAX_ACCELERATED_FILES+x}" ]]; then
    echo "opcache.max_accelerated_files = ${PHP_OPCACHE_MAX_ACCELERATED_FILES}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_OPCACHE_VALIDATE_TIMESTAMPS+x}" ]]; then
    echo "opcache.validate_timestamps = ${PHP_OPCACHE_VALIDATE_TIMESTAMPS}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_OPCACHE_REVALIDATE_FREQ+x}" ]]; then
    echo "opcache.revalidate_freq = ${PHP_OPCACHE_REVALIDATE_FREQ}" >> /opt/docker/etc/php/php.webdevops.ini
fi

if [[ -n "${PHP_OPCACHE_INTERNED_STRINGS_BUFFER+x}" ]]; then
    echo "opcache.interned_strings_buffer = ${PHP_OPCACHE_INTERNED_STRINGS_BUFFER}" >> /opt/docker/etc/php/php.webdevops.ini
fi

# Workaround for official PHP images
if [[ -n "${PHP_SENDMAIL_PATH+x}" ]]; then
    echo "sendmail_path = ${PHP_SENDMAIL_PATH}" >> /opt/docker/etc/php/php.webdevops.ini
fi

# Disable all PHP mods specified in PHP_DISMOD as comma separated list
if [[ -n "${PHP_DISMOD+x}" ]]; then
    ini_dir_cli=$(php -i | grep 'Scan this dir for additional .ini files' | cut -c44-)
    ini_dir_fpm=$(php-fpm -i | grep 'Scan this dir for additional .ini files' | cut -c44-)
    for DISABLE_MOD in ${PHP_DISMOD//,/ }; do
        rm -f ${ini_dir_cli}/*${DISABLE_MOD}*
        rm -f ${ini_dir_fpm}/*${DISABLE_MOD}*
    done
fi

# Link composer version accordingly
ln -sf /usr/local/bin/composer${COMPOSER_VERSION:-2} /usr/local/bin/composer



if [[ -z $EZ_ROOT ]]; then
    echo "[error] EZ_ROOT is empty this variable is required in this container, please set it to the public dir of Ez and restart"
    exit 1
else
    echo "[info] Current root is ${EZ_ROOT}"
fi

EZ_USER='application'
EZ_USER_GROUP='application'
EZ_CHMOD_VAR=${EZ_CHMOD_VAR:-'2775'}
EZ_CHMOD_LOG=${EZ_CHMOD_LOG:-'660'}
EZ_CLUSTER_GET_OWNERSHIP=${EZ_CLUSTER_GET_OWNERSHIP:-'true'}

if [ ! -d ${EZ_ROOT}/var/cache/ini ]; then
    mkdir -p ${EZ_ROOT}/var/cache/ini
    echo "[info] created var/cache/ini"
fi

if [ ! -d ${EZ_ROOT}/var/cache/texttoimage ]; then
    mkdir -p ${EZ_ROOT}/var/cache/texttoimage
    echo "[info] created var/cache/texttoimage"
fi

if [ ! -d ${EZ_ROOT}/var/cache/codepages ]; then
    mkdir -p ${EZ_ROOT}/var/cache/codepages
    echo "[info] created var/cache/codepages"
fi

if [ ! -d ${EZ_ROOT}/var/cache/translation ]; then
    mkdir -p ${EZ_ROOT}/var/cache/translation
    echo "[info] created var/cache/translation"
fi

if [ ! -d ${EZ_ROOT}/var/log ]; then
    mkdir -p ${EZ_ROOT}/var/log
    echo "[info] created dir var/log"
fi

for logfile in cluster_error debug error ocfoshttpcache storage warning strict notice; do
  if [[ ! -f ${EZ_ROOT}/var/log/${logfile}.log ]]; then
    touch ${EZ_ROOT}/var/log/${logfile}.log && \
    chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var/log/${logfile}.log
  fi
  tail -F ${EZ_ROOT}/var/log/${logfile}.log &
done


#Permesso di scrittura per '$EZ_USER_GROUP' per la directory var/
echo "[info] chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var"
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var/*
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var/cache/*
echo "[info] chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var"
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var/*
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var/cache/*

# aumenta la sicurezza dando 660 ai file di log
echo "[info] chmod ${EZ_CHMOD_LOG} ${EZ_ROOT}/var/log/*"
     chmod ${EZ_CHMOD_LOG} ${EZ_ROOT}/var/log/*

if [[ -n $EZINI_file__eZDFSClusteringSettings__MountPointPath ]]; then
    if [[ -d $EZINI_file__eZDFSClusteringSettings__MountPointPath ]]; then
        echo "[info] fixing perms in '${EZINI_file__eZDFSClusteringSettings__MountPointPath}' ..."
        chown $EZ_USER $EZINI_file__eZDFSClusteringSettings__MountPointPath
    else
        mkdir -p $EZINI_file__eZDFSClusteringSettings__MountPointPath
        chown $EZ_USER $EZINI_file__eZDFSClusteringSettings__MountPointPath
    fi
fi

TRUNCATE_CACHE_TABLE=${TRUNCATE_CACHE_TABLE:-'false'}
if [[ $TRUNCATE_CACHE_TABLE == 'true' ]]; then
    echo "[info] truncate cache dfs table"
    php extension/openpa/bin/clustering/truncate_ezdfs_cache.php --allow-root-user
else
    echo "[info] TRUNCATE_CACHE_TABLE is missing or set to false"
fi

RUN_REINDEX_CONTENT=${RUN_REINDEX_CONTENT:-'false'}
if [[ -n $EZ_INSTANCE ]]; then
    if [[ $RUN_REINDEX_CONTENT == 'true' ]]; then
        echo "[info] run reindex content on ${EZ_INSTANCE}"
        php bin/php/updatesearchindex.php -sbackend --clean --allow-root-user
        echo "[info] run reindex dataset on ${EZ_INSTANCE}"
        php extension/occustomfind/bin/php/updatecustomsearchindex.php --allow-root-user
    else
        echo "[info] RUN_REINDEX_CONTENT is set to false"
    fi

    echo "[info] Clear all cache"
      php bin/php/ezcache.php --clear-all -d

else
    echo "[warning] EZ_INSTANCE not found"
fi

ADMIN_EMAIL=${ADMIN_EMAIL:-'false'}
ADMIN_PASSWORD=${ADMIN_PASSWORD:-'false'}
if [ -n "$ADMIN_EMAIL" ] && [ -n "$ADMIN_PASSWORD" ]; then
  php extension/openpa_bootstrapitalia/bin/set_admin.php --mail=$ADMIN_EMAIL --password=$ADMIN_PASSWORD
else
  if [ -n "$ADMIN_EMAIL" ]; then
    php extension/openpa_bootstrapitalia/bin/set_admin.php --mail=$ADMIN_EMAIL
  fi
  if [ -n "$ADMIN_PASSWORD" ]; then
    php extension/openpa_bootstrapitalia/bin/set_admin.php --password=$ADMIN_PASSWORD
  fi
fi
