# StudentMarketplace
This website aims to provide a local and convenient place students 
at the University of Brighton can buy and sell items at an affordable price.

# Target Market
This website is aimed at students between the ages of 18 and 30.

View Site: https://cg731.brighton.domains/BrightonMarket/index.php

# ---------------------KEY POINTS-------------------------
# Signup
- Users are able to signup, their data will be encrypted and stored in a database
- The signup form has validation on each component, 
each component will turn green when the input meets its validation rules,
useful prompts will also be given if the user submits but hasn't met the validation rules.
- The password entity is validated to need 2 capital letters, 3 lowercase letters, 2 numbers and a special character, 
this forces a user to generate a strong, secure password.
- If the username is already in use it will prevent the submission and ask them to choose a new one.
# Login/Logout
- If the user clicks login it will pull up a popup box to allow login
- The login requires users data to be pulled and decrypted before comparing with the login
- Both inputs are validated
- If unknown login is used it will say 'not logged in'
- If wrong password is used it will say 'wrong password'
- If correct it will display 'Hello User'
# Sell
- A user can sell an item by completing the sell form
- All inputs are validated
- The product image used at submission has its name changed to a random string to prevent duplicate 
items being saved, the images are stored in a file directory and the file path is 
stored in the database, to help reduce database size
# Home Page
- Easily accessible search bar to look for products
- Main product categories easily accessible on the header
- Recently viewed shows the top 6 items a user has most recently viewed, 
it prevents items from appearing twice and is stored in a seperate database table
- footer containing media links, about and page links
- A top button appears when scrolling down to give easy access to the top, this was chosen over 
a header that follows the user because the main focus of this website is the products
# Search Page
- Pulls items either by category or by inputted keyword
- Displays items neatly in a list
- clicking an item will take you to the product page pulling that particular items data from the database
- Sold items will not be shown
- Most recently added items will appear at the top of the page
# Item Page
- Pulls all the data for that item and displays it
- clicking the add to basket button will move the item into your basket storing it there in a databasen table
- if you have managed to access a sold item and try to add it to the basket it will prevent you and 
warn you it is sold
# Bakset
- Basket items will be displayed in a list
- the subtotal and number of items will be shown
- items can easily be deleted using the button
- Only one item can be added to the basket
- If proceed to checkout is clicked the user data the seller's data and the product data will all 
be stored in a sold table
- If sold the product will be set to sold in the database, this means it will no longer appear when searching 
for it
# Responsive Design
- The website can be used on a range of devices, including (Monitors, Laptops, Tablets, Large Phones and Small Phones) 
this was criteria we were set as students view websites on a range of products
- The page also uses CSS that works on CHROME, APPLE and FIREFOX
# Database
- The database run on a localhost
- It contains 5 tables, basket, checkout, customer, recently viewed and sell
- These tables are linked using foreign keys
- Primary keys are auto-incremented meaning duplicates will never occur and allow for a large amount of entities to be stored, 
which is required for a market place

# Video of site
https://www.youtube.com/watch?v=gV4yQ_YWmPA
