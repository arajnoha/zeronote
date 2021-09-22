# zeronote
Ultra minimalist php flat-file notetaking app below 1kB  
<img src="zero1.png" width="400"><img src="zero2.png" width="400">

This is a no-database note taking application, that is very simple. It just lets you to write a note with name and lists them on the main page.
With the first note you write, the "n/" directory will be created and every note will be there in form of a text file. This gives you the ability
to perform actions on your notes with whatever utilities you like (UNIX philosophy - Do just one thing and do it well). It has exactly 988 bytes when 
compressed.

On daily basis, this might be too simple for your needs. Thats why the zeronote repository has multiple branches:
 - __zeronote/main__ - the most minimal barebone writing and listing, 988 bytes
 - __zeronote/simple__ - (main) + renaming and note deletion _Currently Work-in-Progress_
 - __zeronote/basic__ - (simple) + listing timestamps and tagging system _Currently Work-in-Progress_
 - __zeronote/regular__ - (basic) + search, password protection of the whole notepad, sharing notes with URL _Currently Work-in-Progress_
