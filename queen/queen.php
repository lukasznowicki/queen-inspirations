<?php
/*
Plugin Name: Queen Inspirations
Plugin URI: https://wordpress.org/plugins/queen-inspirations/
Description: While writing your blog, sometimes you may need some additional inspirations. Queen songs is the best inspiration for me and I hope it will work for you! This plugin will display random Queen song title in the upper right of your admin panel. Song title is clickable and will guide you to youtube search results with this particular song. Absolutely must have for every Queen fan and a nice inspiration for all others. Have fun!
Author: Lukasz Nowicki
Author URI: http://lukasznowicki.info/
Version: 0.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: queeninspirations
Domain path: /languages
*/

/* First of all, let's get titles... */

/* Freddie Mercury */
$qip_freddie_mercury = [
	'lets-turn-it-on' => 'Let\'s Turn It On',
	'made-in-heaven' => 'Made in Heaven',
	'i-was-born-to-love-you' => 'I Was Born to Love You',
	'foolin-around' => 'Foolin\' Around',
	'your-kind-of-lover' => 'Your Kind of Lover',
	'mr-bad-guy' => 'Mr. Bad Guy',
	'man-made-paradise' => 'Man Made Paradise',
	'there-must-be-more-to-life-than-this' => 'There Must Be More to Life Than This',
	'living-on-my-own' => 'Living on My Own',
	'my-love-is-dangerous' => 'My Love Is Dangerous',
	'love-me-like-theres-no-tomorrow' => 'Love Me Like There\'s No Tomorrow',
	'barcelona' => 'Barcelona',
	'la-japonaise' => 'La Japonaise',
	'the-fallen-priest' => 'The Fallen Priest',
	'ensueno' => 'Ensueno',
	'the-golden-boy' => 'The Golden Boy',
	'guide-me-home' => 'Guide Me Home',
	'how-can-i-go-on' => 'How Can I Go On',
	'the-great-pretender' => 'The Great Pretender',
	'time' => 'Time',
	'in-my-defence' => 'In My Defence',
	'love-kills' => 'Love Kills',
	'i-can-hear-music' => 'I Can Hear Music',
	'goin-back' => 'Goin\' Back',
	'stop-all-the-fighting' => 'Stop All The Fighting',
	'she-blows-hot-and-cold' => 'She Blows Hot and Cold',
];

/* Roger Taylor */
$qip_roger_taylor = [
	'no-violins' => 'No Violins',
	'laugh-or-cry' => 'Laugh or Cry',
	'future-management' => 'Future Management',
	'lets-get-crazy' => 'Let\'s Get Crazy',
	'my-country' => 'My Country',
	'good-times-are-now' => 'Good Times Are Now',
	'magic-is-loose' => 'Magic Is Loose',
	'interlude-in-constantinople' => 'Interlude in Constantinople',
	'airheads' => 'Airheads',
	'fun-in-space' => 'Fun in Space',
	'strange-frontier' => 'Strange Frontier',
	'beautiful-dreams' => 'Beautiful Dreams',
	'man-on-fire' => 'Man on Fire',
	'racing-in-the-street' => 'Racing in the Street',
	'masters-of-war' => 'Masters of War',
	'killing-time' => 'Killing Time',
	'abandonfire' => 'Abandonfire',
	'young-love' => 'Young Love',
	'its-an-illusion' => 'It\'s an Illusion',
	'i-cry-for-you-love-hope-and-confusion' => 'I Cry for You (Love, Hope and Confusion)',
	'nazis-1994' => 'Nazis 1994',
	'happiness' => 'Happiness',
	'revelations' => 'Revelations',
	'touch-the-sky' => 'Touch the Sky',
	'foreign-sand' => 'Foreign Sand',
	'freedom-train' => 'Freedom Train',
	'you-had-to-be-there' => 'You Had to Be There',
	'the-key' => 'The Key',
	'everybody-hurts-sometime' => 'Everybody Hurts Sometime',
	'loneliness' => 'Loneliness...',
	'dear-mr-murdoch' => 'Dear Mr Murdoch',
	'old-friends' => 'Old Friends',
	'pressure-on' => 'Pressure On',
	'a-nation-of-haircuts' => 'A Nation of Haircuts',
	'believe-in-yourself' => 'Believe in Yourself',
	'surrender' => 'Surrender',
	'people-on-streets' => 'People on Streets',
	'the-whisperers' => 'The Whisperers',
	'is-it-me' => 'Is It Me?',
	'no-more-fun' => 'No More Fun',
	'tonight' => 'Tonight',
	'where-are-you-now' => 'Where Are You Now?',
	'working-class-hero' => 'Working Class Hero',
	'london-town-cmon-down' => 'London Town - C\'mon Down',
	'one-night-stand' => 'One Night Stand',
	'fight-club' => 'Fight Club',
	'be-with-you' => 'Be with You',
	'quality-street' => 'Quality Street',
	'i-dont-care' => 'I Don\'t Care',
	'sunny-day' => 'Sunny Day',
	'be-my-gal-my-brightest-spark' => 'Be My Gal (My Brightest Spark)',
	'i-am-the-drummer-in-a-rock-n-roll-band' => 'I Am the Drummer (In a Rock n\' Roll Band)',
	'small' => 'Small',
	'say-its-not-true' => 'Say It\'s Not True',
	'the-unblinking-eye' => 'The Unblinking Eye',
	'up' => 'Up',
	'smile' => 'Smile',
];

