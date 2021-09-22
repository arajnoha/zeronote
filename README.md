# zeronote
Ultra minimalist php flat-file notetaking app that is 845 bytes in a single file.  
<img src="zero1.png" width="400"><img src="zero2.png" width="400">

This is a no-database note taking application, that is very simple. It just lets you to write a note with name and lists them on the main page.
With the first note you write, the "n/" directory will be created and every note will be there in form of a text file. This gives you the ability
to perform actions on your notes with whatever utilities you like. It has exactly 845 bytes (as a gzipped tarball).

I'm working on a little more robust version now, in the scheme of the same philosophy, but with more fundamental features. Check in here later on to find out.

### Core idea
So Im aiming at the absolute core point of notetaking. Obviously, to be able to keep it below 1kB I had to make some ugly decisions like forcing the reading mode into the writing mode and not caring about the errors (as they would never appear on the front-end). Make no mistake, there is still a place for improvements :)
