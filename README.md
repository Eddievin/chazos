## Chazos

Chazos is headless CMS built with Laravel. It is a simple CMS that allows you to create and manage your content, and you can consume this content using a REST API.

It should be used as a backend for websites, web apps and mobile apps.

Chazos is a greek work for stupid. Someone who is stupid is someone who is brainless or headless ð. 

### TL;DR
Chazos is a chazos CMSðð¤£ð¤£ð¤£

### How to install

0. Create you database first

1. Clone the project

    `git clone https://github.com/takumade/chazos.git`

2. Navigate to the project folder

    `cd chazos`

3. Modify .env file or create one
    

4.  Run install

    `./install.sh`  or `install.bat`

    **Note:** Which file you run depends on which system or  environment you are in

8. Serve it

    `php artisan serve`


### Deploy on share hosting ð

1. Type the following

`sh deploy_shared.sh`

**Do this putting the file on server, since it also runs optimize commands**

### Make develop ready ð¨ð½âð»

1. Type the following

`sh develop.sh`

**If you want to make a pull request clean the project first**

`php artisan project:clean`

### Todo

#### Features

##### Overrally
â Add alerts

â Add develop and deploy scripts

â Populate seeder with 
     - create all roles 
     - CRUD permissions for user table

â³ Refactor the code(bi-weekly)

â Add `project:deploy command which everything not core to the system`

##### Dashboard
â Add something stupid and simple

##### Content Section 
â View content

â Add content

â Edit content

â Delete Content

â Add pagination in manage content

â³ Specify amount to show in pagination

â³ Search through content

â³ Allow users to bulk import data(CSV)

â³ Allow users to export data(CSV, JSON)

â³ Bulk delete content


##### Table Builder
â Create Table

â Specifiy Table Fields

â Allow admin to edit tables

â Allow admin to edit table columns

â³ Add relationships between documents


##### API
â Get Content

â Get Content Detail

â Delete Item


##### Media
â³ Add media section

â³ Show Media

â³ Upload Media

â³ Get Media Link


#### Payments
â³ View Payments

â³ Integrate Stripe

â³ Integrate Paypal

â³ Integrate Paynow


#### Settings
â³ Add settings

â³ Allow admin to add roles

â³ Allow admin change colors

â³ Allow admin to change email templates

â³ Email configuration settings





