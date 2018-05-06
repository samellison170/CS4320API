# CS4320 Final Project
## Group Members
* John Lund-Molfese
* Sam Ellison
* Jorden Carter-Whitbey
* Dylan Mouser
* William Gregory
## Axosoft Link
https://spevy3.axosoft.com

# Data Model
            increments('id')
            string('isbn')
            integer('published_year')
            string('publisher')
            string('genre')
            string('author')
            string('title')
            boolean('checked_out')
            string('condition')
            string('created_at')
            string('updated_at')
            string('deleted_at')
# API Function Calls

## Index of all Books
http://solunae.tk/list
## Show a Single Book
http://solunae.tk/show/$id
## Add Book
http://solunae.tk/add/Book?
## Update Book
http://solunae.tk/update/Book?Property1&Property2&etc
* Can be used to check books in and out
* Example: http://solunae.tk/update/1?checked_out=0

## Remove Book
http://solunae.tk/remove/$id
