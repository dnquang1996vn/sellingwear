# sellingwear
1. Needed application list
  - xampp
  - composer
2. installing step
  	step 1: download or clone code

  	step 2: go to localhost/phpmyadmin, create new database name sellingweb, then import sellingweb.sql file

  	step 3: rename file .env.example to .env, then config 
  	DB_DATABASE=homestead
	DB_USERNAME=homestead
	DB_PASSWORD=secret

	to 
	DB_DATABASE="sellingWeb"
	DB_USERNAME="root"
	DB_PASSWORD=
	
	step4:Open file httpd-vhosts.conf as the link: E:\xamp\apache\conf\extra then config:
		<VirtualHost *:80>
		    ServerAdmin webmaster@dummy-host2.example.com
		    DocumentRoot "E:/xampp/htdocs/sellingWeb/public"
		    DirectoryIndex index.php index.html
		    ServerName sellingWeb.dev
		    ##ErrorLog "logs/dummy-host2.example.com-error.log"
		    ##CustomLog "logs/dummy-host2.example.com-access.log" common
		</VirtualHost>

	step5: Open file C:\Windows\System32\drivers\etc\hots by Notepadd++ then add:
		127.0.0.1 sellingweb.dev
	step6: Open browser, enter url: sellingweb.dev and enjoy
