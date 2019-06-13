<?php
/**
 * Adds Wcms18_Random_Dog_Widget widget.
 */
class Puppy_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'Puppy_dog', // Base ID
			'Puppy Dog 🐕', // Name
			[
				'description' => __('A Widget for displaying sizes and other stuff of a dog 🐕', 'Puppy'),
			] // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget($args, $instance) {
		
		// visa endast om hund och singel
		if(is_single()) {

				extract($args);
				$title = apply_filters('widget_title', $instance['title']);
				// start widget
				echo $before_widget;
				// title
				if (! empty($title)) {
					echo $before_title . $title . $after_title;
			}
			// content
			?>
			<h3>This is me, wuff</h3>
				<!-- Problemer att rendera ut taxonomin  -->
				<?php //echo the_terms(
							//get_the_ID(), 'pp_dogsize');
							
				?>
					Birthday: <?php echo the_field('birthday'); ?><br>
					Height: <?php echo the_field('height'); ?> cm<br>
					Sex: <?php echo the_field('sex'); ?><br>
					Vikt: <?php echo the_field('weight'); ?> kg<br>
					<hr>
				<?php the_excerpt(); ?>
			<?php

			// close widget
			echo $after_widget;
		}
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form($instance) {
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('Puppy 🐕', 'Puppy_dog');
		}
		?>

		<!-- title -->
		<p>
			<label
				for="<?php echo $this->get_field_name('title'); ?>"
			>
				<?php _e('Title:'); ?>
			</label>

			<input
				class="widefat"
				id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>"
				type="text"
				value="<?php echo esc_attr($title); ?>"
			/>
		</p>
		<!-- /title -->
	<?php
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update($new_instance, $old_instance) {
		$instance = [];
		$instance['title'] = (!empty($new_instance['title']))
			? strip_tags($new_instance['title'])
			: '';
		return $instance;
	}
} // class puppy_dog_widget