Read Time filter for Twig in Bolt
=================================

A simple filter to show the estimated reading time for a blog post in bolt.
Simply call the readtime filter for content you want to estimate the reading time for.

The filter accepts two arguments, making it easier to use the plugin in different languages.
The first argument is the singular word to be used (e.g. 1 minute) while the second argument is the plural word (e.g. 2 minutes) to display the reading time in your language.

`{{ record.body | readtime("minute", "minutes") }}`  
