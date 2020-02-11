<!-- COMPONENT:START -->
<div class="wsu-c-hero__wrapper wsu-u-no-js">
	<div class="wsu-c-hero__container" style="background-image: url('https://source.unsplash.com/random');">
		<div class="wsu-c-hero__content">
			<h1 class="wsu-c-hero__title">Odio et purus metus placerat neque.</h1>
			<h2 class="wsu-c-hero__subtitle">Consectetur adipiscing elit donec fringilla</h2>
			<a href="#" class="wsu-c-hero__button">Lorem Ipsum</a>
		</div>
		<p class="wsu-c-hero__image-caption">By consectetur adipiscing elit donec fringilla</p>
	</div>
</div>
<!-- COMPONENT:END -->
<style>
	.wsu-c-hero__wrapper {
		margin-right: calc( ( ( ( 100vw - 100% - 65px ) / 2 ) ) * -1 );
		margin-left: calc( ( ( ( 100vw - 100% - 65px ) / 2 ) ) * -1 );
		-webkit-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
        -o-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
        transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
	}

	/*.wsu-s-nav-vertical__wrapper--open ~ .wsu-s-wrapper .wsu-s-main-container .wsu-c-container .wsu-c-hero__wrapper {
		margin-right: calc( ( ( ( 100vw - 100% - 365px ) / 2 )  ) * -1 );
		margin-left: calc( ( ( ( 100vw - 100%  - 365px ) / 2 ) ) * -1 );
		-webkit-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
        -o-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
        transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
	}*/

	@media only screen and (min-width: 1200px) {
		.wsu-s-nav-vertical__wrapper--open ~ .wsu-s-wrapper .wsu-s-main-container .wsu-c-container .wsu-c-hero__wrapper {
			margin-right: calc( ( ( ( 100vw - 100% - 365px ) / 2 )  ) * -1 );
			margin-left: calc( ( ( ( 100vw - 100%  - 365px ) / 2 ) ) * -1 );
			-webkit-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
			-o-transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
			transition: all 300ms cubic-bezier(0, 0, 0.03, 1);
		} 
	}

	@media only screen and (max-width: 767px) {
		.wsu-c-hero__wrapper,
		.wsu-s-nav-vertical__wrapper--open ~ .wsu-s-wrapper .wsu-s-main-container .wsu-c-container .wsu-c-hero__wrapper {
			margin-right: 0;
			margin-left: 0;
		} 
	}
</style>