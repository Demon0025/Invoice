# <?php exit('No direct script access allowed'); ?>
# InvoicePlane Configuration File

### START HERE
# Set your URL without trailing slash here, e.g. http://your-domain.com
# If you use a subdomain, use http://acc.winnerhc.com
# If you use a subfolder, use http://your-domain.com/subfolder
IP_URL=

# Having problems? Enable debug by changing the value to 'true' to enable advanced logging
ENABLE_DEBUG=false

X_FRAME_OPTIONS=SAMEORIGIN
ENABLE_X_CONTENT_TYPE_OPTIONS=true
SESS_REGENERATE_DESTROY=false

# Set this setting to 'true' if you want to disable the setup for security purposes
DISABLE_SETUP=false

# To remove index.php from the URL, set this setting to 'true'.
# Please notice the additional instructions in the htaccess file!
REMOVE_INDEXPHP=false

# These database settings are set during the initial setup
DB_HOSTNAME= 68.178.150.231
DB_USERNAME= Admin1
DB_PASSWORD= Win_holi@2024
DB_DATABASE= Invoice
DB_PORT= 3306

# If you want to be logged out after closing your browser window, set this setting to 0 (ZERO).
# The number represents the amount of minutes after that IP will automatically log out users,
# the default is 10 days.
SESS_EXPIRATION=864000
SESS_MATCH_IP=true

# Enable the deletion of invoices
ENABLE_INVOICE_DELETION=false

# Disable the read-only mode for invoices
DISABLE_READ_ONLY=false

##
## DO NOT CHANGE ANY CONFIGURATION VALUES BELOW THIS LINE!
## =======================================================
##

# This key is automatically set after the first setup. Do not change it manually!
ENCRYPTION_KEY=
ENCRYPTION_CIPHER=AES-256

# Set to true after the initial setup
SETUP_COMPLETED=false
