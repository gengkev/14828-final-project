
https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-18-04
https://www.freecodecamp.org/news/how-to-get-https-working-on-your-local-development-environment-in-5-minutes-7af615770eec/

* skip changing firewall settings
* install CA certificate into Chrome directly, not into the OS
* also install PHP support for nginx

```
sudo rsync -arv sites-available/ /etc/nginx/sites-available/
sudo rsync -arv www/ /var/www/
sudo ln -s /etc/nginx/sites-available/bank.local /etc/nginx/sites-enabled/
sudo ln -s /etc/nginx/sites-available/evil.local /etc/nginx/sites-enabled/
sudo nginx -t
# ... restart nginx
```