/* Brian May */
$qip_brian_may = [
	'the-dark' => 'The Dark',
	'back-to-the-light' => 'Back to the Light',
	'love-token' => 'Love Token',
	'resurrection' => 'Resurrection',
	'too-much-love-will-kill-you' => 'Too Much Love Will Kill You',
	'driven-by-you' => 'Driven by You',
	'nothin-but-blue' => 'Nothin\' But Blue',
	'im-scared' => 'I\'m Scared',
	'last-horizon' => 'Last Horizon',
	'let-your-heart-rule-your-head' => 'Let Your Heart Rule Your Head',
	'just-one-life' => 'Just One Life',
	'rollin-over' => 'Rollin\' Over',
	'space' => 'Space',
	'business' => 'Business',
	'china-belle' => 'China Belle',
	'why-dont-we-try-again' => 'Why Don\'t We Try Again',
	'on-my-way-up' => 'On My Way Up',
	'cyborg' => 'Cyborg',
	'the-guvnor' => 'The Guv\'nor',
	'wilderness' => 'Wilderness',
	'slow-down' => 'Slow Down',
	'one-rainy-wish' => 'One Rainy Wish',
	'all-the-way-from-memphis' => 'All the Way from Memphis',
	'another-world' => 'Another World',
	'f-b-i' => 'F.B.I',
	'hot-patootie' => 'Hot Patootie',
	'star-fleet' => 'Star Fleet',
	'let-me-out' => 'Let Me Out',
	'blues-breaker' => 'Blues Breaker',
];

