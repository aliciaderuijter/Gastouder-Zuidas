<template>
    <div class="butterfly">
    </div>
</template>

<script>
	import {TimelineMax} from "gsap/TweenMax";

	export default {
		mounted() {
			let imgHolder = this.$el,
				cols = 10,
				rows = 2,
				tl = new TimelineMax({repeat: -1}),
				tl2 = new TimelineMax({repeat: -1, repeatDelay:3}),
				path = [{x: 0, y: 0}, {x: 50, y: -10}, {x: 150, y: 100}, {x: 200, y: 200}, {x: 400, y: 100}, {
					x: 650,
					y: 250
				}];

			for (let i = 0; i < rows; i++) {
				for (let j = 0; j < cols; j++) {
					let newPos = {top: -i * 65, left: -j * 70}
					tl.set(imgHolder, {backgroundPosition: newPos.left + "px " + newPos.top + "px"}, ((i * 10) + j) / 40);
				}
			}

			tl2.to(imgHolder, 4, {
				bezier:
					{
						type: "soft",
						values: path,
						autoRotate: true
					},
				ease: Power0.easeInOut
			});

			imgHolder.click(function () {
				tl.play();
				tl2.play();
			});
		}
	}
</script>

<style scoped>
    .butterfly {
        position: absolute;
        left: 25%;
        width: 70px;
        height: 65px;
        background-image: url(/images/butterfly.png);
        background-position: 0 0;
        background-repeat: no-repeat;
    }
</style>