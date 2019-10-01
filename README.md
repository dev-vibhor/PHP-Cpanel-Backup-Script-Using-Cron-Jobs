# PHP-Cpanel-backup-Script-using-cron-job-
php -q /home/ddhindi/backup.php ; mysqldump --opt -Q -u ddhindi -p'QGR_UPaK&amp;s=D' --all-databases > /home/ddhindi/backup/databases.sql ; tar -cvpzf /home/ddhindi/backup/files.tar.gz /home/ddhindi/public_html
