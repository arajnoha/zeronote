# zeronote
Ultra minimalist php flat-file notetaking app that is 996 bytes in a single file (gzipped).  
This is a no-database note taking application, that is very simple.  

<img src="zero.png">
<img src="zero-detail.png">


### Features
- list all notes
- search notes
- write a note
- edit a note
- delete a note
- protect notes with a password (using sessions)
- responsive / mobile-friendly

With the first note you write, the "n/" directory will be created and every note will be there in form of a text file. This gives you the ability
to perform actions on your notes with whatever utilities you like.

### Install
1. copy `index.php` on your server/web hosting
2. change the password from `x` to something else (`sed -i '/s/==\"x/==\"yours/' index.php`)
3. _(optional)_ add _.htaccess_ file in _n/_ directory with __deny from all__ to prevent anyone accessing your notes from direct URL guesses.
