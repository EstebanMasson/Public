# NJForum Website 

NJForum is an extension to the pre-existing site known as NJSRHUB or www.srhub.org. NJForum provides additional features such as public forums and surveys, creating posts, and inserting comments, which updates the connected database accordingly. The main purpose of this implementation is to create a more interactive and engaging experience for all users. Our final product is a web page that will have forums, surveys, posts, and comments from users. The forum topics include Environment, Community, Logistics, etc. The front page of the website lists all the forum titles, posts, and comments. It also has a button that takes the user to the SR Hub website. The user has the option of logging into the site or signing up for an account. Once they do this, they will be taken to a page where they can insert posts and comments to interact with the various forums. There will also be a tab called Surveys, that will allow members of the community and users of the site to answer questions about how they are impacting the community. For each topic, there will be a survey category with related questions. A sample question is, “To what level have you integrated reusable products into your daily life? (i.e. reusable water bottles,  reusable straws, recycled grocery bags, etc)”. We will have different levels of users, with different authorization levels. Unregistered users will not be able to take surveys or to insert posts/comments.

## Interface: 

![image](https://i.imgur.com/lhz1j4A.png)
![image](https://i.imgur.com/T62OYZY.png)
## Technologies/Packages Used
1) HTML
2) CSS
3) JavaScript
4) PHP
5) Postgres
6) Bootstrap

## Installation Instructions
1) Download the repo locally on your computer
2) Insure that XAMPP is downloaded locally or a webhost with php and sql is configured
3) Move the github files to the root directory of your web server. If using XAMPP in linux, move the files to opt/lampp/htdocs. 
4) With XAMPP installed and all servers running, proceed to localhost/phpmyadmin in your browser. Use phpMyAdmin to create a new database and run the commands found in create_tables.sql
5) Populate the database and site is fully functional
6) To view and interact with the site, proceed to localhost/index.php in your browser (assuming index.php along with all the files from this GitHub repo are in opt/lampp/htdocs. 

## Issues/Features
For ongoing issues and feature requests visit the Issues tab for further information.
The NJForum website has a home page with all the forums listed as well as the posts and comments. There is an option to sign-in or sign-up in the upper right corner tabs. Once the user signs in or signs-up, they are taken to a page with all the forums, posts, and comments listed, as well as two options of inserting a post, and inserting a comment. There is a tab called 'Surveys' as well that takes the user to a page with all the surveys listed in a table. There is a drop down that shows all the survey topics and is automatically updated as the database is updated with more surveys. 

## Future Work
The sign-in feature is not working as expected as of now, therefore it can be implemented to search the database for the username and password the user enters and let them proceed if a match is found. Furthermore, the database can be populated with survey questions, and their responses can be graphically displayed on the website (i.e. pie charts) as more and more users take the surveys. The dropdown on the 'Surveys' page can be implemented to correctly search the database and return the surveys with the appropriate topic. 

## Questions/Concerns
The Wiki page has additional information regarding the project that can answer any questions you may have.

## License
Project is Licensed under the MIT License
