<?php
$servername = "Openshift Itnovem"; // server title
$home_www_addr = "http:/weapky.fr"; //your domain name without  "/"
$server_address = "https://openshift.eul.sncf.fr"; //plex server address
$plex_requests_addr = "https://openshift.eul.sncf.fr"; // plex requests adress , youj may use ports as well
$plex_recently_addr_movies = "$home_www_addr/plex_db/index.php?item=1&type=library&filter=recentlyAdded";
$plex_recently_addr_music = "$home_www_addr/plex_db/index.php?item=3&type=library&filter=recentlyAdded";
$plexpy_addr = "http://plexpy.weapky.fr"; //plexpy adress , you mayh use ports as well
$plexdb_addr = "$home_www_addr/plex_dash/plex_db/"; //dont change this
$plex_description = "";
$user_mail = "weapkyplex@gmail.com"; //your mail
$copyright = "<center><span class='copyright'>Powered By <a href='https://forums.plex.tv/discussion/223291/rel-php-plex-dash-v1-7-plex-media-server-landing-page' target='_blank'/>PlexDash v1.7</a> - &copy Alexander D.</span></center>";
//server status 

//if your server is hosted on
//the same machine leave everything as is
//if not replace "document.domain" with 'plex.weapky.fr' or 
//with your server ip
//add '' as well 
$server_ip = "'plex.weapky.fr'"; //example: "'plex.servername.com'" or "'192.168.2.554'"
//if plex is mapped to a specific domain ,user port 80
//if not, just specify your port set up for external access
$server_port = ""; //default plex port: 32400

//enable recent movies? - 5 Recent Movies
//SET TO TRUE OR FALSE
$enable_movies = FALSE;


//enable recent tv shows? - 5 Recent TV Shows
//SET TO TRUE OR FALSE
$enable_tvshows = FALSE;

//enable recently added? - Most Recent Content
//SET TO TRUE OR FALSE
$enable_added = FALSE;

?>