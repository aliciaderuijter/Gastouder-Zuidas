<template>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item" :class="{ active: active=='overMij'}">
                    <a class="nav-link"
                       @click="navigate('#section2')">Over mij</a>

                </li>

                <li class="nav-item" :class="{ active: active=='actueel'}">
                    <a class="nav-link"
                       @click="navigate('#section3')">Actueel</a>

                </li>
                <li class="nav-item" :class="{ active: active=='contact'}">
                    <a class="nav-link"
                       @click="navigate('#section4')">Contact</a>

                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
	export default {
		name: "",

		props: {
			active: {
				type: String,
				required: true
			}
		},

		data() {
			return {
				scrolled: false,
				scrollPosition: window.scrollY
			}
		},

		methods: {
			navigate(section) {

				let offset = 0;
				if(screen.width < 768){

					offset = 75;
                }

				$('html, body').animate({scrollTop: $(section).offset().top-offset}, 1000);
				$('.navbar-toggler').click()


			},
			handleScroll() {
				this.scrollPosition = window.scrollY;

				if (window.scrollY > 800) {

					this.scrolled = true;

				}
				else {

					this.scrolled = false;
				}
			}
		},

		computed: {
			showNavbar() {
				console.log(this.scrollPosition);
				if (this.scrollPosition > 850) {
					return false;
				}
				return true;
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

    .navbar-light {

        background-color: #D1EAE7;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .nav-item {

        font-size: 1.5em;
        text-align: center;
    }

   .nav-item.active>.nav-link {

        color: rgba(0, 0, 0, 0.5) !important;
    }
    @media (min-width: 768px) {
        .fixed-top {
            position: relative;
        }

        .navbar-light {

            background-color: transparent;
            box-shadow: none;
        }

        .nav-item {
            font-size: 2.5em;

        }

        .nav-item.active>.nav-link{

            color:#EBAED0 !important;
        }
    }

</style>