/* Queen */
$qip_queen = [
	'keep-yourself-alive' => 'Keep Yourself Alive',
	'doing-all-right' => 'Doing All Right',
	'great-king-rat' => 'Great King Rat',
	'my-fairy-king' => 'My Fairy King',
	'liar' => 'Liar',
	'the-night-comes-down' => 'The Night Comes Down',
	'modern-times-rock-n-roll' => 'Modern Times Rock \'n\' Roll',
	'son-and-daughter' => 'Son and Daughter',
	'jesus' => 'Jesus',
	'seven-seas-of-rhye-instrumental' => 'Seven Seas of Rhye... Instrumental',
	'procession' => 'Procession',
	'father-to-son' => 'Father to Son',
	'white-queen-as-it-began' => 'White Queen (As It Began)',
	'some-day-one-day' => 'Some Day One Day',
	'the-loser-in-the-end' => 'The Loser in the End',
	'ogre-battle' => 'Ogre Battle',
	'the-fairy-fellers-master-stroke' => 'The Fairy Feller\'s Master-Stroke',
	'nevermore' => 'Nevermore',
	'the-march-of-the-black-queen' => 'The March of the Black Queen',
	'funny-how-love-is' => 'Funny How Love Is',
	'seven-seas-of-rhye' => 'Seven Seas of Rhye',
	'brighton-rock' => 'Brighton Rock',
	'killer-queen' => 'Killer Queen',
	'tenement-funster' => 'Tenement Funster',
	'flick-of-the-wrist' => 'Flick of the Wrist',
	'lily-of-the-valley' => 'Lily of the Valley',
	'now-im-here' => 'Now I\'m Here',
	'in-the-lap-of-the-gods' => 'In the Lap of the Gods',
	'stone-cold-crazy' => 'Stone Cold Crazy',
	'dear-friends' => 'Dear Friends',
	'misfire' => 'Misfire',
	'bring-back-that-leroy-brown' => 'Bring Back That Leroy Brown',
	'she-makes-me-stormtrooper-in-stilettos' => 'She Makes Me (Stormtrooper in Stilettos)',
	'in-the-lap-of-the-gods-revisited' => 'In the Lap of the Gods... Revisited',
	'death-on-two-legs-dedicated-to' => 'Death on Two Legs (Dedicated to...)',
	'lazing-on-a-sunday-afternoon' => 'Lazing on a Sunday Afternoon',
	'im-in-love-with-my-car' => 'I\'m in Love with My Car',
	'youre-my-best-friend' => 'You\'re My Best Friend',
	'39' => '\'39',
	'sweet-lady' => 'Sweet Lady',
	'seaside-rendezvous' => 'Seaside Rendezvous',
	'the-prophets-song' => 'The Prophet\'s Song',
	'love-of-my-life' => 'Love of My Life',
	'good-company' => 'Good Company',
	'bohemian-rhapsody' => 'Bohemian Rhapsody',
	'god-save-the-queen' => 'God Save the Queen',
	'tie-your-mother-down' => 'Tie Your Mother Down',
	'you-take-my-breath-away' => 'You Take My Breath Away',
	'long-away' => 'Long Away',
	'the-millionaire-waltz' => 'The Millionaire Waltz',
	'you-and-i' => 'You and I',
	'somebody-to-love' => 'Somebody to Love',
	'white-man' => 'White Man',
	'good-old-fashioned-lover-boy' => 'Good Old-Fashioned Lover Boy',
	'drowse' => 'Drowse',
	'teo-torriatte-let-us-cling-together' => 'Teo Torriatte (Let Us Cling Together)',
	'we-will-rock-you' => 'We Will Rock You',
	'we-are-the-champions' => 'We Are the Champions',
	'sheer-heart-attack' => 'Sheer Heart Attack',
	'all-dead-all-dead' => 'All Dead, All Dead',
	'spread-your-wings' => 'Spread Your Wings',
	'fight-from-the-inside' => 'Fight from the Inside',
	'get-down-make-love' => 'Get Down, Make Love',
	'sleeping-on-the-sidewalk' => 'Sleeping on the Sidewalk',
	'who-needs-you' => 'Who Needs You',
	'its-late' => 'It\'s Late',
	'my-melancholy-blue' => 'My Melancholy Blue',
	'mustapha' => 'Mustapha',
	'fat-bottomed-girls' => 'Fat Bottomed Girls',
	'jealousy' => 'Jealousy',
	'bicycle-race' => 'Bicycle Race',
	'if-you-cant-beat-them' => 'If You Can\'t Beat Them',
	'let-me-entertain-you' => 'Let Me Entertain You',
	'dead-on-time' => 'Dead on Time',
	'in-only-seven-days' => 'In Only Seven Days',
	'dreamers-ball' => 'Dreamer\'s Ball',
	'fun-it' => 'Fun It',
	'leaving-home-aint-easy' => 'Leaving Home Ain\'t Easy',
	'dont-stop-me-now' => 'Don\'t Stop Me Now',
	'more-of-that-jazz' => 'More of That Jazz',
	'play-the-game' => 'Play the Game',
	'dragon-attack' => 'Dragon Attack',
	'another-one-bites-the-dust' => 'Another One Bites the Dust',
	'need-your-loving-tonight' => 'Need Your Loving Tonight',
	'crazy-little-thing-called-love' => 'Crazy Little Thing Called Love',
	'rock-it-prime-jive' => 'Rock It (Prime Jive)',
	'dont-try-suicide' => 'Don\'t Try Suicide',
	'sail-away-sweet-sister' => 'Sail Away Sweet Sister',
	'coming-soon' => 'Coming Soon',
	'save-me' => 'Save Me',
	'flashs-theme' => 'Flash\'s Theme',
	'football-fight' => 'Football Fight',
	'vultans-theme-attack-of-the-hawk-men' => 'Vultan\'s Theme (Attack of the Hawk Men)',
	'the-wedding-march-instrumental' => 'The Wedding March (Instrumental)',
	'the-hero' => 'The Hero',
	'staying-power' => 'Staying Power',
	'dancer' => 'Dancer',
	'back-chat' => 'Back Chat',
	'body-language' => 'Body Language',
	'action-this-day' => 'Action This Day',
	'put-out-the-fire' => 'Put Out the Fire',
	'life-is-real-song-for-lennon' => 'Life Is Real (Song for Lennon)',
	'calling-all-girls' => 'Calling All Girls',
	'las-palabras-de-amor-the-words-of-love' => 'Las Palabras de Amor (The Words of Love)',
	'cool-cat' => 'Cool Cat',
	'under-pressure' => 'Under Pressure',
	'radio-ga-ga' => 'Radio Ga Ga',
	'tear-it-up' => 'Tear It Up',
	'its-a-hard-life' => 'It\'s a Hard Life',
	'man-on-the-prowl' => 'Man on the Prowl',
	'machines-or-back-to-humans' => 'Machines (Or \'Back to Humans\')',
	'i-want-to-break-free' => 'I Want to Break Free',
	'keep-passing-the-open-windows' => 'Keep Passing the Open Windows',
	'hammer-to-fall' => 'Hammer to Fall',
	'is-this-the-world-we-created' => 'Is This the World We Created...?',
	'one-vision' => 'One Vision',
	'a-kind-of-magic' => 'A Kind of Magic',
	'one-year-of-love' => 'One Year of Love',
	'pain-is-so-close-to-pleasure' => 'Pain Is So Close to Pleasure',
	'friends-will-be-friends' => 'Friends Will Be Friends',
	'who-wants-to-live-forever' => 'Who Wants to Live Forever',
	'gimme-the-prize-kurgans-theme' => 'Gimme the Prize (Kurgan\'s Theme)',
	'dont-lose-your-head' => 'Don\'t Lose Your Head',
	'princes-of-the-universe' => 'Princes of the Universe',
	'party' => 'Party',
	'khashoggis-ship' => 'Khashoggi\'s Ship',
	'the-miracle' => 'The Miracle',
	'i-want-it-all' => 'I Want It All',
	'the-invisible-man' => 'The Invisible Man',
	'breakthru' => 'Breakthru',
	'rain-must-fall' => 'Rain Must Fall',
	'scandal' => 'Scandal',
	'my-baby-does-me' => 'My Baby Does Me',
	'was-it-all-worth-it' => 'Was It All Worth It',
	'innuendo' => 'Innuendo',
	'im-going-slightly-mad' => 'I\'m Going Slightly Mad',
	'headlong' => 'Headlong',
	'i-cant-live-with-you' => 'I Can\'t Live with You',
	'dont-try-so-hard' => 'Don\'t Try So Hard',
	'ride-the-wild-wind' => 'Ride the Wild Wind',
	'all-gods-people' => 'All God\'s People',
	'these-are-the-days-of-our-lives' => 'These Are the Days of Our Lives',
	'delilah' => 'Delilah',
	'the-hitman' => 'The Hitman',
	'bijou' => 'Bijou',
	'the-show-must-go-on' => 'The Show Must Go On',
	'its-a-beautiful-day' => 'It\'s a Beautiful Day',
	'made-in-heaven' => 'Made in Heaven',
	'let-me-live' => 'Let Me Live',
	'mother-love' => 'Mother Love',
	'my-life-has-been-saved' => 'My Life Has Been Saved',
	'i-was-born-to-love-you' => 'I Was Born to Love You',
	'heaven-for-everyone' => 'Heaven for Everyone',
	'too-much-love-will-kill-you' => 'Too Much Love Will Kill You',
	'you-dont-fool-me' => 'You Don\'t Fool Me',
	'a-winters-tale' => 'A Winter\'s Tale',
	'its-a-beautiful-day-reprise' => 'It\'s a Beautiful Day (Reprise)',
	'no-one-but-you-only-the-good-die-young' => 'No-One but You (Only the Good Die Young)',
	'thank-god-its-christmas' => 'Thank God It\'s Christmas',
	'let-me-in-your-heart-again' => 'Let Me in Your Heart Again',
	'cosmos-rockin' => 'Cosmos Rockin',
	'still-burnin' => 'Still Burnin',
	'small' => 'Small',
	'c-lebrity' => 'C-lebrity',
	'killerpapa-was-a-rollin-stone' => 'Killer/Papa Was a Rollin\' Stone',
];

