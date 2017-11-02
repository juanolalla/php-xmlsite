PHP-XMLSite
============
XMLSite is a PHP sample site as a starter base framework for simple website projects. It uses XML documents to store data contents as a code based CMS, which makes it easy for developers to manage and versioning with git.

Why use XMLSite
----------------
* Clean URLs (user-friendly).
* Simple and direct template system to reuse code passing variables.
* Data contents stored in XML documents, easier to manage with git and synchronize between servers.
* Simplified MVC pattern starting with a single file as a global controller and custom API.
* Customizable settings, initialization and routing.
* Really fast! Simple to set-up, fast developing, high performance for few data.

Why not use XMLSite
--------------------
* If you need users and access management.
* For large amounts of data.
* The project is not that simple.

How to use it
--------------
The code comes with an example website. Use it as a reference guide to develop yours. Just delete and change whatever you need within the app and the assets folder. But don't delete app/init.php neither app/data/config/site_settings.xml!

Structure
----------
At a first level there is the **core** directory and **index.php** which manage and process all requests as the starting point. There is also **app** directory which contains all the customization, starting in init.php, and it contains all XML data and template system.

Inside **core**:
* **init.php**: Where all starts, it declares path constants and requires other files.
* **api.php**: Common functions to use elsewhere.
* **data_manager**: Necessary data managing functions that need to be loaded on every request.

Inside **app**:
* **data**: XML data documents. There are two sub-directories: **config** (with a required site_settings.xml file) to place your configuration data, and **content**, to place your content data.
* **pages**: The .php files associated to pages, for example pages/contact.php it's loaded by default for the example.com/contact url.
* **templates**: The pieces of HTML code to include thorough the pages. You may also create page or teaser templates for dynamic entity data in subfolders like catalog/product-id.

In **vendor** we place here third-party software like SimpleDOM.php, used to manage XML data. In the directory **assets** you can place all the web files like **css, js, images**, etc. assets is optional, you can rename it or place those assets in another level.

Motivation
-----------
I originally developed XMLSite as a solution for Jazztel Spanish telecom. They had a multisite wordpress where every site was a different landing within the same domain with almost the same data, except some contact data and analytics code. Frontend developers maintained the code and also the content changes, which was a real pain replicating those changes in all sites. The inherited wordpress had been hardcoded and wasn't well built, but the key point was: we don't really need a cms with no users, except developers, and there weren't large amounts of data.

So I came up with this solution which my fronted colleagues really appreciated, they could just do the front stuff and change the data in the xml files; all versioned in the git repository, and move it through development and production enviroment servers just with a git pull. Faster than ever.

Since then I've used this super simple CMS for other quick small websites. That is how I developed the improved and better structured 2.x version.
