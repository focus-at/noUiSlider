<?php
	$title = "noUiSlider - Getting and setting slider values";
	$description = "Reading and setting values from a slider is as easy as reading from any other form element.";

	$title = "noUiSlider - Formatting numbers";
	$description = "noUiSlider can read and display values formatting using a bunch of options. Read more here.";
?>

<h1>Getting and setting slider values</h1>


<?php sect('reading'); ?>
<h2>Reading slider values</h2>

<section>

	<div class="view">

		<p>noUiSlider has an API which is designed to be compatible with other form elements. That's why you can just use the same method that works on any other input.</p>
		<p>You can just get the slider value by calling <code>.val()</code>. It is really simple:</p>

		<?php code('read'); ?>

		<p>For one-handle sliders, calling <code>.val()</code> will return the value. For two-handle sliders, an <code>array[value, value]</code> will be returned.</p>
	</div>
</section>


<?php sect('setting'); ?>
<h2>Setting slider values</h2>

<section>

	<div class="view">

		<p>noUiSlider will keep your values within the slider range, which saves you a bunch of validation.</p>

		<p>If you have set the slider to use one handle, simply set it on the slider using the <code>.val()</code> method. If you have two handles, pass an array. One-handled sliders will also accept arrays.</p>

		<p>Within an array, you can set a position to <code>null</code> if you want to leave a handle unchanged.</p>
	</div>

	<div class="side">
		<?php code('write'); ?>
	</div>
</section>


<?php sect('example'); ?>
<h2>Example</h2>

<section>

	<div class="view">

		<p>Clicking the button below sets the slider, which uses a <code>range</code> from <code>0</code> to <code>100</code>, to <code>20</code>.</p>

		<div class="example">
			<div id="slider"></div>
			<div class="logger">
				<button id="write-button">Set to 20</button>
				<button id="read-button">Read slider value</button>
			</div>
			<?php run('set', false); ?>
			<?php run('buttons', false); ?>
		</div>
	</div>

	<div class="side">
		<?php code('set'); ?>

		<div class="viewer-header">Handling button presses</div>

		<div class="viewer-content">
			<?php code('buttons'); ?>
		</div>
	</div>

</section>


<?php sect('formatting'); ?>
<h2>Number formatting</h2>

<section>

	<div class="view">

		<p>To format the slider output, noUiSlider offers a <code>format</code> option. Simply specify <code>to</code> and <code>from</code> functions to encode and decode the values.</p>

		<p>By default, noUiSlider will format output with <strong>2 decimals</strong>.</p>

		<div class="example">
			<div id="slider-format"></div>
			<input id="input-format">
			<?php run('wnumb'); ?>
			<?php run('linkformat'); ?>
		</div>

		<p>To format the slider output, pass an object with a <code>to</code> and <code>from</code> method as a <code>format</code> option. See the <em>Manual formatting</em> to the right for more information.</p>

		<p>Manual formatting can be very tedious, so noUiSlider has support for <a href="/wnumb">the wNumb formatting library</a>. wNumb offers a wide range of options and provides number validation.</p>

		<p>Note how the input above has been linked with libLink. Typing in the input will change the slider. wNumb will validate and correct the input.</p>

		<a href="/nouislider/linking-input-fields/">Using Link to bind inputs</a>

	</div>

	<div class="side">

		<div class="viewer-header">Formatting with wNumb</div>

		<div class="viewer-content">
			<?php code('wnumb'); ?>
		</div>

		<div class="viewer-header">Manual formatting</div>

		<div class="viewer-content">
			<?php code('format'); ?>
		</div>

		<div class="viewer-header">Linking the input field</div>

		<div class="viewer-content">
			<?php code('linkformat'); ?>
		</div>
	</div>

</section>
