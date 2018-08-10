<template>
    <nav class="navbar navbar-expand-lg navbar-light mb-5"
         :class="{'absolute-bottom' : !scrolled, 'fixed-top' : scrolled }">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link"
                       onclick="$('html, body').animate({scrollTop: $('#section1').offset().top }, 1000);">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       onclick="$('html, body').animate({scrollTop: $('#section2').offset().top }, 1000);">Over mij</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       onclick="$('html, body').animate({scrollTop: $('#section3').offset().top }, 1000);">Actueel</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       onclick="$('html, body').animate({scrollTop: $('#section4').offset().top }, 1000);">Contact</a>

                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
	export default {
		name: "",

		data() {
			return {
				scrolled: false
			}
		},

		methods: {
			handleScroll() {

				if (window.scrollY > 800) {

					this.scrolled = true;

				}
				else {

					this.scrolled = false;
				}
			}

		},

		created() {
			window.addEventListener('scroll', this.handleScroll);
		},
		destroyed() {
			window.removeEventListener('scroll', this.handleScroll);
		}
	}

</script>

<style scoped>
    .absolute-bottom {

        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030;

    }

</style>