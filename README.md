# Karthanea Insurace  
*Karthanea* is an application that helps insurace companies to keep record of their customers, contracts and call history. It is mainly used to find information about the client, its contracts and invoices. The application helps to keep record if the phone calls allowing to know about previouse conversations.
## Feature
   - Login 
   - Manage Users
   - Manage Contract types
   - Manage Contracts
   - Manage Clients
   - Manage Bill
   - Manage Call
   - Calendar Call
   - Occupency
   - Location 

   
   
## Technologies 
  - `Laravel 5.8`
  - Bootstrap 4
  - Materialize
  - Data Table
  - Chart JS
  - JQuery
  - Datepicker jQuery UI
  - JavaScript
  - CSS
  - HTML

## Usage
Install the backend dependencies :

```
composer install
```
>if you want to  [Get composer](http://www.getcomposer.org) here


Install the frontent dependencies :

```
npm install
```

>If you want to [Get Node Package Manager](https://nodejs.org/en/) here

Build the JS and CSS bundles of the applications(change for prod in production) : 

```
npm run dev
```
Launch the migration of the database

` Note:` database name " ` kartheana_insurace`"

```
php artisan migration:fresh --seed

```

> ` Develop by PNC Student 2019 - Group D`