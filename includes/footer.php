<?php
function relative_time($time_value) {
    $delta = intval(time() - $time_value);

    $r = '';
    if ($delta < 60) {
        $r = 'less than a minute ago';
    } else if($delta < 120) {
        $r = 'about a minute ago';
    } else if($delta < (45*60)) {
        $r = (intval($delta / 60)) . ' minutes ago';
    } else if($delta < (2*90*60)) { // 2* because sometimes read 1 hours ago
        $r = 'about an hour ago';
    } else if($delta < (24*60*60)) {
        $r = 'about ' . (intval($delta / 3600)) . ' hours ago';
    } else if($delta < (48*60*60)) {
        $r = '1 day ago';
    } else if($delta < (7*24*60*60)) {
        $r = (intval($delta / 86400)) . ' days ago';
    } else if ($delta < (28*24*60*60)) {
        $r = 'about a month ago';
    } else {
        $r = 'about ' . intval($delta / (28*24*60*60)) . ' months ago';
    }

    return $r;
}

$db = mysql_connect('localhost','fullfrontal','fullfrontal99');
$tweet = array(
    'message' => 'Twitter\'s playing up, but go ahead and follow us anyway for the latest info.', 
    'createdDate' => date('r', time()),
    'screen_name' => 'fullfrontalconf',
    'id' => '1424262428'
);

if ($db) {
    if (mysql_select_db('fullfrontal',$db)) {
    	$query = 'select * from tweets where active="y" order by id desc limit 10';
    	$tweets = array();
	    if ($result = mysql_query($query,$db)) {
	        while ($row = mysql_fetch_array($result)) {
	            $tweets[] = $row;
	        }
            // $tweets[] = mysql_fetch_array($result);
        }
        
        shuffle($tweets);
        $tweet = $tweets[0];
	}
	
} 
mysql_close($db);
?>
    </article>
    <aside>
      <section id="twitter">
        <h2>Twitter Feed</h2>
        <p class="tweet"><?=$tweet['message']?> [via <a href="http://twitter.com/<?=$tweet['screen_name']?>">@<?=$tweet['screen_name']?></a> <a href="http://twitter.com/<?=$tweet['screen_name']?>/statuses/<?=$tweet['id']?>" class="permalink" title="<?=relative_time(strtotime($tweet['createdDate']))?>"><img src="/images/tiny_tweets.gif" height="10" width="17" alt="Twitter source" /></a>]</p>
        <p class="follow">Follow <a href="http://twitter.com/fullfrontalconf">@fullfrontalconf</a> on Twitter</p>
      </section>
      <section id="sponsors">
        <h2>Sponsors</h2>
        <a title="Yahoo! Developer Network" href="http://developer.yahoo.com/"><img alt="Yahoo! Developer Network" src="/images/sponsors/ydn.gif" /></a>
        <a title="Guardian Open Platforms" href="http://www.guardian.co.uk/open-platform"><img alt="Guardian Open Platforms" src="/images/sponsors/guardian.gif" /></a>
        <a title="Opera Software" href="http://opera.com"><img alt="Opera Software" src="/images/sponsors/opera.gif" /></a>
        <a title="Dharmafly: apps for change" href="http://dharmafly.com/work-with-us"><img alt="Dharmafly: apps for change" src="/images/sponsors/dharmafly.gif" /></a>
        <h2 class="media">Media Partners</h2>
        <div>
          <a href="http://netmag.co.uk"><img alt=".net magazine" src="/images/sponsors/dotnet.gif" /></a>
          <a href="http://www.avtgroup.com/"><img alt="AVT" src="/images/sponsors/avt.gif" /></a>          
        </div>
        <a href="http://oreillygmt.eu"><img alt="O'Reilly" src="/images/sponsors/oreilly.gif" /></a>
        <p>Interested in sponsoring the Full Frontal JavaScript Conference? <a href="mailto:events@leftlogic.com?subject=Sponsorship">Get in touch</a> to discuss the <a href="/sponsors.html">opportunities available</a>.</p>
      </section>
      <section id="furtherDetails">
        <h2>Where &amp; When</h2>
        <a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=duke+of+york,+brighton&amp;vps=1&amp;jsv=154c&amp;sll=-4.1666,152.462156&amp;sspn=0.298928,0.261955&amp;g=duke+of+york&amp;ie=UTF8&amp;ei=5wnnSebDG4SIowP6naDwCg&amp;sig2=uIG8UqE0YmlndQ6g6HnVtw&amp;cd=1&amp;cid=50833651,-138411,13647004259206618235&amp;li=lmd&amp;z=14&amp;t=m"><img id="map" height="170" width="280" src="/images/map.gif" alt="Map of Full Frontal venue located in Brighton" /></a>
        <p class="more"><a href="/details">More conference details</a></p>
        <h3>Where</h3>
        <p><span class="location">Duke Of York's Picturehouse, <br />Preston Circus, Brighton, BN1 4NA</span>.</p>
        <p>Venue phone number: +44 (0)870 755 1228</p>
        <h3>When</h3>
        <p><time datetime="2009-11-20T09:00"><abbr class="dtstart" title="2009-11-20T09:00Z">9am</abbr> - <abbr class="dtend" title="2009-11-20T18:00Z">6pm</abbr> 20<sup>th</sup> November</time></p>
        <h3>Tags</h3>
        <p>Tag your photos, tweets and blog posts with: <a href="http://search.twitter.com/search?q=%23fullfrontalconf+OR+%23fullfrontal09">#fullfrontal09</a> or <a href="http://search.twitter.com/search?q=%23fullfrontalconf+OR+%23fullfrontalconf">#fullfrontalconf</a></p>
        <h3>Contact</h3>
        <p>Conference organisers <a href="http://leftlogic.com">Left Logic</a></p>
        <p>All enquiries: <a href="mailto:events@leftlogic.com">email</a> or +44 (0)1273 557744</p>
      </section>
    </aside>
    <footer>
      <p><a class="image" href="http://leftlogic.com"><img src="/images/leftlogic.gif" alt="Left Logic logo" /></a> Full Frontal is a one day JavaScript conference organised by <a href="http://leftlogic.com">Left Logic</a> | <a href="/terms">Terms &amp; Conditions</a></p>
    </footer>
  </section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/ff2009.js" type="text/javascript" charset="utf-8"></script>
<script src='http://www.google-analytics.com/ga.js' type='text/javascript'></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1656750-15");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
