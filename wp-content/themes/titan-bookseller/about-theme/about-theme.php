<?php
/**
 * Titan Notice Handler
 */

defined( 'ABSPATH' ) || exit;

define('TITAN_BOOKSELLER_SUPPORT',__('https://wordpress.org/support/theme/titan-bookseller/','titan-bookseller'));
define('TITAN_BOOKSELLER_REVIEW',__('https://wordpress.org/support/theme/titan-bookseller/reviews/#new-post','titan-bookseller'));
define('TITAN_BOOKSELLER_BUY_NOW',__('https://www.titanthemes.net/themes/bookstore-wordpress-theme/','titan-bookseller'));
define('TITAN_BOOKSELLER_DOC_URL',__('https://www.titanthemes.net/documentation/titan-bookseller/','titan-bookseller'));
define('TITAN_BOOKSELLER_LIVE_DEMO',__('https://titanthemes.net/preview/titan-bookseller/','titan-bookseller'));
/**
 * Admin Hook
 */
function titan_bookseller_admin_menu_page() {
    $titan_bookseller_theme = wp_get_theme( get_template() );

    add_theme_page(
        $titan_bookseller_theme->display( 'Name' ),
        $titan_bookseller_theme->display( 'Name' ),
        'manage_options',
        'titan-bookseller',
        'titan_bookseller_do_admin_page'
    );
}
add_action( 'admin_menu', 'titan_bookseller_admin_menu_page' );

/**
 * Enqueue getting started styles and scripts
 */
function titan_widgets_backend_enqueue() {
    wp_enqueue_style( 'titan-getting-started', get_template_directory_uri() . '/about-theme/about-theme.css' );
}
add_action( 'admin_enqueue_scripts', 'titan_widgets_backend_enqueue' );

/**
 * Class Titan_Notice_Handler
 */
class Titan_Notice_Handler {

    public static $nonce;

    /**
     * Empty Constructor
     */
    public function __construct() {
        // Activation notice
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
        add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action( 'admin_notices', array( $this, 'titan_theme_info_welcome_admin_notice' ), 3 );
        add_action( 'wp_ajax_titan_getting_started', array( $this, 'titan_getting_started' ) );
    }