# internal use only
# if ( isset( $qip_lista ) && is_string( $qip_lista ) && ( $qip_lista != '' ) ) { phylax_qip_prepare( $qip_lista ); }
# internal use only

/* Now, let's bring it all together */

function phylax_qip_add_artist( &$item, $key, $artist ) {
	$item = $artist . ' - ' . $item;
}

array_walk( $qip_freddie_mercury, 'phylax_qip_add_artist', 'Freddie Mercury' );
array_walk( $qip_roger_taylor, 'phylax_qip_add_artist', 'Roger Taylor' );
array_walk( $qip_brian_may, 'phylax_qip_add_artist', 'Brian May' );
array_walk( $qip_queen, 'phylax_qip_add_artist', 'Queen' );

$qip_songs = array_merge(
	array_values( $qip_freddie_mercury ),
	array_values( $qip_roger_taylor ),
	array_values( $qip_brian_may ),
	array_values( $qip_queen )
);

$qip_song_count = count( $qip_songs );

/* Draw a song */
$qip_choosen = $qip_songs[ rand( 0, $qip_song_count - 1 ) ];

/* Prepare link */
$qip_link = 'https://www.youtube.com/results?search_query=' . urlencode( $qip_choosen );
$qip_line = '<div id="phylax_queen_inspiration"><a href="' . $qip_link . '" target="_blank" title="' . $qip_choosen . '">' . $qip_choosen . '</a></div>';

