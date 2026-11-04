<?php
defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
  return;
}

$ha_post_id = get_the_ID();
?>

<div id="comments" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 mt-8">

  <?php if ( have_comments() ) : ?>
    <h3 class="font-bold text-primary text-base mb-6">
      <?php
      printf(
        esc_html( _n( '%d Comment', '%d Comments', get_comments_number(), 'homeaffairs' ) ),
        number_format_i18n( get_comments_number() )
      );
      ?>
    </h3>

    <ol class="space-y-4 list-none p-0 m-0">
      <?php
      wp_list_comments( array(
        'style'        => 'ol',
        'short_ping'   => true,
        'avatar_size'  => 50,
        'callback'     => 'ha_comment_callback',
        'end-callback' => 'ha_comment_end_callback',
      ) );
      ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100 text-sm">
        <span class="text-gray-600"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'homeaffairs' ) ); ?></span>
        <span class="text-gray-600"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'homeaffairs' ) ); ?></span>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

  <?php if ( comments_open() ) : ?>
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" class="font-bold text-primary text-base mb-6"><?php esc_html_e( 'Leave a Comment', 'homeaffairs' ); ?></h3>

    <form action="<?php echo esc_url( site_url( '/wp-comments-post.php' ) ); ?>" method="post" class="space-y-4" id="commentform">

      <?php if ( ! is_user_logged_in() ) : ?>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <input type="text" name="author" id="author" placeholder="<?php esc_attr_e( 'Your Name', 'homeaffairs' ); ?>" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm focus:outline-none focus:border-secondary" required>
          </div>
          <div>
            <input type="email" name="email" id="email" placeholder="<?php esc_attr_e( 'Email Address', 'homeaffairs' ); ?>" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm focus:outline-none focus:border-secondary" required>
          </div>
        </div>
      <?php else : ?>
        <p class="text-gray-600 text-sm mb-4">
          <?php
          $ha_user = wp_get_current_user();
          printf(
            __( 'Logged in as <a href="%1$s" class="text-secondary">%2$s</a>. <a href="%3$s" class="text-secondary">Log out?</a>', 'homeaffairs' ),
            get_edit_user_link(),
            $ha_user->display_name,
            wp_logout_url( get_permalink() )
          );
          ?>
        </p>
      <?php endif; ?>

      <div>
        <textarea name="comment" id="comment" rows="4" placeholder="<?php esc_attr_e( 'Your Comment...', 'homeaffairs' ); ?>" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm focus:outline-none focus:border-secondary resize-none" required></textarea>
      </div>

      <button type="submit" class="bg-secondary text-white font-bold px-6 py-3 rounded-xl text-sm hover:bg-secondary-dark transition-all flex items-center gap-2">
        <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Post Comment', 'homeaffairs' ); ?>
      </button>

      <input type="hidden" name="comment_post_ID" value="<?php echo esc_attr( $ha_post_id ); ?>" id="comment_post_ID">
      <input type="hidden" name="comment_parent" id="comment_parent" value="0">
      <?php wp_nonce_field( 'unfiltered-html-comment_' . $ha_post_id, '_wp_unfiltered_html_comment', false ); ?>
      <?php do_action( 'comment_form', $ha_post_id ); ?>

    </form>
    </div>
  <?php endif; ?>

</div>

<?php
function ha_comment_callback( $comment, $args, $depth ) {
  $ha_tag = 'li';
  $ha_parent = $comment->comment_parent;
  $ha_reply_args = array(
    'add_below'  => 'comment',
    'depth'      => $depth,
    'max_depth'  => $args['max_depth'],
    'reply_text' => '<i class="fas fa-reply text-[10px]"></i> ' . esc_html__( 'Reply', 'homeaffairs' ),
    'login_text' => '<i class="fas fa-reply text-[10px]"></i> ' . esc_html__( 'Log in to Reply', 'homeaffairs' ),
    'before'     => '',
    'after'      => '',
  );
  ?>
  <<?php echo $ha_tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'bg-gray-50 rounded-xl p-4 sm:p-5 border border-gray-100' ); ?>>
    <div class="flex items-start gap-3">
      <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-steel flex items-center justify-center text-white text-sm font-bold shrink-0">
        <?php echo esc_html( strtoupper( substr( get_comment_author(), 0, 1 ) ) ); ?>
      </div>
      <div class="flex-1 min-w-0">
        <div class="flex flex-wrap items-center gap-2 text-xs text-gray-600 mb-1">
          <strong class="text-primary text-sm font-semibold"><?php echo esc_html( get_comment_author() ); ?></strong>
          <span>&middot;</span>
          <span><?php echo get_comment_date(); ?> <?php echo get_comment_time(); ?></span>
        </div>
        <div class="text-gray-500 text-sm leading-relaxed">
          <?php comment_text(); ?>
        </div>
        <?php if ( $comment->comment_approved == '0' ) : ?>
          <p class="text-secondary text-xs mt-1 italic"><?php esc_html_e( 'Your comment is awaiting moderation.', 'homeaffairs' ); ?></p>
        <?php endif; ?>
        <div class="mt-2">
          <?php comment_reply_link( $ha_reply_args ); ?>
        </div>
      </div>
    </div>
  <?php
}

function ha_comment_end_callback( $comment, $args, $depth ) {
  echo '</li>';
}
