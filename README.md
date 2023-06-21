# portfolio
Mon portfolio avec mon parcours et mes réalisations

Pour le visualiser:


- Placer les fichiers ci - dessus dans un fichier "localsites", à créer (C:\xampp\localsites). De manière à ce que ce portfolio fonctionne comme un site virtuel
- Ajouter, dans le fichier "hosts" ("C:\Windows\System32\drivers\etc\hosts"), l'adresse suivante : 127.0.0.1 www.portfolio.org
- Ajouter, dans le fichier "httpd-vhosts.conf" ("C:\xampp\apache\conf\extra\httpd-vhosts.conf"), le code suivant:

  #portfolio
  
<VirtualHost *:80>

    ServerAdmin webmaster@portfolio.org
    
    DocumentRoot C:/xampp/localsites/portfolio/public
    
    ServerName portfolio.org
    
    ServerAlias www.portfolio.org
    
    ErrorLog "logs/portfolio-org-error.log"
    
    CustomLog "logs/portfolio-org-access.log" common
    
    <Directory C:/xampp/localsites/portfolio/public>
    
        Options Indexes FollowSymLinks Includes
        
        AllowOverride All
        
        Require all granted
        
    </Directory>
    
    RewriteEngine On
    
    RewriteCond %{HTTPS} off
    
    RewriteRule (.) https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L,NE]
    
    
</VirtualHost>


<VirtualHost *:443>

    ServerAdmin webmaster@portfolio.org
    
    DocumentRoot C:/xampp/localsites/portfolio/public
    
    ServerName portfolio.org
    
    ServerAlias www.portfolio.org
    
    ErrorLog "logs/portfolio-org-error.log"
    
    CustomLog "logs/portfolio-org-access.log" common
    
    <Directory C:/xampp/localsites/portfolio/public>
    
        Options Indexes FollowSymLinks Includes
        
        AllowOverride All
        
        Require all granted
        
    </Directory>
    
    SSLEngine on
    
    SSLCertificateFile C:/xampp/localsites/portfolio/cert/www.portfolio.org.pem
    
    SSLCertificateKeyFile C:/xampp/localsites/portfolio/cert/www.portfolio.org-key.pem
    
</VirtualHost>


- Démarrer xampp (ou l'équivalent).
- Taper "https://www.portfolio.org" dans un moteur de recherche.
