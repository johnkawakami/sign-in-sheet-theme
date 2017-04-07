<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

$ROOTURL = get_template_directory_uri();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php // _s_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

            ?>
            <p>
                <img src="<?php the_field('preview_thumbnail'); ?>" class="bigthumb" align="left">
            </p>
            <div class="downloads">
                <?php if($URL = get_field('pdf_version')): ?>
                    <img src="<?php echo $ROOTURL ?>/img/pdf.png" height="32" align="absmiddle" width="32"> <a href="<?php echo $URL ?>">
                    Download in PDF for printing.</a>
                    <br><br>
                <?php endif; ?>
                <?php if($URL = get_field('openoffice_text_version')): ?>
                    <img src="<?php echo $ROOTURL ?>/img/odt.png" height="32" align="absmiddle" width="32"> <a href="<?php echo $URL ?>">
                    Download in OpenOffice Write format for editing.</a>
                    <br><br>
                <?php endif; ?>
                <?php if($URL = get_field('word_text_version')): ?>
                    <img src="<?php echo $ROOTURL ?>/img/doc.png" height="32" align="absmiddle" width="32"> <a href="<?php echo $URL ?>">
                    Download in Microsoft Word format for editing.</a>
                    <br><br>
                <?php endif; ?>
                <?php if($URL = get_field('openoffice_spreadsheet_version')): ?>
                    <img src="<?php echo $ROOTURL ?>/img/ods.png" height="32" align="absmiddle" width="32"> <a href="<?php echo $URL ?>">
                    Download in OpenOffice Calc format for editing.</a>
                    <br><br>
                <?php endif; ?>
                <?php if($URL = get_field('excel_spreadsheet_version')): ?>
                    <img src="<?php echo $ROOTURL ?>/img/xls.png" height="32" align="absmiddle" width="32"> <a href="<?php echo $URL ?>">
                    Download in Microsoft Excel spreadsheet format for editing.</a>
                    <br><br>
                <?php endif; ?>
            </div>

            <?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