function pqi_get_inspiration() {
	global $qip_link, $qip_choosen, $qip_line;
	return [
		'url' => $qip_link,
		'title' => $qip_choosen,
		'html' => $qip_line,
	];
}

/* View as admin notice */
function phylax_qip_admin_notices() {
	global $qip_line;
	echo apply_filters( 'pp_queen_inspiration_output', $qip_line );
}

/* Add css to setup admin notice */
function phylax_qip_admin_head() {
	$float = is_rtl() ? 'left' : 'right';
?>
<style type="text/css">
#phylax_queen_inspiration{
float:<?=$float?>;
padding-<?=$float?>:16px;
padding-top:8px;
margin:0;
font-size:12px;
}
</style>
<?php
}

/* Hook admin_notices and admin_head */
add_action( 'admin_notices', 'phylax_qip_admin_notices' );
add_action( 'admin_head', 'phylax_qip_admin_head' );

/**
 * This function is for internal use only
 */
function phylax_qip_prepare( $lista ) {
	$r = [];
	$l = explode( "\n", trim($lista) );
	foreach( $l as $item ) {
		$item = trim( $item );
		if ( $item != '' ) { $r[ sanitize_title( $item ) ] = $item; }
	}
	echo '<!-- ' . PHP_EOL . '$qip_ = [' . PHP_EOL;
	foreach( $r as $key => $item ) {
		$item = addslashes( $item );
		echo "	'$key' => '$item',\n";
	}
	echo '];' . PHP_EOL . ' -->' . PHP_EOL;
}

/* Use this to translate plugin description */
if ( false ) {
	_( 'While writing your blog, sometimes you may need some additional inspirations. Queen songs is the best inspiration for me and I hope it will work for you! This plugin will display random Queen song title in the upper right of your admin panel. Song title is clickable and will guide you to youtube search results with this particular song. Absolutely must have for every Queen fan and a nice inspiration for all others. Have fun!', 'queeninspirations' );
}

#EOF