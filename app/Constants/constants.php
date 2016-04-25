<?php
if (isset($_SERVER['HTTP_HOST']))
	define('BASE', 'http://' . $_SERVER['HTTP_HOST']);
else
	define('BASE', '');

define('HOME','home');
define('HOME_FR','acceuil');

define('BRANDS','brands');
define('BRANDS_FR','marques');

define('PRODUCTS', 'products');
define('PRODUCTS_FR', 'produits');

// ********** JOURNAL ********** //
define('JOURNAL','journal');
define('JOURNAL_FR','journal-fr');

define('ANNOUNCEMENTS','announcements');
define('ANNOUNCEMENTS_FR','annoncements');
define('ANNOUNCEMENTSURL', JOURNAL . '/' . ANNOUNCEMENTS);
define('ANNOUNCEMENTSURL_FR', JOURNAL_FR . '/' . replaceAccents(ANNOUNCEMENTS_FR));

define('EDITORIALS','editorials');
define('EDITORIALS_FR','éditoriaux');
define('EDITORIALSURL', JOURNAL . '/' . EDITORIALS);
define('EDITORIALSURL_FR', JOURNAL_FR . '/' . replaceAccents(EDITORIALS_FR));

define('EVENTS','events');
define('EVENTS_FR','événements');
define('EVENTSURL', JOURNAL . '/' . EVENTS);
define('EVENTSURL_FR', JOURNAL_FR . '/' . replaceAccents(EVENTS_FR));
// ********** JOURNAL ********** //

// ********** ABOUT US ********** //
define('ABOUTUS','about us');
define('ABOUTUS_FR','à propos de nous');

define('ABOUTUSURL','about-us');
define('ABOUTUSURL_FR','a-propos-de-nous');

define('CULTURE','culture');
define('CULTURE_FR','culture');
define('CULTUREURL', ABOUTUSURL . '/' . CULTURE);
define('CULTUREURL_FR', ABOUTUSURL_FR . '/' . CULTURE_FR);

define('EXPERIENCE','experience');
define('EXPERIENCE_FR','experience');
define('EXPERIENCEURL', ABOUTUSURL . '/' . EXPERIENCE);
define('EXPERIENCEURL_FR', ABOUTUSURL_FR . '/' . EXPERIENCE_FR);

define('STUDIOSRERVICES','studio-services');
define('STUDIOSRERVICES_FR','services-studio');
define('STUDIOSRERVICESURL', ABOUTUSURL . '/' . STUDIOSRERVICES);
define('STUDIOSRERVICESURL_FR', ABOUTUSURL_FR . '/' . STUDIOSRERVICES_FR);

define('TEAM','team');
define('TEAM_FR','equipe');
define('TEAMURL', ABOUTUSURL . '/' . TEAM);
define('TEAMURL_FR', ABOUTUSURL_FR . '/' . TEAM_FR);
// ********** ABOUT US ********** //

define('TESTIMONIALS','testimonials');
define('TESTIMONIALS_FR','témoignages');

define('USED','used');
define('USED_FR','utilisé');

define('MOVETO', $_SERVER['DOCUMENT_ROOT'] . '/images');

define('DESCRIPTION', 'We are a small team of very dedicated individuals, professionals with great skill and experience in high quality sound systems.');
define('DESCRIPTION_FR', 'Notre petite équipe se compose d’un personnel extrêmement dévoué : des professionnels forts d’une expérience et de compétences solides avec des systèmes haut de gamme.');

define('KEYWORDS', 'high end audio and video equipment, high end audio, high end video, audio equipment, video equipment');
define('KEYWORDS_FR', 'haute qualité audio et vidéo , audio de haute qualité, vidéo de haute qualité , équipement audio , équipement vidéo');

$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	define('MOBILE', 1);
}
else
{
	define('MOBILE', 0);
}


