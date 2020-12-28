![excel to SQL](https://user-images.githubusercontent.com/45051986/103016482-c500ea00-454a-11eb-8163-79b87214c4db.png)


###################
Codeigniter Sample Project
###################

Login

Project

Tasks

Reports

Upload Excel to SQL and Display

currently the report modules and some views are not fully functional
###################
How to run
###################

Go to the link http://localhost/"your_base_url_here_if_any"/name of the controller you would like to see 
E.g http://localhost/ci/home/index

###################
PhpSpreadsheet Library
###################

###################
In order to test the Excel to SQL upload make sure that you have downloaded the latest version of PhpSpreadsheet Library file from the releases section here. 
###################

If you want to remove Duplicates from importing to your SQL, there is an easier way than doing it with PHP. Just copy paste the below code to your SQL.


SET SESSION old_alter_table=1;

ALTER IGNORE TABLE tblattend ADD UNIQUE INDEX u(fobname);
