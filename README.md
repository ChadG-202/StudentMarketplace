# StudentMarketplace
This is the coursework submitted to the CI536 - Intergrated Group Project
The aim of this website is to provide a local and convient place students 
at the university of brighton can buy and sell items at affordable price.

# Target Market
This website is aimed at students between the ages of 18 and 30.

# ----------------KEY POINTS-------------------
# Signup
- Users are able to signup, there data will be encrypted and stored in a database
- The signup form has validation on each componet, 
each componet will turn green when the input meets its validation rules,
useful prompts will also be given if the user submits but hasnt met the validation rules.
- The password entity is validated to need 2 capital letters, 3 lowercase letters, 2 numbers and a special character, 
this forces a user to generate a strong, secure password.
- If the username is already in use it will prevent the submission and ask them to choose a new one.
# Login/Logout
- If the user clicks login it will pull up a popup box to allow login
- The login requires users data to be pulled and decrypted to be compared with login
- Both inputs are validated
- If unknow login is used it will say 'not logged in'
- If wrog password is used it will say 'wrong password'
- If correct it will display 'user logged in'
# Sell
- A user can sell and item by completing the sell form
- All inputs are validated
- The product image used at submission has its name changed to a random string to prevent dublicate 
items saved with same name, the images are stored in a file directory and the file path is 
stored in the database to help reduce database size
# Home Page
- Easily assesible search bar to look for products
- Main product categories easily accessible on header
- Recently viewed shows top 6 items a user has most recently viewed, 
it prevents items appearing twice and is stored in a database
- footer containing media links, about and page links
- A top button appears when scrolling down to give easy access to the top, this was chosen over 
a header that follows the user because the main focus of this website is the products, meaning we dont 
want page space being taken up by a header
# Search Page
- Pulls items either by category or by inputted search key word
- Displays items neatly in a list
- click an item will take you to that product page
- Sold items will not be shown
- Most recently added items will appear at the top of the page
# Item Page
- Pulls all the data for that item and iisplays it
- clicking the add to basket button will move the item into you basket storing it there in a database
- if you have managed to access a sold item and try to add it to the basket it will prevent you and 
warn you it is sold
# Bakset
- Bakset items will be displayed in a list
- the subtotal and number of items will be shown
- items can easily be deleted using the button
- Only one of a item can be added to the basket
- If procced to checkout is clicked the user data the sellers data and the product data will all 
be stored in a sold table
- If sold the product will be set to sold in the database, this means it will no longer appear when search 
for it
# Responsive Design
- A responsive deign has been used this means the website can be used on a range of devices, including 
(Monitors, Laptops, Tablets, Large Phones and Small Phones) this was a criteria we set as students view websites 
on a range of products
- The page also uses CSS that works on CHROME, APPLE and FIREFOX
# Database
- The databe run on a local host
- It contains 5 tables, basket, checkout, customer, recentlyviewed and sell
- These tables are linked using foreign keys
- Primary keys are auto incremented meaning duplicates will never occure and allow for a large amont of entites to be stored, 
which is required for a market place

# References:
- Fortune, B. (2013) How to rename uploaded file before saving it into a directory?. Available at:
https://stackoverflow.com/questions/18705639/how-to-rename-uploaded-file-before-saving-it-into-a-directory#:~:text=You%20can%20simply%20change%20the,the%20second%20parameter%20of%20move_uploaded_file%20.&text=Use-,%24temp%20%3D%20explode(%22.%22%2C%20%24_FILES%5B,round(microtime(true))%20.
(Accessed at: 12 March 2021)
- Iconfinder (2021). Available at: https://www.iconfinder.com/social-media-icons (Accessed at: 19 March 2021)
- Melvine, A. (2016) How to upload image to MySQL database and display it using php. Available at: https://www.youtube.com/watch?v=Ipa9xAs_nTg
(Accessed at: 2 March 2021)
- PHP (2021) openssl_encrypt. Available at: https://www.php.net/openssl_encrypt (Accessed: 20 March 2021)
- Unsplash (2021). Available at: https://unsplash.com/ (Accessed at: 6 March 2021)
- W3School (2021) CSS Forms. Avaiable at: https://www.w3schools.com/css/css_form.asp (Accessed at: 10 March 2021)
- W3School (2021) How TO - Login Form. Available at: https://www.w3schools.com/howto/howto_css_login_form.asp (Accssed at: 8 March 2021)
- W3School (2021) How TO - Scroll Back To Top Button. Available at: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp (Accessed at: 20 March 2021)
- W3School (2021) How TO - Search Bar. Available at: https://www.w3schools.com/howto/howto_css_searchbar.asp (Accessed at: 7 March 2021)
- W3School (2021) How TO - Password Validation. Available at: https://www.w3schools.com/howto/howto_js_password_validation.asp (Accessed at: 24 March 2021)

# Made by 
Chad Garratt, Oscar Miles, Constandinos Kotsis, Phil Romanovskiy, John Kola-Fabiyi.