# What is this?
Default docker-image for stack: apache, php8, mysql

# How start
1) Make directory to your project into `site` directory. Example: `site/thezmi.pro`
2) Set into `.env` real values
3) Run in terminal (from docker-lamp-php8 directory): `make build`
4) After run: `make start`
5) Open page in browser `localhost:81` for show your site, `localhost:8081` for show PhpMyAdmin (your databases saved into `databases` folder)

# Connect to database from script
Regular:  
> host: mysqldb  
> port: 3306
> user: user
> password: pass
> db: app_db

DSN version:
> mysqli://user:pass@mysqldb/app_db?charset=UTF8