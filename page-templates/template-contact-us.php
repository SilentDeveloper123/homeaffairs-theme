<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Contact Us
 */

$ha_email = carbon_get_theme_option( 'ha_email' ) ?: 'info@moha.gov.lk';

get_header();

get_template_part( 'template-parts/page-banner' );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

	<!-- ═══ SPLIT LAYOUT ═══ -->
	<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

		<!-- Left: Contact Info & Map (5/12) -->
		<div class="lg:col-span-5 space-y-6">

			<!-- Quick Info Cards -->
			<div class="contact-card bg-white border border-slate-100 rounded-2xl shadow-sm p-6">
				<h3 class="text-sm font-extrabold text-primary-dark mb-5 flex items-center gap-2">
					<i class="fas fa-info-circle text-secondary"></i> Ministry Contact Details
				</h3>
				<div class="space-y-4">
					<div class="flex items-start gap-3">
						<div class="w-9 h-9 rounded-lg bg-primary/5 flex items-center justify-center text-secondary shrink-0 mt-0.5">
							<i class="fas fa-location-dot"></i>
						</div>
						<div>
							<span class="block text-xs font-bold text-primary uppercase tracking-wider mb-0.5">Address</span>
							<span class="text-sm text-gray-500 leading-relaxed">Home Affairs Division, "Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka
						</div>
					</div>
					<div class="flex items-start gap-3">
						<div class="w-9 h-9 rounded-lg bg-primary/5 flex items-center justify-center text-secondary shrink-0 mt-0.5">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div>
							<span class="block text-xs font-bold text-primary uppercase tracking-wider mb-0.5">Telephone</span>
							<span class="text-sm text-gray-500">+94 11 269 4055 / +94 11 269 4056</span>
						</div>
					</div>
					<div class="flex items-start gap-3">
						<div class="w-9 h-9 rounded-lg bg-primary/5 flex items-center justify-center text-secondary shrink-0 mt-0.5">
							<i class="fas fa-fax"></i>
						</div>
						<div>
							<span class="block text-xs font-bold text-primary uppercase tracking-wider mb-0.5">Fax</span>
							<span class="text-sm text-gray-500">+94 11 269 4057</span>
						</div>
					</div>
					<div class="flex items-start gap-3">
						<div class="w-9 h-9 rounded-lg bg-primary/5 flex items-center justify-center text-secondary shrink-0 mt-0.5">
							<i class="fas fa-envelope"></i>
						</div>
						<div>
							<span class="block text-xs font-bold text-primary uppercase tracking-wider mb-0.5">Email</span>
							<a href="mailto:<?php echo esc_attr( $ha_email ); ?>" class="text-sm text-gray hover:text-secondary-dark transition-colors no-underline"><?php echo esc_html( $ha_email ); ?></a>
						</div>
					</div>
					<div class="flex items-start gap-3">
						<div class="w-9 h-9 rounded-lg bg-primary/5 flex items-center justify-center text-secondary shrink-0 mt-0.5">
							<i class="fas fa-clock"></i>
						</div>
						<div>
							<span class="block text-xs font-bold text-primary uppercase tracking-wider mb-0.5">Working Hours</span>
							<span class="text-sm text-gray-500">Monday to Friday — 8:30 AM to 4:45 PM (Closed on Public Holidays)</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Interactive Map -->
			<div class="contact-map bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7985101683686!2d79.861175!3d6.916804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25915b99b11cf%3A0x8e0b7c3f7b0c5a1!2sIndependence%20Square%2C%20Colombo!5e0!3m2!1sen!2slk!4v1" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Home Affairs Division Location"></iframe>
			</div>

		</div>

		<!-- Right: Inquiry Form (7/12) -->
		<div class="lg:col-span-7">
			<div class="bg-white border border-slate-100 rounded-3xl p-8 shadow-md">
				<div class="mb-6">
					<h2 class="text-xl sm:text-2xl font-extrabold text-primary-dark flex items-center gap-2 mb-2">
						<i class="fas fa-paper-plane text-secondary" aria-hidden="true"></i> Send Us an Inquiry
					</h2>
					<p class="text-sm text-gray-600 m-0 font-medium">Fill out the form below and our team will respond to your inquiry within 3 working days.</p>
				</div>

				<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="space-y-5">
					<input type="hidden" name="action" value="contact_form_submission">
					<?php wp_nonce_field( 'contact_form_action', 'contact_form_nonce' ); ?>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
						<div>
							<label for="contact-name" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Full Name <span class="text-red-400">*</span></label>
							<input type="text" id="contact-name" name="contact_name" required class="contact-input w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700 placeholder:text-gray-500">
						</div>
						<div>
							<label for="contact-nic" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">NIC / Passport Number</label>
							<input type="text" id="contact-nic" name="contact_nic" class="contact-input w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700 placeholder:text-gray-500">
						</div>
					</div>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
						<div>
							<label for="contact-email" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Email Address <span class="text-red-400">*</span></label>
							<input type="email" id="contact-email" name="contact_email" required class="contact-input w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700 placeholder:text-gray-500">
						</div>
						<div>
							<label for="contact-phone" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Mobile Number <span class="text-red-400">*</span></label>
							<input type="tel" id="contact-phone" name="contact_phone" required class="contact-input w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700 placeholder:text-gray-500">
						</div>
					</div>

					<div>
						<label for="contact-subject" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Subject / Category <span class="text-red-400">*</span></label>
						<select id="contact-subject" name="contact_subject" required class="contact-select w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700">
							<option value="" disabled selected>Select a category</option>
							<option value="general">General Inquiry</option>
							<option value="administration">Administration</option>
							<option value="public-complaints">Public Complaints</option>
							<option value="grama-niladhari">Grama Niladhari Matters</option>
							<option value="procurement">Procurement & Tenders</option>
							<option value="hr">Human Resources / Vacancies</option>
							<option value="rti">Right to Information</option>
							<option value="other">Other</option>
						</select>
					</div>

					<div>
						<label for="contact-message" class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Your Message <span class="text-red-400">*</span></label>
						<textarea id="contact-message" name="contact_message" required rows="5" class="contact-input w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-gray-700 placeholder:text-gray-500 resize-y min-h-[120px]"></textarea>
					</div>

					<button type="submit" class="w-full bg-primary-dark hover:bg-steel text-white font-bold py-4 rounded-xl transition-all flex items-center justify-center gap-2 text-sm shadow-md hover:shadow-lg">
						<i class="fas fa-paper-plane"></i> Submit Your Inquiry
					</button>
				</form>
			</div>
		</div>

	</div>

	<!-- ═══ DIRECT CONTACTS ═══ -->
	<div class="mt-14 lg:mt-18">
		<div class="text-center mb-8">
			<span class="inline-flex items-center gap-2 text-secondary font-bold text-xs tracking-[2px] uppercase bg-secondary/10 px-3 py-1.5 rounded-full mb-4">Get In Touch</span>
			<h2 class="text-2xl sm:text-3xl font-extrabold text-primary-dark flex items-center justify-center gap-2">
				<i class="fas fa-phone-alt text-secondary"></i> Direct Departmental Contacts
			</h2>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			<div class="contact-dept-card bg-white border border-slate-100 rounded-2xl shadow-sm p-6 text-center">
				<div class="w-14 h-14 rounded-2xl bg-primary/5 flex items-center justify-center text-2xl text-secondary mx-auto mb-4">
					<i class="fas fa-user-tie"></i>
				</div>
				<h3 class="text-sm font-extrabold text-primary mb-2">Additional Secretary (Administration)</h3>
				<p class="text-xs text-gray-600 mb-4 font-medium">For administrative inquiries, staffing matters, and internal coordination</p>
				<div class="space-y-2 text-sm">
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-phone-alt text-secondary text-xs" aria-hidden="true"></i>
						<span>+94 11 269 4058</span>
					</div>
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-envelope text-secondary text-xs" aria-hidden="true"></i>
						<a href="mailto:admin@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded">admin@moha.gov.lk</a>
					</div>
				</div>
			</div>
			<div class="contact-dept-card bg-white border border-slate-100 rounded-2xl shadow-sm p-6 text-center">
				<div class="w-14 h-14 rounded-2xl bg-primary/5 flex items-center justify-center text-2xl text-secondary mx-auto mb-4">
					<i class="fas fa-house-chimney" aria-hidden="true"></i>
				</div>
				<h3 class="text-sm font-extrabold text-primary mb-2">Home Affairs Division</h3>
				<p class="text-xs text-gray-600 mb-4 font-medium">For Grama Niladhari, civil registration, and citizen services</p>
				<div class="space-y-2 text-sm">
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-phone-alt text-secondary text-xs" aria-hidden="true"></i>
						<span>+94 11 269 4059</span>
					</div>
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-envelope text-secondary text-xs" aria-hidden="true"></i>
						<a href="mailto:homeaffairs@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded">homeaffairs@moha.gov.lk</a>
					</div>
				</div>
			</div>
			<div class="contact-dept-card bg-white border border-slate-100 rounded-2xl shadow-sm p-6 text-center">
				<div class="w-14 h-14 rounded-2xl bg-primary/5 flex items-center justify-center text-2xl text-secondary mx-auto mb-4">
					<i class="fas fa-newspaper" aria-hidden="true"></i>
				</div>
				<h3 class="text-sm font-extrabold text-primary mb-2">Media & Public Relations Unit</h3>
				<p class="text-xs text-gray-600 mb-4 font-medium">For press inquiries, media accreditation, and public communications</p>
				<div class="space-y-2 text-sm">
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-phone-alt text-secondary text-xs" aria-hidden="true"></i>
						<span>+94 11 269 4060</span>
					</div>
					<div class="flex items-center justify-center gap-2 text-gray-700">
						<i class="fas fa-envelope text-secondary text-xs" aria-hidden="true"></i>
						<a href="mailto:media@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary rounded">media@moha.gov.lk</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
