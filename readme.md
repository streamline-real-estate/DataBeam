RESTdb
=======================

Dynamically generate RESTful APIs from the contents of database tables or CSV files. Provides JSON, XML, CSV, and HTML output. Supports most popular databases.

What Problem This Solves
------------------------

Creating an API to access information within existing database tables can be time consuming when done on a case by case basis, but often little of the work needed to accomplish this is specific to the needs of the dataset. 

How This Solves It
------------------

RESTdb acts as an interface allowing users to interact with that database as if it was a native API. The column names function as the key names. This obviates the need for custom code for each database layer.

When Alternative PHP Cache (APC) is installed, parsed data is stored within APC, which substantially accelerates its functionality.

Features
--------
* Each new CSV or database connection creates a new REST API endpoint with output as json, jsonp, xml, csv, html, etc
* Drag and drop CSV upload for CSV-to-API generation
* Basic SQL "SELECT" statements can be used for each endpoint. Currently only read-only queries are included
* You can create custom SQL queries as new endpoints for more complex statements like JOINs across multiple tables.			
* You get auto-generated interactive documentation as a <a href="http://swagger.wordnik.com/">Swagger compliant API</a>
* You can auto-generate client libraries (with the Swagger schema and <a href="https://github.com/wordnik/swagger-codegen">Swagger Codegen</a>)
* You get API access logs
* You get API key management (soon)



Standard API Path & Parameters
---------------------

There are no required parameters, but a number of optional ones. Each one of your APIs will be automatically documented, but for review the optional parameters include:

### Optional Parameters
* `column`: the name of a column in your table
* `value`: a matching value found in the specified column
* `order_by`: name of column to sort by
* `direction`: direction to sort, either `asc` or `desc` (default `asc`)
* `limit`: number, maximum number of results to return

e.g., `/[database]/[table].[format]?column=[column]&value=[value]&order_by=[column]&direction=[direction]`

Requirements
------------

* PHP 5.3
* PHP Data Objects (PDO) Extension
* Database for storing users and connection settings (Currently supports MySQLi, MS SQL, Postgres, Oracle, SQLite, and ODBC)
* SQLite for storing data from CSV uploads
* Any PDO compatible database for external database connections
* APC (optional for caching)

External Databases Supported
-------------------

PDO compatible databases include:

* 4D
* CUBRID
* Firebird/Interbase
* IBM
* Informix
* MS SQL Server
* MySQL
* ODBC and DB2
* Oracle
* PostgreSQL
* SQLite


Installation
-----

1. Copy `config.sample.php` to `config.php` and edit with your settings for github authentication and the path to where you want to store your SQLite files
2. Import the SQL database found in /sql/restdb.sql into your local database
3. Copy `database.sample.php` to `database.php` and edit with your local database settings


License
-------

GPLv3 or later.

Roadmap
-------

* Provide developer documentation for installation and contributions. Provide better user documentation and feature listing	
* Better caching - it's barely implemented at all right now
* A UI for custom SQL queries - the backend for this is already in place
* Pagination by default and provide some configurable options per database
* More robust CSV handling for large files and even queuing for batch uploads
* API management features like API key provisioning. Backend for this mostly in place already
