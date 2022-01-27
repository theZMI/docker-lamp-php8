# What is this?
Default docker-image for stack: apache, php8, mysql

# How start
* Make directory for your project into directory app. For example: `app/my_site`
* Rename `.env.example` to `.env` and write in it real data (by default: `my_app` - directory for site, `81` - port for site, `8081` - port for phpMyAdmin)
* Run in terminal (from docker-lamp-php8 directory): `make build`
* After `make start`
* Open page in browser `localhost:81` for show your site, `localhost:8080` for show phpMyAdmin (your databases saved into `databases` folder)

# Connect to database from script
regular:  
> host: mariadb  
> port: 3306  
> user: user  
> password: pass  
> db: appdb  

dsn variant:
> mysqli://user:pass@mariadb/appdb?charset=UTF8