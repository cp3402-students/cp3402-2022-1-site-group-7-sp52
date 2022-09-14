# Deployment Overview

## Applications and Processes
Our website use a set of applications, programs and working environments to be runned and developed. Links to all of the resources used will be listed below.
This file describes as why we used certain features and how they affected our development, justifying our choice.

### Theme Development
**PhpStorm**: PhpStorm is a cross-platform IDE created by JetBrains used to edit various types of code (PHP, HTML, Javascript, etc).

### Hosting and Deployment
**EasyWP**: EasyWP is a fully managed WordPress hosting offered by Namecheap. This hosting is designed specifically keeping beginners in mind. 
So, all the technical aspects of your website, from SSL to CDN, Caching plugins, and Backups, are handled by their team. It is also user friendly and accessible to students
as their the first month of hosting is free for all users. You can find additional information about EasyWP here: https://www.easywp.com/

**XAMPP**: This application allows you to build WordPress site offline, on a local web server on your computer. 
This simple and lightweight solution works on Windows, Linux, and Mac – hence the “cross-platform” part. We decided to use this application to make changes on our localhosts
for testing and experimenting with features and themes. You can find more information on their official website: https://www.apachefriends.org/ru/index.html

### Project Management

**Github**: Github is very popular choice for managing version control of a great many projects. It is very accessible and user-friendly to use. We used it 
to deploy our files and host our repositories with all information and files as well as maintaining the changes throughout
the whole project. Information on github can be found at https://github.com/.

**Discord**: Discord is very convinient tool for communicating with the team, though, our team mostly met in person as we live together, we used discord for making urgent calls
and storing certain resources as well as useful links in it. Discord here: https://discord.com/

**Trello**: Trello is a project and team management tool designed to help teams collaborate, assign and update tasks, and stay on track for a project. We used it to maintain
the actuallity of our tasks and what needs to be done along with the due dates. You can get started with trello here: https://trello.com/en

## Environment Overview

### Local Environment
Each of the team members had their own localhost set up on XAMPP to work individually on tasks assigned by the team. When the changes were finalized the team member would
push the changes to staging site as well as commiting changes to github to syncronise with other members.

### Hosted Environment
Staging and Production sites used different domains. All changes from localhost would go to staging site first to complete the testing and then pushed to production.

### Content Development
1. Make required changes to Wordpress Site/Content on Local environment (ideally) OR in DEV instance.
2. Test changes using test plan
3. Use import/export plugin to update staging site, test again to make sure changes are not breaking site
4. When approved, use import/export plugin to update production site

### Theme Development
1. Checkout/pull the current 'release' branch from Github repository into a new branch.
2. Make required changes.
3. Use preferred SSH Tool and go to development site.
4. Test on development site to ensure changes are successful and expected.
5. If changes are successful push changes into the testing branch.
6. Update team members about the changes.
7. When changes have stabilized, always ensure that staging matches the production site.
