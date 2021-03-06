#Patterson Soap Works Website

##Live URL
http://soapworks-mpatterson.rhcloud.com/

##Project Description
This is a customer facing website for a fictional, artisanal soap company.  The pages are designed to be responsive for viewing on a variety of screens.   This project started as part of classwork at Harvard Extension, Fundamentals of Website Design and has been expanded since the course ended.

##Features
* Each of the product preview boxes will show an expanded view using the Fancybox JQuery plugin when the 'Quick Look' button is clicked
* These product preview boxes are all dropped in using a PHP include which allows for them to be updated and changed quickly as needed. 
* The 'Add to Cart' buttons forward the quantity to an echo script on Harvard's Morpheus server which will return the variables sent
* The 'Request a Quote' page utilizes the same script to echo the form data
* The 'Request a Quote' form uses an accordion plugin from twitter Bootstrap using Javascript.  If Javascript is disabled the form will display fully. 
* 'Contact Us' and 'Your account' are not implemented at this time


##ToDo
* Change main background image to something that makes text more readable
* Create a proper 'Contact Us' page
* Add better form validation for 'Request a Quote' form
* Research shopping cart plugins
* Add user account functionality
* ~~Fix broken links from Morpheus move (make all links relative)~~
* ~~Make favicon link relative~~