    /**
     * Display an admin notice linking to the about page
     */
    public function titan_theme_info_welcome_admin_notice() {

    $current_screen = get_current_screen();

    $titan_bookseller_theme = wp_get_theme();
    if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) && $current_screen->base != 'appearance_page_titan-bookseller' ) {
        echo '<div class="updated notice notice-success is-dismissible getting-started">';
        echo '<p><strong>' . sprintf( esc_html__( 'Welcome! Thank you for choosing %1$s.', 'titan-bookseller' ), esc_html( $titan_bookseller_theme->get( 'Name' ) ) ) . '</strong></p>';
        echo '<p class="plugin-notice">' . esc_html__( 'By clicking "Get Started," you can access our theme features.', 'titan-bookseller' ) . '</p>';
        echo '<div class="titan-buttons">';
        echo '<p><a href="' . esc_url(admin_url('themes.php?page=titan-bookseller')) . '" class="titan-install-plugins button button-primary">' . sprintf( esc_html__( 'Get started with %s', 'titan-bookseller' ), esc_html( $titan_bookseller_theme->get( 'Name' ) ) ) . '</a></p>';
        echo '<p><a href="' . esc_url( TITAN_BOOKSELLER_BUY_NOW ) . '" class="button button-secondary" target="_blank">' . esc_html__( 'GO FOR PREMIUM', 'titan-bookseller' ) . '</a></p>';
        echo '</div>';
        echo '<a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss">Dismiss</a>';
        echo '</div>';
    }
}

    /**
     * Register dismissal of the getting started notification.
     * Acts on the dismiss link.
     * If clicked, the admin notice disappears and will no longer be visible to this user.
     */
    public function getting_started_notice_dismissed() {
        if ( isset( $_GET['gs-notice-dismissed'] ) ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
    }

    /**
     * Deletes the getting started notice's dismiss status upon theme switch.
     */
    public function flush_dismiss_status() {
        delete_user_meta( get_current_user_id(), 'gs_notice_dismissed' );
    }
}
new Titan_Notice_Handler();

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function titan_bookseller_do_admin_page() { 
    $titan_bookseller_theme = wp_get_theme(); ?>
    <div class="titan-bookseller-themeinfo-page--wrapper">
        <div class="free&pro">
            <div id="titan-bookseller-admin-about-page-1">
                <div class="theme-detail">
                   <div class="titan-bookseller-admin-card-header-1">
                    <div class="titan-bookseller-header-left">
                        <h2>
                            <?php echo esc_html( $titan_bookseller_theme->Name ); ?> <span><?php echo esc_html($titan_bookseller_theme['Version']);?></span>
                        </h2>
                        <p>
                            <?php
                            echo wp_kses_post( apply_filters( 'titan_theme_description', esc_html( $titan_bookseller_theme->get( 'Description' ) ) ) );
                        ?>
                        </p>
                    </div>
                    <div class="titan-bookseller-header-right">
                        <div class="titan-bookseller-pro-button">
                            <a href="<?php echo esc_url( TITAN_BOOKSELLER_BUY_NOW ); ?>" class="titan-bookseller-button button-primary" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'UPGRADE TO PREMIUM', 'titan-bookseller' ); ?>
                            </a>
                        </div>
                    </div>
                </div>   
                </div>   
                <div class="titan-bookseller-features">
                    <div class="titan-bookseller-features-box">
                        <h3><?php esc_html_e( 'PREMIUM DEMONSTRATION', 'titan-bookseller' ); ?></h3>
                        <p><?php esc_html_e( 'Effortlessly create and customize your website by arranging text, images, and other elements using the Gutenberg editor, making web design easy and accessible for all skill levels.', 'titan-bookseller' ); ?></p>
                        <a href="<?php echo esc_url( TITAN_BOOKSELLER_LIVE_DEMO ); ?>" class="titan-bookseller-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DEMONSTRATION', 'titan-bookseller' ); ?>
                            </a>
                    </div>
                    <div class="titan-bookseller-features-box">
                        <h3><?php esc_html_e( 'REVIEWS', 'titan-bookseller' ); ?></h3>
                        <p><?php esc_html_e( 'We would be happy to hear your thoughts and value your evaluation.', 'titan-bookseller' ); ?></p>
                        <a href="<?php echo esc_url( TITAN_BOOKSELLER_REVIEW ); ?>" class="titan-bookseller-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'REVIEWS', 'titan-bookseller' ); ?>
                            </a>
                    </div>
                    <div class="titan-bookseller-features-box">
                        <h3><?php esc_html_e( '24/7 SUPPORT', 'titan-bookseller' ); ?></h3>
                        <p><?php esc_html_e( 'Please do not hesitate to contact us at support if you need help installing our lite theme. We are prepared to assist you!', 'titan-bookseller' ); ?></p>
                        <a href="<?php echo esc_url( TITAN_BOOKSELLER_SUPPORT ); ?>" class="titan-bookseller-button button-secondary-1" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'SUPPORT', 'titan-bookseller' ); ?>
                        </a>
                    </div>
                    <div class="titan-bookseller-features-box">
                        <h3><?php esc_html_e( 'THEME INSTRUCTION', 'titan-bookseller' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance configuring and setting up the theme, our tutorial is available. A fast and simple method for setting up the theme.', 'titan-bookseller' ); ?></p>
                        <a href="<?php echo esc_url( TITAN_BOOKSELLER_DOC_URL ); ?>" class="titan-bookseller-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DOCUMENTATION', 'titan-bookseller' ); ?>
                            </a>
                    </div>
                </div>   
            </div>
            <div id="titan-bookseller-admin-about-page-2">
                <div class="theme-detail">
                   <div class="titan-bookseller-admin-card-header-1">
                        <div class="titan-bookseller-header-left-pro"> 
                            <h2><?php esc_html_e( 'The premium version of this theme will be available for you to enhance or unlock our premium features.', 'titan-bookseller' ); ?></h2>
                        </div>
                        <div class="titan-bookseller-header-right-2">
                            <div class="titan-bookseller-pro-button">
                                <a href="<?php echo esc_url( TITAN_BOOKSELLER_BUY_NOW ); ?>" class="titan-bookseller-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'GO TO PREMIUM', 'titan-bookseller' ); ?>
                                </a>
                            </div>
                            <div class="titan-bookseller-pro-button">
                                <a href="<?php echo esc_url( TITAN_BOOKSELLER_LIVE_DEMO ); ?>" class="titan-bookseller-button button-primary-1 pro-demo" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PREMIUM DEMO', 'titan-bookseller' ); ?>
                                </a>
                            </div> 
                        </div>
                    </div>
                    <div class="titan-bookseller-admin-card-header-2">
                        <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $titan_bookseller_theme->get_screenshot() ); ?>" />
                    </div> 
                </div>    
            </div>
        </div>
    </div>
<?php } ?>