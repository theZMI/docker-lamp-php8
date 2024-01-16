# What is this?
Default docker-image for stack: apache, php8, mysql

# How start
1) Make directory for your project into directory app. For example: `app/my_app`
2) Rename `.env.example` to `.env` and set in it real data (by default: `my_app` - directory for site, `81` - port for site, `8081` - port for phpMyAdmin)
3) Run in terminal (from docker-lamp-php8 directory): `make build`
4) After run: `make start`
5) Open page in browser `localhost:81` for show your site, `localhost:8080` for show PhpMyAdmin (your databases saved into `databases` folder)

# Connect to database from script
Regular:  
> host: mysqldb  
> port: 3306  
> user: user  
> password: pass  
> db: appdb

DSN version:
> mysqli://user:pass@mysqldb/appdb?charset=UTF8