# Queen Inspirations

WordPress Plugin: Queen Inspirations - Find your inspiration while writing your newest blog article right on your admin screen!

Current version: `0.1.2`

## More informations

This plugin will show you random Queen (or Queen band member) song on the right in admin screen. In RTL it would be the left side of course.

## For developers

### Functions

#### pqi_get_inspiration()

This function will return an array with your inspiration. This code:

```PHP
if ( function_exists( 'pqi_get_inspiration' ) ) {
	$inspiration = pqi_get_inspiration();
	echo '<pre>' . print_r( $inspiration, true ) . '</pre>';
}
```

will return something like this:

```PHP
Array
(
    [url] => https://www.youtube.com/results?search_query=Queen+-+Vultan%27s+Theme+%28Attack+of+the+Hawk+Men%29
    [title] => Queen - Vultan's Theme (Attack of the Hawk Men)
    [html] => <div id="phylax_queen_inspiration"><a href="https://www.youtube.com/results?search_query=Queen+-+Vultan%27s+Theme+%28Attack+of+the+Hawk+Men%29" target="_blank" title="Queen - Vultan's Theme (Attack of the Hawk Men)">Queen - Vultan's Theme (Attack of the Hawk Men)</a></div>
)
```

### Filters

#### pp_queen_inspiration_output

This filter is applied on plugin output in the admin screen. It **is not** applied in *pqi_get_inspiration* function.


## Authors
* Lukasz Nowicki <https://lukasznowicki.info/>
* (Kurs programowania WordPress)<https://wpkurs.pl/>

## License
Copyright 2016 phylax.pl £ukasz Nowicki
<https://phylax.pl/>

Licensed under the GPLv2 or later: <http://www.gnu.org/licenses/gpl-2.0.html>
