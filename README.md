# SFDO Crete - Quiz Platform

Requirements

### Deployment
php 8.1ˆ
mysql
composer - (https://getcomposer.org/download/)[https://getcomposer.org/download/]  
github - (https://desktop.github.com/)[https://desktop.github.com/]

### Development
node 16 - (https://nodejs.org/en/download/current/)[https://getcomposer.org/download/]  
yarn - (https://classic.yarnpkg.com/lang/en/docs/install/#mac-stable)[https://classic.yarnpkg.com/lang/en/docs/install/#mac-stable]

## Description

Design, development and implantation of a quiz platform.
The platform will be composed of 3 parts.

1. Landing website


The website will provide all necessary information for the user regarding the project, before the subscription. It may also include a description of the project with possibility of upload of images and new content.


The website initial sitemap.


Home page - Welcome page, may have an initial banner and a brief description of the project.
About the project - A longer description of the project.
FAQ - Collection of questions related to the terms and basic functionalities of the application.
Terms and conditions - All policies related to the data and privacy.
Contact us - Contact form for further inquiries. 
Registration area - With all forms necessary for subscribing to the application.



2. Application

The application consists of a step by step quiz interface with restricted access and statistics charts per user.

The main features in the applications are as follow:

1. Will be allowed only one registration per AFM.
2. User's  email will be verified during registration.
3. After login the user will be redirected to the user area dashboard.
4. Each questionnaire can be filled only once.
5. The progress during the quiz can can be restored in next visit
6. Should the user be able to change a answer back, during the quiz ?
7.  Once the quiz is complete it can not be edited anymore.
8. The user will be able to view all complete quizzes ( from same user )
9.  The user will be able to edit his registration details
10. The user will be able to cancel his subscription at any time.


The application sitemap.



Login
Reset password
Dashboard
Available Quizzes
Quiz questions as step pages
Quiz conclusion page
Quizzes Charts and Stats
FAQ
Edit profile 


3. Admin Panel

The admin panel will be restricted to pré registered managers.
The manager will be able to edit the contextual content of the Website and Application and also to view all quizzes stats, charts and results

The main features in the admin panel are as follows.

1. Able to edit , add or remove images and texts of the website.
2. edit , add , remove and publish quizzes 
3. edit , add , remove or import from a excel file questions and options with scores 
4.  edit , add or remove users
5. Questions can be reused in multiple quizzes
6. There will be only one active quiz each time ?
7. Questions will always be grouped by a section inside the quiz.
8. All questions are single choice .
9. For each choice will be one numerical score.
10. Charts and stats pages will use the average numerical score for each quiz , section, question and user and will have the option for exporting as an excel file.


The admin sitemap.

Login
Reset password
Dashboard
Questions
Sections
Quizzes
Stats
Users
Website Pages
Settings
Edit Profile
