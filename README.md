# Module order variants by size for OXID eShop
This extension orders variant articles automatically by size (e.g. shoe sizes). For example This is needed if the erp system that imports articles is not able to add sort (OXSORT) number to the database.

## Install
This module has to be put to a folder [shop root]**/modules/gw/gw_oxid_orderby_size/**
You also have to add to code in **composer_add_to_root.json** to the **composer.json** file in your OXID eShop project folder (which also contains the folder source and vendor). After you have done that you have to run the command *composer dump-autoload* in the folder were your project **composer.json** file is located.
