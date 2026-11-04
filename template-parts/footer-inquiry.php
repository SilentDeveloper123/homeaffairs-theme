<div>
  <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6"><?php echo esc_html( carbon_get_theme_option( 'ha_contact_form_title' ) ?: __( 'Quick Inquiry', 'homeaffairs' ) ); ?></h4>
  <form action="<?php echo esc_url( home_url( '/contact' ) ); ?>" method="get" class="space-y-3">
    <input type="text" name="name" placeholder="<?php esc_attr_e( 'Your Name', 'homeaffairs' ); ?>" class="w-full bg-white/[0.06] border border-white/10 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-secondary transition-colors">
    <input type="email" name="email" placeholder="<?php esc_attr_e( 'Email Address', 'homeaffairs' ); ?>" class="w-full bg-white/[0.06] border border-white/10 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-secondary transition-colors">
    <textarea name="message" rows="2" placeholder="<?php esc_attr_e( 'Your Message', 'homeaffairs' ); ?>" class="w-full bg-white/[0.06] border border-white/10 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-secondary transition-colors resize-none"></textarea>
    <button type="submit" class="bg-secondary text-primary-dark font-black px-5 py-2.5 rounded-lg text-xs hover:bg-secondary-dark hover:text-white transition-all w-full flex items-center justify-center gap-2 shadow-sm hover:shadow-gold"><i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Send Message', 'homeaffairs' ); ?></button>
  </form>
</div>
