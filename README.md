md5-folderfetcher
=================

This is a simple basic folder fetcher which display folder/files + their md5 

this function work **recursively**!

How to use?
===========

1. Just upload to your ftp about the folder you want to check
2. open the file in a browser **http://www.example.com/subfolder1/md5.php**
3. add parameter *?file* with subfolder2 to your url - http://www.example.com/subfolder1/md5.php?file=subfolder2/*

----

There is an option to check just an single file. just add filename to ?file (/md5.php?file=wordpress/index.php)
If you add an * at the end of the file parameter we think this is a folder an check more than one file.


Result
=======


![](https://raw.githubusercontent.com/roest01/md5-folderfetcher/master/md5_file_result.png)
