<!-- Theme support --> 
<? 
add_theme_support('menus');
add_theme_support('post-thumbnails');

?>

<?
add_action('after_setup_theme', 'register_menu'); 
?>

<!-- NAV MENU --> 
<!-- register menu --> 
<?
function register_menu(){
    register_nav_menu('huvudmeny', 'Huvud meny');
    register_nav_menu('socialmeny', 'Social meny'); 
}
?>

<!-- get menu --> 
<? wp_nav_menu(array(
    'theme_location'=> 'huvudmeny'
));
?>


<!-- Enqueue scripts --> 
<? 
function register_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri().'css/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'font-awesome.css');
}

add_action('wp_enqueue_scripts', 'register_styles');  

function register_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri().'/front/js/jquery.js', true);
    wp_enqueue_script('script', get_template_directory_uri().'/front/js/script.js', true);
}

add_action('wp_enqueue_scripts', 'register_scripts'); 

?>