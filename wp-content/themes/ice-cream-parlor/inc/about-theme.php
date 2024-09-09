<?php
/**
 * Ice Cream Parlor Theme Page
 *
 * @package Ice Cream Parlor
 */

function ice_cream_parlor_admin_scripts() {
	wp_dequeue_script('ice-cream-parlor-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'ice_cream_parlor_admin_scripts' );

if ( ! defined( 'ICE_CREAM_PARLOR_FREE_THEME_URL' ) ) {
	define( 'ICE_CREAM_PARLOR_FREE_THEME_URL', 'https://www.themespride.com/products/free-ice-cream-wordpress-theme' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_PRO_THEME_URL' ) ) {
	define( 'ICE_CREAM_PARLOR_PRO_THEME_URL', 'https://www.themespride.com/products/dessert-wordpress-theme' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_DEMO_THEME_URL' ) ) {
	define( 'ICE_CREAM_PARLOR_DEMO_THEME_URL', 'https://page.themespride.com/ice-cream-parlor/' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_DOCS_THEME_URL' ) ) {
    define( 'ICE_CREAM_PARLOR_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/ice-cream-parlor/' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_RATE_THEME_URL' ) ) {
    define( 'ICE_CREAM_PARLOR_RATE_THEME_URL', 'https://wordpress.org/support/theme/ice-cream-parlor/reviews/#new-post' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_SUPPORT_THEME_URL' ) ) {
    define( 'ICE_CREAM_PARLOR_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/ice-cream-parlor/' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_CHANGELOG_THEME_URL' ) ) {
    define( 'ICE_CREAM_PARLOR_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'ICE_CREAM_PARLOR_THEME_BUNDLE' ) ) {
    define( 'ICE_CREAM_PARLOR_THEME_BUNDLE', 'https://www.themespride.com/products/wordpress-theme-bundle' );
}


/**
 * Add theme page
 */
function ice_cream_parlor_menu() {
	add_theme_page( esc_html__( 'About Theme', 'ice-cream-parlor' ), esc_html__( 'About Theme', 'ice-cream-parlor' ), 'edit_theme_options', 'ice-cream-parlor-about', 'ice_cream_parlor_about_display' );
}
add_action( 'admin_menu', 'ice_cream_parlor_menu' );

/**
 * Display About page
 */
function ice_cream_parlor_about_display() {
	$ice_cream_parlor_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $ice_cream_parlor_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$ice_cream_parlor_description = explode( '. ', $ice_cream_parlor_theme->get( 'Description' ) );

					array_pop( $ice_cream_parlor_description );

					$ice_cream_parlor_description = implode( '. ', $ice_cream_parlor_description );

					echo esc_html( $ice_cream_parlor_description . '.' );
				?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'ice-cream-parlor' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'ice-cream-parlor' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'ice-cream-parlor' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'ice-cream-parlor' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'ice-cream-parlor' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $ice_cream_parlor_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'ice-cream-parlor' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'ice-cream-parlor-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'ice-cream-parlor-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'ice-cream-parlor' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'ice-cream-parlor-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'ice-cream-parlor' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'ice-cream-parlor-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'ice-cream-parlor' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'ice-cream-parlor-about', 'tab' => 'get_bundle' ), 'themes.php' ) ) ); ?>" class="blink wp-bundle nav-tab<?php echo ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Get WordPress Theme Bundle', 'ice-cream-parlor' ); ?></a>
		</nav>

		<?php
			ice_cream_parlor_main_screen();

			ice_cream_parlor_changelog_screen();

			ice_cream_parlor_free_vs_pro();

			ice_cream_parlor_get_bundle();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'ice-cream-parlor' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'ice-cream-parlor' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'ice-cream-parlor' ) : esc_html_e( 'Go to Dashboard', 'ice-cream-parlor' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function ice_cream_parlor_main_screen() {
	if ( isset( $_GET['page'] ) && 'ice-cream-parlor-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'ice-cream-parlor' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'ice-cream-parlor' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'ice-cream-parlor' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'ice-cream-parlor' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'ice-cream-parlor' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'ice-cream-parlor' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'ice-cream-parlor' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'ice-cream-parlor' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'ice-cream-parlor' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function ice_cream_parlor_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'ice-cream-parlor' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'ice_cream_parlor_changelog_file', ICE_CREAM_PARLOR_CHANGELOG_THEME_URL );
				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = ice_cream_parlor_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function ice_cream_parlor_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function ice_cream_parlor_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'ice-cream-parlor' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'ice-cream-parlor' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'ice-cream-parlor' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'ice-cream-parlor' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'ice-cream-parlor' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn" href="<?php echo esc_url(ICE_CREAM_PARLOR_PRO_THEME_URL);?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'ice-cream-parlor' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function ice_cream_parlor_get_bundle() {
	if ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'Get WordPress Theme Bundle', 'ice-cream-parlor' ); ?></p>
			<div class="col card">
				<h2 class="title"><?php esc_html_e( ' WordPress Theme Bundle of 65+ Themes At 15% Discount. ', 'ice-cream-parlor' ); ?></h2>
				<p><?php esc_html_e( 'Spring Offer Is To Get WP Bundle of 65+ Themes At 15% Discount use the coupon', 'ice-cream-parlor' ) ?>"<input type="text" value=" TPRIDE15 "  id="myInput">".</p>
				<p><a target="_blank" href="<?php echo esc_url( ICE_CREAM_PARLOR_THEME_BUNDLE ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Bundle', 'ice-cream-parlor' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}