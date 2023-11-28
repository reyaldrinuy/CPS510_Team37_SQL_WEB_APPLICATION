README file for Team37 Library Database

## Group Members
Angelo Dela Cruz
Mathew Pina Ferreira
Rey Aldrin Uy

## File Contents
All related files (also in the zip folder) include:
README.txt
connectDBA9.php
createtablesA9.php
droptablesA9.php
entervalues.php
populatetablesA9.php
resultspageA9.php
Sec10T37A9.php
Sec10T37A9css.css


## Inital Setup

The Web-UI is hosted on the Ryerson/TMU webdev server. To access it, you must be connected to the school VPN: OpenVPN. After connecting to the VPN, enter this link:

https://webdev.scs.ryerson.ca/~r3uy/Sec10T37A9.php


## Instructions

->Create Tables
Upon entering the webpage, three buttons and a search bar will appear. 
You MUST first click 'Create Tables'. Upon clicking, a bar of table names will appear below which would not display
anything as the table has not yet been populated.

->Populate Tables
Then click 'Populate Tables' TWICE. It will display a set of queries available as buttons.
Clicking the query buttons will display the table for its intended purpose.

->Drop Tables
Clicking the 'Drop Tables' button will remove all existing tables on the website as well as the oracle database.

->Add Values
Clicking the 'Add Values' button will redirect you to a different page with multiple form and input bars. There are seven forms each labelled and contains labelled
input fields to put data in. Then, click submit to add your data to the oracle database. Return to the original page to see the new table.
***This feature is incomplete, as it does not work as intended to; it does not add new data. However, entering and submitting data is still doable.

->Search Feature
The search feature only handles book TITLES or AUTHORS. You must enter a title or author name (case sensitive) and click
the search button beside it. It will redirect you to a separate page that shows your search value and any relevant
information in table format. If no values in table, it means there is no title or author of your search query.


## Notes
->Search results will be empty if table is not created or query does not match
->Add Values does not work as intended; incomplete/contains bugs
->Must be connected to school VPN (OpenVPN)