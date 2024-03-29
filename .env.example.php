# --------------------------------------------
# REQUIRED: BASIC APP SETTINGS
# --------------------------------------------
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:pOp98HOXXqWXFFz0MFViQEESMyVo+p+ByonYhQT3Lto=
APP_URL=null
APP_TIMEZONE='UTC'
APP_LOCALE=en
MAX_RESULTS=500

# --------------------------------------------
# REQUIRED: DATABASE SETTINGS
# --------------------------------------------
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=snipeit
DB_USERNAME=root
DB_PASSWORD=
DB_PREFIX=null
DB_DUMP_PATH='/usr/bin'
DB_CHARSET=utf8mb4
DB_COLLATION=utf8mb4_unicode_ci

# --------------------------------------------
# OPTIONAL: SSL DATABASE SETTINGS
# --------------------------------------------
DB_SSL=false
DB_SSL_IS_PAAS=false
DB_SSL_KEY_PATH=null
DB_SSL_CERT_PATH=null
DB_SSL_CA_PATH=null
DB_SSL_CIPHER=null

# --------------------------------------------
# REQUIRED: OUTGOING MAIL SERVER SETTINGS
# --------------------------------------------
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=buyondovale@gmail.com
MAIL_PASSWORD=12345678905
MAIL_ENCRYPTION=null
MAIL_FROM_ADDR=buyondovale@gmail.com
MAIL_FROM_NAME='Snipe-IT'
MAIL_REPLYTO_ADDR=buyondovale@gmail.com
MAIL_REPLYTO_NAME='Snipe-IT'
MAIL_BACKUP_NOTIFICATION_ADDRESS=buyondovale@gmail.com

# --------------------------------------------
# REQUIRED: IMAGE LIBRARY
# This should be gd or imagick
# --------------------------------------------
IMAGE_LIB=gd

# --------------------------------------------
# OPTIONAL: SESSION SETTINGS
# --------------------------------------------
SESSION_LIFETIME=12000
EXPIRE_ON_CLOSE=false
ENCRYPT=false
COOKIE_NAME=snipeit_session
COOKIE_DOMAIN=null
SECURE_COOKIES=false

# --------------------------------------------
# OPTIONAL: SECURITY HEADER SETTINGS
# --------------------------------------------
APP_TRUSTED_PROXIES=192.168.1.1,10.0.0.1
ALLOW_IFRAMING=false
REFERRER_POLICY=same-origin
ENABLE_CSP=false
CORS_ALLOWED_ORIGINS=null

# --------------------------------------------
# OPTIONAL: CACHE SETTINGS
# --------------------------------------------
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync
CACHE_PREFIX=snipeit

# --------------------------------------------
# OPTIONAL: REDIS SETTINGS
# --------------------------------------------
REDIS_HOST=null
REDIS_PASSWORD=null
REDIS_PORT=null

# --------------------------------------------
# OPTIONAL: MEMCACHED SETTINGS
# --------------------------------------------
MEMCACHED_HOST=null
MEMCACHED_PORT=null

# --------------------------------------------
# OPTIONAL: AWS S3 SETTINGS
# --------------------------------------------
AWS_SECRET=null
AWS_KEY=null
AWS_REGION=null
AWS_BUCKET=null

# --------------------------------------------
# OPTIONAL: LOGIN THROTTLING
# --------------------------------------------
LOGIN_MAX_ATTEMPTS=5
LOGIN_LOCKOUT_DURATION=60

# --------------------------------------------
# OPTIONAL: MISC
# --------------------------------------------
APP_LOG=single
APP_LOG_MAX_FILES=10
APP_LOCKED=false
FILESYSTEM_DISK=local
APP_CIPHER=AES-256-CBC
GOOGLE_MAPS_API=
BACKUP_ENV=true
LDAP_MEM_LIM=500M
LDAP_TIME_LIM=600
